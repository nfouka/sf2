<?php

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_3c634cc3a71f0d722e517e7e2d5c4585837c3cd611ccc040269b3094faf1f626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
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
        $__internal_823e2257d6e2a82598b8ca984c39a05630383439b06c122bc5bc0c2650575e90 = $this->env->getExtension("native_profiler");
        $__internal_823e2257d6e2a82598b8ca984c39a05630383439b06c122bc5bc0c2650575e90->enter($__internal_823e2257d6e2a82598b8ca984c39a05630383439b06c122bc5bc0c2650575e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_823e2257d6e2a82598b8ca984c39a05630383439b06c122bc5bc0c2650575e90->leave($__internal_823e2257d6e2a82598b8ca984c39a05630383439b06c122bc5bc0c2650575e90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f0ea1f9278c11f25812a4258dfcef3d9e450a6ede5ab07e8bb3053e1a2e27f4b = $this->env->getExtension("native_profiler");
        $__internal_f0ea1f9278c11f25812a4258dfcef3d9e450a6ede5ab07e8bb3053e1a2e27f4b->enter($__internal_f0ea1f9278c11f25812a4258dfcef3d9e450a6ede5ab07e8bb3053e1a2e27f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <a href=\"https://symfony.com/\">
            <svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#010202\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg>
            <span>
                ";
        // line 9
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "
                ";
        } elseif ($this->getAttribute(        // line 11
(isset($context["collector"]) ? $context["collector"] : null), "symfonyState", array(), "any", true, true)) {
            // line 12
            echo "                    ";
            if (("unknown" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
                // line 13
                echo "<span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\" title=\"Unable to retrieve information about the Symfony version.\">";
            } elseif (("eol" == $this->getAttribute(            // line 14
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
                // line 15
                echo "<span class=\"sf-toolbar-status sf-toolbar-status-red\" title=\"This Symfony version will no longer receive security fixes.\">";
            } elseif (("eom" == $this->getAttribute(            // line 16
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
                // line 17
                echo "<span class=\"sf-toolbar-status sf-toolbar-status-yellow\" title=\"This Symfony version will only receive security fixes.\">";
            } elseif (("dev" == $this->getAttribute(            // line 18
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
                // line 19
                echo "<span class=\"sf-toolbar-status sf-toolbar-status-yellow\" title=\"This Symfony version is still in the development phase.\">";
            } else {
                // line 21
                echo "<span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            }
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 25
        echo "            </span>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        ob_start();
        // line 29
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 30
            echo "            <div class=\"sf-toolbar-info-piece\">
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo " <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</b>
            </div>
        ";
        }
        // line 34
        echo "        <div class=\"sf-toolbar-info-piece\">
            Symfony <b>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
        echo "</b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <a href=\"https://symfony.com/doc/";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
        echo "/index.html\" rel=\"help\">Symfony Documentation</a>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/config.html.twig", 41)->display(array_merge($context, array("link" => false)));
        // line 42
        echo "
    ";
        // line 44
        echo "    ";
        ob_start();
        // line 45
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\">
            <svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><g><path fill=\"#010202\" d=\"M8 11.5c-0.2-0.1-0.4-0.1-0.7-0.1s-0.5 0-0.8 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0 c0 0-0.1 0-0.1 0v0l-0.9 3.3c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0.1 0c0 0 0.1 0 0.1 0c0.3 0 0.7 0 1 0 c0.3 0 0.6-0.1 0.8-0.2c0.2-0.1 0.4-0.3 0.6-0.5c0.2-0.3 0.3-0.6 0.4-1.1c0.1-0.4 0.1-0.7 0.1-0.9C8.3 11.7 8.1 11.6 8 11.5z\"/><path fill=\"#010202\" d=\"M21.3 11.5c-0.2-0.1-0.4-0.1-0.7-0.1s-0.5 0-0.8 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0 s-0.1 0-0.1 0v0l-0.9 3.3c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0c0 0 0 0 0.1 0c0 0 0.1 0 0.1 0c0.3 0 0.7 0 1 0 c0.3 0 0.6-0.1 0.8-0.2c0.2-0.1 0.4-0.3 0.6-0.5c0.2-0.3 0.3-0.6 0.4-1.1c0.1-0.4 0.1-0.7 0.1-0.9C21.6 11.7 21.5 11.6 21.3 11.5z\"/><path fill=\"#010202\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M9.8 12.9 c0 0.2-0.1 0.4-0.2 0.6c-0.1 0.2-0.2 0.4-0.2 0.6c-0.1 0.2-0.2 0.4-0.3 0.5S8.8 14.9 8.7 15c-0.2 0.2-0.4 0.3-0.6 0.5 c-0.2 0.1-0.4 0.2-0.6 0.3c-0.2 0.1-0.4 0.1-0.6 0.1c-0.2 0-0.4 0-0.7 0H4.8L4.2 18H2.7l2.1-7.9h2.9c0.4 0 0.8 0.1 1.1 0.2 c0.3 0.1 0.5 0.3 0.7 0.6c0.2 0.2 0.3 0.5 0.3 0.9C10 12.1 9.9 12.4 9.8 12.9z M13.7 15.9l0.9-3.5c0.1-0.2 0.1-0.3 0.1-0.5 c0-0.1 0-0.2-0.1-0.3c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1 0-0.3-0.1-0.5-0.1l-1.2 0l-1.2 4.5H10L12.1 8h1.5l-0.6 2.1h1.4 c0.4 0 0.7 0 1 0.1s0.5 0.2 0.7 0.3c0.2 0.1 0.3 0.4 0.3 0.6c0 0.3 0 0.6-0.1 1l-1 3.7H13.7z M23 13.4c-0.1 0.2-0.2 0.4-0.2 0.6 c-0.1 0.2-0.2 0.4-0.3 0.5S22.2 14.9 22 15c-0.2 0.2-0.4 0.3-0.6 0.5c-0.2 0.1-0.4 0.2-0.6 0.3c-0.2 0.1-0.4 0.1-0.6 0.1 c-0.2 0-0.4 0-0.7 0h-1.3L17.6 18h-1.5l2.1-7.9h2.9c0.4 0 0.8 0.1 1.1 0.2c0.3 0.1 0.5 0.3 0.7 0.6c0.2 0.2 0.3 0.5 0.3 0.9 c0 0.3 0 0.7-0.1 1.1C23.1 13.1 23.1 13.3 23 13.4z\"/></g></svg>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "    ";
        ob_start();
        // line 50
        echo "        ";
        ob_start();
        // line 51
        echo "            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP</b>
                <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 57
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug", array())) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 58
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator", array())) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sapiName", array()), "html", null, true);
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 65
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 66
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/config.html.twig", 66)->display(array_merge($context, array("link" => false)));
        // line 67
        echo "
    ";
        // line 69
        echo "    ";
        ob_start();
        echo "sf-toolbar-status sf-toolbar-status-";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("green") : ("red"));
        $context["debug_status_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 70
        echo "    ";
        ob_start();
        // line 71
        echo "        <svg width=\"21\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 21 28\" enable-background=\"new 0 0 21 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M5 17H1c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C6 16.6 5.6 17 5 17z\"/><path fill=\"#3F3F3F\" d=\"M19 17h-4c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C20 16.6 19.6 17 19 17z\"/><path fill=\"#3F3F3F\" d=\"M12.1 20h-4c-0.5 0-1-0.4-1-1v-7c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C13.1 19.5 12.6 20 12.1 20z\"/><rect x=\"9.1\" y=\"5.8\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"16\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"2.1\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"9.1\" y=\"20.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"2.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"16.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/></g></svg>
        <span class=\"sf-toolbar-info-piece-additional ";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["debug_status_class"]) ? $context["debug_status_class"] : $this->getContext($context, "debug_status_class")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "</span>
        ";
        // line 73
        if ((("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array())) || ("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array())))) {
            // line 74
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-info-with-delimiter\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()), "html", null, true);
            echo "</span>
                <span>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 79
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 80
        echo "    ";
        ob_start();
        // line 81
        echo "        ";
        ob_start();
        // line 82
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()))) {
            // line 83
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Name</b>
                    <span>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 88
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()))) {
            // line 89
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 94
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array()))) {
            // line 95
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["debug_status_class"]) ? $context["debug_status_class"] : $this->getContext($context, "debug_status_class")), "html", null, true);
            echo "\">";
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("en") : ("dis"));
            echo "abled</span>
                </div>
            ";
        }
        // line 100
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token</b>
                <span>
                    ";
        // line 103
        if ((isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))) {
            // line 104
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 106
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "
                    ";
        }
        // line 108
        echo "                </span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 111
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 112
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/config.html.twig", 112)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_f0ea1f9278c11f25812a4258dfcef3d9e450a6ede5ab07e8bb3053e1a2e27f4b->leave($__internal_f0ea1f9278c11f25812a4258dfcef3d9e450a6ede5ab07e8bb3053e1a2e27f4b_prof);

    }

    // line 115
    public function block_menu($context, array $blocks = array())
    {
        $__internal_edc03629b7e87aaca2335e39c0a414db59593effe36cabb886856a16e827f4fa = $this->env->getExtension("native_profiler");
        $__internal_edc03629b7e87aaca2335e39c0a414db59593effe36cabb886856a16e827f4fa->enter($__internal_edc03629b7e87aaca2335e39c0a414db59593effe36cabb886856a16e827f4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 116
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"21\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 21 28\" enable-background=\"new 0 0 21 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M5 17H1c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C6 16.6 5.6 17 5 17z\"/><path fill=\"#3F3F3F\" d=\"M19 17h-4c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C20 16.6 19.6 17 19 17z\"/><path fill=\"#3F3F3F\" d=\"M12.1 20h-4c-0.5 0-1-0.4-1-1v-7c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C13.1 19.5 12.6 20 12.1 20z\"/><rect x=\"9.1\" y=\"5.8\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"16\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"2.1\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"9.1\" y=\"20.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"2.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"16.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/></g></svg></span>
    <strong>Config</strong>
</span>
";
        
        $__internal_edc03629b7e87aaca2335e39c0a414db59593effe36cabb886856a16e827f4fa->leave($__internal_edc03629b7e87aaca2335e39c0a414db59593effe36cabb886856a16e827f4fa_prof);

    }

    // line 122
    public function block_panel($context, array $blocks = array())
    {
        $__internal_217a3c3dbb3d295ae64731937e10eccd2676f0e0562cd990c9990a7fc628f6eb = $this->env->getExtension("native_profiler");
        $__internal_217a3c3dbb3d295ae64731937e10eccd2676f0e0562cd990c9990a7fc628f6eb->enter($__internal_217a3c3dbb3d295ae64731937e10eccd2676f0e0562cd990c9990a7fc628f6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 123
        echo "    <h2>Project Configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            ";
        // line 130
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 131
            echo "                <th>Application</th>
                <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo " (on Symfony ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo ")</td>
            ";
        } else {
            // line 134
            echo "                <th>Symfony version</th>
                <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</td>
            ";
        }
        // line 137
        echo "        </tr>
        ";
        // line 138
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()))) {
            // line 139
            echo "            <tr>
                <th>Application name</th>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 144
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()))) {
            // line 145
            echo "            <tr>
                <th>Environment</th>
                <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 150
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array()))) {
            // line 151
            echo "            <tr>
                <th>Debug</th>
                <td>";
            // line 153
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("enabled") : ("disabled"));
            echo "</td>
            </tr>
        ";
        }
        // line 156
        echo "    </table>

    <h2>PHP configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>PHP version</th>
            <td>";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Xdebug</th>
            <td>";
        // line 170
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>PHP acceleration</th>
            <td>";
        // line 174
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>XCache</th>
            <td>";
        // line 178
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxcache", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>APC</th>
            <td>";
        // line 182
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasapc", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Zend OPcache</th>
            <td>";
        // line 186
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haszendopcache", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>EAccelerator</th>
            <td>";
        // line 190
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haseaccelerator", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Full PHP configuration</th>
            <td><a href=\"";
        // line 194
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\"><code>phpinfo</code></a></td>
        </tr>
    </table>

    ";
        // line 198
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array())) {
            // line 199
            echo "        <h2>Active bundles</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Path</th>
            </tr>
            ";
            // line 205
            $context["bundles"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array());
            // line 206
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["bundles"]) ? $context["bundles"] : $this->getContext($context, "bundles")))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 207
                echo "            <tr>
                <th>";
                // line 208
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                <td>";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bundles"]) ? $context["bundles"] : $this->getContext($context, "bundles")), $context["name"], array(), "array"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "        </table>
    ";
        }
        
        $__internal_217a3c3dbb3d295ae64731937e10eccd2676f0e0562cd990c9990a7fc628f6eb->leave($__internal_217a3c3dbb3d295ae64731937e10eccd2676f0e0562cd990c9990a7fc628f6eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 212,  493 => 209,  489 => 208,  486 => 207,  481 => 206,  479 => 205,  471 => 199,  469 => 198,  462 => 194,  455 => 190,  448 => 186,  441 => 182,  434 => 178,  427 => 174,  420 => 170,  413 => 166,  401 => 156,  395 => 153,  391 => 151,  388 => 150,  382 => 147,  378 => 145,  375 => 144,  369 => 141,  365 => 139,  363 => 138,  360 => 137,  355 => 135,  352 => 134,  343 => 132,  340 => 131,  338 => 130,  329 => 123,  323 => 122,  312 => 116,  306 => 115,  298 => 112,  295 => 111,  290 => 108,  284 => 106,  276 => 104,  274 => 103,  269 => 100,  261 => 97,  257 => 95,  254 => 94,  248 => 91,  244 => 89,  241 => 88,  235 => 85,  231 => 83,  228 => 82,  225 => 81,  222 => 80,  219 => 79,  213 => 76,  209 => 75,  206 => 74,  204 => 73,  198 => 72,  195 => 71,  192 => 70,  186 => 69,  183 => 67,  180 => 66,  177 => 65,  171 => 62,  164 => 58,  160 => 57,  153 => 53,  149 => 51,  146 => 50,  143 => 49,  135 => 45,  132 => 44,  129 => 42,  126 => 41,  120 => 38,  114 => 35,  111 => 34,  103 => 31,  100 => 30,  97 => 29,  94 => 28,  89 => 25,  84 => 23,  81 => 21,  78 => 19,  76 => 18,  74 => 17,  72 => 16,  70 => 15,  68 => 14,  66 => 13,  63 => 12,  61 => 11,  54 => 10,  52 => 9,  47 => 6,  44 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
