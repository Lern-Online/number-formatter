<?php
/**
 * This file is part of arius/number-formatter package
 *
 * @author Arkadiusz Ostrycharz <arkadiusz.ostrycharz@gmail.com>
 * @copyright Arius IT Arkadiusz Ostrycharz
 * @homepage http://arius.pl
 *
 * Ukrainian Version:
 * @copyright Grigorij Kosba 
 * @homepage http://www.lern-online.net
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Arius\Lang\Uk;

use Arius\SpelloutInterface;
use Arius\SpelloutTrait;
	
abstract class SpelloutOrdinalAbstract implements SpelloutInterface
{
    use SpelloutTrait;
	
    protected $complex = [
        1 => "",
        2 => "двох",
        3 => "трьох",
        4 => "чотирьох",
        5 => "п'яти",
        6 => "шести",
        7 => "семи",
        8 => "восьми",
        9 => "дев'яти",
        10 => "десяти",
        11 => "одинадцяти", 
        12 => "дванадцяти",	
        13 => "тринадцяти",	
        14 => "чотирнадцяти",
        15 => "п'ятнадцяти", 
        16 => "шістнадцяти",
        17 => "сімнадцяти",	
        18 => "вісімнадцяти",
        19 => "дев'ятнадцяти",
        20 => "двадцяти",
        30 => "тридцяти",
        40 => "сорока", 
        50 => "п'ятдесяти",
        60 => "шістдесяти",
        70 => "сімдесяти",
        80 => "вісімдесяти",
        90 => "девіностй",
        100 => "сто",
        200 => "двохсот", 	
        300 => "трьохсот",		
        400 => "чотирьохсот",	
        500 => "п'ятисот",		
        600 => "шестисот",	
        700 => "семисот",		
        800 => "восьмисот",	
        900 => "дев'ятисот"

    ];
    protected $hundredsPrefixes = [
        1 => "",
        2 => "двох",
        3 => "трьох",
        4 => "чотирьох",
        5 => "п'яти",
        6 => "шести",
        7 => "семи",
        8 => "восьми",
        9 => "дев'яти"
    ];
    protected $cardinal;
    protected $complexSuffix = '';
    protected $complexity = 0;
    protected $debugNum;
    /**
     * @inheritdoc
     */
    public function format($number)
    {
        $this->complexSuffix = '';
        $this->complexity = 0;
        $this->cardinal = $this->getCardinalArray($number);
        $this->cardinal[0] = $this->fixCardinal($this->cardinal[0]);
        return $this->prepare($number);
    }
    /**
     * Due the different versions of ICU available, we need to fix first word from complex cardinal numbers.
     *
     * @param string $number
     * @return string
     */
    protected function fixCardinal($number)
    {
        $feminineToMasculine = [
            'двасти' => 'двести'
        ];
        return isset($feminineToMasculine[$number]) ? $feminineToMasculine[$number] : $number;
    }
    private function prepare($number)
    {
        $this->debugNum = $number;
        if ($number < 20) {
            return $this->simple[$number];
        }
        $numberLength = strlen($number);
        $ordinal = $this->prepareComplex($number);
        $cardinal = $this->cardinal;
        if ($numberLength > 3 && in_array($cardinal[0], ['один', 'одна'])) {
            unset($cardinal[0]);
        }
        if ($this->complexSuffix !== '') {
            unset($cardinal[count($cardinal) - 1]);
        }
        $cardinal = array_values($cardinal);
        foreach ($ordinal As $key => $word) {
            $cardinal[count($cardinal) - ($key + 1)] = $word;
        }
        $ordinal = $cardinal;
        return implode(' ', $ordinal);
    }
    private function prepareComplex($number, $mode = 'simple')
    {
        if ($this->complexity) {
            $number = substr($number, 0, ($this->complexity * -1));
        }
        if ($number == 1) {
            return [$this->complexSuffix];
        }
        if ($number < 20) {
            return [$this->complex[$number] . $this->complexSuffix];
        }
        // try to get last two digits
        $modeArray = $this->$mode;
        $lastTwoDigits = substr($number, -2, 2);
        if (isset($this->simple[$lastTwoDigits])) {
            $ordinal = [$modeArray[$lastTwoDigits] . $this->complexSuffix];
        } else {
            $ordinal = $this->loopByDigits($number, $mode);
        }
        return $ordinal;
    }
    private function loopByDigits($number, $mode = 'simple')
    {
        $modeArray = $this->$mode;
        $numberLength = strlen($number);
        $ordinal = [];
        $multiplier = 1;
        $zeroesNb = 0;
        for ($i = 1; $i <= $numberLength; $i++) {
            if (count($ordinal)) {
                break;
            }
            $digit = substr($number, -$i, 1);
            if ($digit) {
                if (isset($modeArray[$digit * $multiplier])) {
                    $ordinal[] = $modeArray[$digit * $multiplier] . (count($ordinal) ? '' : $this->complexSuffix);
                } elseif ($zeroesNb == 2) {
                    $ordinal[] = $this->hundredsPrefixes[$digit] . $this->zeroes[$zeroesNb];
                    break;
                } elseif ($zeroesNb > 2) {
                    $complexity = floor($zeroesNb / 3) * 3;
                    $this->complexSuffix = $this->zeroes[$complexity];
                    $this->complexity = $complexity;
                    $ordinal = $this->prepareComplex($number, 'complex');
                    break;
                }
            } elseif ($mode == 'simple') {
                $zeroesNb++;
            }
            $multiplier *= 10;
        }
        return $ordinal;
    }
}