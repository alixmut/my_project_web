<?php

/* FMElfinderBundle:Elfinder:helper/assets_css.html.twig */
class __TwigTemplate_fcb72e23cdc50651389be5db5d879e14b4c53771d86b93efc5828030e5ec5dcf extends Twig_Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((isset($context["prefix"]) ? $context["prefix"] : null) . "/jquery-ui/themes/") . (isset($context["theme"]) ? $context["theme"] : null)) . "/jquery-ui.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) ? $context["prefix"] : null) . "/elfinder/dist/css/elfinder.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) ? $context["prefix"] : null) . "/elfinder/themes/moono/css/theme.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


";
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
        return array (  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FMElfinderBundle:Elfinder:helper/assets_css.html.twig", "C:\\wamp\\www\\my_project_web\\vendor\\helios-ag\\fm-elfinder-bundle/Resources/views/Elfinder/helper/assets_css.html.twig");
    }
}
