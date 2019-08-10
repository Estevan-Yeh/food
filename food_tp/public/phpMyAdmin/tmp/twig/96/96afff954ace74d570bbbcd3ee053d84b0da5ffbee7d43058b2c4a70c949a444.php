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

/* table/structure/actions_in_table_structure.twig */
class __TwigTemplate_054acc9459d8ef12c1c63e2fd767a38661ca5a6a2f77eea4c2a149fc9b2ae64b extends \Twig\Template
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
        echo "<td class=\"print_ignore\"><ul class=\"table-structure-actions resizable-menu\">
    ";
        // line 2
        if ((isset($context["hide_structure_actions"]) ? $context["hide_structure_actions"] : null)) {
            // line 3
            echo "        <li class=\"submenu shown\">
            <a href=\"#\" class=\"tab nowrap\">";
            // line 4
            echo PhpMyAdmin\Util::getIcon("b_more", _gettext("More"));
            echo "</a>
            <ul>
    ";
        }
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        $this->loadTemplate("table/structure/action_row_in_structure_table.twig", "table/structure/actions_in_table_structure.twig", 8)->display(twig_to_array(["type" =>         // line 9
(isset($context["type"]) ? $context["type"] : null), "tbl_storage_engine" =>         // line 10
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null), "class" => "primary nowrap", "has_field" => (        // line 12
(isset($context["primary"]) ? $context["primary"] : null) && $this->getAttribute((isset($context["primary"]) ? $context["primary"] : null), "hasColumn", [0 => (isset($context["field_name"]) ? $context["field_name"] : null)], "method")), "has_link_class" => true, "url_query" =>         // line 14
(isset($context["url_query"]) ? $context["url_query"] : null), "primary" =>         // line 15
(isset($context["primary"]) ? $context["primary"] : null), "syntax" => "ADD PRIMARY KEY", "message" => _gettext("A primary key has been added on %s."), "action" => "Primary", "titles" =>         // line 19
(isset($context["titles"]) ? $context["titles"] : null), "row" =>         // line 20
(isset($context["row"]) ? $context["row"] : null), "is_primary" => true, "table" =>         // line 22
(isset($context["table"]) ? $context["table"] : null)]));
        // line 24
        echo "
    ";
        // line 26
        echo "    ";
        $this->loadTemplate("table/structure/action_row_in_structure_table.twig", "table/structure/actions_in_table_structure.twig", 26)->display(twig_to_array(["type" =>         // line 27
(isset($context["type"]) ? $context["type"] : null), "tbl_storage_engine" =>         // line 28
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null), "class" => "add_unique unique nowrap", "has_field" => twig_in_filter(        // line 30
(isset($context["field_name"]) ? $context["field_name"] : null), (isset($context["columns_with_unique_index"]) ? $context["columns_with_unique_index"] : null)), "has_link_class" => false, "url_query" =>         // line 32
(isset($context["url_query"]) ? $context["url_query"] : null), "primary" =>         // line 33
(isset($context["primary"]) ? $context["primary"] : null), "syntax" => "ADD UNIQUE", "message" => _gettext("An index has been added on %s."), "action" => "Unique", "titles" =>         // line 37
(isset($context["titles"]) ? $context["titles"] : null), "row" =>         // line 38
(isset($context["row"]) ? $context["row"] : null), "is_primary" => false, "table" =>         // line 40
(isset($context["table"]) ? $context["table"] : null)]));
        // line 42
        echo "
    ";
        // line 44
        echo "    ";
        $this->loadTemplate("table/structure/action_row_in_structure_table.twig", "table/structure/actions_in_table_structure.twig", 44)->display(twig_to_array(["type" =>         // line 45
(isset($context["type"]) ? $context["type"] : null), "tbl_storage_engine" =>         // line 46
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null), "class" => "add_index nowrap", "has_field" => false, "has_link_class" => false, "url_query" =>         // line 50
(isset($context["url_query"]) ? $context["url_query"] : null), "primary" =>         // line 51
(isset($context["primary"]) ? $context["primary"] : null), "syntax" => "ADD INDEX", "message" => _gettext("An index has been added on %s."), "action" => "Index", "titles" =>         // line 55
(isset($context["titles"]) ? $context["titles"] : null), "row" =>         // line 56
(isset($context["row"]) ? $context["row"] : null), "is_primary" => false, "table" =>         // line 58
(isset($context["table"]) ? $context["table"] : null)]));
        // line 60
        echo "
    ";
        // line 62
        echo "    ";
        $context["spatial_types"] = [0 => "geometry", 1 => "point", 2 => "linestring", 3 => "polygon", 4 => "multipoint", 5 => "multilinestring", 6 => "multipolygon", 7 => "geomtrycollection"];
        // line 72
        echo "    ";
        $this->loadTemplate("table/structure/action_row_in_structure_table.twig", "table/structure/actions_in_table_structure.twig", 72)->display(twig_to_array(["type" =>         // line 73
(isset($context["type"]) ? $context["type"] : null), "tbl_storage_engine" =>         // line 74
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null), "class" => "spatial nowrap", "has_field" => (!twig_in_filter(        // line 76
(isset($context["type"]) ? $context["type"] : null), (isset($context["spatial_types"]) ? $context["spatial_types"] : null)) && ((        // line 77
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null) == "MYISAM") || ((isset($context["mysql_int_version"]) ? $context["mysql_int_version"] : null) >= 50705))), "has_link_class" => false, "url_query" =>         // line 79
(isset($context["url_query"]) ? $context["url_query"] : null), "primary" =>         // line 80
(isset($context["primary"]) ? $context["primary"] : null), "syntax" => "ADD SPATIAL", "message" => _gettext("An index has been added on %s."), "action" => "Spatial", "titles" =>         // line 84
(isset($context["titles"]) ? $context["titles"] : null), "row" =>         // line 85
(isset($context["row"]) ? $context["row"] : null), "is_primary" => false, "table" =>         // line 87
(isset($context["table"]) ? $context["table"] : null)]));
        // line 89
        echo "
    ";
        // line 91
        echo "    <li class=\"fulltext nowrap\">
    ";
        // line 92
        if ((( !twig_test_empty((isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null)) && ((((        // line 93
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null) == "MYISAM") || (        // line 94
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null) == "ARIA")) || (        // line 95
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null) == "MARIA")) || ((        // line 96
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null) == "INNODB") && ((isset($context["mysql_int_version"]) ? $context["mysql_int_version"] : null) >= 50604)))) && (twig_in_filter("text",         // line 97
(isset($context["type"]) ? $context["type"] : null)) || twig_in_filter("char", (isset($context["type"]) ? $context["type"] : null))))) {
            // line 98
            echo "        <a rel=\"samepage\" class=\"ajax add_key add_fulltext_anchor\" href=\"tbl_structure.php\"
            data-post=\"";
            // line 99
            echo (isset($context["url_query"]) ? $context["url_query"] : null);
            echo "&amp;add_key=1&amp;sql_query=";
            // line 100
            echo twig_escape_filter($this->env, twig_urlencode_filter((((("ALTER TABLE " . PhpMyAdmin\Util::backquote((isset($context["table"]) ? $context["table"] : null))) . " ADD FULLTEXT(") . PhpMyAdmin\Util::backquote($this->getAttribute(            // line 101
(isset($context["row"]) ? $context["row"] : null), "Field", [], "array"))) . ");")), "html", null, true);
            // line 102
            echo "&amp;message_to_show=";
            // line 103
            echo twig_escape_filter($this->env, twig_urlencode_filter(sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "Field", [], "array")))), "html", null, true);
            echo "\">
            ";
            // line 104
            echo $this->getAttribute((isset($context["titles"]) ? $context["titles"] : null), "IdxFulltext", [], "array");
            echo "
        </a>
    ";
        } else {
            // line 107
            echo "        ";
            echo $this->getAttribute((isset($context["titles"]) ? $context["titles"] : null), "NoIdxFulltext", [], "array");
            echo "
    ";
        }
        // line 109
        echo "    </li>

    ";
        // line 112
        echo "    <li class=\"browse nowrap\">
        <a href=\"sql.php\" data-post=\"";
        // line 113
        echo (isset($context["url_query"]) ? $context["url_query"] : null);
        echo "&amp;sql_query=";
        // line 114
        echo twig_escape_filter($this->env, twig_urlencode_filter(((((((((("SELECT COUNT(*) AS " . PhpMyAdmin\Util::backquote(_gettext("Rows"))) . ", ") . PhpMyAdmin\Util::backquote($this->getAttribute(        // line 115
(isset($context["row"]) ? $context["row"] : null), "Field", [], "array"))) . " FROM ") . PhpMyAdmin\Util::backquote(        // line 116
(isset($context["table"]) ? $context["table"] : null))) . " GROUP BY ") . PhpMyAdmin\Util::backquote($this->getAttribute(        // line 117
(isset($context["row"]) ? $context["row"] : null), "Field", [], "array"))) . " ORDER BY ") . PhpMyAdmin\Util::backquote($this->getAttribute(        // line 118
(isset($context["row"]) ? $context["row"] : null), "Field", [], "array")))), "html", null, true);
        // line 119
        echo "&amp;is_browse_distinct=1\">
            ";
        // line 120
        echo $this->getAttribute((isset($context["titles"]) ? $context["titles"] : null), "DistinctValues", [], "array");
        echo "
        </a>
    </li>
    ";
        // line 123
        if ((isset($context["central_columns_work"]) ? $context["central_columns_work"] : null)) {
            // line 124
            echo "        <li class=\"browse nowrap\">
        ";
            // line 125
            if ((isset($context["is_in_central_columns"]) ? $context["is_in_central_columns"] : null)) {
                // line 126
                echo "            <a href=\"#\" class=\"central_columns remove_button\">
                ";
                // line 127
                echo PhpMyAdmin\Util::getIcon("centralColumns_delete", _gettext("Remove from central columns"));
                echo "
            </a>
        ";
            } else {
                // line 130
                echo "            <a href=\"#\" class=\"central_columns add_button\">
                ";
                // line 131
                echo PhpMyAdmin\Util::getIcon("centralColumns_add", _gettext("Add to central columns"));
                echo "
            </a>
        ";
            }
            // line 134
            echo "        </li>
    ";
        }
        // line 136
        echo "    ";
        if ((isset($context["hide_structure_actions"]) ? $context["hide_structure_actions"] : null)) {
            // line 137
            echo "            </ul>
        </li>
    ";
        }
        // line 140
        echo "</ul></td>
";
    }

    public function getTemplateName()
    {
        return "table/structure/actions_in_table_structure.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 140,  199 => 137,  196 => 136,  192 => 134,  186 => 131,  183 => 130,  177 => 127,  174 => 126,  172 => 125,  169 => 124,  167 => 123,  161 => 120,  158 => 119,  156 => 118,  155 => 117,  154 => 116,  153 => 115,  152 => 114,  149 => 113,  146 => 112,  142 => 109,  136 => 107,  130 => 104,  126 => 103,  124 => 102,  122 => 101,  121 => 100,  118 => 99,  115 => 98,  113 => 97,  112 => 96,  111 => 95,  110 => 94,  109 => 93,  108 => 92,  105 => 91,  102 => 89,  100 => 87,  99 => 85,  98 => 84,  97 => 80,  96 => 79,  95 => 77,  94 => 76,  93 => 74,  92 => 73,  90 => 72,  87 => 62,  84 => 60,  82 => 58,  81 => 56,  80 => 55,  79 => 51,  78 => 50,  77 => 46,  76 => 45,  74 => 44,  71 => 42,  69 => 40,  68 => 38,  67 => 37,  66 => 33,  65 => 32,  64 => 30,  63 => 28,  62 => 27,  60 => 26,  57 => 24,  55 => 22,  54 => 20,  53 => 19,  52 => 15,  51 => 14,  50 => 12,  49 => 10,  48 => 9,  46 => 8,  44 => 7,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/actions_in_table_structure.twig", "E:\\Estevan\\tp5\\public\\phpMyAdmin\\templates\\table\\structure\\actions_in_table_structure.twig");
    }
}
