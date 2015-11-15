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

class SpelloutOrdinalPluralMasculineAnimate extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "nulté",
        1 => "první",
        2 => "druhé",
        3 => "třetí",
        4 => "čtvrté",
        5 => "páté",
        6 => "šesté",
        7 => "sedmé",
        8 => "osmé", 
        9 => "deváté",
        10 => "desáté",
        11 => "jedenácté",
        12 => "dvanácté",
        13 => "třinácté",
        14 => "čtrnácté",
        15 => "patnácté",
        16 => "šestnácté",
        17 => "sedmnácté",
        18 => "osmnácté",
        19 => "devatenácté",
        20 => "dvacáté",
        30 => "třicáté",
        40 => "čtyřicáté",
        50 => "padesáté",
        60 => "šedesáté",
        70 => "sedmdesáté",
        80 => "osmdesáté",
        90 => "devadesáté"
    ];

    protected $zeroes = [
        2 => "sté",
        3 => "tisící",
        6 => "miliónté",
        9 => "miliardté",
        12 => "bilionté",
        15 => "biliardté"			
    ];
}
?>