<?php
/**
 * Created by PhpStorm.
 * User: jsoares
 * Date: 8/13/14
 * Time: 9:53 PM
 */

use NewAgeIpsum\NewAgeProvider;

class NewAgeProviderTest extends PHPUnit_Framework_TestCase {

    public function testWord()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new NewAgeProvider($faker));
        $this->assertNotEmpty($faker->word());
    }

    public function testWords()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new NewAgeProvider($faker));
        $this->assertCount(2,$faker->words(2));
    }

    public function testSentence()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new NewAgeProvider($faker));
        $this->assertNotEmpty($faker->sentence());
    }

    public function testSentences()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new NewAgeProvider($faker));
        $this->assertCount(2,$faker->sentences(2));
    }

    public function testParagraph()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new NewAgeProvider($faker));
        $this->assertNotEmpty($faker->paragraph());
    }
    public function testParagraphs()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new NewAgeProvider($faker));
        $this->assertNotEmpty($faker->paragraphs());
    }
}
 