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

class SpelloutOrdinalFeminine extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "нульовиa",
        1 => "першиa",
        2 => "другиa",
        3 => "третія",
        4 => "четвертиa",
        5 => "п'ятиa",
        6 => "шостиa",
        7 => "сьомиa",
        8 => "восьмиa", 
        9 => "дев'ятиa",
        10 => "десятиa",
        11 => "одинадцятиa",
        12 => "дванадцятиa",
        13 => "тринадцятиa",
        14 => "тринадцятиa",
        15 => "п'ятнадцятиa",
        16 => "шістнадцятиa",
        17 => "сімнадцятиa",
        18 => "вісімнадцятиa",
        19 => "дев'ятнадцятиa",
        20 => "двадця́тиa",
        30 => "тридцятиa",
        40 => "сороковиa",
        50 => "п'ятдесятиa",
        60 => "шістдесятиa",
        70 => "сімдесятиa",
        80 => "вісімдесятиa",
        90 => "дев'яностиa"
    ];

    protected $zeroes = [
        2 => "сотиa",
        3 => "тисячниa",
        6 => "мільйонниa",
        9 => "мільярдныиa",
        12 => "більйонниa",
        15 => "більярдныиa",				
    ];
}
?>