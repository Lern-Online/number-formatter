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

class SpelloutOrdinalMasculine extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "nulltais",
        1 => "pirmais",
        2 => "otrais",
        3 => "trešais",
        4 => "ceturtais",
        5 => "piektais",
        6 => "sestais",
        7 => "septītais",
        8 => "astotais",
        9 => "devītais",
        10 => "desmitais",
        11 => "vienpadsmitais",
        12 => "divpadsmitais",
        13 => "trīspadsmitais",
        14 => "četrpadsmitais",
        15 => "piecpadsmitais",
        16 => "sešpadsmitais",
        17 => "septiņpadsmitais",
        18 => "astoņpadsmitais",
        19 => "deviņpadsmitais",
        20 => "divdesmitais",
        30 => "trīsdesmitais",
        40 => "četrdesmitais",
        50 => "piecdesmitais",
        60 => "sešdesmitais",
        70 => "septiņdesmitais",
        80 => "astoņdesmitais",
        90 => "deviņdesmitais"
    ];

    protected $zeroes = [
        2 => "simtais",
        3 => "tūkstošais",
        6 => "miljonais",
        9 => "miljardais",
        12 => "biljonais",
        15 => "biljardā",		
    ];
}
?>