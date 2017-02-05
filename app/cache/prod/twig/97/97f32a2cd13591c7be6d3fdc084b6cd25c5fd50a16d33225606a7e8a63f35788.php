<?php

/* FMElfinderBundle:Elfinder:helper/assets_js.html.twig */
class __TwigTemplate_b70712a4b89d6a88b49fe12ca0e5c351d4b2b1fe05a7dad1e6efd8ec686c69b3 extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) ? $context["prefix"] : null) . "/jquery/jquery.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) ? $context["prefix"] : null) . "/jquery-ui/jquery-ui.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) ? $context["prefix"] : null) . "/elfinder/dist/js/elfinder.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((isset($context["prefix"]) ? $context["prefix"] : null) . "/elfinder/dist/js/i18n/elfinder.") . (isset($context["locale"]) ? $context["locale"] : null)) . ".js")), "html", null, true);
        echo "\"></script>
";
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
        return array (  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FMElfinderBundle:Elfinder:helper/assets_js.html.twig", "C:\\wamp\\www\\my_project_web\\vendor\\helios-ag\\fm-elfinder-bundle/Resources/views/Elfinder/helper/assets_js.html.twig");
    }
}
