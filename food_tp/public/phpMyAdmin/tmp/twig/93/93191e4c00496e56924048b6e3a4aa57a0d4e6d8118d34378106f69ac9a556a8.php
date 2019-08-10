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

/* columns_definitions/column_attribute.twig */
class __TwigTemplate_76dc6854eac5cf97f5032bfb285d63368ff6f0fd8a4228715afe89ba6c45effb extends \Twig\Template
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
        if (((isset($context["submit_attribute"]) || array_key_exists("submit_attribute", $context)) && ((isset($context["submit_attribute"]) ? $context["submit_attribute"] : null) != false))) {
            // line 2
            echo "    ";
            $context["attribute"] = (isset($context["submit_attribute"]) ? $context["submit_attribute"] : null);
        } elseif (($this->getAttribute(        // line 3
(isset($context["column_meta"]) ? $context["column_meta"] : null), "Extra", [], "array", true, true) && ($this->getAttribute(        // line 4
(isset($context["column_meta"]) ? $context["column_meta"] : null), "Extra", [], "array") == "on update CURRENT_TIMESTAMP"))) {
            // line 5
            echo "    ";
            $context["attribute"] = "on update CURRENT_TIMESTAMP";
        } elseif ($this->getAttribute(        // line 6
(isset($context["extracted_columnspec"]) ? $context["extracted_columnspec"] : null), "attribute", [], "array", true, true)) {
            // line 7
            echo "    ";
            $context["attribute"] = $this->getAttribute((isset($context["extracted_columnspec"]) ? $context["extracted_columnspec"] : null), "attribute", [], "array");
        } else {
            // line 9
            echo "    ";
            $context["attribute"] = "";
        }
        // line 11
        $context["attribute"] = twig_upper_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null));
        // line 12
        echo "<select name=\"field_attribute[";
        echo twig_escape_filter($this->env, (isset($context["column_number"]) ? $context["column_number"] : null), "html", null, true);
        echo "]\"
    id=\"field_";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["column_number"]) ? $context["column_number"] : null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ((isset($context["ci"]) ? $context["ci"] : null) - (isset($context["ci_offset"]) ? $context["ci_offset"] : null)), "html", null, true);
        echo "\">
    ";
        // line 14
        $context["cnt_attribute_types"] = (twig_length_filter($this->env, (isset($context["attribute_types"]) ? $context["attribute_types"] : null)) - 1);
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["cnt_attribute_types"]) ? $context["cnt_attribute_types"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attribute_types"]) ? $context["attribute_types"] : null), $context["i"], [], "array"), "html", null, true);
            echo "\"";
            // line 17
            echo ((((isset($context["attribute"]) ? $context["attribute"] : null) == twig_upper_filter($this->env, $this->getAttribute((isset($context["attribute_types"]) ? $context["attribute_types"] : null), $context["i"], [], "array")))) ? (" selected=\"selected\"") : (""));
            echo ">
            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attribute_types"]) ? $context["attribute_types"] : null), $context["i"], [], "array"), "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "columns_definitions/column_attribute.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  79 => 18,  75 => 17,  71 => 16,  66 => 15,  64 => 14,  58 => 13,  53 => 12,  51 => 11,  47 => 9,  43 => 7,  41 => 6,  38 => 5,  36 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/column_attribute.twig", "E:\\Estevan\\tp5\\public\\phpMyAdmin\\templates\\columns_definitions\\column_attribute.twig");
    }
}
