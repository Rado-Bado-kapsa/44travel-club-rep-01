<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gavias_lozin/templates/views/articles/views-view-unformatted--news-grid-3-2.html.twig */
class __TwigTemplate_1c169f092e75b100be8783fc281145d2c1c90e9c155bc0688f8cda44cc84e909 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "for" => 5, "set" => 6];
        $filters = ["escape" => 2, "batch" => 5, "length" => 12];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'batch', 'length'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($context["attributes"] ?? null)) {
            // line 2
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
";
        }
        // line 4
        echo "   <div class=\"news-grid-3-2\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["rows"] ?? null), 5));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 6
            echo "         ";
            $context["k"] = 0;
            // line 7
            echo "         ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                echo " 
            ";
                // line 8
                $context["k"] = (($context["k"] ?? null) + 1);
                // line 9
                echo "            ";
                if ((($context["k"] ?? null) <= 2)) {
                    // line 10
                    echo "               ";
                    if ((($context["k"] ?? null) == 1)) {
                        echo "<div class=\"posts-large lg-block-grid-2 md-block-grid-2 sm-block-grid-2 xs-block-grid-2\">";
                    }
                    // line 11
                    echo "                  <div class=\"item-columns post-item\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                    echo "</div>
               ";
                    // line 12
                    if (((($context["k"] ?? null) == 2) || (($context["k"] ?? null) == twig_length_filter($this->env, $context["row"])))) {
                        echo "</div>";
                    }
                    // line 13
                    echo "            ";
                } else {
                    // line 14
                    echo "               ";
                    if ((($context["k"] ?? null) == 3)) {
                        echo " <div class=\"post-small lg-block-grid-3 md-block-grid-3 sm-block-grid-1 xs-block-grid-1\"> ";
                    }
                    // line 15
                    echo "                  <div class=\"post-item\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                    echo "</div>
               ";
                    // line 16
                    if (((($context["k"] ?? null) == 5) || (($context["k"] ?? null) == twig_length_filter($this->env, $context["row"])))) {
                        echo "</div>";
                    }
                    // line 17
                    echo "            ";
                }
                // line 18
                echo "         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "   </div>   
";
        // line 21
        if (($context["attributes"] ?? null)) {
            // line 22
            echo "</div>
";
        }
        // line 24
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/views/articles/views-view-unformatted--news-grid-3-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 24,  136 => 22,  134 => 21,  131 => 20,  125 => 19,  119 => 18,  116 => 17,  112 => 16,  107 => 15,  102 => 14,  99 => 13,  95 => 12,  90 => 11,  85 => 10,  82 => 9,  80 => 8,  73 => 7,  70 => 6,  66 => 5,  63 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/views/articles/views-view-unformatted--news-grid-3-2.html.twig", "/var/chroot/travel33click/var/www/travel33click/44travel.club/topevents/www/web/themes/gavias_lozin/templates/views/articles/views-view-unformatted--news-grid-3-2.html.twig");
    }
}
