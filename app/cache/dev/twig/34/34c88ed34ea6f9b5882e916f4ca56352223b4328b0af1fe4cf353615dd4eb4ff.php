<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a9fb0f9cae0d540144e2340f2fbc0bde8942cab668c5921372d9bf0963837dd5 extends Twig_Template
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
        $__internal_598a40b5307825c77b5e41b959834c41fc05efd9d383d44fe480ab9dcd55d56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598a40b5307825c77b5e41b959834c41fc05efd9d383d44fe480ab9dcd55d56b->enter($__internal_598a40b5307825c77b5e41b959834c41fc05efd9d383d44fe480ab9dcd55d56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_598a40b5307825c77b5e41b959834c41fc05efd9d383d44fe480ab9dcd55d56b->leave($__internal_598a40b5307825c77b5e41b959834c41fc05efd9d383d44fe480ab9dcd55d56b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_633d2299a1bb8b9581a122a07332c9349e909c22d79846ff199b78d5bb529bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633d2299a1bb8b9581a122a07332c9349e909c22d79846ff199b78d5bb529bb4->enter($__internal_633d2299a1bb8b9581a122a07332c9349e909c22d79846ff199b78d5bb529bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_633d2299a1bb8b9581a122a07332c9349e909c22d79846ff199b78d5bb529bb4->leave($__internal_633d2299a1bb8b9581a122a07332c9349e909c22d79846ff199b78d5bb529bb4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93bd05d82b049d599e8e367d129270ff6aaaf8e3f4734b13a068ae58dc4c3bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bd05d82b049d599e8e367d129270ff6aaaf8e3f4734b13a068ae58dc4c3bca->enter($__internal_93bd05d82b049d599e8e367d129270ff6aaaf8e3f4734b13a068ae58dc4c3bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_93bd05d82b049d599e8e367d129270ff6aaaf8e3f4734b13a068ae58dc4c3bca->leave($__internal_93bd05d82b049d599e8e367d129270ff6aaaf8e3f4734b13a068ae58dc4c3bca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7db42fcf572f51bb5d55662ac13efa3d98bf547591dc5e234be1f3621715a180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db42fcf572f51bb5d55662ac13efa3d98bf547591dc5e234be1f3621715a180->enter($__internal_7db42fcf572f51bb5d55662ac13efa3d98bf547591dc5e234be1f3621715a180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7db42fcf572f51bb5d55662ac13efa3d98bf547591dc5e234be1f3621715a180->leave($__internal_7db42fcf572f51bb5d55662ac13efa3d98bf547591dc5e234be1f3621715a180_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\my_project_web_test\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
