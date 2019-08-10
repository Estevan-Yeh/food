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

/* table/structure/table_structure_header.twig */
class __TwigTemplate_634d8b094f6cb16e733caa8cdb8a6b13f25a25091afc279ceb6adff454a9dacb extends \Twig\Template
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
        echo "<thead>
    <tr>
        <th class=\"print_ignore\"></th>
        <th>#</th>
        <th>";
        // line 5
        echo _gettext("Name");
        echo "</th>
        <th>";
        // line 6
        echo _gettext("Type");
        echo "</th>
        <th>";
        // line 7
        echo _gettext("Collation");
        echo "</th>
        <th>";
        // line 8
        echo _gettext("Attributes");
        echo "</th>
        <th>";
        // line 9
        echo _gettext("Null");
        echo "</th>
        <th>";
        // line 10
        echo _gettext("Default");
        echo "</th>
        ";
        // line 11
        if ((isset($context["show_column_comments"]) ? $context["show_column_comments"] : null)) {
            // line 12
            echo "<th>";
            echo _gettext("Comments");
            echo "</th>";
        }
        // line 14
        echo "        <th>";
        echo _gettext("Extra");
        echo "</th>
        ";
        // line 16
        echo "        ";
        if (( !(isset($context["db_is_system_schema"]) ? $context["db_is_system_schema"] : null) &&  !(isset($context["tbl_is_view"]) ? $context["tbl_is_view"] : null))) {
            // line 17
            echo "            <th colspan=\"";
            echo ((PhpMyAdmin\Util::showIcons("ActionLinksMode")) ? ("8") : ("9"));
            // line 18
            echo "\" class=\"action print_ignore\">";
            echo _gettext("Action");
            echo "</th>
        ";
        }
        // line 20
        echo "    </tr>
</thead>
";
    }

    public function getTemplateName()
    {
        return "table/structure/table_structure_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  78 => 18,  75 => 17,  72 => 16,  67 => 14,  62 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/table_structure_header.twig", "E:\\Estevan\\tp5\\public\\phpMyAdmin\\templates\\table\\structure\\table_structure_header.twig");
    }
}
