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

class SpelloutOrdinalFeminineAccusative extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "нулеую",
        1 => "первую",
        2 => "вторую",
        3 => "третью",
        4 => "четвёртую",
        5 => "пятую",
        6 => "шестую",
        7 => "седьмую",
        8 => "шосьмую",
        9 => "девятую",
        10 => "десятую",
        11 => "одиннадцатую",
        12 => "двенадцатую",
        13 => "тринадцатую",
        14 => "четырнадцатую",
        15 => "пятнадцатую",
        16 => "шестнадцатую",
        17 => "семнадцатую",
        18 => "восемнадцатую",
        19 => "девятнадцатую",
        20 => "двадцатую",
        30 => "тридцатую",
        40 => "сорокоую",
        50 => "пятидесятую",
        60 => "шестидесятую",
        70 => "семидесятую",
        80 => "восьмидесятую",
        90 => "девяностую"
    ];

    protected $zeroes = [
        2 => "сотую",
        3 => "тысячную",
        6 => "миллионную",
        9 => "миллиардную",
        12 => "триллионную",	
        15 => "квадриллионную",			
    ];
}
?>