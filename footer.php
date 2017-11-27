<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>

</div>
	</div>
<footer id="footer">
</br>
&copy; <?php _e(date('Y')) ?> <a href="<?php $this->options->siteurl(); ?>"><?php $this->options->title(); ?></a> | Powered by <a href="http://www.typecho.org" target="_blank">Typecho)))</a>
<?php if($this->options->miibeian) : ?>
<br><a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow"><?php echo $this->options->miibeian; ?></a>
<?php endif; ?>
</footer>
<?php $this->footer(); ?>
</div>
</body>
</html>
