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
        $__internal_5443dd3a8e74e86b09feb7161add5e6207c259b10595cb9c7c02988111a2835b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5443dd3a8e74e86b09feb7161add5e6207c259b10595cb9c7c02988111a2835b->enter($__internal_5443dd3a8e74e86b09feb7161add5e6207c259b10595cb9c7c02988111a2835b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5443dd3a8e74e86b09feb7161add5e6207c259b10595cb9c7c02988111a2835b->leave($__internal_5443dd3a8e74e86b09feb7161add5e6207c259b10595cb9c7c02988111a2835b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a10cc7a8e5f11a7f3d9f1ec34745a28b858b092b873d1f88aa4dfc0dede87f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a10cc7a8e5f11a7f3d9f1ec34745a28b858b092b873d1f88aa4dfc0dede87f7->enter($__internal_5a10cc7a8e5f11a7f3d9f1ec34745a28b858b092b873d1f88aa4dfc0dede87f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5a10cc7a8e5f11a7f3d9f1ec34745a28b858b092b873d1f88aa4dfc0dede87f7->leave($__internal_5a10cc7a8e5f11a7f3d9f1ec34745a28b858b092b873d1f88aa4dfc0dede87f7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fbf2982bec2f7a818c8bef0d58bc70bb4bc293f913f2f114cb76db1275f9e5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf2982bec2f7a818c8bef0d58bc70bb4bc293f913f2f114cb76db1275f9e5ff->enter($__internal_fbf2982bec2f7a818c8bef0d58bc70bb4bc293f913f2f114cb76db1275f9e5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fbf2982bec2f7a818c8bef0d58bc70bb4bc293f913f2f114cb76db1275f9e5ff->leave($__internal_fbf2982bec2f7a818c8bef0d58bc70bb4bc293f913f2f114cb76db1275f9e5ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a76729433f5cba5cbf0440b7f80c09f1f321283659d144723e9a5a00104194b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76729433f5cba5cbf0440b7f80c09f1f321283659d144723e9a5a00104194b2->enter($__internal_a76729433f5cba5cbf0440b7f80c09f1f321283659d144723e9a5a00104194b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a76729433f5cba5cbf0440b7f80c09f1f321283659d144723e9a5a00104194b2->leave($__internal_a76729433f5cba5cbf0440b7f80c09f1f321283659d144723e9a5a00104194b2_prof);

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
