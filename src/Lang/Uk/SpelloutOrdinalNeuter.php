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

class SpelloutOrdinalNeuter extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "нульовиe",
        1 => "першиe",
        2 => "другиe",
        3 => "третіє",
        4 => "четвертиe",
        5 => "п'ятиe",
        6 => "шостиe",
        7 => "сьомиe",
        8 => "восьмиe", 
        9 => "дев'ятиe",
        10 => "десятиe",
        11 => "одинадцятиe",
        12 => "дванадцятиe",
        13 => "тринадцятиe",
        14 => "тринадцятиe",
        15 => "п'ятнадцятиe",
        16 => "шістнадцятиe",
        17 => "сімнадцятиe",
        18 => "вісімнадцятиe",
        19 => "дев'ятнадцятиe",
        20 => "двадцятиe",
        30 => "тридцятиe",
        40 => "сороковиe",
        50 => "п'ятдесятиe",
        60 => "шістдесятиe",
        70 => "сімдесятиe",
        80 => "вісімдесятиe",
        90 => "дев'яностиe"
    ];

    protected $zeroes = [
        2 => "сотиe",
        3 => "тисячниe",
        6 => "мільйонниe",
        9 => "мільярдныиe",
        12 => "більйонниe",
        15 => "більярдныиe",			
    ];
}
?>