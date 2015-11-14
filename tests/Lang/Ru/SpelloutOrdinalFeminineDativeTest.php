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

class SpelloutOrdinalFeminineDativeTest extends \PHPUnit_Framework_TestCase
{
    protected $formatter;

    protected function setUp()
    {
        $this->formatter = new NumberFormatter('ru', NumberFormatter::SPELLOUT);
        $this->formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-ordinal-feminine-dative");
    }

    public function testDigits()
    {
        $f = $this->formatter;

        $this->assertEquals('нулеой', $f->format(0));
        $this->assertEquals('первой', $f->format(1));
        $this->assertEquals('второй', $f->format(2));

        $this->assertEquals('одиннадцатой', $f->format(11));
        $this->assertEquals('двадцать перой', $f->format(21));
        $this->assertEquals('восьмидесятой', $f->format(80));

        $this->assertEquals('сотой', $f->format(100));
        $this->assertEquals('сто второй', $f->format(102));
        $this->assertEquals('двасти тридцатые четвёртой', $f->format(234));
        $this->assertEquals('трёхсотой', $f->format(300));
        $this->assertEquals('восемьсот двадцатой', $f->format(820));

        $this->assertEquals('тысячной', $f->format(1000));
        $this->assertEquals('тысяча четыреста десятой', $f->format(1410));
        $this->assertEquals('две тысячи одиннадцатой', $f->format(2011));
        $this->assertEquals('три тысячи сотой', $f->format(3100));
        $this->assertEquals('четыре тысячи второй', $f->format(4002));		
        $this->assertEquals('пятитысячной', $f->format(5000));
        $this->assertEquals('десятитысячной', $f->format(10000));
        $this->assertEquals('двенадцать тысяч сто четвёртой', $f->format(12104));
        $this->assertEquals('двадцать восемь тысяч триста тридцатые третьей', $f->format(28333));
        $this->assertEquals('тридцать тысяч сотой', $f->format(30100));

        $this->assertEquals('стотысячной', $f->format(100000));
        $this->assertEquals('сто тысяч второй', $f->format(100002));

        $this->assertEquals('миллионной', $f->format(1000000));
        $this->assertEquals('миллион пятисотыйтысячной', $f->format(1500000));

        $this->assertEquals('трёхсотыйтысячной', $f->format(3000000));
        $this->assertEquals('три миллионы третьей', $f->format(3000003));
        $this->assertEquals('три миллионы четырестатысячной', $f->format(3400000));
        $this->assertEquals('четыре миллионы пятьсот пятьдесяттысячной', $f->format(4550000));
        $this->assertEquals('четыре миллионы семьсот тысяч четырёхсотой', $f->format(4700400));
        $this->assertEquals('пять миллионов четыреста тридцать восемь тысяч триста десятой', $f->format(5438310));

        $this->assertEquals('пятимиллиардной', $f->format(5000000000));
        $this->assertEquals('пять миллиардов восемьсотмиллионной', $f->format(5800000000));
        $this->assertEquals('пять миллиардов восемьсот миллионов двеститысячной', $f->format(5800200000));
        $this->assertEquals('шесть миллиардов девятьсот пятьдесят миллионной', $f->format(6951000000));
    }
}
