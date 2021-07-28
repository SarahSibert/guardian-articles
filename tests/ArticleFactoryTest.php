<?php

namespace SarahSibert\GuardianArticles\Tests;

use PHPUnit\Framework\TestCase;
use SarahSibert\GuardianArticles\ArticleFactory;

class ArticleFactoryTest extends TestCase
{
    /** @test **/
    public function it_returns_a_random_article()
    {
        $articles = new ArticleFactory([
            'this is an article',
        ]);
        $article = $articles->getRandomArticle();

        $this->assertSame('this is an article', $article);
    }

    /** @test **/
    public function it_returns_a_predefined_article()
    {

        $guardianArticles = [
            'Article 1',
            'Article 2',
            'Article 3'
        ];
        
        $articles = new ArticleFactory();

        $article = $articles->getRandomArticle();

        $this->assertContains($article, $guardianArticles);
    }
}
