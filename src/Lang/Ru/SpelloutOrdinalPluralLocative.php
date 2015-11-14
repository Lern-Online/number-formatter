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

class SpelloutOrdinalPluralLocative extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "нулеых",
        1 => "перых",
        2 => "вторых",
        3 => "третьих",
        4 => "четвёртых",
        5 => "пятых",
        6 => "шестых",
        7 => "седьмых",
        8 => "шосьмых",
        9 => "девятых",
        10 => "десятых",
        11 => "одиннадцатых",
        12 => "двенадцатых",
        13 => "тринадцатых",
        14 => "четырнадцатых",
        15 => "пятнадцатых",
        16 => "шестнадцатых",
        17 => "семнадцатых",
        18 => "восемнадцатых",
        19 => "девятнадцатых",
        20 => "двадцатых",
        30 => "тридцатых",
        40 => "сорокоых",
        50 => "пятидесятых",
        60 => "шестидесятых",
        70 => "семидесятых",
        80 => "восьмидесятых",
        90 => "девяностых"
    ];

    protected $zeroes = [
        2 => "сотых",
        3 => "тысячных",
        6 => "миллионных",
        9 => "миллиардных",
        12 => "триллионных",	
        15 => "квадриллионных",			
    ];
}
?>