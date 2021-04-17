<?php

namespace app\controllers;

use app\models\Post;
use yii\data\Pagination;

class PostsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Post::find()->where(['data_status' => Post::STATUS_NOT_DELETED]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $pages->setPageSize(10);
        $posts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->orderBy(['created_at' => 'DESC'])
            ->all();

        return $this->render('index', [
            'posts' => $posts,
            'pages' => $pages,
        ]);
    }


    public function actionView($id)
    {
        $post = Post::findOne(['id' => $id]);
        return $this->render('post', compact('post'));
    }

}
