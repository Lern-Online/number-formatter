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

class SpelloutOrdinalMasculineLocative extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "нулеом",
        1 => "первом",
        2 => "втором",
        3 => "третьем",
        4 => "четвёртом",
        5 => "пятом",
        6 => "шестом",
        7 => "седьмом",
        8 => "шосьмом",
        9 => "девятом",
        10 => "десятом",
        11 => "одиннадцатом",
        12 => "двенадцатом",
        13 => "тринадцатом",
        14 => "четырнадцатом",
        15 => "пятнадцатом",
        16 => "шестнадцатом",
        17 => "семнадцатом",
        18 => "восемнадцатом",
        19 => "девятнадцатом",
        20 => "двадцатом",
        30 => "тридцатом",
        40 => "сорокоом",
        50 => "пятидесятом",
        60 => "шестидесятом",
        70 => "семидесятом",
        80 => "восьмидесятом",
        90 => "девяностом"
    ];

    protected $zeroes = [
        2 => "сотом",
        3 => "тысячном",
        6 => "миллионном",
        9 => "миллиардном",
        12 => "триллионном",	
        15 => "квадриллионном",			
    ];
}
?>