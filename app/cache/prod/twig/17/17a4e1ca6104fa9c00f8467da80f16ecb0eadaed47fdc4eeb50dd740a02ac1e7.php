<?php

/* FMElfinderBundle:Elfinder:elfinder_type.html.twig */
class __TwigTemplate_15ee6c934551f56c26db481d49bc2e06160298e8b8e53c7b46fd4ea02484a9b3 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        if (($context["includeAssets"] ?? null)) {
            // line 5
            echo "        ";
            echo twig_include($this->env, $context, "FMElfinderBundle:Elfinder:helper/assets_css.html.twig");
            echo "
    ";
        }
        // line 7
        echo "</head>
<body>
";
        // line 9
        if (($context["includeAssets"] ?? null)) {
            // line 10
            echo "    ";
            echo twig_include($this->env, $context, "FMElfinderBundle:Elfinder:helper/assets_js.html.twig");
            echo "
";
        }
        // line 12
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    \$().ready(function() {
        var \$f = \$('.elfinder').elfinder({
            url : '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ef_connect", array("instance" => ($context["instance"] ?? null), "homeFolder" => ($context["homeFolder"] ?? null))), "html", null, true);
        echo "',
            lang : '";
        // line 16
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "',
            onlyMimes: ";
        // line 17
        echo ($context["onlyMimes"] ?? null);
        echo ",
            getFileCallback: function(file) {
                ";
        // line 19
        if (($context["relative_path"] ?? null)) {
            // line 20
            echo "                    window.opener.setValue('";
            echo twig_escape_filter($this->env, ($context["pathPrefix"] ?? null), "html", null, true);
            echo "'+file.url.replace(\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/\", \"\"), \"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\");
                ";
        } else {
            // line 22
            echo "                    window.opener.setValue(file.url, \"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\");
                ";
        }
        // line 24
        echo "                window.close();
            }
        });


    ";
        // line 29
        if (($context["fullscreen"] ?? null)) {
            // line 30
            echo "    var \$window = \$(window);
    \$window.resize(function(){
        var \$win_height = \$window.height();
        if( \$f.height() != \$win_height ){
            \$f.height(\$win_height).resize();
        }
    });
    ";
        }
        // line 38
        echo "    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:elfinder_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 38,  89 => 30,  87 => 29,  80 => 24,  74 => 22,  64 => 20,  62 => 19,  57 => 17,  53 => 16,  49 => 15,  44 => 12,  38 => 10,  36 => 9,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FMElfinderBundle:Elfinder:elfinder_type.html.twig", "C:\\wamp\\www\\my_project_web\\vendor\\helios-ag\\fm-elfinder-bundle/Resources/views/Elfinder/elfinder_type.html.twig");
    }
}
