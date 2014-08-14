<?php

class GeneratorTest extends PHPUnit_Framework_TestCase
{

    public function testText()
    {
        $generator = new \NewAgeIpsum\Generator();
        $this->assertNotEmpty($generator->generateText());
        $this->assertEquals(300, strlen($generator->generateText(300)));
    }

    public function testWord()
    {
        $generator = new \NewAgeIpsum\Generator();
        $this->assertNotEmpty($generator->generateWord());
    }

    public function testWords()
    {
        $generator = new \NewAgeIpsum\Generator();
        $this->assertNotEmpty($generator->generateWords());
        $this->assertCount(5, $generator->generateWords(5));
    }

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
