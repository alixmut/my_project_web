<?php

/* FMElfinderBundle:Elfinder:ckeditor.html.twig */
class __TwigTemplate_ddf010c3b38014fb365faad3406b58862e2209c0bc9e61721ab4daf2fde2b7d4 extends Twig_Template
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
        $__internal_dc65a421fc44f5c1db2005b3b176fa584978f7cd2040d2c6a6a3452b63c959bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc65a421fc44f5c1db2005b3b176fa584978f7cd2040d2c6a6a3452b63c959bc->enter($__internal_dc65a421fc44f5c1db2005b3b176fa584978f7cd2040d2c6a6a3452b63c959bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:ckeditor.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    ";
        // line 5
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 6
            echo "        ";
            echo twig_include($this->env, $context, "FMElfinderBundle:Elfinder:helper/assets_css.html.twig");
            echo "
    ";
        }
        // line 8
        echo "</head>
<body>
";
        // line 10
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 11
            echo "    ";
            echo twig_include($this->env, $context, "FMElfinderBundle:Elfinder:helper/assets_js.html.twig");
            echo "
";
        }
        // line 13
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    function getUrlParam(paramName) {
        var reParam = new RegExp('(?:[\\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
        var match = window.location.search.match(reParam) ;

        return (match && match.length > 1) ? match[1] : '' ;
    }
    \$().ready(function() {
        var funcNum = getUrlParam('CKEditorFuncNum');
        var mode = getUrlParam('mode');

        var f = \$('.elfinder').elfinder({
            url : '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ef_connect", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "homeFolder" => (isset($context["homeFolder"]) ? $context["homeFolder"] : $this->getContext($context, "homeFolder")))), "html", null, true);
        echo "'+'?mode='+mode,
            lang : '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "',
            onlyMimes: ";
        // line 27
        echo (isset($context["onlyMimes"]) ? $context["onlyMimes"] : $this->getContext($context, "onlyMimes"));
        echo ",
            getFileCallback : function(file) {
                if (funcNum) {
                    ";
        // line 30
        if ((isset($context["relative_path"]) ? $context["relative_path"] : $this->getContext($context, "relative_path"))) {
            // line 31
            echo "                        window.opener.CKEDITOR.tools.callFunction(funcNum, '";
            echo twig_escape_filter($this->env, (isset($context["pathPrefix"]) ? $context["pathPrefix"] : $this->getContext($context, "pathPrefix")), "html", null, true);
            echo "'+file.url.replace(\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/\", \"\"));
                    ";
        } else {
            // line 33
            echo "                        window.opener.CKEDITOR.tools.callFunction(funcNum, file.url);
                    ";
        }
        // line 35
        echo "                    window.close();
                }
            }
        });

        ";
        // line 40
        if ((isset($context["fullscreen"]) ? $context["fullscreen"] : $this->getContext($context, "fullscreen"))) {
            // line 41
            echo "        \$(window).resize(function(){
            var h = \$(window).height();
            var \$ef = \$('.elfinder');
            if(\$ef.height() != h - 20){
                \$ef.height(h -20).resize();
            }
        });
        ";
        }
        // line 49
        echo "    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        
        $__internal_dc65a421fc44f5c1db2005b3b176fa584978f7cd2040d2c6a6a3452b63c959bc->leave($__internal_dc65a421fc44f5c1db2005b3b176fa584978f7cd2040d2c6a6a3452b63c959bc_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:ckeditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 49,  99 => 41,  97 => 40,  90 => 35,  86 => 33,  78 => 31,  76 => 30,  70 => 27,  66 => 26,  62 => 25,  48 => 13,  42 => 11,  40 => 10,  36 => 8,  30 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    {% if includeAssets %}
        {{ include(\"FMElfinderBundle:Elfinder:helper/assets_css.html.twig\") }}
    {% endif %}
</head>
<body>
{% if includeAssets %}
    {{ include(\"FMElfinderBundle:Elfinder:helper/assets_js.html.twig\") }}
{% endif %}
<script type=\"text/javascript\" charset=\"utf-8\">
    function getUrlParam(paramName) {
        var reParam = new RegExp('(?:[\\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
        var match = window.location.search.match(reParam) ;

        return (match && match.length > 1) ? match[1] : '' ;
    }
    \$().ready(function() {
        var funcNum = getUrlParam('CKEditorFuncNum');
        var mode = getUrlParam('mode');

        var f = \$('.elfinder').elfinder({
            url : '{{path('ef_connect', {'instance': instance, 'homeFolder': homeFolder })}}'+'?mode='+mode,
            lang : '{{locale}}',
            onlyMimes: {{ onlyMimes|raw }},
            getFileCallback : function(file) {
                if (funcNum) {
                    {% if relative_path %}
                        window.opener.CKEDITOR.tools.callFunction(funcNum, '{{ pathPrefix }}'+file.url.replace(\"{{ app.request.schemeAndHttpHost }}/\", \"\"));
                    {% else %}
                        window.opener.CKEDITOR.tools.callFunction(funcNum, file.url);
                    {% endif %}
                    window.close();
                }
            }
        });

        {% if fullscreen %}
        \$(window).resize(function(){
            var h = \$(window).height();
            var \$ef = \$('.elfinder');
            if(\$ef.height() != h - 20){
                \$ef.height(h -20).resize();
            }
        });
        {% endif %}
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
", "FMElfinderBundle:Elfinder:ckeditor.html.twig", "C:\\wamp\\www\\my_project_web_test\\vendor\\helios-ag\\fm-elfinder-bundle/Resources/views/Elfinder/ckeditor.html.twig");
    }
}
