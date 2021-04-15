<?php

use app\models\Post;
use app\models\User;

class PostsControllerCest
{
    public function _before(FunctionalTester $I)
    {
        $userId = User::findByUsername('admin')->id;

        $I->haveRecord(Post::class, [
            'title' => 'My very first Post',
            'featured' => 1,
            'short' => 'Hello World',
            'content' => 'some very nice content!',
            'created_by' => $userId
        ]);

        $I->amOnRoute('posts/index');
    }

    // tests
    public function canSeePosts(FunctionalTester $I)
    {
        $I->canSee('My very first Post');
    }

    public function canClickToPost(FunctionalTester $i)
    {
        $i->click('My very first Post');
        $i->see('some very nice content!');
    }
}
