<?php

namespace Nack\FileParser\Strategy;

use Symfony\Component\Yaml\Parser;

class StrategyFactoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var StrategyFactory */
    private $sut;

    public function setUp()
    {
        $this->sut = new StrategyFactory();
    }

    public function testItShouldCreateCsvStrategy()
    {
        $expected = new CsvStrategy();
        $this->assertEquals($expected, $this->sut->createCsvStrategy());
    }

    public function testItShouldCreateJsonStrategy()
    {
        $expected = new JsonStrategy();
        $this->assertEquals($expected, $this->sut->createJsonStrategy());
    }

    public function testItShouldCreateYamlStrategy()
    {
        $expected = new YamlStrategy(new Parser());
        $this->assertEquals($expected, $this->sut->createYamlStrategy());
    }
}
