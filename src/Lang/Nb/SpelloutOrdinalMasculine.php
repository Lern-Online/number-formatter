<?php
/**
 * This file is part of arius/number-formatter package
 *
 * @author Arkadiusz Ostrycharz <arkadiusz.ostrycharz@gmail.com>
 * @copyright Arius IT Arkadiusz Ostrycharz
 * @homepage http://arius.pl
 *
 * Norwegian bokmål Version:
 * @copyright Grigorij Kosba 
 * @homepage http://www.lern-online.net
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Arius\Lang\Nb;

class SpelloutOrdinalMasculine extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "nulte",
        1 => "første",
        2 => "andre",
        3 => "tredje",
        4 => "fjerde",
        5 => "femte",
        6 => "sjette",
        7 => "syvende",
        8 => "åttende", 
        9 => "niende",
        10 => "tiende ",
        11 => "ellevte",
        12 => "tolvte",
        13 => "trettende",
        14 => "fjortende",
        15 => "femtende",
        16 => "sekstende",
        17 => "syttende",
        18 => "attende",
        19 => "nittende",
        20 => "tjuende",
        30 => "trettiende",
        40 => "førtiende",
        50 => "femtiende",
        60 => "sekstiende",
        70 => "syttiende",
        80 => "åttiende",
        90 => "nittiende"
    ];

    protected $zeroes = [
        2 => "hundrede",
        3 => "tusende",
        6 => "millionte",
        9 => "millardte",
        12 => "billionte",
        15 => "billardte",				
    ];
}
?>