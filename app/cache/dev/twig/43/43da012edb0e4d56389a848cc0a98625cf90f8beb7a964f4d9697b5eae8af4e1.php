<?php

/* FMElfinderBundle:Elfinder:helper/assets_css.html.twig */
class __TwigTemplate_ab4fa7caa636c65c18ce93a6faf0bb80cc03077f6465e9edeab1ee7474ee1cba extends Twig_Template
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
        $__internal_108063d4d27eee445bc6c4ae4915d969f2ab452b1584f6f6671d76090babd305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108063d4d27eee445bc6c4ae4915d969f2ab452b1584f6f6671d76090babd305->enter($__internal_108063d4d27eee445bc6c4ae4915d969f2ab452b1584f6f6671d76090babd305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:helper/assets_css.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "/jquery-ui/themes/") . (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme"))) . "/jquery-ui.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "/elfinder/dist/css/elfinder.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "/elfinder/themes/moono/css/theme.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


";
        
        $__internal_108063d4d27eee445bc6c4ae4915d969f2ab452b1584f6f6671d76090babd305->leave($__internal_108063d4d27eee445bc6c4ae4915d969f2ab452b1584f6f6671d76090babd305_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:helper/assets_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ asset(\"#{prefix}/jquery-ui/themes/#{theme}/jquery-ui.min.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"{{ asset(\"#{prefix}/elfinder/dist/css/elfinder.min.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"{{ asset(\"#{prefix}/elfinder/themes/moono/css/theme.css\") }}\" rel=\"stylesheet\" type=\"text/css\">


", "FMElfinderBundle:Elfinder:helper/assets_css.html.twig", "C:\\wamp\\www\\my_project_web\\vendor\\helios-ag\\fm-elfinder-bundle/Resources/views/Elfinder/helper/assets_css.html.twig");
    }
}
