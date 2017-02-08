<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4cfffe29bb31ea5fa5e7a1ca03847a3efd0840d6053f56ab05dc13550394ff28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f85094de65e978ddd0d967dc7984c579fba99f708fc6629035c74c9fc58b6fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85094de65e978ddd0d967dc7984c579fba99f708fc6629035c74c9fc58b6fbe->enter($__internal_f85094de65e978ddd0d967dc7984c579fba99f708fc6629035c74c9fc58b6fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f85094de65e978ddd0d967dc7984c579fba99f708fc6629035c74c9fc58b6fbe->leave($__internal_f85094de65e978ddd0d967dc7984c579fba99f708fc6629035c74c9fc58b6fbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9dbb1c45fa5d4fd1f9d23ade6f992d7bbc99b1fb0a7f3623881b8711c0820eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbb1c45fa5d4fd1f9d23ade6f992d7bbc99b1fb0a7f3623881b8711c0820eb0->enter($__internal_9dbb1c45fa5d4fd1f9d23ade6f992d7bbc99b1fb0a7f3623881b8711c0820eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9dbb1c45fa5d4fd1f9d23ade6f992d7bbc99b1fb0a7f3623881b8711c0820eb0->leave($__internal_9dbb1c45fa5d4fd1f9d23ade6f992d7bbc99b1fb0a7f3623881b8711c0820eb0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_978f3df5a51f1b28af816f32c4bcb178c11bd94ef867dd0badac31ef2e006f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978f3df5a51f1b28af816f32c4bcb178c11bd94ef867dd0badac31ef2e006f21->enter($__internal_978f3df5a51f1b28af816f32c4bcb178c11bd94ef867dd0badac31ef2e006f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_978f3df5a51f1b28af816f32c4bcb178c11bd94ef867dd0badac31ef2e006f21->leave($__internal_978f3df5a51f1b28af816f32c4bcb178c11bd94ef867dd0badac31ef2e006f21_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bed5fbf6d66629c988a089db8700117499413f84c12a8e79a91a1de94b08ac54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed5fbf6d66629c988a089db8700117499413f84c12a8e79a91a1de94b08ac54->enter($__internal_bed5fbf6d66629c988a089db8700117499413f84c12a8e79a91a1de94b08ac54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bed5fbf6d66629c988a089db8700117499413f84c12a8e79a91a1de94b08ac54->leave($__internal_bed5fbf6d66629c988a089db8700117499413f84c12a8e79a91a1de94b08ac54_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\my_project_web\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
