<?php
/**
 * This file is part of arius/number-formatter package
 *
 * @author Arkadiusz Ostrycharz <arkadiusz.ostrycharz@gmail.com>
 * @copyright Arius IT Arkadiusz Ostrycharz
 * @homepage http://arius.pl
 *
 * Russian Version:
 * @copyright Grigorij Kosba 
 * @homepage http://www.lern-online.net
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Arius\Tests\Lang\Ru;

use Arius\NumberFormatter;

class SpelloutOrdinalMasculineDativeTest extends \PHPUnit_Framework_TestCase
{
    protected $formatter;

    protected function setUp()
    {
        $this->formatter = new NumberFormatter('ru', NumberFormatter::SPELLOUT);
        $this->formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-ordinal-masculine-dative");
    }

    public function testDigits()
    {
        $f = $this->formatter;

        $this->assertEquals('нулеому', $f->format(0));
        $this->assertEquals('первому', $f->format(1));
        $this->assertEquals('второму', $f->format(2));

        $this->assertEquals('одиннадцатому', $f->format(11));
        $this->assertEquals('двадцать перому', $f->format(21));
        $this->assertEquals('восьмидесятому', $f->format(80));

        $this->assertEquals('сотому', $f->format(100));
        $this->assertEquals('сто второму', $f->format(102));
        $this->assertEquals('двасти тридцатые четвёртому', $f->format(234));
        $this->assertEquals('трёхсотому', $f->format(300));
        $this->assertEquals('восемьсот двадцатому', $f->format(820));

        $this->assertEquals('тысячному', $f->format(1000));
        $this->assertEquals('тысяча четыреста десятому', $f->format(1410));
        $this->assertEquals('две тысячи одиннадцатому', $f->format(2011));
        $this->assertEquals('три тысячи сотому', $f->format(3100));
        $this->assertEquals('четыре тысячи второму', $f->format(4002));		
        $this->assertEquals('пятитысячному', $f->format(5000));
        $this->assertEquals('десятитысячному', $f->format(10000));
        $this->assertEquals('двенадцать тысяч сто четвёртому', $f->format(12104));
        $this->assertEquals('двадцать восемь тысяч триста тридцатые третьому', $f->format(28333));
        $this->assertEquals('тридцать тысяч сотому', $f->format(30100));

        $this->assertEquals('стотысячному', $f->format(100000));
        $this->assertEquals('сто тысяч второму', $f->format(100002));

        $this->assertEquals('миллионному', $f->format(1000000));
        $this->assertEquals('миллион пятисотыйтысячному', $f->format(1500000));

        $this->assertEquals('трёхсотыйтысячному', $f->format(3000000));
        $this->assertEquals('три миллионы третьому', $f->format(3000003));
        $this->assertEquals('три миллионы четырестатысячному', $f->format(3400000));
        $this->assertEquals('четыре миллионы пятьсот пятьдесяттысячному', $f->format(4550000));
        $this->assertEquals('четыре миллионы семьсот тысяч четырёхсотому', $f->format(4700400));
        $this->assertEquals('пять миллионов четыреста тридцать восемь тысяч триста десятому', $f->format(5438310));

        $this->assertEquals('пятимиллиардному', $f->format(5000000000));
        $this->assertEquals('пять миллиардов восемьсотмиллионному', $f->format(5800000000));
        $this->assertEquals('пять миллиардов восемьсот миллионов двеститысячному', $f->format(5800200000));
        $this->assertEquals('шесть миллиардов девятьсот пятьдесят миллионному', $f->format(6951000000));
    }
}
