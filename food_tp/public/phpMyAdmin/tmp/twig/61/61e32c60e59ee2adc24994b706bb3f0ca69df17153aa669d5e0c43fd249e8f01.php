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

/* columns_definitions/move_column.twig */
class __TwigTemplate_1fbf7ff0f32a67ae2ed799ec904ccd9ad38d0f7900019a6729bd806c00c6dc4d extends \Twig\Template
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
        echo "<select id=\"field_";
        echo twig_escape_filter($this->env, (isset($context["column_number"]) ? $context["column_number"] : null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ((isset($context["ci"]) ? $context["ci"] : null) - (isset($context["ci_offset"]) ? $context["ci_offset"] : null)), "html", null, true);
        echo "\"
    name=\"field_move_to[";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["column_number"]) ? $context["column_number"] : null), "html", null, true);
        echo "]\"
    size=\"1\"
    width=\"5em\">
    <option value=\"\" selected=\"selected\">&nbsp;</option>
    <option value=\"-first\"";
        // line 6
        echo ((((isset($context["current_index"]) ? $context["current_index"] : null) == 0)) ? (" disabled=\"disabled\"") : (""));
        echo ">
        ";
        // line 7
        echo _gettext("first");
        // line 8
        echo "    </option>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["move_columns"]) ? $context["move_columns"] : null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["mi"]) {
            // line 10
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["move_columns"]) ? $context["move_columns"] : null), $context["mi"], [], "array"), "name", []), "html", null, true);
            echo "\"";
            // line 11
            echo (((((isset($context["current_index"]) ? $context["current_index"] : null) == $context["mi"]) || ((isset($context["current_index"]) ? $context["current_index"] : null) == ($context["mi"] + 1)))) ? (" disabled=\"disabled\"") : (""));
            echo ">
            ";
            // line 12
            echo twig_escape_filter($this->env, sprintf(_gettext("after %s"), PhpMyAdmin\Util::backquote(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["move_columns"]) ? $context["move_columns"] : null), $context["mi"], [], "array"), "name", [])))), "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "columns_definitions/move_column.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  50 => 8,  48 => 7,  44 => 6,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/move_column.twig", "E:\\Estevan\\tp5\\public\\phpMyAdmin\\templates\\columns_definitions\\move_column.twig");
    }
}
