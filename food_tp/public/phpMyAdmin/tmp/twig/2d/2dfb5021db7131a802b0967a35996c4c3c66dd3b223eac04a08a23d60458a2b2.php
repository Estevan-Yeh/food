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

/* columns_definitions/column_name.twig */
class __TwigTemplate_ac1b793cb7a682a341be5a600923fa02df552e54adaa2e1ef91ddb2336266f30 extends \Twig\Template
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
        $context["title"] = "";
        // line 2
        if ($this->getAttribute((isset($context["column_meta"]) ? $context["column_meta"] : null), "column_status", [], "array", true, true)) {
            // line 3
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["column_meta"]) ? $context["column_meta"] : null), "column_status", [], "array"), "isReferenced", [], "array")) {
                // line 4
                echo "        ";
                $context["title"] = ((isset($context["title"]) ? $context["title"] : null) . sprintf(_gettext("Referenced by %s."), twig_join_filter($this->getAttribute($this->getAttribute(                // line 5
(isset($context["column_meta"]) ? $context["column_meta"] : null), "column_status", [], "array"), "references", [], "array"), ",")));
                // line 7
                echo "    ";
            }
            // line 8
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["column_meta"]) ? $context["column_meta"] : null), "column_status", [], "array"), "isForeignKey", [], "array")) {
                // line 9
                echo "        ";
                if ( !twig_test_empty((isset($context["title"]) ? $context["title"] : null))) {
                    // line 10
                    echo "            ";
                    $context["title"] = ((isset($context["title"]) ? $context["title"] : null) . "
");
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "        ";
                $context["title"] = ((isset($context["title"]) ? $context["title"] : null) . _gettext("Is a foreign key."));
                // line 13
                echo "    ";
            }
        }
        // line 15
        if (twig_test_empty((isset($context["title"]) ? $context["title"] : null))) {
            // line 16
            echo "    ";
            $context["title"] = _gettext("Column");
        }
        // line 18
        echo "
<input id=\"field_";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["column_number"]) ? $context["column_number"] : null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ((isset($context["ci"]) ? $context["ci"] : null) - (isset($context["ci_offset"]) ? $context["ci_offset"] : null)), "html", null, true);
        echo "\"
    ";
        // line 20
        if (($this->getAttribute((isset($context["column_meta"]) ? $context["column_meta"] : null), "column_status", [], "array", true, true) &&  !$this->getAttribute($this->getAttribute(        // line 21
(isset($context["column_meta"]) ? $context["column_meta"] : null), "column_status", [], "array"), "isEditable", [], "array"))) {
            // line 22
            echo "        disabled=\"disabled\"
    ";
        }
        // line 24
        echo "    type=\"text\"
    name=\"field_name[";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["column_number"]) ? $context["column_number"] : null), "html", null, true);
        echo "]\"
    maxlength=\"64\"
    class=\"textfield\"
    title=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\"
    size=\"10\"
    value=\"";
        // line 30
        (($this->getAttribute((isset($context["column_meta"]) ? $context["column_meta"] : null), "Field", [], "array", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute((isset($context["column_meta"]) ? $context["column_meta"] : null), "Field", [], "array"), "html", null, true))) : (print ("")));
        echo "\" />

";
        // line 32
        if (($this->getAttribute((isset($context["cfg_relation"]) ? $context["cfg_relation"] : null), "centralcolumnswork", [], "array") &&  !($this->getAttribute(        // line 33
(isset($context["column_meta"]) ? $context["column_meta"] : null), "column_status", [], "array", true, true) &&  !$this->getAttribute($this->getAttribute(        // line 34
(isset($context["column_meta"]) ? $context["column_meta"] : null), "column_status", [], "array"), "isEditable", [], "array")))) {
            // line 35
            echo "    <p style=\"font-size:80%;margin:5px 2px\"
       id=\"central_columns_";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["column_number"]) ? $context["column_number"] : null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ((isset($context["ci"]) ? $context["ci"] : null) - (isset($context["ci_offset"]) ? $context["ci_offset"] : null)), "html", null, true);
            echo "\">
        <a data-maxrows=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["max_rows"]) ? $context["max_rows"] : null), "html", null, true);
            echo "\"
            href=\"#\"
            class=\"central_columns_dialog\">
            ";
            // line 40
            echo _gettext("Pick from Central Columns");
            // line 41
            echo "        </a>
    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "columns_definitions/column_name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 41,  124 => 40,  118 => 37,  112 => 36,  109 => 35,  107 => 34,  106 => 33,  105 => 32,  100 => 30,  95 => 28,  89 => 25,  86 => 24,  82 => 22,  80 => 21,  79 => 20,  73 => 19,  70 => 18,  66 => 16,  64 => 15,  60 => 13,  57 => 12,  54 => 11,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/column_name.twig", "E:\\Estevan\\tp5\\public\\phpMyAdmin\\templates\\columns_definitions\\column_name.twig");
    }
}
