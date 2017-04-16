<?php

$wc = new WordCounter("Слово Слово еще-слово, 123 слово123");
echo $wc->getCount();

class WordCounter
{
    /**
     * @var string исходная строка, с которой будем работать.
     */
    private $sourceString;

    /**
     * @var string алфавит, буквы которые будут учитыватся как часть слова
     */
    private $alphabetic =
        // русские большие
        "АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЬЫЪЭЮЯ" .
        // русские маленькие
        "абвгдеёжзийклмнопрстуфхцчшщьыъэюя" .
        // латинские большие
        "ABCDEFGHIJKLMNOPQRSTUVWXYZ" .
        // латинские маленькие
        "abcdefghijklmnopqrstuvwxyz";

    /**
     * Конструктор принимает исходную строку, в котрой будем считать количество сло.
     * WordCounter constructor.
     * @param $sourceString
     */
    public function __construct($sourceString)
    {
        $this->sourceString = $sourceString;
    }

    /**
     * Получить кол-во слов встроке.
     * @return mixed
     */
    public function getCount()
    {
        return str_word_count($this->sourceString, 0, $this->alphabetic);
    }
}