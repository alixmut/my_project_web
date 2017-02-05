<?php

/* @FMElfinder/Elfinder/helper/_tinymce.html.twig */
class __TwigTemplate_6c9147edecac16c8916ef5377e1dbed7d0c41fa226a7334126ca9783f89c7235 extends Twig_Template
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
    //<![CDATA[
    function elFinderBrowser (field_name, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("elfinder", array("instance" => ($context["instance"] ?? null))), "html", null, true);
        echo "\",
            title: \"";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\",
            width: ";
        // line 7
        echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
        echo ",
            height: ";
        // line 8
        echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
        echo ",
            resizable: 'yes',
            inline: 'yes',    // This parameter only has an effect if you use the inlinepopups plugin!
            popup_css: false, // Disable TinyMCE's default popup CSS
            close_previous: 'no'
        }, {
            window: win,
            input: field_name
        });
        return false;
    }
    //]]>
</script>
";
    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/helper/_tinymce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FMElfinder/Elfinder/helper/_tinymce.html.twig", "C:\\wamp\\www\\my_project_web\\vendor\\helios-ag\\fm-elfinder-bundle\\Resources\\views\\Elfinder\\helper\\_tinymce.html.twig");
    }
}
