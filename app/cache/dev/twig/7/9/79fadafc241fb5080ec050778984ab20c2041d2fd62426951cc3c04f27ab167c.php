<?php

/* dcissMyAppBundle:Default:index.html.twig */
class __TwigTemplate_79fadafc241fb5080ec050778984ab20c2041d2fd62426951cc3c04f27ab167c extends Twig_Template
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
        $__internal_8408015ae3c2f6f35a23e7c16d796c7ecfd8b476e51ef7037241db4992ac69bc = $this->env->getExtension("native_profiler");
        $__internal_8408015ae3c2f6f35a23e7c16d796c7ecfd8b476e51ef7037241db4992ac69bc->enter($__internal_8408015ae3c2f6f35a23e7c16d796c7ecfd8b476e51ef7037241db4992ac69bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dcissMyAppBundle:Default:index.html.twig"));

        // line 1
        echo "

<p>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</p>

";
        
        $__internal_8408015ae3c2f6f35a23e7c16d796c7ecfd8b476e51ef7037241db4992ac69bc->leave($__internal_8408015ae3c2f6f35a23e7c16d796c7ecfd8b476e51ef7037241db4992ac69bc_prof);

    }

    public function getTemplateName()
    {
        return "dcissMyAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
