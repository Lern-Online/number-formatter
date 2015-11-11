<?php
/**
 * This file is part of arius/number-formatter package
 *
 * @author Arkadiusz Ostrycharz <arkadiusz.ostrycharz@gmail.com>
 * @copyright Arius IT Arkadiusz Ostrycharz
 * @homepage http://arius.pl
 *
 * Latvian Version:
 * @copyright Grigorij Kosba 
 * @homepage http://www.lern-online.net
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Arius\Lang\Lv;

use Arius\SpelloutInterface;
use Arius\SpelloutTrait;

abstract class SpelloutOrdinalAbstract implements SpelloutInterface
{
    use SpelloutTrait;

    protected $complex = [
        1 => "",
        2 => "div", 	
        3 => "trīs",	
        4 => "četr",	
        5 => "piec",	
        6 => "seš",	
        7 => "septiņ",	
        8 => "astoņ",	
        9 => "deviņ",	
        10 => "desmit",
        11 => "vienpadsmit", 	
        12 => "divpadsmit",		
        13 => "trīspadsmit",		
        14 => "četrpadsmit",	
        15 => "piecpadsmit", 	
        16 => "sešpadsmit",	
        17 => "septiņpadsmit",		
        18 => "astoņpadsmit",	
        19 => "deviņpadsmit",	
        20 => "divdesmit",
        30 => "trīsdesmit",
        40 => "četrdesmit", 
        50 => "piecdesmit",
        60 => "sešdesmit",
        70 => "septiņdesmit",
        80 => "astoņdesmit",
        90 => "deviņdesmit",
        100 => "simtais",
        200 => "divsimtais", 		// $hundredsPrefixes[2] + $zeroes[2] 
        300 => "trīssimtais",		// $hundredsPrefixes[3] + $zeroes[2] 
        400 => "četrsimtais",		// $hundredsPrefixes[4] + $zeroes[2] 
        500 => "piecsimtais",		// $hundredsPrefixes[5] + $zeroes[2] 
        600 => "sešsimtais",		// $hundredsPrefixes[6] + $zeroes[2] 
        700 => "septiņsimtais",		// $hundredsPrefixes[7] + $zeroes[2] 
        800 => "astoņsimtais",		// $hundredsPrefixes[8] + $zeroes[2] 
        900 => "deviņsimtais",  	// $hundredsPrefixes[9] + $zeroes[2]
    ];

    protected $hundredsPrefixes = [
        1 => "",
        2 => "div", 	
        3 => "trīs",	
        4 => "četr",	
        5 => "piec",
        6 => "seš",	
        7 => "septiņ",	
        8 => "astoņ",	
        9 => "deviņ",	
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
     * Sometimes they may be feminine (and this is incorrect in russian language).
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
?>