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

class SpelloutOrdinalPluralMasculineInanimate extends SpelloutOrdinalAbstract
{
    protected $simple = [
        0 => "nultý",
        1 => "první",
        2 => "druhý",
        3 => "třetí",
        4 => "čtvrtý",
        5 => "pátý",
        6 => "šestý",
        7 => "sedmý",
        8 => "osmý", 
        9 => "devátý",
        10 => "desátý",
        11 => "jedenáctý",
        12 => "dvanáctý",
        13 => "třináctý",
        14 => "čtrnáctý",
        15 => "patnáctý",
        16 => "šestnáctý",
        17 => "sedmnáctý",
        18 => "osmnáctý",
        19 => "devatenáctý",
        20 => "dvacátý",
        30 => "třicátý",
        40 => "čtyřicátý",
        50 => "padesátý",
        60 => "šedesátý",
        70 => "sedmdesátý",
        80 => "osmdesátý",
        90 => "devadesátý"
    ];

    protected $zeroes = [
        2 => "stý",
        3 => "tisící",
        6 => "milióntý",
        9 => "miliardtý",
        12 => "biliontý",
        15 => "biliardtý"			
    ];
}
?>