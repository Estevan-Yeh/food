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

/* table/structure/display_structure.twig */
class __TwigTemplate_a9560f8421c97bcceb5b09dbd11972157c464c7186c78bfd8e94a393db219168 extends \Twig\Template
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
        echo "<form method=\"post\" action=\"tbl_structure.php\" name=\"fieldsForm\" id=\"fieldsForm\"
    class=\"ajax";
        // line 2
        echo (((isset($context["hide_structure_actions"]) ? $context["hide_structure_actions"] : null)) ? (" HideStructureActions") : (""));
        echo "\">
    ";
        // line 3
        echo PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) ? $context["db"] : null), (isset($context["table"]) ? $context["table"] : null));
        echo "
    <input type=\"hidden\" name=\"table_type\" value=";
        // line 5
        if ((isset($context["db_is_system_schema"]) ? $context["db_is_system_schema"] : null)) {
            // line 6
            echo "\"information_schema\"";
        } elseif (        // line 7
(isset($context["tbl_is_view"]) ? $context["tbl_is_view"] : null)) {
            // line 8
            echo "\"view\"";
        } else {
            // line 10
            echo "\"table\"";
        }
        // line 11
        echo " />
    <div class=\"responsivetable\">
    <table id=\"tablestructure\" class=\"data topmargin\">
        ";
        // line 15
        echo "        ";
        $this->loadTemplate("table/structure/table_structure_header.twig", "table/structure/display_structure.twig", 15)->display(twig_to_array(["db_is_system_schema" =>         // line 16
(isset($context["db_is_system_schema"]) ? $context["db_is_system_schema"] : null), "tbl_is_view" =>         // line 17
(isset($context["tbl_is_view"]) ? $context["tbl_is_view"] : null), "show_column_comments" =>         // line 18
(isset($context["show_column_comments"]) ? $context["show_column_comments"] : null)]));
        // line 20
        echo "        <tbody>
        ";
        // line 22
        echo "        ";
        $context["rownum"] = 0;
        // line 23
        echo "        ";
        $context["columns_list"] = [];
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "            ";
            $context["rownum"] = ((isset($context["rownum"]) ? $context["rownum"] : null) + 1);
            // line 26
            echo "            ";
            $context["columns_list"] = twig_array_merge((isset($context["columns_list"]) ? $context["columns_list"] : null), [0 => $this->getAttribute($context["row"], "Field", [], "array")]);
            // line 27
            echo "            ";
            $context["field_charset"] = $this->getAttribute($context["row"], "Collation", [], "array");
            // line 28
            echo "
            ";
            // line 29
            $context["extracted_columnspec"] = PhpMyAdmin\Util::extractColumnSpec($this->getAttribute($context["row"], "Type", [], "array"));
            // line 30
            echo "            ";
            $context["attribute"] = $this->getAttribute((isset($context["extracted_columnspec"]) ? $context["extracted_columnspec"] : null), "attribute", [], "array");
            // line 31
            echo "            ";
            if ( !(strpos($this->getAttribute($context["row"], "Extra", [], "array"), "on update CURRENT_TIMESTAMP") === false)) {
                // line 33
                echo "                ";
                $context["attribute"] = "on update CURRENT_TIMESTAMP";
                // line 34
                echo "            ";
            }
            // line 35
            echo "
            ";
            // line 36
            if ((null === $this->getAttribute($context["row"], "Default", [], "array"))) {
                // line 37
                echo "                ";
                if (($this->getAttribute($context["row"], "Null", [], "array") == "YES")) {
                    // line 38
                    echo "                    ";
                    $context["row"] = twig_array_merge($context["row"], ["Default" => "<em>NULL</em>"]);
                    // line 39
                    echo "                ";
                }
                // line 40
                echo "            ";
            } else {
                // line 41
                echo "                ";
                $context["row"] = twig_array_merge($context["row"], ["Default" => twig_escape_filter($this->env, $this->getAttribute($context["row"], "Default", [], "array"))]);
                // line 42
                echo "            ";
            }
            // line 43
            echo "
            ";
            // line 44
            $context["field_name"] = twig_escape_filter($this->env, $this->getAttribute($context["row"], "Field", [], "array"));
            // line 45
            echo "            ";
            $context["displayed_field_name"] = (isset($context["field_name"]) ? $context["field_name"] : null);
            // line 46
            echo "            ";
            // line 47
            echo "            ";
            $context["comments"] = "";
            // line 48
            echo "            ";
            // line 49
            echo "
            ";
            // line 50
            if ($this->getAttribute((isset($context["comments_map"]) ? $context["comments_map"] : null), $this->getAttribute($context["row"], "Field", [], "array"), [], "array", true, true)) {
                // line 51
                echo "                ";
                ob_start(function () { return ''; });
                // line 52
                echo "<span class=\"commented_column\" title=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comments_map"]) ? $context["comments_map"] : null), $this->getAttribute($context["row"], "Field", [], "array"), [], "array"), "html", null, true);
                echo "\">";
                // line 54
                echo (isset($context["field_name"]) ? $context["field_name"] : null);
                // line 55
                echo "</span>";
                $context["displayed_field_name"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 57
                echo "                ";
                $context["comments"] = $this->getAttribute((isset($context["comments_map"]) ? $context["comments_map"] : null), $this->getAttribute($context["row"], "Field", [], "array"), [], "array");
                // line 58
                echo "            ";
            }
            // line 59
            echo "
            ";
            // line 60
            if (((isset($context["primary"]) ? $context["primary"] : null) && $this->getAttribute((isset($context["primary"]) ? $context["primary"] : null), "hasColumn", [0 => (isset($context["field_name"]) ? $context["field_name"] : null)], "method"))) {
                // line 61
                echo "                ";
                $context["displayed_field_name"] = ((isset($context["displayed_field_name"]) ? $context["displayed_field_name"] : null) . PhpMyAdmin\Util::getImage("b_primary", _gettext("Primary")));
                // line 64
                echo "            ";
            }
            // line 65
            echo "            ";
            if (twig_in_filter((isset($context["field_name"]) ? $context["field_name"] : null), (isset($context["columns_with_index"]) ? $context["columns_with_index"] : null))) {
                // line 66
                echo "                ";
                $context["displayed_field_name"] = ((isset($context["displayed_field_name"]) ? $context["displayed_field_name"] : null) . PhpMyAdmin\Util::getImage("bd_primary", _gettext("Index")));
                // line 69
                echo "            ";
            }
            // line 70
            echo "        <tr>
            ";
            // line 71
            $this->loadTemplate("table/structure/table_structure_row.twig", "table/structure/display_structure.twig", 71)->display(twig_to_array(["row" =>             // line 72
$context["row"], "rownum" =>             // line 73
(isset($context["rownum"]) ? $context["rownum"] : null), "displayed_field_name" => preg_replace("/[\\x00-\\x1F]/", "&#x2051;",             // line 77
(isset($context["displayed_field_name"]) ? $context["displayed_field_name"] : null)), "type_nowrap" => PhpMyAdmin\Util::getClassForType($this->getAttribute(            // line 79
(isset($context["extracted_columnspec"]) ? $context["extracted_columnspec"] : null), "type", [], "array")), "extracted_columnspec" =>             // line 80
(isset($context["extracted_columnspec"]) ? $context["extracted_columnspec"] : null), "attribute" =>             // line 81
(isset($context["attribute"]) ? $context["attribute"] : null), "tbl_is_view" =>             // line 82
(isset($context["tbl_is_view"]) ? $context["tbl_is_view"] : null), "db_is_system_schema" =>             // line 83
(isset($context["db_is_system_schema"]) ? $context["db_is_system_schema"] : null), "url_query" =>             // line 84
(isset($context["url_query"]) ? $context["url_query"] : null), "titles" =>             // line 85
(isset($context["titles"]) ? $context["titles"] : null), "table" =>             // line 86
(isset($context["table"]) ? $context["table"] : null), "tbl_storage_engine" =>             // line 87
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null), "field_charset" =>             // line 88
(isset($context["field_charset"]) ? $context["field_charset"] : null), "comments" =>             // line 89
(isset($context["comments"]) ? $context["comments"] : null), "show_column_comments" =>             // line 90
(isset($context["show_column_comments"]) ? $context["show_column_comments"] : null), "relation_commwork" =>             // line 91
(isset($context["relation_commwork"]) ? $context["relation_commwork"] : null), "relation_mimework" =>             // line 92
(isset($context["relation_mimework"]) ? $context["relation_mimework"] : null), "browse_mime" =>             // line 93
(isset($context["browse_mime"]) ? $context["browse_mime"] : null)]));
            // line 95
            echo "            ";
            if (( !(isset($context["tbl_is_view"]) ? $context["tbl_is_view"] : null) &&  !(isset($context["db_is_system_schema"]) ? $context["db_is_system_schema"] : null))) {
                // line 96
                echo "                ";
                $this->loadTemplate("table/structure/actions_in_table_structure.twig", "table/structure/display_structure.twig", 96)->display(twig_to_array(["row" =>                 // line 97
$context["row"], "rownum" =>                 // line 98
(isset($context["rownum"]) ? $context["rownum"] : null), "extracted_columnspec" =>                 // line 99
(isset($context["extracted_columnspec"]) ? $context["extracted_columnspec"] : null), "type" => (( !twig_test_empty($this->getAttribute(                // line 100
(isset($context["extracted_columnspec"]) ? $context["extracted_columnspec"] : null), "print_type", [], "array"))) ? ($this->getAttribute((isset($context["extracted_columnspec"]) ? $context["extracted_columnspec"] : null), "print_type", [], "array")) : ("")), "tbl_storage_engine" =>                 // line 101
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null), "primary" =>                 // line 102
(isset($context["primary"]) ? $context["primary"] : null), "field_name" =>                 // line 103
(isset($context["field_name"]) ? $context["field_name"] : null), "url_query" =>                 // line 104
(isset($context["url_query"]) ? $context["url_query"] : null), "titles" =>                 // line 105
(isset($context["titles"]) ? $context["titles"] : null), "columns_with_unique_index" =>                 // line 106
(isset($context["columns_with_unique_index"]) ? $context["columns_with_unique_index"] : null), "is_in_central_columns" => ((twig_in_filter($this->getAttribute(                // line 107
$context["row"], "Field", [], "array"), (isset($context["central_list"]) ? $context["central_list"] : null))) ? (true) : (false)), "central_columns_work" =>                 // line 108
(isset($context["central_columns_work"]) ? $context["central_columns_work"] : null), "table" =>                 // line 109
(isset($context["table"]) ? $context["table"] : null), "hide_structure_actions" =>                 // line 110
(isset($context["hide_structure_actions"]) ? $context["hide_structure_actions"] : null), "mysql_int_version" =>                 // line 111
(isset($context["mysql_int_version"]) ? $context["mysql_int_version"] : null)]));
                // line 113
                echo "            ";
            }
            // line 114
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        </tbody>
    </table>
    </div>
    ";
        // line 119
        $this->loadTemplate("table/structure/check_all_table_column.twig", "table/structure/display_structure.twig", 119)->display(twig_to_array(["pma_theme_image" =>         // line 120
(isset($context["pma_theme_image"]) ? $context["pma_theme_image"] : null), "text_dir" =>         // line 121
(isset($context["text_dir"]) ? $context["text_dir"] : null), "tbl_is_view" =>         // line 122
(isset($context["tbl_is_view"]) ? $context["tbl_is_view"] : null), "db_is_system_schema" =>         // line 123
(isset($context["db_is_system_schema"]) ? $context["db_is_system_schema"] : null), "tbl_storage_engine" =>         // line 124
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null), "central_columns_work" =>         // line 125
(isset($context["central_columns_work"]) ? $context["central_columns_work"] : null)]));
        // line 127
        echo "</form>
<hr class=\"print_ignore\"/>
";
        // line 129
        $this->loadTemplate("table/structure/move_columns_dialog.twig", "table/structure/display_structure.twig", 129)->display(twig_to_array(["db" =>         // line 130
(isset($context["db"]) ? $context["db"] : null), "table" =>         // line 131
(isset($context["table"]) ? $context["table"] : null)]));
        // line 134
        echo "<div id=\"structure-action-links\">
    ";
        // line 135
        if (((isset($context["tbl_is_view"]) ? $context["tbl_is_view"] : null) &&  !(isset($context["db_is_system_schema"]) ? $context["db_is_system_schema"] : null))) {
            // line 136
            echo "        ";
            $context["edit_view_url"] = ("view_create.php" . (isset($context["edit_view_url"]) ? $context["edit_view_url"] : null));
            // line 137
            echo "        ";
            echo PhpMyAdmin\Util::linkOrButton(            // line 138
(isset($context["edit_view_url"]) ? $context["edit_view_url"] : null), PhpMyAdmin\Util::getIcon("b_edit", _gettext("Edit view"), true));
            // line 140
            echo "
    ";
        }
        // line 142
        echo "    ";
        $this->loadTemplate("table/structure/optional_action_links.twig", "table/structure/display_structure.twig", 142)->display(twig_to_array(["url_query" =>         // line 143
(isset($context["url_query"]) ? $context["url_query"] : null), "tbl_is_view" =>         // line 144
(isset($context["tbl_is_view"]) ? $context["tbl_is_view"] : null), "db_is_system_schema" =>         // line 145
(isset($context["db_is_system_schema"]) ? $context["db_is_system_schema"] : null), "table" =>         // line 146
(isset($context["table"]) ? $context["table"] : null), "is_active" =>         // line 147
(isset($context["is_active"]) ? $context["is_active"] : null), "mysql_int_version" =>         // line 148
(isset($context["mysql_int_version"]) ? $context["mysql_int_version"] : null), "is_mariadb" =>         // line 149
(isset($context["is_mariadb"]) ? $context["is_mariadb"] : null)]));
        // line 151
        echo "</div>
";
        // line 152
        if (( !(isset($context["tbl_is_view"]) ? $context["tbl_is_view"] : null) &&  !(isset($context["db_is_system_schema"]) ? $context["db_is_system_schema"] : null))) {
            // line 153
            echo "    ";
            $this->loadTemplate("table/structure/add_column.twig", "table/structure/display_structure.twig", 153)->display(twig_to_array(["columns_list" =>             // line 154
(isset($context["columns_list"]) ? $context["columns_list"] : null), "db" =>             // line 155
(isset($context["db"]) ? $context["db"] : null), "table" =>             // line 156
(isset($context["table"]) ? $context["table"] : null)]));
        }
        // line 159
        echo "
";
        // line 161
        if ((( !(isset($context["tbl_is_view"]) ? $context["tbl_is_view"] : null) &&  !(isset($context["db_is_system_schema"]) ? $context["db_is_system_schema"] : null)) && ("ARCHIVE" !=         // line 162
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null)))) {
            // line 163
            echo "    ";
            echo PhpMyAdmin\Index::getHtmlForDisplayIndexes();
            echo "
";
        }
        // line 165
        echo "
";
        // line 167
        if ((isset($context["have_partitioning"]) ? $context["have_partitioning"] : null)) {
            // line 168
            echo "    ";
            // line 169
            echo "    ";
            if (( !twig_test_empty((isset($context["partition_names"]) ? $context["partition_names"] : null)) &&  !(null === $this->getAttribute((isset($context["partition_names"]) ? $context["partition_names"] : null), 0, [], "array")))) {
                // line 170
                echo "        ";
                $context["partitions"] = PhpMyAdmin\Partition::getPartitions((isset($context["db"]) ? $context["db"] : null), (isset($context["table"]) ? $context["table"] : null));
                // line 171
                echo "        ";
                $context["first_partition"] = $this->getAttribute((isset($context["partitions"]) ? $context["partitions"] : null), 0, [], "array");
                // line 172
                echo "        ";
                $context["range_or_list"] = (((($this->getAttribute((isset($context["first_partition"]) ? $context["first_partition"] : null), "getMethod", [], "method") == "RANGE") || ($this->getAttribute(                // line 173
(isset($context["first_partition"]) ? $context["first_partition"] : null), "getMethod", [], "method") == "RANGE COLUMNS")) || ($this->getAttribute(                // line 174
(isset($context["first_partition"]) ? $context["first_partition"] : null), "getMethod", [], "method") == "LIST")) || ($this->getAttribute(                // line 175
(isset($context["first_partition"]) ? $context["first_partition"] : null), "getMethod", [], "method") == "LIST COLUMNS"));
                // line 176
                echo "        ";
                $context["sub_partitions"] = $this->getAttribute((isset($context["first_partition"]) ? $context["first_partition"] : null), "getSubPartitions", [], "method");
                // line 177
                echo "        ";
                $context["has_sub_partitions"] = $this->getAttribute((isset($context["first_partition"]) ? $context["first_partition"] : null), "hasSubPartitions", [], "method");
                // line 178
                echo "        ";
                if ((isset($context["has_sub_partitions"]) ? $context["has_sub_partitions"] : null)) {
                    // line 179
                    echo "            ";
                    $context["first_sub_partition"] = $this->getAttribute((isset($context["sub_partitions"]) ? $context["sub_partitions"] : null), 0, [], "array");
                    // line 180
                    echo "        ";
                }
                // line 181
                echo "
        ";
                // line 182
                $context["action_icons"] = ["ANALYZE" => PhpMyAdmin\Util::getIcon("b_search", _gettext("Analyze")), "CHECK" => PhpMyAdmin\Util::getIcon("eye", _gettext("Check")), "OPTIMIZE" => PhpMyAdmin\Util::getIcon("normalize", _gettext("Optimize")), "REBUILD" => PhpMyAdmin\Util::getIcon("s_tbl", _gettext("Rebuild")), "REPAIR" => PhpMyAdmin\Util::getIcon("b_tblops", _gettext("Repair")), "TRUNCATE" => PhpMyAdmin\Util::getIcon("b_empty", _gettext("Truncate"))];
                // line 190
                echo "        ";
                if ((isset($context["range_or_list"]) ? $context["range_or_list"] : null)) {
                    // line 191
                    echo "            ";
                    $context["action_icons"] = twig_array_merge((isset($context["action_icons"]) ? $context["action_icons"] : null), ["DROP" => PhpMyAdmin\Util::getIcon("b_drop", _gettext("Drop"))]);
                    // line 192
                    echo "        ";
                }
                // line 193
                echo "
        ";
                // line 194
                echo PhpMyAdmin\Util::getDivForSliderEffect("partitions", _gettext("Partitions"));
                echo "

        ";
                // line 196
                $context["remove_sql"] = (("ALTER TABLE " . PhpMyAdmin\Util::backquote((isset($context["table"]) ? $context["table"] : null))) . " REMOVE PARTITIONING");
                // line 197
                echo "        ";
                $context["remove_url"] = ((("sql.php" . (isset($context["url_query"]) ? $context["url_query"] : null)) . "&sql_query=") . twig_urlencode_filter((isset($context["remove_sql"]) ? $context["remove_sql"] : null)));
                // line 198
                echo "
        ";
                // line 199
                $this->loadTemplate("table/structure/display_partitions.twig", "table/structure/display_structure.twig", 199)->display(twig_to_array(["db" =>                 // line 200
(isset($context["db"]) ? $context["db"] : null), "table" =>                 // line 201
(isset($context["table"]) ? $context["table"] : null), "url_query" =>                 // line 202
(isset($context["url_query"]) ? $context["url_query"] : null), "partitions" =>                 // line 203
(isset($context["partitions"]) ? $context["partitions"] : null), "partition_method" => $this->getAttribute(                // line 204
(isset($context["first_partition"]) ? $context["first_partition"] : null), "getMethod", [], "method"), "partition_expression" => $this->getAttribute(                // line 205
(isset($context["first_partition"]) ? $context["first_partition"] : null), "getExpression", [], "method"), "has_description" =>  !twig_test_empty($this->getAttribute(                // line 206
(isset($context["first_partition"]) ? $context["first_partition"] : null), "getDescription", [], "method")), "has_sub_partitions" =>                 // line 207
(isset($context["has_sub_partitions"]) ? $context["has_sub_partitions"] : null), "sub_partition_method" => ((                // line 208
(isset($context["has_sub_partitions"]) ? $context["has_sub_partitions"] : null)) ? ($this->getAttribute((isset($context["first_sub_partition"]) ? $context["first_sub_partition"] : null), "getMethod", [], "method")) : ("")), "sub_partition_expression" => ((                // line 209
(isset($context["has_sub_partitions"]) ? $context["has_sub_partitions"] : null)) ? ($this->getAttribute((isset($context["first_sub_partition"]) ? $context["first_sub_partition"] : null), "getExpression", [], "method")) : ("")), "action_icons" =>                 // line 210
(isset($context["action_icons"]) ? $context["action_icons"] : null), "range_or_list" =>                 // line 211
(isset($context["range_or_list"]) ? $context["range_or_list"] : null), "remove_url" =>                 // line 212
(isset($context["remove_url"]) ? $context["remove_url"] : null)]));
                // line 214
                echo "    ";
            } else {
                // line 215
                echo "        ";
                $this->loadTemplate("table/structure/display_partitions.twig", "table/structure/display_structure.twig", 215)->display(twig_to_array(["db" =>                 // line 216
(isset($context["db"]) ? $context["db"] : null), "table" =>                 // line 217
(isset($context["table"]) ? $context["table"] : null)]));
                // line 219
                echo "    ";
            }
            // line 220
            echo "    ";
            // line 221
            echo "    </div>
";
        }
        // line 223
        echo "
";
        // line 225
        if ((isset($context["show_stats"]) ? $context["show_stats"] : null)) {
            // line 226
            echo "    ";
            echo (isset($context["table_stats"]) ? $context["table_stats"] : null);
            echo "
";
        }
        // line 228
        echo "<div class=\"clearfloat\"></div>
";
    }

    public function getTemplateName()
    {
        return "table/structure/display_structure.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 228,  415 => 226,  413 => 225,  410 => 223,  406 => 221,  404 => 220,  401 => 219,  399 => 217,  398 => 216,  396 => 215,  393 => 214,  391 => 212,  390 => 211,  389 => 210,  388 => 209,  387 => 208,  386 => 207,  385 => 206,  384 => 205,  383 => 204,  382 => 203,  381 => 202,  380 => 201,  379 => 200,  378 => 199,  375 => 198,  372 => 197,  370 => 196,  365 => 194,  362 => 193,  359 => 192,  356 => 191,  353 => 190,  351 => 182,  348 => 181,  345 => 180,  342 => 179,  339 => 178,  336 => 177,  333 => 176,  331 => 175,  330 => 174,  329 => 173,  327 => 172,  324 => 171,  321 => 170,  318 => 169,  316 => 168,  314 => 167,  311 => 165,  305 => 163,  303 => 162,  302 => 161,  299 => 159,  296 => 156,  295 => 155,  294 => 154,  292 => 153,  290 => 152,  287 => 151,  285 => 149,  284 => 148,  283 => 147,  282 => 146,  281 => 145,  280 => 144,  279 => 143,  277 => 142,  273 => 140,  271 => 138,  269 => 137,  266 => 136,  264 => 135,  261 => 134,  259 => 131,  258 => 130,  257 => 129,  253 => 127,  251 => 125,  250 => 124,  249 => 123,  248 => 122,  247 => 121,  246 => 120,  245 => 119,  240 => 116,  233 => 114,  230 => 113,  228 => 111,  227 => 110,  226 => 109,  225 => 108,  224 => 107,  223 => 106,  222 => 105,  221 => 104,  220 => 103,  219 => 102,  218 => 101,  217 => 100,  216 => 99,  215 => 98,  214 => 97,  212 => 96,  209 => 95,  207 => 93,  206 => 92,  205 => 91,  204 => 90,  203 => 89,  202 => 88,  201 => 87,  200 => 86,  199 => 85,  198 => 84,  197 => 83,  196 => 82,  195 => 81,  194 => 80,  193 => 79,  192 => 77,  191 => 73,  190 => 72,  189 => 71,  186 => 70,  183 => 69,  180 => 66,  177 => 65,  174 => 64,  171 => 61,  169 => 60,  166 => 59,  163 => 58,  160 => 57,  157 => 55,  155 => 54,  152 => 53,  150 => 52,  147 => 51,  145 => 50,  142 => 49,  140 => 48,  137 => 47,  135 => 46,  132 => 45,  130 => 44,  127 => 43,  124 => 42,  121 => 41,  118 => 40,  115 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  101 => 34,  98 => 33,  95 => 31,  92 => 30,  90 => 29,  87 => 28,  84 => 27,  81 => 26,  78 => 25,  73 => 24,  70 => 23,  67 => 22,  64 => 20,  62 => 18,  61 => 17,  60 => 16,  58 => 15,  53 => 11,  50 => 10,  47 => 8,  45 => 7,  43 => 6,  41 => 5,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/display_structure.twig", "E:\\Estevan\\tp5\\public\\phpMyAdmin\\templates\\table\\structure\\display_structure.twig");
    }
}
