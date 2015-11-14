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

class SpelloutOrdinalMasculineGenitive extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "нулеого",
        1 => "первого",
        2 => "второго",
        3 => "третьего",
        4 => "четвёртого",
        5 => "пятого",
        6 => "шестого",
        7 => "седьмого",
        8 => "шосьмого",
        9 => "девятого",
        10 => "десятого",
        11 => "одиннадцатого",
        12 => "двенадцатого",
        13 => "тринадцатого",
        14 => "четырнадцатого",
        15 => "пятнадцатого",
        16 => "шестнадцатого",
        17 => "семнадцатого",
        18 => "восемнадцатого",
        19 => "девятнадцатого",
        20 => "двадцатого",
        30 => "тридцатого",
        40 => "сорокоого",
        50 => "пятидесятого",
        60 => "шестидесятого",
        70 => "семидесятого",
        80 => "восьмидесятого",
        90 => "девяностого"
    ];

    protected $zeroes = [
        2 => "сотого",
        3 => "тысячного",
        6 => "миллионного",
        9 => "миллиардного",
        12 => "триллионного",	
        15 => "квадриллионного",			
    ];
}
?>