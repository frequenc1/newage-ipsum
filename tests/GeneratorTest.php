<?php

class GeneratorTest extends PHPUnit_Framework_TestCase
{

    public function testSentence()
    {
        $generator = new \NewAgeIpsum\Generator();
        $this->assertNotEmpty($generator->generateSentence());
    }

    public function testSentences()
    {
        $generator = new \NewAgeIpsum\Generator();
        $this->assertNotEmpty($generator->generateSentences());
        $this->assertCount(5, $generator->generateSentences(5));
    }

    public function testParagraph()
    {
        $generator = new \NewAgeIpsum\Generator();
        $this->assertNotEmpty($generator->generateParagraph());
    }

    public function testParagraphs()
    {
        $generator = new \NewAgeIpsum\Generator();
        $this->assertNotEmpty($generator->generateParagraphs());
        $this->assertCount(7, $generator->generateParagraphs(7));
    }
}
