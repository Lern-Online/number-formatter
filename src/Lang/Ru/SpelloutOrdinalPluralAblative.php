<?php
/**
 * This file is part of arius/number-formatter package
 *
 * @author Arkadiusz Ostrycharz <arkadiusz.ostrycharz@gmail.com>
 * @copyright Arius IT Arkadiusz Ostrycharz
 * @homepage http://arius.pl
 *
 * Russian Version:
 * @copyright Grigorij Kosba 
 * @homepage http://www.lern-online.net
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Arius\Lang\Ru;

class SpelloutOrdinalPluralAblative extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "нулеыми",
        1 => "перыми",
        2 => "вторыми",
        3 => "третьими",
        4 => "четвёртыми",
        5 => "пятыми",
        6 => "шестыми",
        7 => "седьмыми",
        8 => "шосьмыми",
        9 => "девятыми",
        10 => "десятыми",
        11 => "одиннадцатыми",
        12 => "двенадцатыми",
        13 => "тринадцатыми",
        14 => "четырнадцатыми",
        15 => "пятнадцатыми",
        16 => "шестнадцатыми",
        17 => "семнадцатыми",
        18 => "восемнадцатыми",
        19 => "девятнадцатыми",
        20 => "двадцатыми",
        30 => "тридцатыми",
        40 => "сорокоыми",
        50 => "пятидесятыми",
        60 => "шестидесятыми",
        70 => "семидесятыми",
        80 => "восьмидесятыми",
        90 => "девяностыми"
    ];

    protected $zeroes = [
        2 => "сотыми",
        3 => "тысячными",
        6 => "миллионными",
        9 => "миллиардными",
        12 => "триллионными",	
        15 => "квадриллионными",			
    ];
}
?>