<?php

/* @FMElfinder/Elfinder/helper/_tinymce4.html.twig */
class __TwigTemplate_d03188ed41814a7e5111147cfd519fc650859d862504b207cdbf14e9ee787ae9 extends Twig_Template
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
    function elFinderBrowser (field_name, url, type, win) {
        tinymce.activeEditor.windowManager.open({
            file:\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("elfinder", array("instance" => ($context["instance"] ?? null))), "html", null, true);
        echo "\",
            title: \"";
        // line 5
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\",
            width: ";
        // line 6
        echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
        echo ",
            height: ";
        // line 7
        echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
        echo ",
            resizable: 'yes'
        }, {
            setUrl: function (url) {
                win.document.getElementById(field_name).value = url;
            }
        });
        return false;
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/helper/_tinymce4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FMElfinder/Elfinder/helper/_tinymce4.html.twig", "C:\\wamp\\www\\my_project_web\\vendor\\helios-ag\\fm-elfinder-bundle\\Resources\\views\\Elfinder\\helper\\_tinymce4.html.twig");
    }
}
