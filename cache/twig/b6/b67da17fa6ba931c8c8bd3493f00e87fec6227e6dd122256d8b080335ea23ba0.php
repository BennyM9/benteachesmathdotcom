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

/* partials/page/footer.html.twig */
class __TwigTemplate_2d7a300785faf3a228db8ef764360ad144508030ae7b78c9d86ff2851a6bd361 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<hr/>
";
        // line 3
        if (((($this->getAttribute($this->getAttribute(($context["partials"] ?? null), "footer", [], "any", false, true), "custom_footer", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["partials"] ?? null), "footer", [], "any", false, true), "custom_footer", []), "")) : ("")) != "")) {
            // line 4
            echo "    ";
            if (((($this->getAttribute($this->getAttribute(($context["partials"] ?? null), "footer", [], "any", false, true), "custom_footer_type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["partials"] ?? null), "footer", [], "any", false, true), "custom_footer_type", []), "markdown")) : ("markdown")) == "markdown")) {
                // line 5
                echo "        ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($this->getAttribute(($context["partials"] ?? null), "footer", []), "custom_footer", []));
                echo "
    ";
            } else {
                // line 7
                echo "        ";
                echo $this->getAttribute($this->getAttribute(($context["partials"] ?? null), "footer", []), "custom_footer", []);
                echo "
    ";
            }
        }
        // line 10
        echo "
<p>";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_HYPERTEXT.FOOTER.BY_LINE");
        echo "</p>

";
        // line 13
        $this->displayBlock('bottom', $context, $blocks);
    }

    public function block_bottom($context, array $blocks = [])
    {
        // line 14
        if (($context["allowJS"] ?? null)) {
            // line 15
            echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
            echo "
";
        }
        // line 17
        echo "
";
        // line 18
        if (($context["allowCSS"] ?? null)) {
            // line 19
            echo $this->getAttribute(($context["assets"] ?? null), "css", [0 => "bottom"], "method");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "partials/page/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  76 => 18,  73 => 17,  68 => 15,  66 => 14,  60 => 13,  55 => 11,  52 => 10,  45 => 7,  39 => 5,  36 => 4,  34 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<hr/>
{# Write the custom footer, if available. #}
{% if partials.footer.custom_footer|default('') != '' %}
    {% if partials.footer.custom_footer_type|default('markdown') == 'markdown' %}
        {{ partials.footer.custom_footer|markdown }}
    {% else %}
        {{ partials.footer.custom_footer|raw }}
    {% endif %}
{% endif %}

<p>{{ 'THEME_HYPERTEXT.FOOTER.BY_LINE'|t }}</p>

{% block bottom %}
{% if allowJS %}
{{ assets.js('bottom')|raw }}
{% endif %}

{% if allowCSS %}
{{ assets.css('bottom')|raw }}
{% endif %}
{% endblock %}
", "partials/page/footer.html.twig", "/var/www/html/grav/user/themes/hypertext/templates/partials/page/footer.html.twig");
    }
}
