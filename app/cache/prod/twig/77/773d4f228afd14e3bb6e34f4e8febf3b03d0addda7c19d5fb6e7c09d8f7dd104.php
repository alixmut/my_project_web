<?php

/* GudetamaFranceBundle::base.html.twig */
class __TwigTemplate_48ab561c18188e83c94eda647fe96bebe5171569bf08b12e83dd9e843379e5f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'pagination' => array($this, 'block_pagination'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
\t<head>
\t\t<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo " | Accueil :: </title>
\t\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/pageicon.png "), "html", null, true);
        echo "\" />

\t\t<meta name=\"keywords\" content=\"Videostube iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
\t\t
\t</head>
\t<body>
\t<!----start-wrap---->
\t<div class=\"wrap\">
\t\t<!----start-Header---->
\t\t<div class=\"header\">
\t\t\t<!----start-Logo---->
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"index.html\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo1.png "), "html", null, true);
        echo "\" title=\"logo\" /></a>
\t\t\t</div>
\t\t\t<!----End-Logo---->
\t\t\t<!----start-top-nav---->
\t\t\t";
        // line 33
        $this->displayBlock('navigation', $context, $blocks);
        // line 46
        echo "\t\t\t<!----End-top-nav---->
\t\t</div>
\t\t<!----End-Header---->
\t\t<div class=\"clear\"> </div>
\t\t<div class=\"content\">
\t\t\t<div class=\"left-content\">
\t\t\t\t<div class=\"searchbar\">
\t\t\t\t\t<div class=\"search-left\">
\t\t\t\t\t\t<p>Dernières vidéos de Gudetama France</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"search-right\">
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<input type=\"text\"><input type=\"submit\" value=\"\" />
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"box\">
\t\t\t\t\t";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 285
        echo "\t\t\t\t<div class=\"clear\"> </div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"clear\"> </div>

\t\t\t<ul class=\"dc_pagination dc_paginationA dc_paginationA03\">
                ";
        // line 291
        $this->displayBlock('pagination', $context, $blocks);
        // line 302
        echo "\t\t\t\t\t\t</ul>



\t\t\t<div class=\"clear\"> </div>
\t\t</div>
\t\t<div class=\"right-content\">
\t\t\t<div class=\"popular\">
\t\t\t\t<h3>Popular Videos</h3>
\t\t\t\t<div class=\"clear\"> </div>
\t\t\t</div>
\t\t\t<div class=\"grid1\">
\t\t\t\t\t\t<h3>Consectetur adipisicing elit</h3>
\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g7.jpg"), "html", null, true);
        echo "\" title=\"video-name\" /></a>
\t\t\t\t\t\t<div class=\"time1\">
\t\t\t\t\t\t\t<span>2:50</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"grid-info\">
\t\t\t\t\t\t\t<div class=\"lables\">
\t\t\t\t\t\t\t\t<p>Categorie: <a href=\"#\">Categorie</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t<div class=\"Recent-Vodeos\">
\t\t\t\t\t\t<h3>Recent-Videos</h3>
\t\t\t\t\t\t<div class=\"video1\">
\t\t\t\t\t\t\t<img src=\"images/r1.jpg\" title=\"video2\" />
\t\t\t\t\t\t\t<span>Lorem ipsum dolor sit amet,</span>
\t\t\t\t\t\t\t<p>s consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"video1 video2\">
\t\t\t\t\t\t\t<img src=\"images/r2.jpg\" title=\"video2\" />
\t\t\t\t\t\t\t<span>Lorem ipsum dolor sit amet,</span>
\t\t\t\t\t\t\t<p>s consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"r-all\">
\t\t\t\t\t\t\t<a href=\"#\">View All</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"clear\"> </div>
\t\t</div>
\t\t<div class=\"clear\"> </div>
\t\t</div>
\t\t<div class=\"footer\">
\t\t\t";
        // line 351
        $this->displayBlock('footer', $context, $blocks);
        // line 414
        echo "\t\t</div>
\t\t\t<div class=\"clear\"> </div>
\t\t\t<div class=\"copy-right\">
\t\t\t<p>&#169 2017 All rights Reserved | Design by &nbsp;Projet web</p>
\t\t</div>
\t</div>
\t<!----End-wrap---->
\t";
        // line 421
        $this->displayBlock('javascripts', $context, $blocks);
        // line 424
        echo "
\t</body>
</html>

";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Title here ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "
\t\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"  media=\"all\" />
\t\t\t<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>

        ";
    }

    // line 33
    public function block_navigation($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t<div class=\"top-nav\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gudetama_france_homepage");
        echo "\">Accueil</a><p>Gudetama</p></li>
\t\t\t\t\t<li><a href=\"categories.html\">Categories</a><p>Recherchez</p></li>
\t\t\t\t\t<li><a href=\"categories.html\">Sous-titre</a><p>Parcourir</p></li>
\t\t\t\t\t<li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gudetama_france_upload_subtitle");
        echo "\">Ajouter</a><p>Video/sous-titre</p></li>
\t\t\t\t\t<li><a href=\"#\">Mon compte</a><p>Mes informations</p></li>
\t\t\t\t\t<li><a href=\"contact.html\">Contact</a><p>Laissez un message</p></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clear\"> </div>
\t\t\t";
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "\t\t\t\t<div class=\"grids\">

\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t<h3>Consectetur adipisicing elit</h3>
\t\t\t\t\t\t<a href=\"single.html\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g1 copy.png "), "html", null, true);
        echo "\" title=\"video-name\" /></a>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t<span>00:10</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid-info\">
\t\t\t\t\t\t\t<div class=\"video-share\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/likes.png "), "html", null, true);
        echo "\" title=\"links\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/link.png "), "html", null, true);
        echo "\" title=\"Link\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/views.png "), "html", null, true);
        echo "\" title=\"Views\" /></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"video-watch\">
\t\t\t\t\t\t\t\t<a href=\"single.html\">Watch Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t<div class=\"lables\">
\t\t\t\t\t\t\t\t<p>Labels:<a href=\"categories.html\">Lorem</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t<h3>Consectetur adipisicing elit</h3>
\t\t\t\t\t\t<a href=\"single.html\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g2 copy.png "), "html", null, true);
        echo "\" title=\"video-name\" /></a>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t<span>2:10</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid-info\">
\t\t\t\t\t\t\t<div class=\"video-share\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/likes.png "), "html", null, true);
        echo "\" title=\"links\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/link.png "), "html", null, true);
        echo "\" title=\"Link\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/views.png "), "html", null, true);
        echo "\" title=\"Views\" /></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"video-watch\">
\t\t\t\t\t\t\t\t<a href=\"single.html\">Watch Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t<div class=\"lables\">
\t\t\t\t\t\t\t\t<p>Labels:<a href=\"categories.html\">Lorem</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t<h3>Consectetur adipisicing elit</h3>
\t\t\t\t\t\t<a href=\"single.html\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g4.jpg "), "html", null, true);
        echo "\" title=\"video-name\" /></a>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t<span>10:10</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid-info\">
\t\t\t\t\t\t\t<div class=\"video-share\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/likes.png "), "html", null, true);
        echo "\" title=\"links\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/link.png "), "html", null, true);
        echo "\" title=\"Link\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/views.png "), "html", null, true);
        echo "\" title=\"Views\" /></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"video-watch\">
\t\t\t\t\t\t\t\t<a href=\"single.html\">Watch Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t<div class=\"lables\">
\t\t\t\t\t\t\t\t<p>Labels:<a href=\"categories.html\">Lorem</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t<div class=\"grids\">
\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t<h3>Consectetur adipisicing elit</h3>
\t\t\t\t\t\t<a href=\"single.html\"><img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g3.jpg "), "html", null, true);
        echo "\" title=\"video-name\" /></a>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t<span>2:30</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid-info\">
\t\t\t\t\t\t\t<div class=\"video-share\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/likes.png "), "html", null, true);
        echo "\" title=\"links\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/link.png "), "html", null, true);
        echo "\" title=\"Link\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/views.png "), "html", null, true);
        echo "\" title=\"Views\" /></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"video-watch\">
\t\t\t\t\t\t\t\t<a href=\"single.html\">Watch Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t<div class=\"lables\">
\t\t\t\t\t\t\t\t<p>Labels:<a href=\"categories.html\">Lorem</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t<h3>Consectetur adipisicing elit</h3>
\t\t\t\t\t\t<a href=\"single.html\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g5.jpg "), "html", null, true);
        echo "\" title=\"video-name\" /></a>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t<span>5:10</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid-info\">
\t\t\t\t\t\t\t<div class=\"video-share\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/likes.png "), "html", null, true);
        echo "\" title=\"links\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/link.png "), "html", null, true);
        echo "\" title=\"Link\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/views.png "), "html", null, true);
        echo "\" title=\"Views\" /></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"video-watch\">
\t\t\t\t\t\t\t\t<a href=\"single.html\">Watch Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t<div class=\"lables\">
\t\t\t\t\t\t\t\t<p>Labels:<a href=\"categories.html\">Lorem</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t<h3>Consectetur adipisicing elit</h3>
\t\t\t\t\t\t<a href=\"single.html\"><img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g4.jpg "), "html", null, true);
        echo "\" title=\"video-name\" /></a>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t<span>2:00</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid-info\">
\t\t\t\t\t\t\t<div class=\"video-share\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/likes.png "), "html", null, true);
        echo "\" title=\"links\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/link.png "), "html", null, true);
        echo "\" title=\"Link\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/views.png "), "html", null, true);
        echo "\" title=\"Views\" /></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"video-watch\">
\t\t\t\t\t\t\t\t<a href=\"single.html\">Watch Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t<div class=\"lables\">
\t\t\t\t\t\t\t\t<p>Labels:<a href=\"categories.html\">Lorem</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t<div class=\"grids\">
\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t<h3>Consectetur adipisicing elit</h3>
\t\t\t\t\t\t<a href=\"single.html\"><img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g6.jpg "), "html", null, true);
        echo "\" title=\"video-name\" /></a>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t<span>12:10</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid-info\">
\t\t\t\t\t\t\t<div class=\"video-share\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/likes.png "), "html", null, true);
        echo "\" title=\"links\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/link.png "), "html", null, true);
        echo "\" title=\"Link\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/views.png "), "html", null, true);
        echo "\" title=\"Views\" /></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"video-watch\">
\t\t\t\t\t\t\t\t<a href=\"single.html\">Watch Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t<div class=\"lables\">
\t\t\t\t\t\t\t\t<p>Labels:<a href=\"categories.html\">Lorem</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t<h3>Consectetur adipisicing elit</h3>
\t\t\t\t\t\t<a href=\"single.html\"><img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g7.jpg "), "html", null, true);
        echo "\" title=\"video-name\" /></a>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t<span>20:10</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid-info\">
\t\t\t\t\t\t\t<div class=\"video-share\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/likes.png "), "html", null, true);
        echo "\" title=\"links\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/link.png "), "html", null, true);
        echo "\" title=\"Link\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/views.png "), "html", null, true);
        echo "\" title=\"Views\" /></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"video-watch\">
\t\t\t\t\t\t\t\t<a href=\"single.html\">Watch Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t<div class=\"lables\">
\t\t\t\t\t\t\t\t<p>Labels:<a href=\"categories.html\">Lorem</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"grid\">
\t\t\t\t\t\t<h3>Consectetur adipisicing elit</h3>
\t\t\t\t\t\t<a href=\"single.html\"><img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/g8.jpg "), "html", null, true);
        echo "\" title=\"video-name\" /></a>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t<span>2:50</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid-info\">
\t\t\t\t\t\t\t<div class=\"video-share\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/likes.png "), "html", null, true);
        echo "\" title=\"links\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/link.png "), "html", null, true);
        echo "\" title=\"Link\" /></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/views.png "), "html", null, true);
        echo "\" title=\"Views\" /></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"video-watch\">
\t\t\t\t\t\t\t\t<a href=\"single.html\">Watch Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t<div class=\"lables\">
\t\t\t\t\t\t\t\t<p>Labels:<a href=\"categories.html\">Lorem</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
                    ";
    }

    // line 291
    public function block_pagination($context, array $blocks = array())
    {
        // line 292
        echo "\t\t\t\t\t\t  <li><a href=\"#\" class=\"first\">First</a></li>
\t\t\t\t\t\t  <li><a href=\"#\" class=\"previous\">Previous</a></li>
\t\t\t\t\t\t  <li><a href=\"#\">1</a></li>
\t\t\t\t\t\t  <li><a href=\"#\">2</a></li>
\t\t\t\t\t\t  <li><a href=\"#\" class=\"current\">3</a></li>
\t\t\t\t\t\t  <li><a href=\"#\">4</a></li>
\t\t\t\t\t\t  <li><a href=\"#\">5</a></li>
\t\t\t\t\t\t  <li><a href=\"#\" class=\"next\">Next</a></li>
\t\t\t\t\t\t  <li><a href=\"#\" class=\"last\">Last</a></li>
                ";
    }

    // line 351
    public function block_footer($context, array $blocks = array())
    {
        // line 352
        echo "\t\t\t\t<div class=\"wrap\"> 
\t\t\t\t<div class=\"box1\">
\t\t\t\t<h4>Ur's Account</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">My Channel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Subscribtion</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Locations</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Favorites</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Add</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Ur-specials</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Submission Rules</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"box1\">
\t\t\t\t<h4>Policy & Terms</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Terms & Conditions</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Submission Rules</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Company Buzz</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">My Staff</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Moodle Hosting</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">OpenCart Hosting</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"box1\">
\t\t\t\t<h4>Community</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Standard Support</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Premier Support</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Support Center</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Host Affiliate</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Infographics</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">indian Hosting</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Green Web Hosting</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"box1\">
\t\t\t\t\t<div class=\"hide-box\">
\t\t\t\t<h4>About Us</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Terms of Service</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Blog</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Guarantee</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Link to Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">We're Hiring</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"box1\">
\t\t\t\t<h4>Stay in touch on</h4>
\t\t\t\t\t\t<ul class=\"social\">
\t\t\t\t\t\t\t<li><img src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" title=\"facebook\"><a href=\"#\">Facebook</a></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" title=\"twitter\"><a href=\"#\">Twitter</a></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gplus.png"), "html", null, true);
        echo "\" title=\"google+\"><a href=\"#\">Google+</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"> </div>
\t\t\t</div>
\t\t\t";
    }

    // line 421
    public function block_javascripts($context, array $blocks = array())
    {
        // line 422
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "GudetamaFranceBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  649 => 422,  646 => 421,  636 => 408,  632 => 407,  628 => 406,  572 => 352,  569 => 351,  556 => 292,  553 => 291,  534 => 270,  530 => 269,  526 => 268,  516 => 261,  499 => 247,  495 => 246,  491 => 245,  481 => 238,  464 => 224,  460 => 223,  456 => 222,  446 => 215,  426 => 198,  422 => 197,  418 => 196,  408 => 189,  391 => 175,  387 => 174,  383 => 173,  373 => 166,  356 => 152,  352 => 151,  348 => 150,  338 => 143,  317 => 125,  313 => 124,  309 => 123,  299 => 116,  282 => 102,  278 => 101,  274 => 100,  264 => 93,  247 => 79,  243 => 78,  239 => 77,  229 => 70,  223 => 66,  220 => 65,  209 => 39,  203 => 36,  199 => 34,  196 => 33,  188 => 13,  185 => 12,  182 => 11,  176 => 10,  168 => 424,  166 => 421,  157 => 414,  155 => 351,  116 => 315,  101 => 302,  99 => 291,  91 => 285,  89 => 65,  68 => 46,  66 => 33,  59 => 29,  43 => 17,  41 => 11,  37 => 10,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GudetamaFranceBundle::base.html.twig", "C:\\wamp\\www\\my_project_web\\src\\GudetamaFranceBundle\\Resources\\views\\base.html.twig");
    }
}
