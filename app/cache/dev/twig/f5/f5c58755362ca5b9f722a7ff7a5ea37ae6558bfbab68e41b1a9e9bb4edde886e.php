<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_47bbe7cb2c494354fb8947c7ea5f0d364980a358084d49fd8b73dc2402aa02be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c4d14a0a5a1fb6d45e7fbf0776519883ed41df2cab1c9d7b9790ddd53639c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4d14a0a5a1fb6d45e7fbf0776519883ed41df2cab1c9d7b9790ddd53639c86->enter($__internal_7c4d14a0a5a1fb6d45e7fbf0776519883ed41df2cab1c9d7b9790ddd53639c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c4d14a0a5a1fb6d45e7fbf0776519883ed41df2cab1c9d7b9790ddd53639c86->leave($__internal_7c4d14a0a5a1fb6d45e7fbf0776519883ed41df2cab1c9d7b9790ddd53639c86_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5dbf62ac3120174d5fd75fc44e00d409f89eaf4670143da51c9fcf91d951a1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbf62ac3120174d5fd75fc44e00d409f89eaf4670143da51c9fcf91d951a1d3->enter($__internal_5dbf62ac3120174d5fd75fc44e00d409f89eaf4670143da51c9fcf91d951a1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5dbf62ac3120174d5fd75fc44e00d409f89eaf4670143da51c9fcf91d951a1d3->leave($__internal_5dbf62ac3120174d5fd75fc44e00d409f89eaf4670143da51c9fcf91d951a1d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a34c463ba66b566e79cd687ccee3c0d43634704587e712ff168ea0d089e6a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a34c463ba66b566e79cd687ccee3c0d43634704587e712ff168ea0d089e6a30->enter($__internal_6a34c463ba66b566e79cd687ccee3c0d43634704587e712ff168ea0d089e6a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6a34c463ba66b566e79cd687ccee3c0d43634704587e712ff168ea0d089e6a30->leave($__internal_6a34c463ba66b566e79cd687ccee3c0d43634704587e712ff168ea0d089e6a30_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_384a4af1e3aa3920bd0dd3be5b5dd11942d1d998190590ece679f9d236289f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384a4af1e3aa3920bd0dd3be5b5dd11942d1d998190590ece679f9d236289f15->enter($__internal_384a4af1e3aa3920bd0dd3be5b5dd11942d1d998190590ece679f9d236289f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_384a4af1e3aa3920bd0dd3be5b5dd11942d1d998190590ece679f9d236289f15->leave($__internal_384a4af1e3aa3920bd0dd3be5b5dd11942d1d998190590ece679f9d236289f15_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\my_project_web\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
