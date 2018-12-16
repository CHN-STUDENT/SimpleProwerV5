<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php    
   
    //TODO:先使用PHP定义变量实现，后期使用自定义主题实现
    $x=2;
    /**  
    * archive2
    * @package custom   
    */ 
    Typecho_Widget::widget('Widget_Stat')->to($stat);
?> 

<?php $this->need('header.php'); ?>
<div id="content">
<section class="post">
<span class="archive-move-on"></span>
<?php 
    $all=($stat->publishedPostsNum);
    //页数=向上取整（总归档数/每页文章数)；
    $pages=ceil($all/$x);
    
    //echo '<p>'.$pages.'</p>';
    
    $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
	//$year=0; $mon=0; $i=0; $j=0;   
    $output = '<span class="archive-page-counter"><h2>目前共计 '.$stat->publishedPostsNum.' 篇日志。</h2><ul></span>';   
    $count=0;
    $i=1;
    while($archives->next()):
        if($count%$x==0) {
            if($count==0) {
                $output.='<div id="archive page '.$i.'" class="archive" >';
            } else if($count!=0) {
                $output.='</div>';
                $output.='<div id="archive page '.$i.'" class="archive" style="display:none;">';
            }
           $i++;
        } 
        $output .='<li><time class="post-time" itemprop="dateCreated" content="'.date('Y-m-d',$archives->created).'">'.date('Y-m-d',$archives->created).'</time>'." ".'<a class="post-title-link" href="'.$archives->permalink .'" itemprop="url"><span itemprop="name">'. $archives->title .'</span></a></li>';

        $count++;
    endwhile;   
    $output.='</div>';
    echo $output;
    printNav($pages);
?>

</section>
</div>
<?php  
    function printNav($pages) {
        $script='<script type=\'text/javascript\'>';
        $output='<ol class="page-navigator" style="margin-left: 0px;">';
        $script.='page1();';
        for($i=1;$i<=$pages;$i++) {
            $output.='<li id="page'.$i.'" >';
            $script.='function page'.$i.'(){var elems=document.getElementsByClassName("archive");for(var i=0;i<elems.length;i+=1){elems[i].style.display="none";};document.getElementById("archive page '.$i.'").style.display="inline";';
            $script.='var current=document.getElementsByClassName("current");for(var i=0;i<current.length;i+=1){current[i].setAttribute("class","")};';
            $script.='document.getElementById("page'.$i.'").className="current";';
            $output.='<a href="javascript:void(0)" onclick="page'.$i.'()">'.$i.'</a></li>';
            $script.='}';
        }
        $output.='</ol>';
        $script.='</script>';
        echo $output;
        echo $script;
    }
?>
<?php $this->need('footer.php'); ?>
