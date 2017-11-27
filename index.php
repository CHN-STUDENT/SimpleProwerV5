<?php
/**
 * WordPress主题ProwerV5 For Typecho
 * 
 * @package SimpleProwerV5
 * @author XiaZhanJian
 * @version 1.0
 * @link https://xiazhanjian.com
 * @原作者 摄氏度
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<?php while($this->next()): ?>
<div id="content">
<article id="post_list">
<section class="post">
	<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
	<p><?php $this->date('Y-m-d'); ?> &bull; <?php $this->category(','); ?> &bull; <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('没有评论', '1 条评论', '%d 条评论'); ?></a></p>
	<p><?php $this->content('阅读更多...'); ?></p>
	</section>
</article>
</div>
<?php endwhile; ?>
<?php $this->pageNav('<', '>','2', '...'); ?>
<?php $this->need('footer.php'); ?>
