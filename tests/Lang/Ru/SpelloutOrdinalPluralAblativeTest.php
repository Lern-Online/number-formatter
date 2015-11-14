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

class SpelloutOrdinalPluralAblativeTest extends \PHPUnit_Framework_TestCase
{
    protected $formatter;

    protected function setUp()
    {
        $this->formatter = new NumberFormatter('ru', NumberFormatter::SPELLOUT);
        $this->formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-ordinal-plural-ablative");
    }

    public function testDigits()
    {
        $f = $this->formatter;

        $this->assertEquals('нулеыми', $f->format(0));
        $this->assertEquals('первыми', $f->format(1));
        $this->assertEquals('вторыми', $f->format(2));

        $this->assertEquals('одиннадцатыми', $f->format(11));
        $this->assertEquals('двадцать перыми', $f->format(21));
        $this->assertEquals('восьмидесятыми', $f->format(80));

        $this->assertEquals('сотыми', $f->format(100));
        $this->assertEquals('сто вторыми', $f->format(102));
        $this->assertEquals('двасти тридцатые четвёртыми', $f->format(234));
        $this->assertEquals('трёхсотыми', $f->format(300));
        $this->assertEquals('восемьсот двадцатыми', $f->format(820));

        $this->assertEquals('тысячными', $f->format(1000));
        $this->assertEquals('тысяча четыреста десятыми', $f->format(1410));
        $this->assertEquals('две тысячи одиннадцатыми', $f->format(2011));
        $this->assertEquals('три тысячи сотыми', $f->format(3100));
        $this->assertEquals('четыре тысячи вторыми', $f->format(4002));		
        $this->assertEquals('пятитысячными', $f->format(5000));
        $this->assertEquals('десятитысячными', $f->format(10000));
        $this->assertEquals('двенадцать тысяч сто четвёртыми', $f->format(12104));
        $this->assertEquals('двадцать восемь тысяч триста тридцатые третьими', $f->format(28333));
        $this->assertEquals('тридцать тысяч сотыми', $f->format(30100));

        $this->assertEquals('стотысячными', $f->format(100000));
        $this->assertEquals('сто тысяч вторыми', $f->format(100002));

        $this->assertEquals('миллионными', $f->format(1000000));
        $this->assertEquals('миллион пятисотыйтысячными', $f->format(1500000));

        $this->assertEquals('трёхсотыйтысячными', $f->format(3000000));
        $this->assertEquals('три миллионы третьими', $f->format(3000003));
        $this->assertEquals('три миллионы четырестатысячными', $f->format(3400000));
        $this->assertEquals('четыре миллионы пятьсот пятьдесяттысячными', $f->format(4550000));
        $this->assertEquals('четыре миллионы семьсот тысяч четырёхсотыми', $f->format(4700400));
        $this->assertEquals('пять миллионов четыреста тридцать восемь тысяч триста десятыми', $f->format(5438310));

        $this->assertEquals('пятимиллиардными', $f->format(5000000000));
        $this->assertEquals('пять миллиардов восемьсотмиллионными', $f->format(5800000000));
        $this->assertEquals('пять миллиардов восемьсот миллионов двеститысячными', $f->format(5800200000));
        $this->assertEquals('шесть миллиардов девятьсот пятьдесят миллионными', $f->format(6951000000));
    }
}
