<?php foreach ($news as $news_item): ?>

  <h2><?php echo $news_item['title'] ?></h2>
  <div class="main">
      <?php echo $news_item['text'] ?>
  </div>
  <p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>

<p><a href="<?php echo base_url("news/create"); ?>">Create a news item</a></p>
