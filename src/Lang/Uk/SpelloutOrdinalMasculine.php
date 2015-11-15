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

class SpelloutOrdinalMasculine extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "нульовий",
        1 => "перший",
        2 => "другий",
        3 => "третій",
        4 => "четвертий",
        5 => "п'ятий",
        6 => "шостий",
        7 => "сьомий",
        8 => "восьмий", 
        9 => "дев'ятий",
        10 => "десятий",
        11 => "одинадцятий",
        12 => "дванадцятий",
        13 => "тринадцятий",
        14 => "тринадцятий",
        15 => "п'ятнадцятий",
        16 => "шістнадцятий",
        17 => "сімнадцятий",
        18 => "вісімнадцятий",
        19 => "дев'ятнадцятий",
        20 => "двадця́тий",
        30 => "тридцятий",
        40 => "сороковий",
        50 => "п'ятдесятий",
        60 => "шістдесятий",
        70 => "сімдесятий",
        80 => "вісімдесятий",
        90 => "дев'яностий"
    ];

    protected $zeroes = [
        2 => "сотий",
        3 => "тисячний",
        6 => "мільйонний",
        9 => "мільярдний",
        12 => "більйонний",
        15 => "вадрильйоний",				
    ];
}
?>