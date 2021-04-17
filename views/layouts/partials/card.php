<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;

?>
<div class="card bg-light mb-3">
    <div class="card-body">
        <a href="<?=Url::toRoute(['posts/view', 'id' => $post->id]) ?>"><h5 class="card-title"><?= $post->title ?></h5></a>
        <h6 class="card-subtitle mb-2 text-muted"><?= $post->short ?></h6>
        <p class="card-text"><?=StringHelper::truncate($post->content, 150)?></p>
        <a href="#" class="card-link"><?= $post->author() ?></a>
    </div>
</div>
