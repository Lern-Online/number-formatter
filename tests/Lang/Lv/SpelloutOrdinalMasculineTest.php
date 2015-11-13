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

class SpelloutOrdinalMasculineTest extends \PHPUnit_Framework_TestCase
{
    protected $formatter;

    protected function setUp()
    {
        $this->formatter = new NumberFormatter('lv', NumberFormatter::SPELLOUT);
        $this->formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-ordinal-masculine");
    }

    public function testDigits()
    {
        $f = $this->formatter;

        $this->assertEquals('nulltais', $f->format(0));
        $this->assertEquals('pirmais', $f->format(1));
        $this->assertEquals('otrais', $f->format(2));

        $this->assertEquals('vienpadsmitais', $f->format(11));
        $this->assertEquals('divdesmit pirmais', $f->format(21));
        $this->assertEquals('astoņdesmitais', $f->format(80));

        $this->assertEquals('simtais', $f->format(100));
        $this->assertEquals('simt otrais', $f->format(102));
        $this->assertEquals('divsimt trīsdesmit ceturtais', $f->format(234));
        $this->assertEquals('trīssimtais', $f->format(300));
        $this->assertEquals('astoņsimt divdesmitais', $f->format(820));

        $this->assertEquals('tūkstošais', $f->format(1000));
        $this->assertEquals('tūkstoš četrsimt desmitais', $f->format(1410));	
        $this->assertEquals('div tūkstoš vienpadsmitais', $f->format(2011));	
        $this->assertEquals('trīs tūkstoš simtais', $f->format(3100));
        $this->assertEquals('četr tūkstoš otrais', $f->format(4002));
        $this->assertEquals('piectūkstošais', $f->format(5000));
        $this->assertEquals('desmittūkstošais', $f->format(10000));
        $this->assertEquals('ivpadsmit tūkstoš simt ceturtais', $f->format(12104));
        $this->assertEquals('divdesmit astoņi tūkstoš trīssimt trīsdesmit trešais', $f->format(28333));
        $this->assertEquals('trīsdesmit tūkstoš simtais', $f->format(30100));

        $this->assertEquals('simtaistūkstošais', $f->format(100000));
        $this->assertEquals('simt tūkstoš otrais', $f->format(100002));

        $this->assertEquals('miljonais', $f->format(1000000));
        $this->assertEquals('viens miljons piecsimtaistūkstošais', $f->format(1500000));

        $this->assertEquals('viens miljons piecsimtaistūkstošais', $f->format(1500000));

        $this->assertEquals('trīsmiljonais', $f->format(3000000));
        $this->assertEquals('trīs miljoni trešais', $f->format(3000003));
        $this->assertEquals('trīs miljoni četrsimtaistūkstošais', $f->format(3400000));
        $this->assertEquals('četri miljoni piecsimt piecdesmittūkstošais', $f->format(4550000));
        $this->assertEquals('četri miljoni septiņsimt tūkstoš četrsimtais', $f->format(4700400));
        $this->assertEquals('pieci miljoni četrsimt trīsdesmit astoņi tūkstoš trīssimt desmitais', $f->format(5438310));

        $this->assertEquals('piecmiljardais', $f->format(5000000000));
        $this->assertEquals('pieci miljardi astoņsimtaismiljonais', $f->format(5800000000));
        $this->assertEquals('pieci miljardi astoņsimt miljoni divsimtaistūkstošais', $f->format(5800200000));
        $this->assertEquals('seši miljardi deviņsimt piecdesmit miljonais', $f->format(6951000000));
    }
}
