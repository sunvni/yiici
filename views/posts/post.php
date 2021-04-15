<h1><?=$post->title ?></h1>
<small><?=$post->created_at ?></small>
<small><?=$post->author() ?></small>

<div class="post-content">
    <?=$post->content ?>
</div>
