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

class SpelloutOrdinalPluralDativeTest extends \PHPUnit_Framework_TestCase
{
    protected $formatter;

    protected function setUp()
    {
        $this->formatter = new NumberFormatter('ru', NumberFormatter::SPELLOUT);
        $this->formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-ordinal-plural-dative");
    }

    public function testDigits()
    {
        $f = $this->formatter;

        $this->assertEquals('нулеым', $f->format(0));
        $this->assertEquals('первым', $f->format(1));
        $this->assertEquals('вторым', $f->format(2));

        $this->assertEquals('одиннадцатым', $f->format(11));
        $this->assertEquals('двадцать перым', $f->format(21));
        $this->assertEquals('восьмидесятым', $f->format(80));

        $this->assertEquals('сотым', $f->format(100));
        $this->assertEquals('сто вторым', $f->format(102));
        $this->assertEquals('двасти тридцатые четвёртым', $f->format(234));
        $this->assertEquals('трёхсотым', $f->format(300));
        $this->assertEquals('восемьсот двадцатым', $f->format(820));

        $this->assertEquals('тысячным', $f->format(1000));
        $this->assertEquals('тысяча четыреста десятым', $f->format(1410));
        $this->assertEquals('две тысячи одиннадцатым', $f->format(2011));
        $this->assertEquals('три тысячи сотым', $f->format(3100));
        $this->assertEquals('четыре тысячи вторым', $f->format(4002));		
        $this->assertEquals('пятитысячным', $f->format(5000));
        $this->assertEquals('десятитысячным', $f->format(10000));
        $this->assertEquals('двенадцать тысяч сто четвёртым', $f->format(12104));
        $this->assertEquals('двадцать восемь тысяч триста тридцатые третьим', $f->format(28333));
        $this->assertEquals('тридцать тысяч сотым', $f->format(30100));

        $this->assertEquals('стотысячным', $f->format(100000));
        $this->assertEquals('сто тысяч вторым', $f->format(100002));

        $this->assertEquals('миллионным', $f->format(1000000));
        $this->assertEquals('миллион пятисотыйтысячным', $f->format(1500000));

        $this->assertEquals('трёхсотыйтысячным', $f->format(3000000));
        $this->assertEquals('три миллионы третьим', $f->format(3000003));
        $this->assertEquals('три миллионы четырестатысячным', $f->format(3400000));
        $this->assertEquals('четыре миллионы пятьсот пятьдесяттысячным', $f->format(4550000));
        $this->assertEquals('четыре миллионы семьсот тысяч четырёхсотым', $f->format(4700400));
        $this->assertEquals('пять миллионов четыреста тридцать восемь тысяч триста десятым', $f->format(5438310));

        $this->assertEquals('пятимиллиардным', $f->format(5000000000));
        $this->assertEquals('пять миллиардов восемьсотмиллионным', $f->format(5800000000));
        $this->assertEquals('пять миллиардов восемьсот миллионов двеститысячным', $f->format(5800200000));
        $this->assertEquals('шесть миллиардов девятьсот пятьдесят миллионным', $f->format(6951000000));
    }
}
