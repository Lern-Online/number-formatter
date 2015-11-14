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

class SpelloutOrdinalPluralDative extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "нулеым",
        1 => "первым",
        2 => "вторым",
        3 => "третьим",
        4 => "четвёртым",
        5 => "пятым",
        6 => "шестым",
        7 => "седьмым",
        8 => "шосьмым",
        9 => "девятым",
        10 => "десятым",
        11 => "одиннадцатым",
        12 => "двенадцатым",
        13 => "тринадцатым",
        14 => "четырнадцатым",
        15 => "пятнадцатым",
        16 => "шестнадцатым",
        17 => "семнадцатым",
        18 => "восемнадцатым",
        19 => "девятнадцатым",
        20 => "двадцатым",
        30 => "тридцатым",
        40 => "сорокоым",
        50 => "пятидесятым",
        60 => "шестидесятым",
        70 => "семидесятым",
        80 => "восьмидесятым",
        90 => "девяностым"
    ];

    protected $zeroes = [
        2 => "сотым",
        3 => "тысячным",
        6 => "миллионным",
        9 => "миллиардным",
        12 => "триллионным",	
        15 => "квадриллионным",			
    ];
}
?>