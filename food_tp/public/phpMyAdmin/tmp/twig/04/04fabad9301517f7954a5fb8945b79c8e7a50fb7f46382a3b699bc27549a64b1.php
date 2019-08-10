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

/* server/sub_page_header.twig */
class __TwigTemplate_4b6515911edafb2d5cd7d6755ab92e6d032a678a534ae251c8cd5796fb93ce38 extends \Twig\Template
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
        $context["header"] = ["variables" => ["image" => "s_vars", "text" => _gettext("Server variables and settings")], "engines" => ["image" => "b_engine", "text" => _gettext("Storage engines")], "plugins" => ["image" => "b_plugin", "text" => _gettext("Plugins")], "binlog" => ["image" => "s_tbl", "text" => _gettext("Binary log")], "collations" => ["image" => "s_asci", "text" => _gettext("Character sets and collations")], "replication" => ["image" => "s_replication", "text" => _gettext("Replication")], "database_statistics" => ["image" => "s_db", "text" => _gettext("Databases statistics")], "databases" => ["image" => "s_db", "text" => _gettext("Databases")], "privileges" => ["image" => "b_usrlist", "text" => _gettext("Privileges")]];
        // line 40
        echo "<h2>
    ";
        // line 41
        if ((((isset($context["is_image"]) || array_key_exists("is_image", $context))) ? (_twig_default_filter((isset($context["is_image"]) ? $context["is_image"] : null), true)) : (true))) {
            // line 42
            echo "        ";
            echo PhpMyAdmin\Util::getImage($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), (isset($context["type"]) ? $context["type"] : null), [], "array"), "image", [], "array"));
            echo "
    ";
        } else {
            // line 44
            echo "        ";
            echo PhpMyAdmin\Util::getIcon($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), (isset($context["type"]) ? $context["type"] : null), [], "array"), "image", [], "array"));
            echo "
    ";
        }
        // line 46
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), (isset($context["type"]) ? $context["type"] : null), [], "array"), "text", [], "array"), "html", null, true);
        echo "
    ";
        // line 47
        echo (((isset($context["link"]) || array_key_exists("link", $context))) ? (PhpMyAdmin\Util::showMySQLDocu((isset($context["link"]) ? $context["link"] : null))) : (""));
        echo "
</h2>
";
    }

    public function getTemplateName()
    {
        return "server/sub_page_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 47,  49 => 46,  43 => 44,  37 => 42,  35 => 41,  32 => 40,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "server/sub_page_header.twig", "E:\\Estevan\\tp5\\public\\phpMyAdmin\\templates\\server\\sub_page_header.twig");
    }
}
