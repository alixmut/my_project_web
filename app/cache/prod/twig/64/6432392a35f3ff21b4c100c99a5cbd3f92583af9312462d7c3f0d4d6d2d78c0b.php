<?php

/* @GudetamaFrance/youtube/youtube.html.twig */
class __TwigTemplate_693e91edf13e2c34d6faca877b35d77db7a38a5370939131c23f649b5fee2a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Page header, body, etc -->
<h3>Video List</h3>
<ul>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["youtube_videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 5
            echo "<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "title", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_id", array()), "html", null, true);
            echo ")</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
<h3>Channels list</h3>
<ul>
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["youtube_channels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 11
            echo "<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "title", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "channel_id", array()), "html", null, true);
            echo ")</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
<h3>Playlists</h3>
<ul>
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["youtube_playlists"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["playlist"]) {
            // line 17
            echo "<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["playlist"], "title", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["playlist"], "playlist_id", array()), "html", null, true);
            echo ")</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['playlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>
<!-- Some other html code for the page -->";
    }

    public function getTemplateName()
    {
        return "@GudetamaFrance/youtube/youtube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  68 => 17,  64 => 16,  59 => 13,  48 => 11,  44 => 10,  39 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GudetamaFrance/youtube/youtube.html.twig", "C:\\wamp\\www\\my_project_web\\src\\GudetamaFranceBundle\\Resources\\views\\youtube\\youtube.html.twig");
    }
}
