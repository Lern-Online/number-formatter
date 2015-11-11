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

class SpelloutOrdinalNeuter extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "nullte",
        1 => "pirme",
        2 => "otre",
        3 => "treše",
        4 => "ceturte",
        5 => "piekte",
        6 => "seste",
        7 => "septīte",
        8 => "astote",
        9 => "devīte",
        10 => "desmite",
        11 => "vienpadsmite",
        12 => "divpadsmite",
        13 => "trīspadsmite",
        14 => "četrpadsmite",
        15 => "piecpadsmite",
        16 => "sešpadsmite",
        17 => "septiņpadsmite",
        18 => "astoņpadsmite",
        19 => "deviņpadsmite",
        20 => "divdesmite",
        30 => "trīsdesmite",
        40 => "četrdesmite",
        50 => "piecdesmite",
        60 => "sešdesmite",
        70 => "septiņdesmite",
        80 => "astoņdesmite",
        90 => "deviņdesmite"
    ];

    protected $zeroes = [
        2 => "simte",
        3 => "tūkstoše",
        6 => "miljone",
        9 => "miljarde",
        12 => "biljone",
        15 => "biljarde",		
    ];
}
?>