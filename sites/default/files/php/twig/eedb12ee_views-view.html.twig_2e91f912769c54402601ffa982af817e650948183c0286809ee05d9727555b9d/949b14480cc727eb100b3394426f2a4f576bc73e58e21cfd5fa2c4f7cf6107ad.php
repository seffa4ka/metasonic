<?php

/* themes/custom/metasonic/templates/views/views-view.html.twig */
class __TwigTemplate_44bf4517b734cdd7405ad8a5d38bf1ad518d8bc6445ea74db1155c2aa01b6439 extends Twig_Template
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
        $tags = array("set" => 2, "if" => 12);
        $filters = array("clean_class" => 4);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 2
        $context["classes"] = array(0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 4
($context["id"] ?? null))), 2 => ("view-id-" .         // line 5
($context["id"] ?? null)), 3 => ("view-display-id-" .         // line 6
($context["display_id"] ?? null)), 4 => ((        // line 7
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
        // line 10
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 12
        if (($context["title"] ?? null)) {
            // line 13
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 15
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  ";
        // line 16
        if (($context["header"] ?? null)) {
            // line 17
            echo "    <div class=\"view-header\">
      ";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 21
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 22
            echo "    <div class=\"view-filters\">
      ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 26
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 27
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if (($context["rows"] ?? null)) {
            // line 33
            echo "    <div class=\"view-content\">
      ";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 37
        echo "  ";
        if (($context["pager"] ?? null)) {
            // line 38
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 40
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 41
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 45
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 46
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 48
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 49
            echo "    <div class=\"view-footer\">
      ";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 53
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/metasonic/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 53,  156 => 50,  153 => 49,  150 => 48,  144 => 46,  141 => 45,  135 => 42,  132 => 41,  129 => 40,  123 => 38,  120 => 37,  114 => 34,  111 => 33,  109 => 32,  106 => 31,  100 => 28,  97 => 27,  94 => 26,  88 => 23,  85 => 22,  82 => 21,  76 => 18,  73 => 17,  71 => 16,  66 => 15,  60 => 13,  58 => 12,  54 => 11,  49 => 10,  47 => 7,  46 => 6,  45 => 5,  44 => 4,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/metasonic/templates/views/views-view.html.twig", "/var/www/drupalvm/drupal/web/themes/custom/metasonic/templates/views/views-view.html.twig");
    }
}
