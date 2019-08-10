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

/* server/databases/databases_header.twig */
class __TwigTemplate_480674d4395eb1152780d665153f7fe3dd7cd1dbbc3989dc5f5de90ab51d06e3 extends \Twig\Template
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
        echo "<div id=\"tableslistcontainer\">
    ";
        // line 2
        echo PhpMyAdmin\Util::getListNavigator(        // line 3
(isset($context["database_count"]) ? $context["database_count"] : null),         // line 4
(isset($context["pos"]) ? $context["pos"] : null),         // line 5
(isset($context["url_params"]) ? $context["url_params"] : null), "server_databases.php", "frame_content",         // line 8
(isset($context["max_db_list"]) ? $context["max_db_list"] : null));
        // line 9
        echo "
    <form class=\"ajax\" action=\"server_databases.php\" method=\"post\" name=\"dbStatsForm\" id=\"dbStatsForm\">
        ";
        // line 11
        echo PhpMyAdmin\Url::getHiddenInputs((isset($context["url_params"]) ? $context["url_params"] : null));
        echo "
        ";
        // line 12
        $context["url_params"] = twig_array_merge((isset($context["url_params"]) ? $context["url_params"] : null), ["sort_by" => "SCHEMA_NAME", "sort_order" => ((((        // line 14
(isset($context["sort_by"]) ? $context["sort_by"] : null) == "SCHEMA_NAME") && ((isset($context["sort_order"]) ? $context["sort_order"] : null) == "asc"))) ? ("desc") : ("asc"))]);
        // line 16
        echo "        <div class=\"responsivetable\">
            <table id=\"tabledatabases\" class=\"data\">
                ";
        // line 18
        $this->loadTemplate("server/databases/table_header.twig", "server/databases/databases_header.twig", 18)->display(twig_to_array(["url_params" =>         // line 19
(isset($context["url_params"]) ? $context["url_params"] : null), "sort_by" =>         // line 20
(isset($context["sort_by"]) ? $context["sort_by"] : null), "sort_order" =>         // line 21
(isset($context["sort_order"]) ? $context["sort_order"] : null), "sort_order_text" => (((        // line 22
(isset($context["sort_order"]) ? $context["sort_order"] : null) == "asc")) ? (_gettext("Ascending")) : (_gettext("Descending"))), "column_order" =>         // line 23
(isset($context["column_order"]) ? $context["column_order"] : null), "first_database" =>         // line 24
(isset($context["first_database"]) ? $context["first_database"] : null), "master_replication" =>         // line 25
(isset($context["master_replication"]) ? $context["master_replication"] : null), "slave_replication" =>         // line 26
(isset($context["slave_replication"]) ? $context["slave_replication"] : null), "is_superuser" =>         // line 27
(isset($context["is_superuser"]) ? $context["is_superuser"] : null), "allow_user_drop_database" =>         // line 28
(isset($context["allow_user_drop_database"]) ? $context["allow_user_drop_database"] : null)]));
    }

    public function getTemplateName()
    {
        return "server/databases/databases_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 28,  63 => 27,  62 => 26,  61 => 25,  60 => 24,  59 => 23,  58 => 22,  57 => 21,  56 => 20,  55 => 19,  54 => 18,  50 => 16,  48 => 14,  47 => 12,  43 => 11,  39 => 9,  37 => 8,  36 => 5,  35 => 4,  34 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "server/databases/databases_header.twig", "E:\\Estevan\\tp5\\public\\phpMyAdmin\\templates\\server\\databases\\databases_header.twig");
    }
}
