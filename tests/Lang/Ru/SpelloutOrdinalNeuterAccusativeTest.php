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

class SpelloutOrdinalNeuterAccusativeTest extends \PHPUnit_Framework_TestCase
{
    protected $formatter;

    protected function setUp()
    {
        $this->formatter = new NumberFormatter('ru', NumberFormatter::SPELLOUT);
        $this->formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-ordinal-neuter-accusative");

        $this->neuterFormatter = new NumberFormatter('ru', NumberFormatter::SPELLOUT);
        $this->neuterFormatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-ordinal-neuter");
    }

    public function testDigits()
    {
        $randomNumber = rand(1,100000);

        $this->assertEquals(
            $this->formatter->format($randomNumber),
            $this->neuterFormatter->format($randomNumber)
        );
    }
}
