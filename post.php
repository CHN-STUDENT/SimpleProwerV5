<?php 
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>
<div id="content">
<article id="post_list">
<section class="post">
	<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
	<small class="meta"><?php $this->date('Y-m-d'); ?> &bull; <?php $this->category(','); ?> &bull; <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('没有评论', '1 条评论', '%d 条评论'); ?></a></small>
	<p><?php $this->content(''); ?></p>
	</section>
</article>
</div>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
