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

/* partials/page/js-css.html.twig */
class __TwigTemplate_443c574859215b6353e1f1c2f3fe4d4cd5136dd2d47d65ad72c7bc965c9e96a5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylehseets' => [$this, 'block_stylehseets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('stylehseets', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        $this->displayBlock('assets', $context, $blocks);
        // line 28
        echo "


";
        // line 32
        if (((($this->getAttribute(($context["style"] ?? null), "width", []) != "default") || ($this->getAttribute(        // line 33
($context["style"] ?? null), "configuration", []) != "default")) || ($this->getAttribute(        // line 34
($context["style"] ?? null), "customCSS", []) != ""))) {
            // line 35
            echo "<style>
body {
";
            // line 37
            echo ((($this->getAttribute(($context["style"] ?? null), "width", []) != "default")) ? ((("max-width: " . $this->getAttribute(($context["style"] ?? null), "width", [])) . "px;")) : (""));
            echo "
";
            // line 40
            if (($this->getAttribute(($context["style"] ?? null), "configuration", []) == "default")) {
                // line 41
                echo "    margin-left: 8px;
    margin-right: 8px;
";
            } else {
                // line 44
                echo "    margin-left: auto;
    margin-right: auto;
";
            }
            // line 47
            echo "}

";
            // line 50
            echo "img { max-width: 100%; }

";
            // line 58
            echo "
";
            // line 60
            echo ((($this->getAttribute(($context["style"] ?? null), "customCSS", []) != "")) ? ($this->getAttribute(($context["style"] ?? null), "customCSS", [])) : (""));
            echo "
</style>
";
        }
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 1
    public function block_stylehseets($context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 5
        if ((($context["stylesheet"] ?? null) != "default")) {
            // line 6
            echo "  ";
            if (($this->getAttribute(($context["style"] ?? null), "include_type", []) == "inline")) {
                // line 7
                echo "    ";
                // line 8
                echo "    <style>";
                echo twig_include($this->env, $context, (("css/" . ($context["stylesheet"] ?? null)) . ".css"));
                echo "</style>
  ";
            } elseif ( !$this->getAttribute(            // line 9
($context["style"] ?? null), "allowCSS", [])) {
                // line 10
                echo "    ";
                // line 11
                echo "    <link href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc((("theme://css/" . ($context["stylesheet"] ?? null)) . ".css"));
                echo "\" rel=\"stylesheet\" />
  ";
            } else {
                // line 13
                echo "    ";
                // line 14
                echo "    ";
                $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (("theme://css/" . ($context["stylesheet"] ?? null)) . ".css")], "method");
                // line 15
                echo "  ";
            }
        }
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        // line 20
        echo "  ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 24
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 25
        echo "  ";
        if (($context["allowCSS"] ?? null)) {
            echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        }
        // line 26
        echo "  ";
        if (($context["allowJS"] ?? null)) {
            echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        }
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "partials/page/js-css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 26,  148 => 25,  145 => 24,  136 => 20,  133 => 19,  127 => 15,  124 => 14,  122 => 13,  116 => 11,  114 => 10,  112 => 9,  107 => 8,  105 => 7,  102 => 6,  100 => 5,  97 => 2,  94 => 1,  85 => 60,  82 => 58,  78 => 50,  74 => 47,  69 => 44,  64 => 41,  62 => 40,  58 => 37,  54 => 35,  52 => 34,  51 => 33,  50 => 32,  45 => 28,  43 => 24,  40 => 22,  38 => 19,  35 => 18,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block stylehseets %}

{# Add the stylesheet #}
{# TODO: Add sourcing options from unpkg rather than locally #}
{% if stylesheet != 'default' %}
  {% if style.include_type == 'inline' %}
    {# User *explicitly* wants it imported in style tags #}
    <style>{{ include('css/' ~ stylesheet ~ '.css') }}</style>
  {% elseif not style.allowCSS %}
    {# User wants it via href, but doesn't have CSS pipeline running #}
    <link href=\"{{ url('theme://css/'~stylesheet~'.css') }}\" rel=\"stylesheet\" />
  {% else %}
    {# User wants it href and is allowing CSS #}
    {% do assets.addCss('theme://css/'~stylesheet~'.css') %}
  {% endif %}
{% endif %}
{% endblock %}

{% block javascripts %}
  {# Hypertext doesn't add any JS, but if it did it would go here. #}
{% endblock %}

{# Regular CSS/JS includes #}
{% block assets deferred %}
  {% if allowCSS %}{{ assets.css()|raw }}{% endif %}
  {% if allowJS %}{{ assets.js()|raw }}{% endif %}
{% endblock %}



{# Add custom styles (if needed) #}
{% if style.width != 'default' or 
      style.configuration != 'default' or
      style.customCSS != '' %}
<style>
body {
{{ style.width != 'default' ? \"max-width: #{style.width}px;\" : \"\"}}
{# Set only left and right margins because some stylesheets set vertical. #}
{# Also reset to 8px, the Chrome default (`unset` doesn't work). #}
{% if style.configuration == 'default' %}
    margin-left: 8px;
    margin-right: 8px;
{% else %}
    margin-left: auto;
    margin-right: auto;
{% endif %}
}

{# This is the one piece of style that is unavoidable. See documentation for details. #}
img { max-width: 100%; }

{# This was a bad idea.
{% if style.header_image_align|default('default') == 'left' %}
.snippet img { float: left; margin: 0 1em; }
section { clear: both; }
{% endif %} 
#}

{# User's styles #}
{{ style.customCSS != '' ? style.customCSS : \"\" }}
</style>
{% endif %}", "partials/page/js-css.html.twig", "/var/www/html/grav/user/themes/hypertext/templates/partials/page/js-css.html.twig");
    }
}
