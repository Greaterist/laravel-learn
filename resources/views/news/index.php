<style>
   a {
    text-decoration: none;
    color: inherit;
   }
   a div:hover {
    background-color: #909090; 
   } 

  </style>


<?php foreach($newsList as $key => $news):?>
    <a href="<?=route('news.show', ['id'=>$key])?>">
        <div>
        <h1><?=$news['title']?></h1>
        <p>category id:<?=$news['category_id']?></p>
        <p><?=$news['author']?> - <?=$news['created_at']->format('d-m-Y H:i')?></p>
    </div></a>
    
<?php endforeach; ?>