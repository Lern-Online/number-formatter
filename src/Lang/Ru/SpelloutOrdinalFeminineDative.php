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
include_once ($_SERVER['DOCUMENT_ROOT']."/data/number-formatter/Lang/Ru/SpelloutOrdinalAbstract.php");
class SpelloutOrdinalPluralDative extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "нулеой",
        1 => "первой",
        2 => "второй",
        3 => "третьей",
        4 => "четвёртой",
        5 => "пятой",
        6 => "шестой",
        7 => "седьмой",
        8 => "шосьмой",
        9 => "девятой",
        10 => "десятой",
        11 => "одиннадцатой",
        12 => "двенадцатой",
        13 => "тринадцатой",
        14 => "четырнадцатой",
        15 => "пятнадцатой",
        16 => "шестнадцатой",
        17 => "семнадцатой",
        18 => "восемнадцатой",
        19 => "девятнадцатой",
        20 => "двадцатой",
        30 => "тридцатой",
        40 => "сорокоой",
        50 => "пятидесятой",
        60 => "шестидесятой",
        70 => "семидесятой",
        80 => "восьмидесятой",
        90 => "девяностой"
    ];

    protected $zeroes = [
        2 => "сотой",
        3 => "тысячной",
        6 => "миллионной",
        9 => "миллиардной",
        12 => "триллионной",	
        15 => "квадриллионной",			
    ];
}
?>