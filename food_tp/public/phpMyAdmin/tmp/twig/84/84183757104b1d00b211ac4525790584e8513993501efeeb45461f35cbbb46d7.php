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

/* list/item.twig */
class __TwigTemplate_ca0deaad47016f0deff6b780c16f305de2c828bb955942089a3afc0b526484c9 extends \Twig\Template
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
        echo "<li";
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : null))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 2
        if ( !twig_test_empty((isset($context["class"]) ? $context["class"] : null))) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\"";
        }
        echo ">

    ";
        // line 4
        if ((((isset($context["url"]) || array_key_exists("url", $context)) && twig_test_iterable((isset($context["url"]) ? $context["url"] : null))) &&  !twig_test_empty($this->getAttribute((isset($context["url"]) ? $context["url"] : null), "href", [], "array")))) {
            // line 5
            echo "        <a";
            if ( !twig_test_empty($this->getAttribute((isset($context["url"]) ? $context["url"] : null), "href", [], "array"))) {
                echo " href=\"";
                echo $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "href", [], "array");
                echo "\"";
            }
            // line 6
            if ( !twig_test_empty($this->getAttribute((isset($context["url"]) ? $context["url"] : null), "target", [], "array"))) {
                echo " target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "target", [], "array"), "html", null, true);
                echo "\"";
            }
            // line 7
            if (( !twig_test_empty($this->getAttribute((isset($context["url"]) ? $context["url"] : null), "target", [], "array")) && ($this->getAttribute((isset($context["url"]) ? $context["url"] : null), "target", [], "array") == "_blank"))) {
                echo " rel=\"noopener noreferrer\"";
            }
            // line 8
            if ( !twig_test_empty($this->getAttribute((isset($context["url"]) ? $context["url"] : null), "id", [], "array"))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "id", [], "array"), "html", null, true);
                echo "\"";
            }
            // line 9
            if ( !twig_test_empty($this->getAttribute((isset($context["url"]) ? $context["url"] : null), "class", [], "array"))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "class", [], "array"), "html", null, true);
                echo "\"";
            }
            // line 10
            if ( !twig_test_empty($this->getAttribute((isset($context["url"]) ? $context["url"] : null), "title", [], "array"))) {
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "title", [], "array"), "html", null, true);
                echo "\"";
            }
            echo ">
    ";
        }
        // line 12
        echo "        ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    ";
        // line 13
        if ((((isset($context["url"]) || array_key_exists("url", $context)) && twig_test_iterable((isset($context["url"]) ? $context["url"] : null))) &&  !twig_test_empty($this->getAttribute((isset($context["url"]) ? $context["url"] : null), "href", [], "array")))) {
            // line 14
            echo "        </a>
    ";
        }
        // line 16
        echo "    ";
        if ( !twig_test_empty((isset($context["mysql_help_page"]) ? $context["mysql_help_page"] : null))) {
            // line 17
            echo "        ";
            echo PhpMyAdmin\Util::showMySQLDocu((isset($context["mysql_help_page"]) ? $context["mysql_help_page"] : null));
            echo "
    ";
        }
        // line 19
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "list/item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  100 => 17,  97 => 16,  93 => 14,  91 => 13,  86 => 12,  77 => 10,  71 => 9,  65 => 8,  61 => 7,  55 => 6,  48 => 5,  46 => 4,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "list/item.twig", "E:\\Estevan\\tp5\\public\\phpMyAdmin\\templates\\list\\item.twig");
    }
}
