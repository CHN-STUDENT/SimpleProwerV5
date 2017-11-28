<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php    
   /**  
    * archive
    * @package custom   
    */ 
	Typecho_Widget::widget('Widget_Stat')->to($stat);
?> 

<?php $this->need('header.php'); ?>
<div id="content">
<section class="post">
<span class="archive-move-on"></span>
<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
	$year=0; $mon=0; $i=0; $j=0;   
	$output = '<span class="archive-page-counter"><h2>目前共计 '.$stat->publishedPostsNum.' 篇日志。</h2><ul></span>';   
	while($archives->next()):
	$year_tmp = date('Y',$archives->created);
	$mon_tmp = date('m',$archives->created);
	$y=$year; $m=$mon;
	if ($year != $year_tmp) {$year = $year_tmp;}//输出年份
             //输出文章日期和标题   
    $output .='<li><time class="post-time" itemprop="dateCreated" content="'.date('Y-m-d',$archives->created).'">'.date('Y-m-d',$archives->created).'</time>'." ".'<a class="post-title-link" href="'.$archives->permalink .'" itemprop="url"><span itemprop="name">'. $archives->title .'</span></a></li>';
    endwhile;   
    echo $output;   
?>
</ul>
</section>
</div>
<?php $this->need('footer.php'); ?>
