<!DOCTYPE html>
<html>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<meta name="viewport" content="width=device-width,user-scalable=no">
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
<link rel="shortcut icon" href="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
<!–[if IE]>
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<![endif]–>
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&rss1=&rss2=&atom='); ?>
</head>
<body>
<div id="top">
<header id="header">
	<div id="logo">
		<h1>
			<a href="<?php $this->options->siteUrl(); ?>">
				<?php if ($this->options->logoUrl): ?>
				<img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
				<?php else : ?>
					<?php $this->options->title() ?>
				<?php endif; ?>
			</a>
		</h1>
		<h2><?php $this->options->description() ?></h2>
	</div>
</header>
</div>
<div id="wrap">
    <nav id="nav">
        <ul id="menu">
            <li<?php if($this->is('index')): ?> class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
			<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?> 
			<?php while($pages->next()): ?>
			<li<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
			<?php endwhile; ?>
        </ul>
		<div id="toolbar">
		<div id="rss"><a href="<?php $this->options->feedUrl(); ?>" title="RSS Feed">RSS</a></div>
        <form id="searchform" method="post" action="<?php $this->options->siteUrl(); ?>">
            <input type="text" name="s" class="text" size="20" required />
            <button type="submit">搜索</button>
        </form>
		</div>
    </nav>
