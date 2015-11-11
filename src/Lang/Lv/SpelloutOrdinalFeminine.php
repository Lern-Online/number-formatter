<?php
/**
 * This file is part of arius/number-formatter package
 *
 * @author Arkadiusz Ostrycharz <arkadiusz.ostrycharz@gmail.com>
 * @copyright Arius IT Arkadiusz Ostrycharz
 * @homepage http://arius.pl
 *
 * Latvian Version:
 * @copyright Grigorij Kosba 
 * @homepage http://www.lern-online.net
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Arius\Lang\Lv;

class SpelloutOrdinalFeminine extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "nulltā",
        1 => "pirmā",
        2 => "otrā",
        3 => "trešā",
        4 => "ceturtā",
        5 => "piektā",
        6 => "sestā",
        7 => "septītā",
        8 => "astotā",
        9 => "devītā",
        10 => "desmitā",
        11 => "vienpadsmitā",
        12 => "divpadsmitā",
        13 => "trīspadsmitā",
        14 => "četrpadsmitā",
        15 => "piecpadsmitā",
        16 => "sešpadsmitā",
        17 => "septiņpadsmitā",
        18 => "astoņpadsmitā",
        19 => "deviņpadsmitā",
        20 => "divdesmitā",
        30 => "trīsdesmitā",
        40 => "četrdesmitā",
        50 => "piecdesmitā",
        60 => "sešdesmitā",
        70 => "septiņdesmitā",
        80 => "astoņdesmitā",
        90 => "deviņdesmitā"
    ];

    protected $zeroes = [
        2 => "simtā",
        3 => "tūkstošā",
        6 => "miljonā",
        9 => "miljardā",
        12 => "biljonā",
        15 => "biljardā",		
    ];
}
?>