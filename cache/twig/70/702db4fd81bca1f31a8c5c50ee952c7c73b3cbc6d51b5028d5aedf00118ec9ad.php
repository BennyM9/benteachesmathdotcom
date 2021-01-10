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

/* partials/page/header.html.twig */
class __TwigTemplate_229ae468560297a4ca7c20d08b99ca0ce29848c70e7d91054d1d93b1a49bcd91 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header_navigation' => [$this, 'block_header_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<h1><a href=\"";
        echo ($context["home_url"] ?? null);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</a>
</h1>

";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", [])) {
            // line 5
            echo ((($context["html5"] ?? null)) ? ("<aside>") : ("<p class=\"subtitle\">"));
            echo "
  ";
            // line 6
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []);
            echo "
";
            // line 7
            echo ((($context["html5"] ?? null)) ? ("</aside>") : ("</p>"));
            echo "
";
        }
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "all", [])) {
            // line 15
            echo "    ";
            $this->loadTemplate("partials/page/messages.html.twig", "partials/page/header.html.twig", 15)->display($context);
        }
    }

    // line 10
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 11
        echo "    ";
        $this->loadTemplate("partials/page/navigation.html.twig", "partials/page/header.html.twig", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "partials/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  71 => 10,  65 => 15,  63 => 14,  60 => 13,  58 => 10,  55 => 9,  50 => 7,  46 => 6,  42 => 5,  40 => 4,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1><a href=\"{{ home_url }}\">{{ site.title|e('html') }}</a>
</h1>

{% if site.metadata.description %}
{{ html5 ? '<aside>' : '<p class=\"subtitle\">' }}
  {{ site.metadata.description }}
{{ html5 ? '</aside>' : '</p>' }}
{% endif %}

{% block header_navigation %}
    {% include 'partials/page/navigation.html.twig' %}
{% endblock %}

{% if grav.messages.all %}
    {% include 'partials/page/messages.html.twig' %}
{% endif %}
", "partials/page/header.html.twig", "/var/www/html/grav/user/themes/hypertext/templates/partials/page/header.html.twig");
    }
}
