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
namespace Arius\Tests\Lang\Lv;

use Arius\NumberFormatter;

class SpelloutOrdinalPluralTest extends \PHPUnit_Framework_TestCase
{
    protected $formatter;

    protected function setUp()
    {
        $this->formatter = new NumberFormatter('lv', NumberFormatter::SPELLOUT);
        $this->formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-ordinal-plural");
    }

    public function testDigits()
    {
        $f = $this->formatter;

        $this->assertEquals('nullte', $f->format(0));
        $this->assertEquals('pirme', $f->format(1));
        $this->assertEquals('otre', $f->format(2));

        $this->assertEquals('vienpadsmite', $f->format(11));
        $this->assertEquals('divdesmit pirme', $f->format(21));
        $this->assertEquals('astoņdesmite', $f->format(80));

        $this->assertEquals('simte', $f->format(100));
        $this->assertEquals('simt otre', $f->format(102));
        $this->assertEquals('divsimt trīsdesmit ceturte', $f->format(234));
        $this->assertEquals('trīssimte', $f->format(300));
        $this->assertEquals('astoņsimt divdesmite', $f->format(820));

        $this->assertEquals('tūkstoše', $f->format(1000));
        $this->assertEquals('tūkstoš četrsimt desmite', $f->format(1410));	
        $this->assertEquals('div tūkstoš vienpadsmite', $f->format(2011));	
        $this->assertEquals('trīs tūkstoš simte', $f->format(3100));
        $this->assertEquals('četr tūkstoš otre', $f->format(4002));
        $this->assertEquals('piectūkstoše', $f->format(5000));
        $this->assertEquals('desmittūkstoše', $f->format(10000));
        $this->assertEquals('ivpadsmit tūkstoš simt ceturte', $f->format(12104));
        $this->assertEquals('divdesmit astoņi tūkstoš trīssimt trīsdesmit treše', $f->format(28333));
        $this->assertEquals('trīsdesmit tūkstoš simte', $f->format(30100));

        $this->assertEquals('simtaistūkstoše', $f->format(100000));
        $this->assertEquals('simt tūkstoš otre', $f->format(100002));

        $this->assertEquals('miljone', $f->format(1000000));
        $this->assertEquals('viens miljons piecsimtaistūkstoše', $f->format(1500000));

        $this->assertEquals('viens miljons piecsimtaistūkstoše', $f->format(1500000));

        $this->assertEquals('trīsmiljone', $f->format(3000000));
        $this->assertEquals('trīs miljoni treše', $f->format(3000003));
        $this->assertEquals('trīs miljoni četrsimtaistūkstoše', $f->format(3400000));
        $this->assertEquals('četri miljoni piecsimt piecdesmittūkstoše', $f->format(4550000));
        $this->assertEquals('četri miljoni septiņsimt tūkstoš četrsimte', $f->format(4700400));
        $this->assertEquals('pieci miljoni četrsimt trīsdesmit astoņi tūkstoš trīssimt desmite', $f->format(5438310));

        $this->assertEquals('piecmiljarde', $f->format(5000000000));
        $this->assertEquals('pieci miljardi astoņsimtaismiljone', $f->format(5800000000));
        $this->assertEquals('pieci miljardi astoņsimt miljoni divsimtaistūkstoše', $f->format(5800200000));
        $this->assertEquals('seši miljardi deviņsimt piecdesmit miljone', $f->format(6951000000));
    }
}
