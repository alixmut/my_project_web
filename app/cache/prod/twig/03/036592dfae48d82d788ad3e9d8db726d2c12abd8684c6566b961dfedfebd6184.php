<?php

/* FMElfinderBundle:Elfinder/helper:_summernote.html.twig */
class __TwigTemplate_b92048198d5eae53a6c50ca7e987a38d83744c89cd9d810be5930388caa944b3 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    function elFinderBrowser(){
            window.open(
                \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("elfinder", array("instance" => ($context["instance"] ?? null))), "html", null, true);
        echo "\",
                \"\",
                \"width=";
        // line 6
        echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
        echo ", height=";
        echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
        echo ", resizable=yes, scrollbars=no, status=no, toolbar=no\"
            );
            return false;
        }
</script>

";
    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/helper:_summernote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FMElfinderBundle:Elfinder/helper:_summernote.html.twig", "C:\\wamp\\www\\my_project_web\\vendor\\helios-ag\\fm-elfinder-bundle/Resources/views/Elfinder/helper/_summernote.html.twig");
    }
}
