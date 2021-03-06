<?php
/**
 * This file is part of arius/number-formatter package
 *
 * @author Arkadiusz Ostrycharz <arkadiusz.ostrycharz@gmail.com>
 * @copyright Arius IT Arkadiusz Ostrycharz
 * @homepage http://arius.pl
 *
 * Czech Version:
 * @copyright Grigorij Kosba 
 * @homepage http://www.lern-online.net
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Arius\Lang\Cs;

class SpelloutOrdinalPlural extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "",
        1 => "",
        2 => "",
        3 => "",
        4 => "",
        5 => "",
        6 => "",
        7 => "",
        8 => "",
        9 => "",
        10 => "",
        11 => "",
        12 => "",
        13 => "",
        14 => "",
        15 => "",
        16 => "",
        17 => "",
        18 => "",
        19 => "",
        20 => "",
        30 => "",
        40 => "",
        50 => "",
        60 => "",
        70 => "",
        80 => "",
        90 => "",
    ];

    protected $zeroes = [
        2 => "", //100
        3 => "", //1000
        6 => "",// 1 000 000
        9 => "",// 1 000 000 000
        12 => "",// 1 000 000 000 000
        15 => "",// 1 000 000 000 000			
    ];
}
?>