<div class="container">
    <?php foreach($article as $one):?>
        <div class="item">
            <span><?=$one['date']?></span>
            <strong><a href="/article/<?=$one['id']?>"><?=$one['title']?></a></strong>
            <div><?=$one['content']?></div>
        </div>
        <hr>
    <? endforeach ?>        
</div>