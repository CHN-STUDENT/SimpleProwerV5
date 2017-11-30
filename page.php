<?php 
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>
<div id="content">
<article id="post_list">
  <section class="post">
	<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
	<div class="post-meta"><?php $this->date('Y-m-d'); ?> &bull; <?php $this->category(','); ?> &bull; <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('没有评论', '1 条评论', '%d 条评论'); ?></a></div>
	<div class="post-content"><?php $this->content('阅读更多...'); ?></div>
  </section>
</article>
<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>
