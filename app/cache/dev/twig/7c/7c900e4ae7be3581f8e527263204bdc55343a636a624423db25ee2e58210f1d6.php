<?php

/* GudetamaFranceBundle:Default:index.html.twig */
class __TwigTemplate_52119a36086df3f288395215811b38339f55f077197a0457d37011ebb5201d1e extends Twig_Template
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
        $__internal_e3c2b67fb73119a239e64466f2291806c697ea5b9c488d379fce379e952b193d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c2b67fb73119a239e64466f2291806c697ea5b9c488d379fce379e952b193d->enter($__internal_e3c2b67fb73119a239e64466f2291806c697ea5b9c488d379fce379e952b193d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GudetamaFranceBundle:Default:index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
    </head>
    <body>
        <h1>Hello World !</h1>
        
        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world !
        </p>
    </body>
</html>";
        
        $__internal_e3c2b67fb73119a239e64466f2291806c697ea5b9c488d379fce379e952b193d->leave($__internal_e3c2b67fb73119a239e64466f2291806c697ea5b9c488d379fce379e952b193d_prof);

    }

    public function getTemplateName()
    {
        return "GudetamaFranceBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
    </head>
    <body>
        <h1>Hello World !</h1>
        
        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world !
        </p>
    </body>
</html>", "GudetamaFranceBundle:Default:index.html.twig", "C:\\wamp\\www\\my_project_web\\src\\GudetamaFranceBundle/Resources/views/Default/index.html.twig");
    }
}
