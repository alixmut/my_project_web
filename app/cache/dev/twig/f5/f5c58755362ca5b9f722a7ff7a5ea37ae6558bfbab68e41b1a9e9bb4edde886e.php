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
        $__internal_75caa57efcf311f37e6b8fe803248e5b5b7ada893d31072a95d737121eec5525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75caa57efcf311f37e6b8fe803248e5b5b7ada893d31072a95d737121eec5525->enter($__internal_75caa57efcf311f37e6b8fe803248e5b5b7ada893d31072a95d737121eec5525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75caa57efcf311f37e6b8fe803248e5b5b7ada893d31072a95d737121eec5525->leave($__internal_75caa57efcf311f37e6b8fe803248e5b5b7ada893d31072a95d737121eec5525_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f3e70ac5dad4a060730284e2f3e3ad49faf75f0282edcc77de0860001c0cbcf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e70ac5dad4a060730284e2f3e3ad49faf75f0282edcc77de0860001c0cbcf5->enter($__internal_f3e70ac5dad4a060730284e2f3e3ad49faf75f0282edcc77de0860001c0cbcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3e70ac5dad4a060730284e2f3e3ad49faf75f0282edcc77de0860001c0cbcf5->leave($__internal_f3e70ac5dad4a060730284e2f3e3ad49faf75f0282edcc77de0860001c0cbcf5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43eeb07f1e984781fcbaa404f06cb97dce56fc2a890cf70a62c46c2ee6e44388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43eeb07f1e984781fcbaa404f06cb97dce56fc2a890cf70a62c46c2ee6e44388->enter($__internal_43eeb07f1e984781fcbaa404f06cb97dce56fc2a890cf70a62c46c2ee6e44388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_43eeb07f1e984781fcbaa404f06cb97dce56fc2a890cf70a62c46c2ee6e44388->leave($__internal_43eeb07f1e984781fcbaa404f06cb97dce56fc2a890cf70a62c46c2ee6e44388_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6056147f65c802590b25e6d6f92791b8c8a69ab2f4dba9d6dd40445272b3e658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6056147f65c802590b25e6d6f92791b8c8a69ab2f4dba9d6dd40445272b3e658->enter($__internal_6056147f65c802590b25e6d6f92791b8c8a69ab2f4dba9d6dd40445272b3e658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6056147f65c802590b25e6d6f92791b8c8a69ab2f4dba9d6dd40445272b3e658->leave($__internal_6056147f65c802590b25e6d6f92791b8c8a69ab2f4dba9d6dd40445272b3e658_prof);

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
