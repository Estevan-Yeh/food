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

/* radio_fields.twig */
class __TwigTemplate_34faa8eda483304214f303cf29ec17c4aed21c402da9fa6b160cbbfea2668320 extends \Twig\Template
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
        if ( !twig_test_empty((isset($context["class"]) ? $context["class"] : null))) {
            // line 2
            echo "<div class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
";
        }
        // line 4
        echo "<input type=\"radio\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["html_field_name"]) ? $context["html_field_name"] : null), "html", null, true);
        echo "\" id=\"";
        echo (isset($context["html_field_id"]) ? $context["html_field_id"] : null);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["choice_value"]) ? $context["choice_value"] : null), "html", null, true);
        echo "\"";
        echo (((isset($context["checked"]) ? $context["checked"] : null)) ? (" checked=\"checked\"") : (""));
        echo " />
<label for=\"";
        // line 5
        echo (isset($context["html_field_id"]) ? $context["html_field_id"] : null);
        echo "\">";
        echo (((isset($context["escape_label"]) ? $context["escape_label"] : null)) ? (twig_escape_filter($this->env, (isset($context["choice_label"]) ? $context["choice_label"] : null))) : ((isset($context["choice_label"]) ? $context["choice_label"] : null)));
        echo "</label>
";
        // line 6
        if ((isset($context["is_line_break"]) ? $context["is_line_break"] : null)) {
            // line 7
            echo "<br />
";
        }
        // line 9
        if ( !twig_test_empty((isset($context["class"]) ? $context["class"] : null))) {
            // line 10
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "radio_fields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  61 => 9,  57 => 7,  55 => 6,  49 => 5,  38 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "radio_fields.twig", "E:\\Estevan\\tp5\\public\\phpMyAdmin\\templates\\radio_fields.twig");
    }
}
