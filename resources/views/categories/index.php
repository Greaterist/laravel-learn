<style>
   a {
    text-decoration: none;
    color: inherit;
   }
   a div:hover {
    background-color: #909090; 
   } 

  </style>


<?php foreach($categoriesList as $key => $categories):?>
    <a href="<?=route('categories.show', ['id'=>$key])?>">
        <div>
        <h1><?=$categories['category_id']?></h1>
    </div></a>
    
<?php endforeach; ?>