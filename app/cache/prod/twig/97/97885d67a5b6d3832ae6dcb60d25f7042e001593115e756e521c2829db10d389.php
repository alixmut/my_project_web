<?php

/* @GudetamaFrance/UploadSubtitle/upload_subtitle.html.twig */
class __TwigTemplate_9c293a4f186f6e27db5bf7921a19e6114066a7700c5377f7932866f3c4656ccb extends Twig_Template
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
        echo "

";
        // line 4
        echo "
<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
    </head>
    <body>

<h1>Adding a new product</h1>

";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 16
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "brochure", array()), 'row');
        echo "
";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "@GudetamaFrance/UploadSubtitle/upload_subtitle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 18,  42 => 17,  39 => 16,  35 => 14,  23 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GudetamaFrance/UploadSubtitle/upload_subtitle.html.twig", "C:\\wamp\\www\\my_project_web\\src\\GudetamaFranceBundle\\Resources\\views\\UploadSubtitle\\upload_subtitle.html.twig");
    }
}
