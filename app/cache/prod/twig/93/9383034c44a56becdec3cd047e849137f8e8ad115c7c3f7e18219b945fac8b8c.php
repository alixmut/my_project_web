<?php

/* GudetamaFranceBundle:pages:index.html.twig */
class __TwigTemplate_f80d1d42f7511ef1d42cc8dec97507a15d1a3dcb389e69f39ee9d59e3750e4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("GudetamaFranceBundle::layout.html.twig", "GudetamaFranceBundle:pages:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'pagination' => array($this, 'block_pagination'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GudetamaFranceBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"grids\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 10
            echo "
<div class=\"grid\">
    <h3>  ";
            // line 12
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["video"], "filenamedb", array()), 20), "html", null, true);
            echo " </h3>
    <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gudetama_france_video_form", array("id" => $this->getAttribute($context["video"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("uploads/video/" . $this->getAttribute($context["video"], "filename", array())) . "/poster.jpg")), "html", null, true);
            echo "\" title=\"video-name\" /></a>
    <!-- <div class=\"time\">
        <span>00:10</span>
    </div>-->
    <div class=\"grid-info\">
        <!--<div class=\"video-share\">
            <ul>
                <li><a href=\"#\"><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/likes.png "), "html", null, true);
            echo "\" title=\"links\" /></a></li>
                <li><a href=\"#\"><img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/link.png "), "html", null, true);
            echo "\" title=\"Link\" /></a></li>
                <li><a href=\"#\"><img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/views.png "), "html", null, true);
            echo "\" title=\"Views\" /></a></li>
            </ul>
        </div>
        <!--<div class=\"video-watch\">
            <a href=\"single.html\">Regardez !</a>
        </div>-->
        <div class=\"clear\"> </div>
        <div class=\"lables\">
            <p>Catégorie:<a href=\"categories.html\">Catégorie</a></p>
        </div>
    </div>
</div>
        ";
            // line 34
            if ((($this->getAttribute($context["loop"], "index", array()) % 3) == 0)) {
                // line 35
                echo "            </div>
            <div class=\"clear\"> </div>
            <div class=\"grids\">
        ";
            }
            // line 39
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>
";
    }

    // line 43
    public function block_pagination($context, array $blocks = array())
    {
        // line 44
        echo "    <div class=\"navigation\">
        ";
        // line 45
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "GudetamaFranceBundle:pages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 45,  132 => 44,  129 => 43,  124 => 40,  110 => 39,  104 => 35,  102 => 34,  87 => 22,  83 => 21,  79 => 20,  67 => 13,  63 => 12,  59 => 10,  42 => 9,  39 => 8,  36 => 7,  30 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GudetamaFranceBundle:pages:index.html.twig", "C:\\wamp\\www\\my_project_web\\src\\GudetamaFranceBundle\\Resources\\views\\pages\\index.html.twig");
    }
}
