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

/* blog_list.html.twig */
class __TwigTemplate_810d85bb5e5b7d62ff156895e024e952220c5961cff869d11e2b0749cf08eac8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->loadTemplate("blog_list.html.twig", "blog_list.html.twig", 1, "553430031")->display($context);
    }

    public function getTemplateName()
    {
        return "blog_list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'default.html.twig' %}
{# This only exists to improve compatibility with other themes. #}
{# It may be extended in the future, though. Use collection if possible. #}
{% endembed %}", "blog_list.html.twig", "/var/www/html/grav/user/themes/hypertext/templates/blog_list.html.twig");
    }
}


/* blog_list.html.twig */
class __TwigTemplate_810d85bb5e5b7d62ff156895e024e952220c5961cff869d11e2b0749cf08eac8___553430031 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        return "default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("default.html.twig", "blog_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "blog_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'default.html.twig' %}
{# This only exists to improve compatibility with other themes. #}
{# It may be extended in the future, though. Use collection if possible. #}
{% endembed %}", "blog_list.html.twig", "/var/www/html/grav/user/themes/hypertext/templates/blog_list.html.twig");
    }
}
