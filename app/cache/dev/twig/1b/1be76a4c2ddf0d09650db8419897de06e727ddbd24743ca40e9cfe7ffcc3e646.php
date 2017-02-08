<?php

/* FMElfinderBundle:Elfinder:helper/assets_js.html.twig */
class __TwigTemplate_e6938a02be1faa38150ab8646589059cb605eb26615266eec21aa4d1e2078234 extends Twig_Template
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
        $__internal_d92f3675d0fa00778440bcd13204e1a56f85322be29bfd39158942f5d9dfb1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92f3675d0fa00778440bcd13204e1a56f85322be29bfd39158942f5d9dfb1bc->enter($__internal_d92f3675d0fa00778440bcd13204e1a56f85322be29bfd39158942f5d9dfb1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:helper/assets_js.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "/jquery/jquery.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "/jquery-ui/jquery-ui.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "/elfinder/dist/js/elfinder.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "/elfinder/dist/js/i18n/elfinder.") . (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))) . ".js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d92f3675d0fa00778440bcd13204e1a56f85322be29bfd39158942f5d9dfb1bc->leave($__internal_d92f3675d0fa00778440bcd13204e1a56f85322be29bfd39158942f5d9dfb1bc_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:helper/assets_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ asset(\"#{prefix}/jquery/jquery.js\") }}\"></script>
<script src=\"{{ asset(\"#{prefix}/jquery-ui/jquery-ui.min.js\") }}\"></script>
<script src=\"{{ asset(\"#{prefix}/elfinder/dist/js/elfinder.min.js\") }}\"></script>
<script src=\"{{ asset(\"#{prefix}/elfinder/dist/js/i18n/elfinder.#{locale}.js\") }}\"></script>
", "FMElfinderBundle:Elfinder:helper/assets_js.html.twig", "C:\\wamp\\www\\my_project_web\\vendor\\helios-ag\\fm-elfinder-bundle/Resources/views/Elfinder/helper/assets_js.html.twig");
    }
}
