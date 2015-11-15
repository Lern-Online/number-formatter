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

class SpelloutOrdinalFeminine extends SpelloutOrdinalAbstract
{
     protected $simple = [
        0 => "nultá",
        1 => "první",
        2 => "druhá",
        3 => "třetí",
        4 => "čtvrtá",
        5 => "pátá",
        6 => "šestá",
        7 => "sedmá",
        8 => "osmá", 
        9 => "devátá",
        10 => "desátá",
        11 => "jedenáctá",
        12 => "dvanáctá",
        13 => "třináctá",
        14 => "čtrnáctá",
        15 => "patnáctá",
        16 => "šestnáctá",
        17 => "sedmnáctá",
        18 => "osmnáctá",
        19 => "devatenáctá",
        20 => "dvacátá",
        30 => "třicátá",
        40 => "čtyřicátá",
        50 => "padesátá",
        60 => "šedesátá",
        70 => "sedmdesátá",
        80 => "osmdesátá",
        90 => "devadesátá"
    ];

    protected $zeroes = [
        2 => "stá",
        3 => "tisící",
        6 => "milióntá",
        9 => "miliardtá",
        12 => "biliontá",
        15 => "biliardtá"					
    ];
}
?>