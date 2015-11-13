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

class SpelloutOrdinalFeminineTest extends \PHPUnit_Framework_TestCase
{
    protected $formatter;

    protected function setUp()
    {
        $this->formatter = new NumberFormatter('lv', NumberFormatter::SPELLOUT);
        $this->formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-ordinal-feminine");
    }

    public function testDigits()
    {
        $f = $this->formatter;

        $this->assertEquals('nulltā', $f->format(0));
        $this->assertEquals('pirmā', $f->format(1));
        $this->assertEquals('otrā', $f->format(2));

        $this->assertEquals('vienpadsmitā', $f->format(11));
        $this->assertEquals('divdesmit pirmā', $f->format(21));
        $this->assertEquals('astoņdesmitā', $f->format(80));

        $this->assertEquals('simtā', $f->format(100));
        $this->assertEquals('simt otrā', $f->format(102));
        $this->assertEquals('divsimt trīsdesmit ceturtā', $f->format(234));
        $this->assertEquals('trīssimtā', $f->format(300));
        $this->assertEquals('astoņsimt divdesmitā', $f->format(820));

        $this->assertEquals('tūkstošā', $f->format(1000));
        $this->assertEquals('tūkstoš četrsimt desmitā', $f->format(1410));	
        $this->assertEquals('div tūkstoš vienpadsmitā', $f->format(2011));	
        $this->assertEquals('trīs tūkstoš simtā', $f->format(3100));
        $this->assertEquals('četr tūkstoš otrā', $f->format(4002));
        $this->assertEquals('piectūkstošā', $f->format(5000));
        $this->assertEquals('desmittūkstošā', $f->format(10000));
        $this->assertEquals('ivpadsmit tūkstoš simt ceturtā', $f->format(12104));
        $this->assertEquals('divdesmit astoņi tūkstoš trīssimt trīsdesmit trešā', $f->format(28333));
        $this->assertEquals('trīsdesmit tūkstoš simtā', $f->format(30100));

        $this->assertEquals('simtaistūkstošā', $f->format(100000));
        $this->assertEquals('simt tūkstoš otrā', $f->format(100002));

        $this->assertEquals('miljonā', $f->format(1000000));
        $this->assertEquals('viens miljons piecsimtaistūkstošā', $f->format(1500000));

        $this->assertEquals('viens miljons piecsimtaistūkstošā', $f->format(1500000));

        $this->assertEquals('trīsmiljonā', $f->format(3000000));
        $this->assertEquals('trīs miljoni trešā', $f->format(3000003));
        $this->assertEquals('trīs miljoni četrsimtaistūkstošā', $f->format(3400000));
        $this->assertEquals('četri miljoni piecsimt piecdesmittūkstošā', $f->format(4550000));
        $this->assertEquals('četri miljoni septiņsimt tūkstoš četrsimtā', $f->format(4700400));
        $this->assertEquals('pieci miljoni četrsimt trīsdesmit astoņi tūkstoš trīssimt desmitā', $f->format(5438310));

        $this->assertEquals('piecmiljardā', $f->format(5000000000));
        $this->assertEquals('pieci miljardi astoņsimtaismiljonā', $f->format(5800000000));
        $this->assertEquals('pieci miljardi astoņsimt miljoni divsimtaistūkstošā', $f->format(5800200000));
        $this->assertEquals('seši miljardi deviņsimt piecdesmit miljonā', $f->format(6951000000));
    }
}
