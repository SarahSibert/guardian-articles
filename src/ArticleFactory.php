<?php

namespace SarahSibert\GuardianArticles;

class ArticleFactory
{
    protected $articles = [
        'Article 1',
        'Article 2',
        'Article 3'
    ];    

    public function __construct(array $articles = null)
    {
        if ($articles){
            $this->articles = $articles;
        }
    }

    public function getRandomArticle()
    {
        return $this->articles[array_rand($this->articles)];
    }
}
