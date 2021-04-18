<?php

use app\models\Post;
use app\models\User;

class PostsControllerCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('posts/index');
    }

    // tests
    public function canSeePosts(FunctionalTester $I)
    {
        $I->canSee('Posts');
    }
}
