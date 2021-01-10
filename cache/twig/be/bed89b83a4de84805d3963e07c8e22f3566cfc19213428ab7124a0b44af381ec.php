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

/* partials/mediaembed.html.twig */
class __TwigTemplate_f6db828d45b70cd2fe18aa799bc8a8d255da9354610394414567e498e42048eb extends \Twig\Template
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
        // line 2
        $context["default"] = $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "config", []), "media", []);
        // line 3
        $context["oembed"] = $this->getAttribute(($context["mediaembed"] ?? null), "service", []);
        // line 4
        echo "
";
        // line 6
        if ( !$this->getAttribute(($context["mediaembed"] ?? null), "success", [])) {
            // line 7
            echo "  ";
            if ($this->getAttribute(($context["default"] ?? null), "responsive", [])) {
                // line 8
                echo "    ";
                $context["class"] = "-responsive mediaembed-msod";
                // line 9
                echo "  ";
            } else {
                // line 10
                echo "    ";
                $context["class"] = ((" mediaembed-msod\" style=\"max-width: " . $this->getAttribute(($context["default"] ?? null), "width", [])) . "px;");
                // line 11
                echo "  ";
            }
            // line 12
            echo "
  <div class=\"mediaembed";
            // line 13
            echo ($context["class"] ?? null);
            echo "\">
    <p class=\"mediaembed-icon\">&#9749;</p>
    <p class=\"mediaembed-error-title\"><b>Unable to process oEmbed media:</b><a href=\"";
            // line 15
            echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "src", []);
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "alt", []);
            echo "\" title=\"";
            echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "title", []);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "src", []));
            echo "</a></p>
    <p class=\"mediaembed-error-message\"><b>Error:</b>";
            // line 16
            echo $this->getAttribute(($context["mediaembed"] ?? null), "message", []);
            echo "</p>
  </div>

";
        } else {
            // line 21
            echo "  ";
            $context["response"] = $this->getAttribute(($context["oembed"] ?? null), "attributes", []);
            // line 22
            echo "  ";
            // line 23
            echo "  ";
            if (((twig_test_empty($this->getAttribute(($context["response"] ?? null), "width", [])) ||  !$this->getAttribute(($context["response"] ?? null), "width", [], "any", true, true)) || ($this->getAttribute(($context["response"] ?? null), "width", []) == 0))) {
                // line 24
                echo "    ";
                $context["response"] = twig_array_merge(($context["response"] ?? null), ["width" => (($this->getAttribute(($context["default"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default"] ?? null), "width", []), 1)) : (1))]);
                // line 25
                echo "  ";
            }
            // line 26
            echo "
  ";
            // line 27
            if (((twig_test_empty($this->getAttribute(($context["response"] ?? null), "height", [])) ||  !$this->getAttribute(($context["response"] ?? null), "height", [], "any", true, true)) || ($this->getAttribute(($context["response"] ?? null), "height", []) == 0))) {
                // line 28
                echo "    ";
                $context["response"] = twig_array_merge(($context["response"] ?? null), ["height" => (($this->getAttribute(($context["default"] ?? null), "height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default"] ?? null), "height", []), 1)) : (1))]);
                // line 29
                echo "  ";
            }
            // line 30
            echo "
  ";
            // line 31
            $context["width"] = $this->getAttribute(($context["response"] ?? null), "width", []);
            // line 32
            echo "  ";
            $context["height"] = $this->getAttribute(($context["response"] ?? null), "height", []);
            // line 33
            echo "  ";
            $context["ratio"] = (($context["height"] ?? null) / ($context["width"] ?? null));
            // line 34
            echo "
  ";
            // line 36
            echo "  ";
            if ($this->getAttribute(($context["default"] ?? null), "adjust", [])) {
                // line 37
                echo "    ";
                // line 38
                echo "    ";
                if ((((($context["width"] ?? null) * ($context["ratio"] ?? null)) > $this->getAttribute(($context["default"] ?? null), "height", [])) || ((($context["height"] ?? null) / ($context["ratio"] ?? null)) > $this->getAttribute(($context["default"] ?? null), "width", [])))) {
                    // line 39
                    echo "      ";
                    // line 40
                    echo "      ";
                    $context["width"] = (($this->getAttribute(($context["default"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default"] ?? null), "width", []), 1)) : (1));
                    // line 41
                    echo "      ";
                    $context["height"] = twig_round(($this->getAttribute(($context["default"] ?? null), "width", []) * ($context["ratio"] ?? null)));
                    // line 42
                    echo "    ";
                }
                // line 43
                echo "  ";
            } else {
                // line 44
                echo "    ";
                $context["width"] = (($this->getAttribute(($context["default"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default"] ?? null), "width", []), 1)) : (1));
                // line 45
                echo "    ";
                $context["height"] = (($this->getAttribute(($context["default"] ?? null), "height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default"] ?? null), "height", []), 1)) : (1));
                // line 46
                echo "  ";
            }
            // line 47
            echo "
  ";
            // line 49
            echo "  ";
            $context["ratio"] = (($context["height"] ?? null) / ($context["width"] ?? null));
            // line 50
            echo "  ";
            $context["container_styles"] = (("padding-bottom: " . sprintf("%.2f", (($context["ratio"] ?? null) * 100))) . "%;");
            // line 51
            echo "
  ";
            // line 53
            echo "  ";
            if ($this->getAttribute(($context["default"] ?? null), "responsive", [])) {
                // line 54
                echo "    ";
                $context["responsive"] = "-responsive";
                // line 55
                echo "
    ";
                // line 56
                $context["width"] = 1920;
                // line 57
                echo "    ";
                $context["height"] = twig_round((($context["width"] ?? null) * ($context["ratio"] ?? null)));
                // line 58
                echo "  ";
            } else {
                // line 59
                echo "    ";
                $context["styles"] = ((((" style=\"max-width: " . ($context["width"] ?? null)) . "px; max-height: ") . ($context["height"] ?? null)) . "px;\"");
                // line 60
                echo "  ";
            }
            // line 61
            echo "
  ";
            // line 63
            echo "  ";
            if ($this->getAttribute(($context["default"] ?? null), "preview", [])) {
                // line 64
                echo "    ";
                $context["lazyload"] = " lazyload";
                // line 65
                echo "    ";
                $context["lazyload_script"] = " onclick=\"lazyload(this)\"";
                // line 66
                echo "  ";
            }
            // line 67
            echo "
  <div class=\"mediaembed";
            // line 68
            echo ($context["responsive"] ?? null);
            echo " mediaembed-media mediaembed-";
            echo $this->getAttribute(($context["oembed"] ?? null), "type", []);
            echo " mediaembed-";
            echo twig_lower_filter($this->env, $this->getAttribute(($context["oembed"] ?? null), "name", []));
            echo ($context["lazyload"] ?? null);
            echo "\"";
            echo ($context["styles"] ?? null);
            echo ">
    <div class=\"mediaembed-container\" style=\"";
            // line 69
            echo ($context["container_styles"] ?? null);
            echo "\">
    ";
            // line 71
            echo "
    ";
            // line 73
            echo "    ";
            if (($this->getAttribute(($context["oembed"] ?? null), "type", []) == "photo")) {
                // line 74
                echo "      ";
                $context["title"] = (((($this->getAttribute($this->getAttribute(($context["oembed"] ?? null), "getOembed", [], "method"), "provider_name", []) . ": &#8220;") . $this->getAttribute(($context["oembed"] ?? null), "title", [])) . "&#8221; by ") . $this->getAttribute(($context["oembed"] ?? null), "author", []));
                // line 75
                echo "      <a class=\"mediaembed-embed\" href=\"";
                echo $this->getAttribute(($context["oembed"] ?? null), "author", [0 => "url"], "method");
                echo "\" title=\"";
                echo ($context["title"] ?? null);
                echo "\">
        <img src=\"";
                // line 76
                echo $this->getAttribute(($context["oembed"] ?? null), "url", []);
                echo "\" alt=\"";
                echo $this->getAttribute(($context["oembed"] ?? null), "title", []);
                echo "\">
      </a>

    ";
                // line 80
                echo "    ";
            } elseif (($this->getAttribute(($context["oembed"] ?? null), "type", []) == "video")) {
                // line 81
                echo "      <a href=\"";
                echo $this->getAttribute(($context["oembed"] ?? null), "getEmbedCode", []);
                echo "\" alt=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "alt", []);
                echo "\" title=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "title", []);
                echo "\" class=\"mediaembed-media\"";
                echo ($context["lazyload_script"] ?? null);
                echo ">
        ";
                // line 83
                echo "        <!--
        <iframe class=\"mediaembed-embed\" src=\"";
                // line 84
                echo $this->getAttribute(($context["oembed"] ?? null), "getEmbedCode", []);
                echo "\" width=\"";
                echo ($context["width"] ?? null);
                echo "\" height=\"";
                echo ($context["height"] ?? null);
                echo "\" frameborder=\"0\" scrolling=\"no\" webkitallowfullscreen mozallowfullscreen allowfullscreen>
          <p>Your browser does not support iframes.</p>
        </iframe>
        -->

        ";
                // line 90
                echo "        ";
                if (($this->getAttribute(($context["default"] ?? null), "preview", []) && $this->getAttribute(($context["oembed"] ?? null), "thumbnail", []))) {
                    // line 91
                    echo "          <img src=\"";
                    echo $this->getAttribute(($context["oembed"] ?? null), "thumbnail", []);
                    echo "\" alt=\"";
                    echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "alt", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "title", []);
                    echo "\" class=\"mediaembed-thumbnail\" />
        ";
                } else {
                    // line 93
                    echo "          ";
                    // line 94
                    echo "        ";
                }
                // line 95
                echo "
        ";
                // line 97
                echo "        <input type=\"checkbox\" id=\"mediaembed-hidden-input-";
                echo $this->getAttribute(($context["mediaembed"] ?? null), "uid", []);
                echo "\" class=\"mediaembed-input\" />

        ";
                // line 100
                echo "        <noscript>
          <iframe class=\"mediaembed-embed\" src=\"";
                // line 101
                echo $this->getAttribute(($context["oembed"] ?? null), "getEmbedCode", []);
                echo "\" width=\"";
                echo ($context["width"] ?? null);
                echo "\" height=\"";
                echo ($context["height"] ?? null);
                echo "\" frameborder=\"0\" scrolling=\"no\" webkitallowfullscreen mozallowfullscreen allowfullscreen style=\"display: none;\">
            <p>Your browser does not support iframes.</p>
          </iframe>
        </noscript>

        <label class=\"mediaembed-play\" for=\"mediaembed-hidden-input-";
                // line 106
                echo $this->getAttribute(($context["mediaembed"] ?? null), "uid", []);
                echo "\">&#9654;</label>
      </a>

    ";
                // line 110
                echo "    ";
            } elseif (($this->getAttribute(($context["oembed"] ?? null), "type", []) == "link")) {
                // line 111
                echo "      ";
                $context["title"] = (((($this->getAttribute($this->getAttribute(($context["oembed"] ?? null), "getOembed", [], "method"), "provider_name", []) . ": &#8220;") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["oembed"] ?? null), "mediaembed", [], "any", false, true), "raw", [], "any", false, true), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["oembed"] ?? null), "mediaembed", [], "any", false, true), "raw", [], "any", false, true), "title", []), ($context["title"] ?? null))) : (($context["title"] ?? null)))) . "&#8221; by ") . $this->getAttribute(($context["oembed"] ?? null), "author", []));
                // line 112
                echo "      <a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "src", []);
                echo "\" alt=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "alt", []);
                echo "\" title=\"";
                echo ($context["title"] ?? null);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "src", []));
                echo "</a>
    ";
                // line 114
                echo "    ";
            } elseif (($this->getAttribute(($context["oembed"] ?? null), "type", []) == "rich")) {
                // line 115
                echo "      <div class=\"mediaembed-media\">";
                echo $this->getAttribute(($context["oembed"] ?? null), "getEmbedCode", [], "method");
                echo "</div>

    ";
                // line 118
                echo "    ";
            } else {
                // line 119
                echo "      ";
                // line 120
                echo "      <a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "src", []);
                echo "\" alt=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "alt", []);
                echo "\" title=\"";
                echo $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "title", []);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["mediaembed"] ?? null), "raw", []), "src", []));
                echo "</a>
    ";
            }
            // line 122
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/mediaembed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 122,  349 => 120,  347 => 119,  344 => 118,  338 => 115,  335 => 114,  324 => 112,  321 => 111,  318 => 110,  312 => 106,  300 => 101,  297 => 100,  291 => 97,  288 => 95,  285 => 94,  283 => 93,  273 => 91,  270 => 90,  258 => 84,  255 => 83,  244 => 81,  241 => 80,  233 => 76,  226 => 75,  223 => 74,  220 => 73,  217 => 71,  213 => 69,  202 => 68,  199 => 67,  196 => 66,  193 => 65,  190 => 64,  187 => 63,  184 => 61,  181 => 60,  178 => 59,  175 => 58,  172 => 57,  170 => 56,  167 => 55,  164 => 54,  161 => 53,  158 => 51,  155 => 50,  152 => 49,  149 => 47,  146 => 46,  143 => 45,  140 => 44,  137 => 43,  134 => 42,  131 => 41,  128 => 40,  126 => 39,  123 => 38,  121 => 37,  118 => 36,  115 => 34,  112 => 33,  109 => 32,  107 => 31,  104 => 30,  101 => 29,  98 => 28,  96 => 27,  93 => 26,  90 => 25,  87 => 24,  84 => 23,  82 => 22,  79 => 21,  72 => 16,  62 => 15,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  34 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Shortcut variables #}
{% set default = mediaembed.config.media %}
{% set oembed = mediaembed.service %}

{# Processing error #}
{% if not mediaembed.success %}
  {% if default.responsive %}
    {% set class = \"-responsive mediaembed-msod\" %}
  {% else  %}
    {% set class = \" mediaembed-msod\\\" style=\\\"max-width: \" ~ default.width ~ \"px;\" %}
  {% endif %}

  <div class=\"mediaembed{{ class }}\">
    <p class=\"mediaembed-icon\">&#9749;</p>
    <p class=\"mediaembed-error-title\"><b>Unable to process oEmbed media:</b><a href=\"{{ mediaembed.raw.src }}\" alt=\"{{ mediaembed.raw.alt }}\" title=\"{{ mediaembed.raw.title }}\">{{ mediaembed.raw.src|e }}</a></p>
    <p class=\"mediaembed-error-message\"><b>Error:</b>{{ mediaembed.message }}</p>
  </div>

{# Setup block #}
{% else %}
  {% set response = oembed.attributes %}
  {# Normalize response #}
  {% if (response.width is empty) or not (response.width is defined) or (response.width == 0) %}
    {% set response = response|merge({'width' : default.width|default(1)}) %}
  {% endif %}

  {% if (response.height is empty) or not (response.height is defined) or (response.height == 0) %}
    {% set response = response|merge({'height' : default.height|default(1)}) %}
  {% endif %}

  {% set width = response.width %}
  {% set height = response.height %}
  {% set ratio = height / width %}

  {# Adjust OEmbed media dimensions or restrict them? #}
  {% if default.adjust %}
    {# Check if computed height is larger than default setting #}
    {% if (width * ratio) > default.height or (height / ratio) > default.width %}
      {# Rescale width and height #}
      {% set width = default.width|default(1) %}
      {% set height = (default.width * ratio)|round %}
    {% endif %}
  {% else %}
    {% set width = default.width|default(1) %}
    {% set height = default.height|default(1) %}
  {% endif %}

  {# Recompute aspect ratio #}
  {% set ratio = height / width %}
  {% set container_styles = \"padding-bottom: \" ~ \"%.2f\"|format(ratio * 100) ~ \"%;\" %}

  {# Embed responsive OEmbed media #}
  {% if default.responsive %}
    {% set responsive = \"-responsive\" %}

    {% set width = 1920 %}
    {% set height = (width * ratio)|round %}
  {% else  %}
    {% set styles = \" style=\\\"max-width: \" ~ width ~ \"px; max-height: \" ~ height ~ \"px;\\\"\" %}
  {% endif %}

  {# Setup lazy loading media for those with preview enabled #}
  {% if default.preview %}
    {% set lazyload = \" lazyload\" %}
    {% set lazyload_script = \" onclick=\\\"lazyload(this)\\\"\" %}
  {% endif %}

  <div class=\"mediaembed{{ responsive }} mediaembed-media mediaembed-{{ oembed.type }} mediaembed-{{ oembed.name|lower }}{{ lazyload }}\"{{ styles }}>
    <div class=\"mediaembed-container\" style=\"{{ container_styles }}\">
    {# Embed content according to media type #}

    {# -- Photo -- #}
    {% if oembed.type == \"photo\" %}
      {% set title = oembed.getOembed().provider_name ~ ': &#8220;' ~ oembed.title ~ '&#8221; by ' ~ oembed.author %}
      <a class=\"mediaembed-embed\" href=\"{{ oembed.author('url') }}\" title=\"{{ title }}\">
        <img src=\"{{ oembed.url }}\" alt=\"{{ oembed.title }}\">
      </a>

    {# -- Video -- #}
    {% elseif oembed.type == \"video\" %}
      <a href=\"{{ oembed.getEmbedCode }}\" alt=\"{{ mediaembed.raw.alt }}\" title=\"{{ mediaembed.raw.title }}\" class=\"mediaembed-media\"{{ lazyload_script }}>
        {# JavaScript lazy-loading #}
        <!--
        <iframe class=\"mediaembed-embed\" src=\"{{ oembed.getEmbedCode }}\" width=\"{{ width }}\" height=\"{{ height }}\" frameborder=\"0\" scrolling=\"no\" webkitallowfullscreen mozallowfullscreen allowfullscreen>
          <p>Your browser does not support iframes.</p>
        </iframe>
        -->

        {# Show Thumbnail #}
        {% if default.preview and oembed.thumbnail %}
          <img src=\"{{ oembed.thumbnail }}\" alt=\"{{ mediaembed.raw.alt }}\" title=\"{{ mediaembed.raw.title }}\" class=\"mediaembed-thumbnail\" />
        {% else %}
          {# Show placeholder #}
        {% endif %}

        {# Toggle for loading iframe content #}
        <input type=\"checkbox\" id=\"mediaembed-hidden-input-{{  mediaembed.uid }}\" class=\"mediaembed-input\" />

        {# Implement JavaScript-less lazyload technique #}
        <noscript>
          <iframe class=\"mediaembed-embed\" src=\"{{ oembed.getEmbedCode }}\" width=\"{{ width }}\" height=\"{{ height }}\" frameborder=\"0\" scrolling=\"no\" webkitallowfullscreen mozallowfullscreen allowfullscreen style=\"display: none;\">
            <p>Your browser does not support iframes.</p>
          </iframe>
        </noscript>

        <label class=\"mediaembed-play\" for=\"mediaembed-hidden-input-{{  mediaembed.uid }}\">&#9654;</label>
      </a>

    {# -- Link -- #}
    {% elseif oembed.type == \"link\" %}
      {% set title = oembed.getOembed().provider_name ~ ': &#8220;' ~ oembed.mediaembed.raw.title|default(title) ~ '&#8221; by ' ~ oembed.author %}
      <a href=\"{{ mediaembed.raw.src }}\" alt=\"{{ mediaembed.raw.alt }}\" title=\"{{ title }}\">{{ mediaembed.raw.src|e }}</a>
    {# -- Rich media -- #}
    {% elseif oembed.type == \"rich\" %}
      <div class=\"mediaembed-media\">{{ oembed.getEmbedCode() }}</div>

    {# -- Nothing from above -- #}
    {% else %}
      {# Show at least a link for the user #}
      <a href=\"{{ mediaembed.raw.src }}\" alt=\"{{ mediaembed.raw.alt }}\" title=\"{{ mediaembed.raw.title }}\">{{ mediaembed.raw.src|e }}</a>
    {% endif %}
    </div>
  </div>
{% endif %}
", "partials/mediaembed.html.twig", "/var/www/html/grav/user/plugins/mediaembed/templates/partials/mediaembed.html.twig");
    }
}
