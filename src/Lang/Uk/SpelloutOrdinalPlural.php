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

class SpelloutOrdinalPlural extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "нульовиі",
        1 => "першиі",
        2 => "другиі",
        3 => "третіі",
        4 => "четвертиі",
        5 => "п'ятиі",
        6 => "шостиі",
        7 => "сьомиі",
        8 => "восьмиі", 
        9 => "дев'ятиі",
        10 => "десятиі",
        11 => "одинадцятиі",
        12 => "дванадцятиі",
        13 => "тринадцятиі",
        14 => "тринадцятиі",
        15 => "п'ятнадцятиі",
        16 => "шістнадцятиі",
        17 => "сімнадцятиі",
        18 => "вісімнадцятиі",
        19 => "дев'ятнадцятиі",
        20 => "двадця́тиі",
        30 => "тридцятиі",
        40 => "сороковиі",
        50 => "п'ятдесятиі",
        60 => "шістдесятиі",
        70 => "сімдесятиі",
        80 => "вісімдесятиі",
        90 => "дев'яностиі"
    ];

    protected $zeroes = [
        2 => "сотиі",
        3 => "тисячниі",
        6 => "мільйонниі",
        9 => "мільярдныиі",
        12 => "більйонниі",
        15 => "більярдныиі",			
    ];
}
?>