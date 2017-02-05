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
        $__internal_e406dc0c4d5b9056c1671313281d197a2ad996dd2fde3bdb9ae40521d93e9f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e406dc0c4d5b9056c1671313281d197a2ad996dd2fde3bdb9ae40521d93e9f1f->enter($__internal_e406dc0c4d5b9056c1671313281d197a2ad996dd2fde3bdb9ae40521d93e9f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e406dc0c4d5b9056c1671313281d197a2ad996dd2fde3bdb9ae40521d93e9f1f->leave($__internal_e406dc0c4d5b9056c1671313281d197a2ad996dd2fde3bdb9ae40521d93e9f1f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_782c16a090f5748202756904cc080564c4c2159073d6c5481a2330459c89da1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782c16a090f5748202756904cc080564c4c2159073d6c5481a2330459c89da1f->enter($__internal_782c16a090f5748202756904cc080564c4c2159073d6c5481a2330459c89da1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_782c16a090f5748202756904cc080564c4c2159073d6c5481a2330459c89da1f->leave($__internal_782c16a090f5748202756904cc080564c4c2159073d6c5481a2330459c89da1f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3ba24b46235ca8a553ed66fe1a0e37ccf7004b8642f2b90650c13402548d25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ba24b46235ca8a553ed66fe1a0e37ccf7004b8642f2b90650c13402548d25b->enter($__internal_c3ba24b46235ca8a553ed66fe1a0e37ccf7004b8642f2b90650c13402548d25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c3ba24b46235ca8a553ed66fe1a0e37ccf7004b8642f2b90650c13402548d25b->leave($__internal_c3ba24b46235ca8a553ed66fe1a0e37ccf7004b8642f2b90650c13402548d25b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70d7e4883834934746898428b1855a483dd1f6852c346ff299440c8ef7101578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d7e4883834934746898428b1855a483dd1f6852c346ff299440c8ef7101578->enter($__internal_70d7e4883834934746898428b1855a483dd1f6852c346ff299440c8ef7101578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_70d7e4883834934746898428b1855a483dd1f6852c346ff299440c8ef7101578->leave($__internal_70d7e4883834934746898428b1855a483dd1f6852c346ff299440c8ef7101578_prof);

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
