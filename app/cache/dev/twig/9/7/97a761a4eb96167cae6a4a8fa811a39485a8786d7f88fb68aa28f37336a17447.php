<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_97a761a4eb96167cae6a4a8fa811a39485a8786d7f88fb68aa28f37336a17447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02afbfc76499ca31d2f84dda6f3c75d32cf932c0c0f645846e5e4abd744d465c = $this->env->getExtension("native_profiler");
        $__internal_02afbfc76499ca31d2f84dda6f3c75d32cf932c0c0f645846e5e4abd744d465c->enter($__internal_02afbfc76499ca31d2f84dda6f3c75d32cf932c0c0f645846e5e4abd744d465c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02afbfc76499ca31d2f84dda6f3c75d32cf932c0c0f645846e5e4abd744d465c->leave($__internal_02afbfc76499ca31d2f84dda6f3c75d32cf932c0c0f645846e5e4abd744d465c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2a96827058b4d2625997515ad4c06bc6eec7f2a00bdd3c2e7703883a51436f3 = $this->env->getExtension("native_profiler");
        $__internal_f2a96827058b4d2625997515ad4c06bc6eec7f2a00bdd3c2e7703883a51436f3->enter($__internal_f2a96827058b4d2625997515ad4c06bc6eec7f2a00bdd3c2e7703883a51436f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f2a96827058b4d2625997515ad4c06bc6eec7f2a00bdd3c2e7703883a51436f3->leave($__internal_f2a96827058b4d2625997515ad4c06bc6eec7f2a00bdd3c2e7703883a51436f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_648071d19e3222a65173902c9d118e719952e0966a1d9fc9f3860d75ad07bf8e = $this->env->getExtension("native_profiler");
        $__internal_648071d19e3222a65173902c9d118e719952e0966a1d9fc9f3860d75ad07bf8e->enter($__internal_648071d19e3222a65173902c9d118e719952e0966a1d9fc9f3860d75ad07bf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_648071d19e3222a65173902c9d118e719952e0966a1d9fc9f3860d75ad07bf8e->leave($__internal_648071d19e3222a65173902c9d118e719952e0966a1d9fc9f3860d75ad07bf8e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de026e12d610a28fc54dfb75829cbdc3b486cbafd9b37f71d7225602b7caeece = $this->env->getExtension("native_profiler");
        $__internal_de026e12d610a28fc54dfb75829cbdc3b486cbafd9b37f71d7225602b7caeece->enter($__internal_de026e12d610a28fc54dfb75829cbdc3b486cbafd9b37f71d7225602b7caeece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_de026e12d610a28fc54dfb75829cbdc3b486cbafd9b37f71d7225602b7caeece->leave($__internal_de026e12d610a28fc54dfb75829cbdc3b486cbafd9b37f71d7225602b7caeece_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
