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

class SpelloutOrdinalPluralLocativeTest extends \PHPUnit_Framework_TestCase
{
    protected $formatter;

    protected function setUp()
    {
        $this->formatter = new NumberFormatter('ru', NumberFormatter::SPELLOUT);
        $this->formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-ordinal-plural-locative");
    }

    public function testDigits()
    {
        $f = $this->formatter;

        $this->assertEquals('нулеых', $f->format(0));
        $this->assertEquals('первых', $f->format(1));
        $this->assertEquals('вторых', $f->format(2));

        $this->assertEquals('одиннадцатых', $f->format(11));
        $this->assertEquals('двадцать первых', $f->format(21));
        $this->assertEquals('восьмидесятых', $f->format(80));

        $this->assertEquals('сотых', $f->format(100));
        $this->assertEquals('сто вторых', $f->format(102));
        $this->assertEquals('двасти тридцатые четвёртых', $f->format(234));
        $this->assertEquals('трёхсотых', $f->format(300));
        $this->assertEquals('восемьсот двадцатых', $f->format(820));

        $this->assertEquals('тысячных', $f->format(1000));
        $this->assertEquals('тысяча четыреста десятых', $f->format(1410));
        $this->assertEquals('две тысячи одиннадцатых', $f->format(2011));
        $this->assertEquals('три тысячи сотых', $f->format(3100));
        $this->assertEquals('четыре тысячи вторых', $f->format(4002));		
        $this->assertEquals('пятитысячных', $f->format(5000));
        $this->assertEquals('десятитысячных', $f->format(10000));
        $this->assertEquals('двенадцать тысяч сто четвёртых', $f->format(12104));
        $this->assertEquals('двадцать восемь тысяч триста тридцатые третьими', $f->format(28333));
        $this->assertEquals('тридцать тысяч сотых', $f->format(30100));

        $this->assertEquals('стотысячных', $f->format(100000));
        $this->assertEquals('сто тысяч вторых', $f->format(100002));

        $this->assertEquals('миллионных', $f->format(1000000));
        $this->assertEquals('миллион пятисотыйтысячных', $f->format(1500000));

        $this->assertEquals('трёхсотыйтысячных', $f->format(3000000));
        $this->assertEquals('три миллионы третьими', $f->format(3000003));
        $this->assertEquals('три миллионы четырестатысячных', $f->format(3400000));
        $this->assertEquals('четыре миллионы пятьсот пятьдесяттысячных', $f->format(4550000));
        $this->assertEquals('четыре миллионы семьсот тысяч четырёхсотых', $f->format(4700400));
        $this->assertEquals('пять миллионов четыреста тридцать восемь тысяч триста десятых', $f->format(5438310));

        $this->assertEquals('пятимиллиардных', $f->format(5000000000));
        $this->assertEquals('пять миллиардов восемьсотмиллионных', $f->format(5800000000));
        $this->assertEquals('пять миллиардов восемьсот миллионов двеститысячных', $f->format(5800200000));
        $this->assertEquals('шесть миллиардов девятьсот пятьдесят миллионных', $f->format(6951000000));
    }
}
