<?php

/* FMElfinderBundle:Elfinder:helper/assets_js.html.twig */
class __TwigTemplate_82521762bedab1f829d8f4c7f30e75fa0beaaeceb6cea9d4015ec22302970fe3 extends Twig_Template
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
        $__internal_a07fde5a76696a352f0164b6f663bd4eb7b002942a802a7655685cfc151c19cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07fde5a76696a352f0164b6f663bd4eb7b002942a802a7655685cfc151c19cc->enter($__internal_a07fde5a76696a352f0164b6f663bd4eb7b002942a802a7655685cfc151c19cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:helper/assets_js.html.twig"));

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
        
        $__internal_a07fde5a76696a352f0164b6f663bd4eb7b002942a802a7655685cfc151c19cc->leave($__internal_a07fde5a76696a352f0164b6f663bd4eb7b002942a802a7655685cfc151c19cc_prof);

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
", "FMElfinderBundle:Elfinder:helper/assets_js.html.twig", "C:\\wamp\\www\\my_project_web_test\\vendor\\helios-ag\\fm-elfinder-bundle/Resources/views/Elfinder/helper/assets_js.html.twig");
    }
}
