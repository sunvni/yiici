
<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>

<h1>Posts</h1>
<?php
foreach ($posts as $key => $post) : ?>
<div class="post">
    <a href="<?=Url::toRoute(['posts/view', 'id' => $post->id]);?>"><h3><?=$post->title ?></h3></a>
    <p><?=$post->short ?></p>
    <small><?=$post->created_at ?></small>
</div>
<?php endforeach ?>
<?php
echo LinkPager::widget([
    'pagination' => $pages,
]);
