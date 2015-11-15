<?php
/**
 * This file is part of arius/number-formatter package
 *
 * @author Arkadiusz Ostrycharz <arkadiusz.ostrycharz@gmail.com>
 * @copyright Arius IT Arkadiusz Ostrycharz
 * @homepage http://arius.pl
 *
 * Czech Version:
 * @copyright Grigorij Kosba 
 * @homepage http://www.lern-online.net
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Arius\Lang\Cs;

use Arius\SpelloutInterface;
use Arius\SpelloutTrait;

abstract class SpelloutOrdinalAbstract implements SpelloutInterface
{
    use SpelloutTrait;
	
    protected $complex = [
        1 => "",
        2 => "dvou",
        3 => "tři",
        4 => "čtyř",
        5 => "pěti",
        6 => "šesti",
        7 => "sedmi",
        8 => "osmi",
        9 => "devíti",
        10 => "deseti",
        11 => "jedenácti", 
        12 => "dvanácti",	
        13 => "třinácti",
        14 => "čtrnácti",
        15 => "patnácti",
        16 => "šestnácti",
        17 => "sedmnácti",
        18 => "osmnácti",		
        19 => "devatenácti", 
        20 => "dvaceti",
        30 => "třiceti",
        40 => "čtyřicet", 
        50 => "padesáti",
        60 => "šedesáti",
        70 => "sedmdesáti",
        80 => "osmdesáti",
        90 => "devadesáti",
        100 => "sto",
        200 => "dvoustý", 	
        300 => "třístý",		
        400 => "čtyřstý",
        500 => "pětistý",		
        600 => "šestistý",	
        700 => "sedmistý",		
        800 => "osmistý",	
        900 => "devítistý"
    ];
    protected $hundredsPrefixes = [
        1 => "",
        2 => "dvou",
        3 => "tři",
        4 => "čtyř",
        5 => "pěti",
        6 => "šesti",
        7 => "sedmi",
        8 => "osmi",
        9 => "devíti"
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
        $this->cardinal[0] = $this->fixFeminineCardinal($this->cardinal[0]);

        return $this->prepare($number);
    }

    /**
     * Due the different versions of ICU available, we need to fix first word from complex cardinal numbers.
     * Sometimes they may be feminine (and this is incorrect in czech language).
     *
     * @param string $number
     * @return string
     */
	 
   protected function fixFeminineCardinal($number)
    {
        $feminineToMasculine = [
            // not used now
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

        if ($numberLength > 3 && $cardinal[0] === 'jeden') {
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
            } elseif (!count($ordinal) && $mode == 'simple') {
                $zeroesNb++;
            }

            $multiplier *= 10;
        }

        return $ordinal;
    }
}
?>