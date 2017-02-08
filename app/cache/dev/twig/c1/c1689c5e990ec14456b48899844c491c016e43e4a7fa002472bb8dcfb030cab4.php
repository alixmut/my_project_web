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
        $__internal_24758fc85e1d4c33ada9886f4f148b09eb7f30487aef30470dac874cadf0c707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24758fc85e1d4c33ada9886f4f148b09eb7f30487aef30470dac874cadf0c707->enter($__internal_24758fc85e1d4c33ada9886f4f148b09eb7f30487aef30470dac874cadf0c707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24758fc85e1d4c33ada9886f4f148b09eb7f30487aef30470dac874cadf0c707->leave($__internal_24758fc85e1d4c33ada9886f4f148b09eb7f30487aef30470dac874cadf0c707_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f77ed94012b2a761d745f5ae6baf13632c6dab08b593d8deeeb3326339ea5374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77ed94012b2a761d745f5ae6baf13632c6dab08b593d8deeeb3326339ea5374->enter($__internal_f77ed94012b2a761d745f5ae6baf13632c6dab08b593d8deeeb3326339ea5374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f77ed94012b2a761d745f5ae6baf13632c6dab08b593d8deeeb3326339ea5374->leave($__internal_f77ed94012b2a761d745f5ae6baf13632c6dab08b593d8deeeb3326339ea5374_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_08f481c25e92cdb29a1927f2036bdb2d7b5470ba08efbbc5f29bda7585ceb7e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f481c25e92cdb29a1927f2036bdb2d7b5470ba08efbbc5f29bda7585ceb7e3->enter($__internal_08f481c25e92cdb29a1927f2036bdb2d7b5470ba08efbbc5f29bda7585ceb7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_08f481c25e92cdb29a1927f2036bdb2d7b5470ba08efbbc5f29bda7585ceb7e3->leave($__internal_08f481c25e92cdb29a1927f2036bdb2d7b5470ba08efbbc5f29bda7585ceb7e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb73460a181a9812b2f584ef35eb38e747a112b2ab1e3efbcf5366441a64b21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb73460a181a9812b2f584ef35eb38e747a112b2ab1e3efbcf5366441a64b21a->enter($__internal_cb73460a181a9812b2f584ef35eb38e747a112b2ab1e3efbcf5366441a64b21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cb73460a181a9812b2f584ef35eb38e747a112b2ab1e3efbcf5366441a64b21a->leave($__internal_cb73460a181a9812b2f584ef35eb38e747a112b2ab1e3efbcf5366441a64b21a_prof);

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
