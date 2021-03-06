# arius/number-formatter
[![Build Status](https://travis-ci.org/arius86/number-formatter.svg?branch=master)](https://travis-ci.org/arius86/number-formatter)
[![Coverage Status](https://coveralls.io/repos/arius86/number-formatter/badge.svg?branch=master)](https://coveralls.io/r/arius86/number-formatter?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/87742c9a-446c-4635-9a9a-b277405cb3a1/mini.png)](https://insight.sensiolabs.com/projects/87742c9a-446c-4635-9a9a-b277405cb3a1)

PHP NumberFormatter extended with additional ordinals not supported by ICU.

**Feel free to add more languages. Fork, pull request and contribute!**

Number generator from Lern-Online.net
======
You can prove or check the values in my number generator.
Put a number with max 15 characters in the input box and the script will generate with AJAX immediately the numeral of the inserted number.

Use it
======

1. polish ordinal numbers (and cardinal numbers from ICU)
----------------------------
http://www.lern-online.net/polnisch/schreiben/zahlen/zahlengenerator/

2. russian ordinal numbers (and cardinal numbers from ICU)
----------------------------
http://www.lern-online.net/russisch/schreiben/zahlen/zahlengenerator/

How to
======

1. composer.json
----------------------------

```json
{
     "require": {
        "arius/number-formatter": "1.*"
     }
}
```

2. PHP
-------

Use in code just like [NumberFormatter class](http://php.net/manual/en/class.numberformatter.php).

```php
use Arius\NumberFormatter;

$formatter = new NumberFormatter('pl', NumberFormatter::SPELLOUT); // or 'ru' for russian
$formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-ordinal");

$formatter->format(123);
```

Additional supported ordinals
=============================

1. Polish (pl)
--------------

- spellout-ordinal
- spellout-ordinal-feminine
- spellout-ordinal-masculine
- spellout-ordinal-neuter

2. Russian (ru)
--------------

- spellout-ordinal
- spellout-ordinal-feminine
- spellout-ordinal-feminine-ablative
- spellout-ordinal-feminine-accusative
- spellout-ordinal-feminine-dative
- spellout-ordinal-feminine-genitive
- spellout-ordinal-feminine-locative
- spellout-ordinal-masculine
- spellout-ordinal-masculine-ablative
- spellout-ordinal-masculine-accusative
- spellout-ordinal-masculine-dative
- spellout-ordinal-masculine-genitive
- spellout-ordinal-masculine-locative
- spellout-ordinal-neuter
- spellout-ordinal-neuter-ablative
- spellout-ordinal-neuter-accusative
- spellout-ordinal-neuter-dative
- spellout-ordinal-neuter-genitive
- spellout-ordinal-neuter-locative
- spellout-ordinal-plural 
- spellout-ordinal-plural 
- spellout-ordinal-plural-ablative
- spellout-ordinal-plural-accusative
- spellout-ordinal-plural-dative
- spellout-ordinal-plural-genitive
- spellout-ordinal-plural-locative


