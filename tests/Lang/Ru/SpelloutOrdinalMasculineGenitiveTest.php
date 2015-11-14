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

class SpelloutOrdinalMasculineGenitiveTest extends \PHPUnit_Framework_TestCase
{
    protected $formatter;

    protected function setUp()
    {
        $this->formatter = new NumberFormatter('ru', NumberFormatter::SPELLOUT);
        $this->formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-ordinal-masculine-genitive");
    }

    public function testDigits()
    {
        $f = $this->formatter;

        $this->assertEquals('нулеого', $f->format(0));
        $this->assertEquals('первого', $f->format(1));
        $this->assertEquals('второго', $f->format(2));

        $this->assertEquals('одиннадцатого', $f->format(11));
        $this->assertEquals('двадцать перого', $f->format(21));
        $this->assertEquals('восьмидесятого', $f->format(80));

        $this->assertEquals('сотого', $f->format(100));
        $this->assertEquals('сто второго', $f->format(102));
        $this->assertEquals('двасти тридцатые четвёртого', $f->format(234));
        $this->assertEquals('трёхсотого', $f->format(300));
        $this->assertEquals('восемьсот двадцатого', $f->format(820));

        $this->assertEquals('тысячного', $f->format(1000));
        $this->assertEquals('тысяча четыреста десятого', $f->format(1410));
        $this->assertEquals('две тысячи одиннадцатого', $f->format(2011));
        $this->assertEquals('три тысячи сотого', $f->format(3100));
        $this->assertEquals('четыре тысячи второго', $f->format(4002));		
        $this->assertEquals('пятитысячного', $f->format(5000));
        $this->assertEquals('десятитысячного', $f->format(10000));
        $this->assertEquals('двенадцать тысяч сто четвёртого', $f->format(12104));
        $this->assertEquals('двадцать восемь тысяч триста тридцатые второго', $f->format(28333));
        $this->assertEquals('тридцать тысяч сотого', $f->format(30100));

        $this->assertEquals('стотысячного', $f->format(100000));
        $this->assertEquals('сто тысяч второго', $f->format(100002));

        $this->assertEquals('миллионного', $f->format(1000000));
        $this->assertEquals('миллион пятисотыйтысячного', $f->format(1500000));

        $this->assertEquals('трёхсотыйтысячного', $f->format(3000000));
        $this->assertEquals('три миллионы второго', $f->format(3000003));
        $this->assertEquals('три миллионы четырестатысячного', $f->format(3400000));
        $this->assertEquals('четыре миллионы пятьсот пятьдесяттысячного', $f->format(4550000));
        $this->assertEquals('четыре миллионы семьсот тысяч четырёхсотого', $f->format(4700400));
        $this->assertEquals('пять миллионов четыреста тридцать восемь тысяч триста десятого', $f->format(5438310));

        $this->assertEquals('пятимиллиардного', $f->format(5000000000));
        $this->assertEquals('пять миллиардов восемьсотмиллионного', $f->format(5800000000));
        $this->assertEquals('пять миллиардов восемьсот миллионов двеститысячного', $f->format(5800200000));
        $this->assertEquals('шесть миллиардов девятьсот пятьдесят миллионного', $f->format(6951000000));
    }
}
