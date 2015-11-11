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

class SpelloutOrdinalPlural extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "nulltie",
        1 => "pirmie",
        2 => "otrie",
        3 => "trešie",
        4 => "ceturtie",
        5 => "piektie",
        6 => "sestie",
        7 => "septītie",
        8 => "astotie",
        9 => "devītie",
        10 => "desmitie",
        11 => "vienpadsmitie",
        12 => "divpadsmitie",
        13 => "trīspadsmitie",
        14 => "četrpadsmitie",
        15 => "piecpadsmitie",
        16 => "sešpadsmitie",
        17 => "septiņpadsmitie",
        18 => "astoņpadsmitie",
        19 => "deviņpadsmitie",
        20 => "divdesmitie",
        30 => "trīsdesmitie",
        40 => "četrdesmitie",
        50 => "piecdesmitie",
        60 => "sešdesmitie",
        70 => "septiņdesmitie",
        80 => "astoņdesmitie",
        90 => "deviņdesmitie"
    ];

    protected $zeroes = [
        2 => "simtie",
        3 => "tūkstošie",
        6 => "miljonie",
        9 => "miljardie",
        12 => "biljonie",
        15 => "biljardie",		
    ];
}
?>