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
class SpelloutOrdinalMasculineDative extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "нулеому"
        1 => "первому"
        2 => "второму"
        3 => "второму",
        4 => "четвёртому"
        5 => "пятому"
        6 => "шестому"
        7 => "седьмому"
        8 => "шосьмому"
        9 => "девятому"
        10 => "десятому"
        11 => "одиннадцатому"
        12 => "двенадцатому"
        13 => "тринадцатому"
        14 => "четырнадцатому"
        15 => "пятнадцатому"
        16 => "шестнадцатому"
        17 => "семнадцатому"
        18 => "восемнадцатому"
        19 => "девятнадцатому"
        20 => "двадцатому"
        30 => "тридцатому"
        40 => "сорокоому"
        50 => "пятидесятому"
        60 => "шестидесятому"
        70 => "семидесятому"
        80 => "восьмидесятому"
        90 => "девяностым"
    ];

    protected $zeroes = [
        2 => "сотому"
        3 => "тысячному"
        6 => "миллионному"
        9 => "миллиардному"
        12 => "триллионному"	
        15 => "квадриллионному"			
    ];
}
?>