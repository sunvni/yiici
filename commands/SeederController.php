<?php
namespace app\commands;

use app\models\Post;
use yii\console\Controller;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SeederController extends Controller
{
    public $title;
    public $short;
    public $created_by;
    public $featured = false;
    public $count = 1;
    
    public function options($actionId)
    {
        return ['title', 'short', 'created_by', 'featured', 'count'];
    }
        
    public function actionPosts()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < $this->count; $i++) {
            $post = new Post();
            $post->title = $this->title ?: $faker->sentence();
            $post->short = $this->short ?: $faker->sentence();
            $post->created_by = $this->created_by ?: 100;
            $post->featured = boolval($this->featured);
            $post->content = $faker->paragraph();
    
            $post->save();
        }
    }
}
