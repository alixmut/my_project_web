<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_87a06f1a040196d42b7cfe40266af92fbc1492fd57921202c7c6410637962a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_721f2a734f7c9635418f620675064d32c325d852f6cab1a61c7f78d887de107e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721f2a734f7c9635418f620675064d32c325d852f6cab1a61c7f78d887de107e->enter($__internal_721f2a734f7c9635418f620675064d32c325d852f6cab1a61c7f78d887de107e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_721f2a734f7c9635418f620675064d32c325d852f6cab1a61c7f78d887de107e->leave($__internal_721f2a734f7c9635418f620675064d32c325d852f6cab1a61c7f78d887de107e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7e8da319df377f3de392cee9499121c1cd527a34030377c43e7dfa21799ba1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e8da319df377f3de392cee9499121c1cd527a34030377c43e7dfa21799ba1f->enter($__internal_a7e8da319df377f3de392cee9499121c1cd527a34030377c43e7dfa21799ba1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a7e8da319df377f3de392cee9499121c1cd527a34030377c43e7dfa21799ba1f->leave($__internal_a7e8da319df377f3de392cee9499121c1cd527a34030377c43e7dfa21799ba1f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cb850bf1a1d9486da45d456d5175efdfd62e1a13d18cd1cea0fb3098ce417dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb850bf1a1d9486da45d456d5175efdfd62e1a13d18cd1cea0fb3098ce417dd->enter($__internal_8cb850bf1a1d9486da45d456d5175efdfd62e1a13d18cd1cea0fb3098ce417dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8cb850bf1a1d9486da45d456d5175efdfd62e1a13d18cd1cea0fb3098ce417dd->leave($__internal_8cb850bf1a1d9486da45d456d5175efdfd62e1a13d18cd1cea0fb3098ce417dd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd30e764f8e4b7c9c6ba136967df6da2e7d74386fe88963051782f22f2d73c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd30e764f8e4b7c9c6ba136967df6da2e7d74386fe88963051782f22f2d73c61->enter($__internal_fd30e764f8e4b7c9c6ba136967df6da2e7d74386fe88963051782f22f2d73c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fd30e764f8e4b7c9c6ba136967df6da2e7d74386fe88963051782f22f2d73c61->leave($__internal_fd30e764f8e4b7c9c6ba136967df6da2e7d74386fe88963051782f22f2d73c61_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\my_project_web\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
