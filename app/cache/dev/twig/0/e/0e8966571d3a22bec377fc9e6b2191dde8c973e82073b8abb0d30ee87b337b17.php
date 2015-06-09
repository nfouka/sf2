<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_0e8966571d3a22bec377fc9e6b2191dde8c973e82073b8abb0d30ee87b337b17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
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
        $__internal_fbe0fea8c05c9d76d3626ac143668135d373a77fcc28e47121f9462ce1c4215d = $this->env->getExtension("native_profiler");
        $__internal_fbe0fea8c05c9d76d3626ac143668135d373a77fcc28e47121f9462ce1c4215d->enter($__internal_fbe0fea8c05c9d76d3626ac143668135d373a77fcc28e47121f9462ce1c4215d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $context["logger"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe0fea8c05c9d76d3626ac143668135d373a77fcc28e47121f9462ce1c4215d->leave($__internal_fbe0fea8c05c9d76d3626ac143668135d373a77fcc28e47121f9462ce1c4215d_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cefb1c95608273d1d744b79827a7e3c3e46f32325d004267e5b67112cc3b5458 = $this->env->getExtension("native_profiler");
        $__internal_cefb1c95608273d1d744b79827a7e3c3e46f32325d004267e5b67112cc3b5458->enter($__internal_cefb1c95608273d1d744b79827a7e3c3e46f32325d004267e5b67112cc3b5458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <svg width=\"16\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 16 28\" enable-background=\"new 0 0 16 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 6h-1V5c0-0.5-0.5-1-1-1H2C1.4 4 1 4.4 1 5v2v13c0 1.6 1.3 3 3 3h11c0.5 0 1-0.5 1-1V7 C16 6.5 15.5 6 15 6z M6 15h3v3H6V15z M6 13V7h3v6H6z M15 21c0 0.6-0.4 1-1 1H5c-0.9 0-1.7-0.4-2.2-1H13c0.6 0 1-0.4 1-1V7 c0.5 0 1 0.5 1 1V21z\"/></g></svg>
            ";
            // line 9
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array())) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array()));
            // line 15
            echo "            <span class=\"sf-toolbar-status";
            if (array_key_exists("status_color", $context)) {
                echo " sf-toolbar-status-";
                echo twig_escape_filter($this->env, (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color")), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array())) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array())) {
                // line 31
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Silenced Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 36
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 37
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/logger.html.twig", 37)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 38
            echo "    ";
        }
        
        $__internal_cefb1c95608273d1d744b79827a7e3c3e46f32325d004267e5b67112cc3b5458->leave($__internal_cefb1c95608273d1d744b79827a7e3c3e46f32325d004267e5b67112cc3b5458_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38cb22468ef418e57fe09790c045c59dadbb77686c2b4ab394d6573292267b1c = $this->env->getExtension("native_profiler");
        $__internal_38cb22468ef418e57fe09790c045c59dadbb77686c2b4ab394d6573292267b1c->enter($__internal_38cb22468ef418e57fe09790c045c59dadbb77686c2b4ab394d6573292267b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"26\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 32\" enable-background=\"new 0 0 26 32\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M23.6 3.4h-1.7V1.7c0-0.9-0.8-1.7-1.7-1.7H1.7C0.8 0 0 0.8 0 1.7v3.4v21.9C0 29.7 2.3 32 5.1 32h18.5 c0.9 0 1.7-0.8 1.7-1.7V5.1C25.3 4.1 24.5 3.4 23.6 3.4z M8.4 18.5h5.1v5.1H8.4V18.5z M8.4 15.2V5.1h5.1v10.1H8.4z M23.6 28.6 c0 0.9-0.8 1.7-1.7 1.7H6.7c-1.5 0-2.8-0.7-3.7-1.7h17.2c0.9 0 1.7-0.8 1.7-1.7V5.1c0.9 0 1.7 0.8 1.7 1.7V28.6z\"/></svg></span>
    <strong>Logs</strong>
    ";
        // line 45
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array()))) {
            // line 46
            echo "        ";
            $context["error_count"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array()));
            // line 47
            echo "        <span class=\"count\">
            <span>";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 51
        echo "</span>
";
        
        $__internal_38cb22468ef418e57fe09790c045c59dadbb77686c2b4ab394d6573292267b1c->leave($__internal_38cb22468ef418e57fe09790c045c59dadbb77686c2b4ab394d6573292267b1c_prof);

    }

    // line 54
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b42d85a9582422189da613679518afc1b9c4f79541bd6419000a14f31da5c545 = $this->env->getExtension("native_profiler");
        $__internal_b42d85a9582422189da613679518afc1b9c4f79541bd6419000a14f31da5c545->enter($__internal_b42d85a9582422189da613679518afc1b9c4f79541bd6419000a14f31da5c545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 55
        echo "    <h2>Logs</h2>

    ";
        // line 57
        $context["priority"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "get", array(0 => "priority", 1 => 0), "method");
        // line 58
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Min. Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 68
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "priorities", array()));
        foreach ($context['_seq'] as $context["value"] => $context["level"]) {
            // line 69
            echo "                            ";
            if (( !(isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) && ($context["value"] > 100))) {
                // line 70
                echo "                                ";
                $context["priority"] = $context["value"];
                // line 71
                echo "                            ";
            }
            // line 72
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            echo ((($context["value"] == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "count", array()), "html", null, true);
            echo ")</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) {
            // line 75
            echo "                            ";
            if ( !(isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority"))) {
                // line 76
                echo "                                ";
                $context["priority"] = "-100";
                // line 77
                echo "                            ";
            }
            // line 78
            echo "                            <option value=\"-100\"";
            echo ((("-100" == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">DEPRECATION only (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array()), "html", null, true);
            echo ")</option>
                        ";
        }
        // line 80
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 89
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs", array())) {
            // line 90
            echo "        <table>
            <tr>
                <th>#</th>
                <th>Priority</th>
                <th>Channel</th>
                <th>Message and context</th>
            </tr>

            ";
            // line 98
            $context["log_loop_index"] = 0;
            // line 99
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs", array()));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 100
                echo "                ";
                $context["is_deprecation"] = (($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "level", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "type", array(), "any", true, true)) && ((twig_constant("E_DEPRECATED") == $this->getAttribute($this->getAttribute($context["log"], "context", array()), "type", array())) || (twig_constant("E_USER_DEPRECATED") == $this->getAttribute($this->getAttribute($context["log"], "context", array()), "type", array()))));
                // line 101
                echo "                ";
                if (((((isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) == "-100")) ? ((isset($context["is_deprecation"]) ? $context["is_deprecation"] : $this->getContext($context, "is_deprecation"))) : (($this->getAttribute($context["log"], "priority", array()) >= (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))))) {
                    // line 102
                    echo "                    ";
                    $context["log_loop_index"] = ((isset($context["log_loop_index"]) ? $context["log_loop_index"] : $this->getContext($context, "log_loop_index")) + 1);
                    // line 103
                    echo "                    <tr class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["log_loop_index"]) ? $context["log_loop_index"] : $this->getContext($context, "log_loop_index"))), "html", null, true);
                    if ($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "scream", array(), "any", true, true)) {
                        echo " scream";
                    } elseif (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                        echo " error";
                    } elseif ((($this->getAttribute($context["log"], "priority", array()) >= 300) || (isset($context["is_deprecation"]) ? $context["is_deprecation"] : $this->getContext($context, "is_deprecation")))) {
                        echo " warning";
                    }
                    echo "\">
                        <td>";
                    // line 104
                    echo twig_escape_filter($this->env, (isset($context["log_loop_index"]) ? $context["log_loop_index"] : $this->getContext($context, "log_loop_index")), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 105
                    echo twig_escape_filter($this->env, (((isset($context["is_deprecation"]) ? $context["is_deprecation"] : $this->getContext($context, "is_deprecation"))) ? ("DEPRECATION") : ($this->getAttribute($context["log"], "priorityName", array()))), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 106
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["log"], "channel", array(), "any", true, true)) ? ($this->getAttribute($context["log"], "channel", array())) : ("")), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 107
                    echo $context["logger"]->getdisplay_message($this->getAttribute($context["loop"], "index", array()), $context["log"], (isset($context["is_deprecation"]) ? $context["is_deprecation"] : $this->getContext($context, "is_deprecation")));
                    echo "</td>
                    </tr>
                ";
                }
                // line 110
                echo "            ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 111
                echo "                <tr><td colspan=\"4\"><em>No logs available for ";
                echo twig_escape_filter($this->env, (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")), "html", null, true);
                echo " priority.</em></td></tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "        </table>
    ";
        } else {
            // line 115
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
        
        $__internal_b42d85a9582422189da613679518afc1b9c4f79541bd6419000a14f31da5c545->leave($__internal_b42d85a9582422189da613679518afc1b9c4f79541bd6419000a14f31da5c545_prof);

    }

    // line 122
    public function getdisplay_message($__log_index__ = null, $__log__ = null, $__is_deprecation__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $__log_index__,
            "log" => $__log__,
            "is_deprecation" => $__is_deprecation__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_56c4f49caba22e7e4b9f6a684deb96b28890be020e5049be890000e2287da424 = $this->env->getExtension("native_profiler");
            $__internal_56c4f49caba22e7e4b9f6a684deb96b28890be020e5049be890000e2287da424->enter($__internal_56c4f49caba22e7e4b9f6a684deb96b28890be020e5049be890000e2287da424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_message"));

            // line 123
            echo "    ";
            echo twig_escape_filter($this->env, (((isset($context["is_deprecation"]) ? $context["is_deprecation"] : $this->getContext($context, "is_deprecation"))) ? ("DEPRECATED") : ($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName", array()))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message", array()), "html", null, true);
            echo "

    ";
            // line 125
            if ((isset($context["is_deprecation"]) ? $context["is_deprecation"] : $this->getContext($context, "is_deprecation"))) {
                // line 126
                echo "        ";
                $context["stack"] = (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "stack", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "stack", array()), array())) : (array()));
                // line 127
                echo "        ";
                $context["id"] = ("sf-call-stack-" . (isset($context["log_index"]) ? $context["log_index"] : $this->getContext($context, "log_index")));
                // line 128
                echo "
        ";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message", array()), "html", null, true);
                echo "

        ";
                // line 131
                if ((isset($context["stack"]) ? $context["stack"] : $this->getContext($context, "stack"))) {
                    // line 132
                    echo "            <a href=\"#\" onclick=\"Sfjs.toggle('";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "', document.getElementById('";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "-on'), document.getElementById('";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "-off')); return false;\">
                <img class=\"toggle\" id=\"";
                    // line 133
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
                <img class=\"toggle\" id=\"";
                    // line 134
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
            </a>
        ";
                }
                // line 137
                echo "
        ";
                // line 138
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : $this->getContext($context, "stack")));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (($context["index"] > 1)) {
                        // line 139
                        echo "            ";
                        if (($context["index"] == 2)) {
                            // line 140
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 142
                        echo "            ";
                        if ($this->getAttribute($context["call"], "class", array(), "any", true, true)) {
                            // line 143
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute($context["call"], "class", array())) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute($context["call"], "function", array())));
                            // line 144
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "function", array(), "any", true, true)) {
                            // line 145
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute($context["call"], "function", array()));
                            // line 146
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "file", array(), "any", true, true)) {
                            // line 147
                            echo "                ";
                            $context["from"] = $this->getAttribute($context["call"], "file", array());
                            // line 148
                            echo "            ";
                        } else {
                            // line 149
                            echo "                ";
                            $context["from"] = "-";
                            // line 150
                            echo "            ";
                        }
                        // line 151
                        echo "
            <li>Called from ";
                        // line 152
                        echo ((($this->getAttribute($context["call"], "file", array(), "any", true, true) && $this->getAttribute($context["call"], "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute($context["call"], "file", array()), $this->getAttribute($context["call"], "line", array()), (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")))) : ((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from"))));
                        echo "</li>

            ";
                        // line 154
                        if (($context["index"] == (twig_length_filter($this->env, (isset($context["stack"]) ? $context["stack"] : $this->getContext($context, "stack"))) - 1))) {
                            // line 155
                            echo "                </ul>
            ";
                        }
                        // line 157
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "    ";
            } else {
                // line 159
                echo "        ";
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context", array())))) {
                    // line 160
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 162
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context", array()), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 165
                echo "    ";
            }
            
            $__internal_56c4f49caba22e7e4b9f6a684deb96b28890be020e5049be890000e2287da424->leave($__internal_56c4f49caba22e7e4b9f6a684deb96b28890be020e5049be890000e2287da424_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 165,  499 => 162,  495 => 160,  492 => 159,  489 => 158,  482 => 157,  478 => 155,  476 => 154,  471 => 152,  468 => 151,  465 => 150,  462 => 149,  459 => 148,  456 => 147,  453 => 146,  450 => 145,  447 => 144,  444 => 143,  441 => 142,  435 => 140,  432 => 139,  427 => 138,  424 => 137,  418 => 134,  414 => 133,  405 => 132,  403 => 131,  398 => 129,  395 => 128,  392 => 127,  389 => 126,  387 => 125,  379 => 123,  363 => 122,  352 => 115,  348 => 113,  339 => 111,  326 => 110,  320 => 107,  316 => 106,  312 => 105,  308 => 104,  296 => 103,  293 => 102,  290 => 101,  287 => 100,  268 => 99,  266 => 98,  256 => 90,  254 => 89,  243 => 80,  235 => 78,  232 => 77,  229 => 76,  226 => 75,  223 => 74,  208 => 72,  205 => 71,  202 => 70,  199 => 69,  194 => 68,  183 => 58,  181 => 57,  177 => 55,  171 => 54,  163 => 51,  157 => 48,  154 => 47,  151 => 46,  149 => 45,  144 => 42,  138 => 41,  130 => 38,  127 => 37,  124 => 36,  118 => 33,  114 => 31,  111 => 30,  105 => 27,  101 => 25,  98 => 24,  92 => 21,  88 => 19,  85 => 18,  82 => 17,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  59 => 11,  56 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
