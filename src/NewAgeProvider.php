<?php

namespace NewAgeIpsum;

use Faker\Provider\Base;

class NewAgeProvider extends Base
{
    public function word()
    {
        $generator = new Generator();
        return $generator->generateWord();
    }
    public function words($nb_words = 3)
    {
        $generator = new Generator();
        return $generator->generateWords($nb_words);
    }
    public function sentence($topic = null)
    {
        $generator = new Generator();
        return $generator->generateSentence($topic);
    }
    public function sentences($number_of_sentences = 3,$topic = null)
    {
        $generator = new Generator();
        return $generator->generateSentences($number_of_sentences, $topic);
    }

    public function paragraph($number_of_paragraphs = 3, $topic = null)
    {
        $generator = new Generator();
        return $generator->generateParagraph($number_of_paragraphs, $topic);
    }

    public function paragraphs($number_of_paragraphs = 1, $topic = null){
        $generator = new Generator();
        return $generator->generateParagraphs($number_of_paragraphs, $topic);
    }
} 