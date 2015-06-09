<?php

/* MyAppFilmothequeBundle:Default:index.html.twig */
class __TwigTemplate_2665437d0773d1b9750e8fdd1a4f83275a336f048754526cb81e00138e7433a4 extends Twig_Template
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
        $__internal_83e104c8f7b818ed67cbd9ff69374bdda5123deb61ee28bd1e599032400cedb9 = $this->env->getExtension("native_profiler");
        $__internal_83e104c8f7b818ed67cbd9ff69374bdda5123deb61ee28bd1e599032400cedb9->enter($__internal_83e104c8f7b818ed67cbd9ff69374bdda5123deb61ee28bd1e599032400cedb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppFilmothequeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_83e104c8f7b818ed67cbd9ff69374bdda5123deb61ee28bd1e599032400cedb9->leave($__internal_83e104c8f7b818ed67cbd9ff69374bdda5123deb61ee28bd1e599032400cedb9_prof);

    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
