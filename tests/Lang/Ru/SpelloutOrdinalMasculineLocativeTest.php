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

class SpelloutOrdinalMasculineLocativeTest extends \PHPUnit_Framework_TestCase
{
    protected $formatter;

    protected function setUp()
    {
        $this->formatter = new NumberFormatter('ru', NumberFormatter::SPELLOUT);
        $this->formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-ordinal-masculine-locative");
    }

    public function testDigits()
    {
        $f = $this->formatter;

        $this->assertEquals('нулеыом', $f->format(0));
        $this->assertEquals('первыом', $f->format(1));
        $this->assertEquals('вторыом', $f->format(2));

        $this->assertEquals('одиннадцатыом', $f->format(11));
        $this->assertEquals('двадцать перыом', $f->format(21));
        $this->assertEquals('восьмидесятыом', $f->format(80));

        $this->assertEquals('сотыом', $f->format(100));
        $this->assertEquals('сто вторыом', $f->format(102));
        $this->assertEquals('двасти тридцатые четвёртыом', $f->format(234));
        $this->assertEquals('трёхсотыом', $f->format(300));
        $this->assertEquals('восемьсот двадцатыом', $f->format(820));

        $this->assertEquals('тысячныом', $f->format(1000));
        $this->assertEquals('тысяча четыреста десятыом', $f->format(1410));
        $this->assertEquals('две тысячи одиннадцатыом', $f->format(2011));
        $this->assertEquals('три тысячи сотыом', $f->format(3100));
        $this->assertEquals('четыре тысячи вторыом', $f->format(4002));		
        $this->assertEquals('пятитысячныом', $f->format(5000));
        $this->assertEquals('десятитысячныом', $f->format(10000));
        $this->assertEquals('двенадцать тысяч сто четвёртыом', $f->format(12104));
        $this->assertEquals('двадцать восемь тысяч триста тридцатые третьем', $f->format(28333));
        $this->assertEquals('тридцать тысяч сотыом', $f->format(30100));

        $this->assertEquals('стотысячныом', $f->format(100000));
        $this->assertEquals('сто тысяч вторыом', $f->format(100002));

        $this->assertEquals('миллионныом', $f->format(1000000));
        $this->assertEquals('миллион пятисотыйтысячныом', $f->format(1500000));

        $this->assertEquals('трёхсотыйтысячныом', $f->format(3000000));
        $this->assertEquals('три миллионы третьем', $f->format(3000003));
        $this->assertEquals('три миллионы четырестатысячныом', $f->format(3400000));
        $this->assertEquals('четыре миллионы пятьсот пятьдесяттысячныом', $f->format(4550000));
        $this->assertEquals('четыре миллионы семьсот тысяч четырёхсотыом', $f->format(4700400));
        $this->assertEquals('пять миллионов четыреста тридцать восемь тысяч триста десятыом', $f->format(5438310));

        $this->assertEquals('пятимиллиардныом', $f->format(5000000000));
        $this->assertEquals('пять миллиардов восемьсотмиллионныом', $f->format(5800000000));
        $this->assertEquals('пять миллиардов восемьсот миллионов двеститысячныом', $f->format(5800200000));
        $this->assertEquals('шесть миллиардов девятьсот пятьдесят миллионныом', $f->format(6951000000));
    }
}
