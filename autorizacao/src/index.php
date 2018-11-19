<?php

function __autoload($classe)
{
    if (file_exists('classes/dao/' . $classe . '.php')) {
        include_once 'classes/dao/' . $classe . '.php';
    } else if (file_exists('classes/model/' . $classe . '.php')) {
        include_once 'classes/model/' . $classe . '.php';
    } else if (file_exists('classes/controller/' . $classe . '.php')) {
        include_once 'classes/controller/' . $classe . '.php';
    } else if (file_exists('classes/util/' . $classe . '.php')) {
        include_once 'classes/util/' . $classe . '.php';
    } else if (file_exists('classes/view/' . $classe . '.php')) {
        include_once 'classes/view/' . $classe . '.php';
    }
}
$sessao = new Sessao();

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="pt-BR">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="pt-BR">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="pt-BR">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>mourão e companhia</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="http://blog.mouraoecompanhia.com.br/xmlrpc.php">
	<!--[if lt IE 9]>
	<script src="http://blog.mouraoecompanhia.com.br/wp-content/themes/twentyfourteen/js/html5.js"></script>
	<![endif]-->
	<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
<link rel="alternate" type="application/rss+xml" title="Feed para mourão e companhia &raquo;" href="http://blog.mouraoecompanhia.com.br/feed/" />
<link rel="alternate" type="application/rss+xml" title="Feed de comentários para mourão e companhia &raquo;" href="http://blog.mouraoecompanhia.com.br/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/blog.mouraoecompanhia.com.br\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
input {
	width: 70% !important;
}

.foto {
	background-color: #FF0000;
	float: right;
	display: block;
	border: solid;
}
</style>
<link rel='stylesheet' id='twentyfourteen-lato-css'  href='https://fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C900%2C300italic%2C400italic%2C700italic&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='genericons-css'  href='http://blog.mouraoecompanhia.com.br/wp-content/themes/twentyfourteen/genericons/genericons.css?ver=3.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='twentyfourteen-style-css'  href='http://blog.mouraoecompanhia.com.br/wp-content/themes/twentyfourteen/style.css?ver=4.9.8' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='twentyfourteen-ie-css'  href='http://blog.mouraoecompanhia.com.br/wp-content/themes/twentyfourteen/css/ie.css?ver=20131205' type='text/css' media='all' />
<![endif]-->
<script type='text/javascript' src='http://blog.mouraoecompanhia.com.br/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://blog.mouraoecompanhia.com.br/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='http://blog.mouraoecompanhia.com.br/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://blog.mouraoecompanhia.com.br/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://blog.mouraoecompanhia.com.br/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.8" />
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
				<style type="text/css" id="twentyfourteen-header-css">
				.site-title a {
			color: #ffffff;
		}
		</style>
	</head>

<body class="home blog masthead-fixed list-view grid">
<div id="page" class="hfeed site">
	
	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="http://blog.mouraoecompanhia.com.br/" rel="home">mourão e companhia</a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container">Pesquisar</a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle">Menu principal</button>
				<a class="screen-reader-text skip-link" href="#content">Pular para o conteúdo</a>
				<div class="menu-cadastre-se-container"><ul id="primary-menu" class="nav-menu"><li id="menu-item-105" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-105"><a href="http://blog.mouraoecompanhia.com.br/autorizacao">Faça seu cadastro</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-121"><a href="http://blog.mouraoecompanhia.com.br">Início</a></li>
</ul></div>			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<form role="search" method="get" class="search-form" action="http://blog.mouraoecompanhia.com.br/">
				<label>
					<span class="screen-reader-text">Pesquisar por:</span>
					<input type="search" class="search-field" placeholder="Pesquisar &hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Pesquisar" />
			</form>			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">

<div id="main-content" class="main-content">


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		
<article id="post-107" class="post-107 post type-post status-publish format-standard hentry category-sem-categoria">
	<header class="entry-header">
		<h1 class="entry-title">
		<a href="http://blog.mouraoecompanhia.com.br/2018/11/07/a-grande-arvore-da-familia-mourao-no-ceara-e-algumas-ramificacoes/" rel="bookmark">Formulário de Cadastro</a></h1>
		<div class="entry-meta">
			
					</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<div class="entry-content">
	<?php

$controller = new PessoaController();
switch ($sessao->getNivelAcesso()) {
    case Sessao::NIVEL_DESLOGADO:
        $controller->cadastrar();
        break;
    case Sessao::NIVEL_COMUM:
        $pessoa = new Pessoa();
        echo '<h2>Minha Ficha</h2>';
        $pessoa->setId($sessao->getIdUsuario());
        $controller->ficha($pessoa);
        break;
    case Sessao::NIVEL_ADMIN:
        if (isset($_GET['idpessoa'])) {
            $pessoa = new Pessoa();
            $pessoa->setId($_GET['idpessoa']);
            $controller->ficha($pessoa);
        } else {
            $controller->listar();
        }
        
        break;
    default:
        $controller->cadastrar();
        break;
}

?>

	</div>
	</article><!-- #post-## -->


		</div><!-- #content -->
	</div><!-- #primary -->

</div><!-- #main-content -->

<div id="secondary">
	
	
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<aside id="media_gallery-3" class="widget widget_media_gallery"><h1 class="widget-title">Jeronymo da Silva Mourão e Thereza Amélia Ximenes de Farias</h1><div id='gallery-1' class='gallery galleryid-33 gallery-columns-3 gallery-size-thumbnail'><figure class='gallery-item'>
			<div class='gallery-icon portrait'>
				<a href='http://blog.mouraoecompanhia.com.br/jeronymo-da-silva-mourao/'><img width="150" height="150" src="http://blog.mouraoecompanhia.com.br/wp-content/uploads/2018/09/jeronymo-da-silva-mourão-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" aria-describedby="gallery-1-51" srcset="http://blog.mouraoecompanhia.com.br/wp-content/uploads/2018/09/jeronymo-da-silva-mourão-150x150.jpg 150w, http://blog.mouraoecompanhia.com.br/wp-content/uploads/2018/09/jeronymo-da-silva-mourão-450x450.jpg 450w" sizes="(max-width: 150px) 100vw, 150px" /></a>
			</div>
				<figcaption class='wp-caption-text gallery-caption' id='gallery-1-51'>
				Jeronymo da Silva Mourão
				</figcaption></figure><figure class='gallery-item'>
			<div class='gallery-icon portrait'>
				<a href='http://blog.mouraoecompanhia.com.br/thereza-amelia-ximenes-de-farias/'><img width="150" height="150" src="http://blog.mouraoecompanhia.com.br/wp-content/uploads/2018/09/thereza-amélia-ximenes-de-farias-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" aria-describedby="gallery-1-52" srcset="http://blog.mouraoecompanhia.com.br/wp-content/uploads/2018/09/thereza-amélia-ximenes-de-farias-150x150.jpg 150w, http://blog.mouraoecompanhia.com.br/wp-content/uploads/2018/09/thereza-amélia-ximenes-de-farias-450x450.jpg 450w" sizes="(max-width: 150px) 100vw, 150px" /></a>
			</div>
				<figcaption class='wp-caption-text gallery-caption' id='gallery-1-52'>
				Thereza Amélia Ximenes de Farias
				</figcaption></figure>
		</div>
</aside>		<aside id="recent-posts-2" class="widget widget_recent_entries">		<h1 class="widget-title">Posts recentes</h1>		<ul>
											<li>
					<a href="http://blog.mouraoecompanhia.com.br/2018/11/07/a-grande-arvore-da-familia-mourao-no-ceara-e-algumas-ramificacoes/">a grande árvore da família mourão no ceará e algumas ramificações</a>
									</li>
											<li>
					<a href="http://blog.mouraoecompanhia.com.br/2018/09/10/vista-vila-real-portugal/">(sem título)</a>
									</li>
											<li>
					<a href="http://blog.mouraoecompanhia.com.br/2018/09/10/vila-igarassu-pernambuco/">(sem título)</a>
									</li>
					</ul>
		</aside><aside id="recent-comments-2" class="widget widget_recent_comments"><h1 class="widget-title">Comentários</h1><ul id="recentcomments"><li class="recentcomments"><span class="comment-author-link">Jefferson Uchôa Ponte</span> em <a href="http://blog.mouraoecompanhia.com.br/2018/11/07/a-grande-arvore-da-familia-mourao-no-ceara-e-algumas-ramificacoes/#comment-45">a grande árvore da família mourão no ceará e algumas ramificações</a></li></ul></aside><aside id="categories-2" class="widget widget_categories"><h1 class="widget-title">Categorias</h1>		<ul>
	<li class="cat-item cat-item-1"><a href="http://blog.mouraoecompanhia.com.br/category/sem-categoria/" >Sem categoria</a>
</li>
		</ul>
</aside>	</div><!-- #primary-sidebar -->
	</div><!-- #secondary -->

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			
			<div class="site-info">
												<a href="https://br.wordpress.org/" class="imprint">
					Orgulhosamente mantido com WordPress				</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<script type='text/javascript' src='http://blog.mouraoecompanhia.com.br/wp-content/themes/twentyfourteen/js/functions.js?ver=20150315'></script>
<script type='text/javascript' src='http://blog.mouraoecompanhia.com.br/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>
</body>
</html>
