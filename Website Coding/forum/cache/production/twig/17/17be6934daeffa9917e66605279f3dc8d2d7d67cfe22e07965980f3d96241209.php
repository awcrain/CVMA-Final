<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* acp_attachments.html */
class __TwigTemplate_dd049ab23a78a1c971397b4109cbe704092c233a0ffba2eedbe35971a277dc2b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_attachments.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (($context["U_BACK"] ?? null)) {
            // line 6
            echo "\t<a href=\"";
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
            echo "</a>
";
        }
        // line 8
        echo "
<h1>";
        // line 9
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</h1>

<p>";
        // line 11
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE_EXPLAIN");
        echo "</p>

";
        // line 13
        if (($context["S_WARNING"] ?? null)) {
            // line 14
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 15
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 16
            echo ($context["WARNING_MSG"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 19
        echo "
";
        // line 20
        if (($context["S_NOTIFY"] ?? null)) {
            // line 21
            echo "\t<div class=\"successbox\">
\t\t<h3>";
            // line 22
            echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY");
            echo "</h3>
\t\t<p>";
            // line 23
            echo ($context["NOTIFY_MSG"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 26
        echo "
";
        // line 27
        if (($context["S_UPLOADING_FILES"] ?? null)) {
            // line 28
            echo "\t<h2>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("UPLOADING_FILES");
            echo "</h2>

\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "upload", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["upload"]) {
                // line 31
                echo "\t\t:: ";
                echo twig_get_attribute($this->env, $this->source, $context["upload"], "FILE_INFO", [], "any", false, false, false, 31);
                echo "<br />
\t\t";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["upload"], "S_DENIED", [], "any", false, false, false, 32)) {
                    echo "<span class=\"error\">";
                    echo twig_get_attribute($this->env, $this->source, $context["upload"], "DENIED", [], "any", false, false, false, 32);
                    echo "</span>";
                } elseif (twig_get_attribute($this->env, $this->source, $context["upload"], "ERROR_MSG", [], "any", false, false, false, 32)) {
                    echo "<span class=\"error\">";
                    echo twig_get_attribute($this->env, $this->source, $context["upload"], "ERROR_MSG", [], "any", false, false, false, 32);
                    echo "</span>";
                } else {
                    echo "<span class=\"success\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SUCCESSFULLY_UPLOADED");
                    echo "</span>";
                }
                // line 33
                echo "\t\t<br /><br />
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upload'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
";
        }
        // line 37
        echo "
";
        // line 38
        if (($context["S_ATTACHMENT_SETTINGS"] ?? null)) {
            // line 39
            echo "
\t<form id=\"attachsettings\" method=\"post\" action=\"";
            // line 40
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "options", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                // line 42
                echo "\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["options"], "S_LEGEND", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "\t\t\t";
                    if ( !twig_get_attribute($this->env, $this->source, $context["options"], "S_FIRST_ROW", [], "any", false, false, false, 43)) {
                        // line 44
                        echo "\t\t\t\t</fieldset>
\t\t\t";
                    }
                    // line 46
                    echo "\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["options"], "LEGEND", [], "any", false, false, false, 47);
                    echo "</legend>
\t\t";
                } else {
                    // line 49
                    echo "
\t\t\t<dl>
\t\t\t\t<dt><label for=\"";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["options"], "KEY", [], "any", false, false, false, 51);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["options"], "TITLE", [], "any", false, false, false, 51);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label>";
                    if (twig_get_attribute($this->env, $this->source, $context["options"], "S_EXPLAIN", [], "any", false, false, false, 51)) {
                        echo "<br /><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["options"], "TITLE_EXPLAIN", [], "any", false, false, false, 51);
                        echo "</span>";
                    }
                    echo "</dt>
\t\t\t\t<dd>";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["options"], "CONTENT", [], "any", false, false, false, 52);
                    echo "</dd>
\t\t\t</dl>

\t\t";
                }
                // line 56
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 60
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 61
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 62
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" />
\t</fieldset>

\t";
            // line 65
            if ( !($context["S_SECURE_DOWNLOADS"] ?? null)) {
                // line 66
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 67
                echo $this->extensions['phpbb\template\twig\extension']->lang("SECURE_DOWNLOAD_NOTICE");
                echo "</p>
\t\t</div>
\t";
            }
            // line 70
            echo "
\t<fieldset>
\t\t<legend>";
            // line 72
            echo $this->extensions['phpbb\template\twig\extension']->lang("SECURE_TITLE");
            echo "</legend>
\t\t<p>";
            // line 73
            echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOAD_ADD_IPS_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt><label for=\"ip_hostname\">";
            // line 75
            echo $this->extensions['phpbb\template\twig\extension']->lang("IP_HOSTNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><textarea id=\"ip_hostname\" cols=\"40\" rows=\"3\" name=\"ips\"></textarea></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"exclude\">";
            // line 79
            echo $this->extensions['phpbb\template\twig\extension']->lang("IP_EXCLUDE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXCLUDE_ENTERED_IP");
            echo "</span></dt>
\t\t<dd><label><input type=\"radio\" id=\"exclude\" name=\"ipexclude\" value=\"1\" class=\"radio\" /> ";
            // line 80
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" name=\"ipexclude\" value=\"0\" checked=\"checked\" class=\"radio\" /> ";
            // line 81
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label></dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" id=\"securesubmit\" name=\"securesubmit\" value=\"";
            // line 85
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />
\t</p>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 90
            echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE_IPS");
            echo "</legend>
\t";
            // line 91
            if (($context["S_DEFINED_IPS"] ?? null)) {
                // line 92
                echo "\t\t\t<p>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOAD_REMOVE_IPS_EXPLAIN");
                echo "</p>
\t\t<dl>
\t\t\t<dt><label for=\"remove_ip_hostname\">";
                // line 94
                echo $this->extensions['phpbb\template\twig\extension']->lang("IP_HOSTNAME");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><select name=\"unip[]\" id=\"remove_ip_hostname\" multiple=\"multiple\" size=\"10\">";
                // line 95
                echo ($context["DEFINED_IPS"] ?? null);
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"unsecuresubmit\" name=\"unsecuresubmit\" value=\"";
                // line 99
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" />
\t\t</p>
\t\t</fieldset>

\t";
            } else {
                // line 104
                echo "\t\t<p>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_IPS_DEFINED");
                echo "</p>
\t";
            }
            // line 106
            echo "\t";
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 110
($context["S_EXTENSION_GROUPS"] ?? null)) {
            // line 111
            echo "
\t";
            // line 112
            if (($context["S_EDIT_GROUP"] ?? null)) {
                // line 113
                echo "\t\t<script>
\t\t// <![CDATA[
\t\t\tfunction update_image(newimage)
\t\t\t{
\t\t\t\tif (newimage == 'no_image')
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('image_upload_icon').src = \"";
                // line 119
                echo ($context["ROOT_PATH"] ?? null);
                echo "images/spacer.gif\";
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('image_upload_icon').src = \"";
                // line 123
                echo ($context["ROOT_PATH"] ?? null);
                echo ($context["IMG_PATH"] ?? null);
                echo "/\" + newimage;
\t\t\t\t}
\t\t\t}

\t\t\tfunction show_extensions(elem)
\t\t\t{
\t\t\t\tvar str = '';

\t\t\t\tfor (i = 0; i < elem.length; i++)
\t\t\t\t{
\t\t\t\t\tvar element = elem.options[i];
\t\t\t\t\tif (element.selected)
\t\t\t\t\t{
\t\t\t\t\t\tif (str)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tstr = str + ', ';
\t\t\t\t\t\t}

\t\t\t\t\t\tstr = str + element.innerHTML;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (document.all)
\t\t\t\t{
\t\t\t\t\tdocument.all.ext.innerText = str;
\t\t\t\t}
\t\t\t\telse if (document.getElementById('ext').textContent)
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('ext').textContent = str;
\t\t\t\t}
\t\t\t\telse if (document.getElementById('ext').firstChild.nodeValue)
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('ext').firstChild.nodeValue = str;
\t\t\t\t}
\t\t\t}

\t\t// ]]>
\t\t</script>

\t\t<form id=\"extgroups\" method=\"post\" action=\"";
                // line 162
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t<fieldset>
\t\t\t<input type=\"hidden\" name=\"action\" value=\"";
                // line 164
                echo ($context["ACTION"] ?? null);
                echo "\" />
\t\t\t<input type=\"hidden\" name=\"g\" value=\"";
                // line 165
                echo ($context["GROUP_ID"] ?? null);
                echo "\" />

\t\t\t<legend>";
                // line 167
                echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"group_name\">";
                // line 169
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_NAME");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"text\" id=\"group_name\" size=\"20\" maxlength=\"100\" name=\"group_name\" value=\"";
                // line 170
                echo ($context["GROUP_NAME"] ?? null);
                echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"category\">";
                // line 173
                echo $this->extensions['phpbb\template\twig\extension']->lang("SPECIAL_CATEGORY");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SPECIAL_CATEGORY_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd>";
                // line 174
                echo ($context["S_CATEGORY_SELECT"] ?? null);
                echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allowed\">";
                // line 177
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALLOWED");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"allowed\" name=\"allow_group\" value=\"1\"";
                // line 178
                if (($context["ALLOW_GROUP"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allow_in_pm\">";
                // line 181
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALLOW_IN_PM");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"allow_in_pm\" name=\"allow_in_pm\" value=\"1\"";
                // line 182
                if (($context["ALLOW_IN_PM"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"upload_icon\">";
                // line 185
                echo $this->extensions['phpbb\template\twig\extension']->lang("UPLOAD_ICON");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><select name=\"upload_icon\" id=\"upload_icon\" onchange=\"update_image(this.options[selectedIndex].value);\">
\t\t\t\t\t<option value=\"no_image\"";
                // line 187
                if (($context["S_NO_IMAGE"] ?? null)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_IMAGE");
                echo "</option>";
                echo ($context["S_FILENAME_LIST"] ?? null);
                echo "
\t\t\t</select></dd>
\t\t\t<dd>&nbsp;<img ";
                // line 189
                if (($context["S_NO_IMAGE"] ?? null)) {
                    echo "src=\"";
                    echo ($context["ROOT_PATH"] ?? null);
                    echo "images/spacer.gif\"";
                } else {
                    echo "src=\"";
                    echo ($context["UPLOAD_ICON_SRC"] ?? null);
                    echo "\"";
                }
                echo " id=\"image_upload_icon\" alt=\"\" title=\"\" />&nbsp;</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"extgroup_filesize\">";
                // line 192
                echo $this->extensions['phpbb\template\twig\extension']->lang("MAX_EXTGROUP_FILESIZE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"number\" id=\"extgroup_filesize\" min=\"0\" max=\"999999999999999\" step=\"any\" name=\"max_filesize\" value=\"";
                // line 193
                echo ($context["EXTGROUP_FILESIZE"] ?? null);
                echo "\" /> <select name=\"size_select\">";
                echo ($context["S_EXT_GROUP_SIZE_OPTIONS"] ?? null);
                echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"assigned_extensions\">";
                // line 196
                echo $this->extensions['phpbb\template\twig\extension']->lang("ASSIGNED_EXTENSIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><div id=\"ext\">";
                // line 197
                echo ($context["ASSIGNED_EXTENSIONS"] ?? null);
                echo "</div> <span>[<a href=\"";
                echo ($context["U_EXTENSIONS"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO_TO_EXTENSIONS");
                echo "</a> ]</span></dd>
\t\t\t<dd><select name=\"extensions[]\" id=\"assigned_extensions\" class=\"narrow\" onchange=\"show_extensions(this);\" multiple=\"multiple\" size=\"8\">";
                // line 198
                echo ($context["S_EXTENSION_OPTIONS"] ?? null);
                echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allowed_forums\">";
                // line 201
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALLOWED_FORUMS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALLOWED_FORUMS_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" id=\"allowed_forums\" class=\"radio\" name=\"forum_select\" value=\"0\"";
                // line 202
                if ( !($context["S_FORUM_IDS"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALLOW_ALL_FORUMS");
                echo "</label></dd>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"forum_select\" value=\"1\"";
                // line 203
                if (($context["S_FORUM_IDS"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALLOW_SELECTED_FORUMS");
                echo "</label></dd>
\t\t\t<dd><select name=\"allowed_forums[]\" multiple=\"multiple\" size=\"8\">";
                // line 204
                echo ($context["S_FORUM_ID_OPTIONS"] ?? null);
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 208
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 209
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
                echo "\" />
\t\t</p>
\t\t";
                // line 211
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t</fieldset>

\t\t</form>
\t";
            } else {
                // line 216
                echo "
\t\t<form id=\"extgroups\" method=\"post\" action=\"";
                // line 217
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t<fieldset class=\"tabulated\">
\t\t<legend>";
                // line 219
                echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
                echo "</legend>

\t\t<table class=\"table1\">
\t\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 225
                echo $this->extensions['phpbb\template\twig\extension']->lang("EXTENSION_GROUP");
                echo "</th>
\t\t\t<th>";
                // line 226
                echo $this->extensions['phpbb\template\twig\extension']->lang("SPECIAL_CATEGORY");
                echo "</th>
\t\t\t<th>";
                // line 227
                echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 231
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "groups", [], "any", false, false, false, 231));
                foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
                    // line 232
                    echo "\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["groups"], "S_ADD_SPACER", [], "any", false, false, false, 232) &&  !twig_get_attribute($this->env, $this->source, $context["groups"], "S_FIRST_ROW", [], "any", false, false, false, 232))) {
                        // line 233
                        echo "\t\t\t<tr>
\t\t\t\t<td class=\"spacer\" colspan=\"3\">&nbsp;</td>
\t\t\t</tr>
\t\t\t";
                    }
                    // line 237
                    echo "\t\t\t<tr>
\t\t\t\t<td><strong>";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["groups"], "GROUP_NAME", [], "any", false, false, false, 238);
                    echo "</strong>
\t\t\t\t\t";
                    // line 239
                    if ((twig_get_attribute($this->env, $this->source, $context["groups"], "S_GROUP_ALLOWED", [], "any", false, false, false, 239) &&  !twig_get_attribute($this->env, $this->source, $context["groups"], "S_ALLOWED_IN_PM", [], "any", false, false, false, 239))) {
                        echo "<br /><span>&raquo; ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NOT_ALLOWED_IN_PM");
                        echo "</span>
\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 240
$context["groups"], "S_ALLOWED_IN_PM", [], "any", false, false, false, 240) &&  !twig_get_attribute($this->env, $this->source, $context["groups"], "S_GROUP_ALLOWED", [], "any", false, false, false, 240))) {
                        echo "<br /><span>&raquo; ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ONLY_ALLOWED_IN_PM");
                        echo "</span>
\t\t\t\t\t";
                    } elseif (( !twig_get_attribute($this->env, $this->source,                     // line 241
$context["groups"], "S_GROUP_ALLOWED", [], "any", false, false, false, 241) &&  !twig_get_attribute($this->env, $this->source, $context["groups"], "S_ALLOWED_IN_PM", [], "any", false, false, false, 241))) {
                        echo "<br /><span>&raquo; ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NOT_ALLOWED_IN_PM_POST");
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 242
                        echo "<br /><span>&raquo; ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ALLOWED_IN_PM_POST");
                        echo "</span>";
                    }
                    // line 243
                    echo "\t\t\t\t</td>
\t\t\t\t<td>";
                    // line 244
                    echo twig_get_attribute($this->env, $this->source, $context["groups"], "CATEGORY", [], "any", false, false, false, 244);
                    echo "</td>
\t\t\t\t<td align=\"center\" valign=\"middle\" style=\"white-space: nowrap;\">&nbsp;<a href=\"";
                    // line 245
                    echo twig_get_attribute($this->env, $this->source, $context["groups"], "U_EDIT", [], "any", false, false, false, 245);
                    echo "\">";
                    echo ($context["ICON_EDIT"] ?? null);
                    echo "</a>&nbsp;&nbsp;<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["groups"], "U_DELETE", [], "any", false, false, false, 245);
                    echo "\" data-ajax=\"row_delete\">";
                    echo ($context["ICON_DELETE"] ?? null);
                    echo "</a>&nbsp;</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 248
                echo "\t\t</tbody>
\t\t</table>
\t\t<p class=\"quick\">
\t\t\t\t";
                // line 251
                echo $this->extensions['phpbb\template\twig\extension']->lang("CREATE_GROUP");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <input type=\"text\" name=\"group_name\" maxlength=\"30\" />
\t\t\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
                // line 252
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" />
\t\t</p>
\t\t";
                // line 254
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t</fieldset>
\t\t</form>

\t";
            }
            // line 259
            echo "
";
        } elseif (        // line 260
($context["S_EXTENSIONS"] ?? null)) {
            // line 261
            echo "
\t<form id=\"add_ext\" method=\"post\" action=\"";
            // line 262
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t<fieldset>
\t\t<legend>";
            // line 264
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_EXTENSION");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"add_extension\">";
            // line 266
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXTENSION");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"add_extension\" size=\"20\" maxlength=\"100\" name=\"add_extension\" value=\"";
            // line 267
            echo ($context["ADD_EXTENSION"] ?? null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"extension_group\">";
            // line 270
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXTENSION_GROUP");
            echo "</label></dt>
\t\t<dd>";
            // line 271
            echo ($context["GROUP_SELECT_OPTIONS"] ?? null);
            echo "</dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input type=\"submit\" id=\"add_extension_check\" name=\"add_extension_check\" class=\"button2\" value=\"";
            // line 275
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 277
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

\t<form id=\"change_ext\" method=\"post\" action=\"";
            // line 281
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 284
            echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
            echo "</legend>

\t<table class=\"table1\">
\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t<thead>
\t<tr>
\t\t<th>";
            // line 290
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXTENSION");
            echo "</th>
\t\t<th>";
            // line 291
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXTENSION_GROUP");
            echo "</th>
\t\t<th>";
            // line 292
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "extensions", [], "any", false, false, false, 296));
            foreach ($context['_seq'] as $context["_key"] => $context["extensions"]) {
                // line 297
                echo "\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["extensions"], "S_SPACER", [], "any", false, false, false, 297)) {
                    // line 298
                    echo "\t\t<tr>
\t\t\t<td class=\"spacer\" colspan=\"3\">&nbsp;</td>
\t\t</tr>
\t\t";
                }
                // line 302
                echo "\t\t<tr>
\t\t\t<td><strong>";
                // line 303
                echo twig_get_attribute($this->env, $this->source, $context["extensions"], "EXTENSION", [], "any", false, false, false, 303);
                echo "</strong></td>
\t\t\t<td>";
                // line 304
                echo twig_get_attribute($this->env, $this->source, $context["extensions"], "GROUP_OPTIONS", [], "any", false, false, false, 304);
                echo "</td>
\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"extension_id_list[]\" value=\"";
                // line 305
                echo twig_get_attribute($this->env, $this->source, $context["extensions"], "EXTENSION_ID", [], "any", false, false, false, 305);
                echo "\" /><input type=\"hidden\" name=\"extension_change_list[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extensions"], "EXTENSION_ID", [], "any", false, false, false, 305);
                echo "\" /></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extensions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 308
            echo "\t</tbody>
\t</table>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 312
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 313
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 315
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 319
($context["S_ORPHAN"] ?? null)) {
            // line 320
            echo "
\t<form id=\"orphan\" method=\"post\" action=\"";
            // line 321
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 324
            echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
            echo "</legend>

\t<div class=\"pagination top-pagination\">
\t";
            // line 327
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 327)) || ($context["TOTAL_FILES"] ?? null))) {
                // line 328
                echo "\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NUMBER_FILES");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["TOTAL_FILES"] ?? null);
                echo " &bull; ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_SIZE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["TOTAL_SIZE"] ?? null);
                echo "
\t\t";
                // line 329
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 329))) {
                    // line 330
                    echo "\t\t\t&bull; ";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "acp_attachments.html", 330)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 331
                    echo "\t\t";
                } else {
                    // line 332
                    echo "\t\t\t&bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t";
                }
                // line 334
                echo "\t";
            }
            // line 335
            echo "\t</div>

\t";
            // line 337
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "orphan", [], "any", false, false, false, 337))) {
                // line 338
                echo "\t\t<table class=\"table1 zebra-table fixed-width-table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 341
                echo $this->extensions['phpbb\template\twig\extension']->lang("FILENAME");
                echo "</th>
\t\t\t<th style=\"width: 15%;\">";
                // line 342
                echo $this->extensions['phpbb\template\twig\extension']->lang("FILEDATE");
                echo "</th>
\t\t\t<th style=\"width: 15%;\">";
                // line 343
                echo $this->extensions['phpbb\template\twig\extension']->lang("FILESIZE");
                echo "</th>
\t\t\t<th style=\"width: 15%;\">";
                // line 344
                echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACH_POST_ID");
                echo "</th>
\t\t\t<th style=\"width: 15%;\">";
                // line 345
                echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACH_TO_POST");
                echo "</th>
\t\t\t<th style=\"width: 15%;\">";
                // line 346
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 350
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "orphan", [], "any", false, false, false, 350));
                foreach ($context['_seq'] as $context["_key"] => $context["orphan"]) {
                    // line 351
                    echo "\t\t\t<tr>
\t\t\t\t<td><a href=\"";
                    // line 352
                    echo twig_get_attribute($this->env, $this->source, $context["orphan"], "U_FILE", [], "any", false, false, false, 352);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["orphan"], "REAL_FILENAME", [], "any", false, false, false, 352);
                    echo "</a></td>
\t\t\t\t<td>";
                    // line 353
                    echo twig_get_attribute($this->env, $this->source, $context["orphan"], "FILETIME", [], "any", false, false, false, 353);
                    echo "</td>
\t\t\t\t<td>";
                    // line 354
                    echo twig_get_attribute($this->env, $this->source, $context["orphan"], "FILESIZE", [], "any", false, false, false, 354);
                    echo "</td>
\t\t\t\t<td><strong>";
                    // line 355
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACH_ID");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " </strong><input type=\"number\" min=\"0\" max=\"9999999999\" name=\"post_id[";
                    echo twig_get_attribute($this->env, $this->source, $context["orphan"], "ATTACH_ID", [], "any", false, false, false, 355);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["orphan"], "POST_ID", [], "any", false, false, false, 355);
                    echo "\" style=\"width: 75%;\" /></td>
\t\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add[";
                    // line 356
                    echo twig_get_attribute($this->env, $this->source, $context["orphan"], "ATTACH_ID", [], "any", false, false, false, 356);
                    echo "]\" /></td>
\t\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"delete[";
                    // line 357
                    echo twig_get_attribute($this->env, $this->source, $context["orphan"], "ATTACH_ID", [], "any", false, false, false, 357);
                    echo "]\" /></td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orphan'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 360
                echo "\t\t<tr class=\"row4\">
\t\t\t<td colspan=\"4\">&nbsp;</td>
\t\t\t<td class=\"small\"><a href=\"#\" onclick=\"marklist('orphan', 'add', true); return false;\">";
                // line 362
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('orphan', 'add', false); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
                echo "</a></td>
\t\t\t<td class=\"small\"><a href=\"#\" onclick=\"marklist('orphan', 'delete', true); return false;\">";
                // line 363
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('orphan', 'delete', false); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
                echo "</a></td>
\t\t</tr>
\t\t</tbody>
\t\t</table>
\t";
            } else {
                // line 368
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 369
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_ATTACHMENTS");
                echo "</p>
\t\t</div>
\t";
            }
            // line 372
            echo "
\t";
            // line 373
            if (($context["TOTAL_FILES"] ?? null)) {
                // line 374
                echo "\t<div class=\"pagination\">
\t\t";
                // line 375
                echo $this->extensions['phpbb\template\twig\extension']->lang("NUMBER_FILES");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["TOTAL_FILES"] ?? null);
                echo " &bull; ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_SIZE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["TOTAL_SIZE"] ?? null);
                echo "
\t\t";
                // line 376
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 376))) {
                    // line 377
                    echo "\t\t\t&bull; ";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "acp_attachments.html", 377)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 378
                    echo "\t\t";
                } else {
                    // line 379
                    echo "\t\t\t&bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t";
                }
                // line 381
                echo "\t</div>
\t";
            }
            // line 383
            echo "
\t";
            // line 384
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "orphan", [], "any", false, false, false, 384))) {
                // line 385
                echo "\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 386
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 387
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
                echo "\" />
\t\t</p>
\t";
            }
            // line 390
            echo "
\t";
            // line 391
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 395
($context["S_MANAGE"] ?? null)) {
            // line 396
            echo "
\t<form id=\"attachments\" method=\"post\" action=\"";
            // line 397
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 400
            echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
            echo "</legend>

\t<div class=\"pagination top-pagination\">
\t";
            // line 403
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 403)) || ($context["TOTAL_FILES"] ?? null))) {
                // line 404
                echo "\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NUMBER_FILES");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["TOTAL_FILES"] ?? null);
                echo " &bull; ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_SIZE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["TOTAL_SIZE"] ?? null);
                echo "
\t\t";
                // line 405
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 405))) {
                    // line 406
                    echo "\t\t\t&bull; ";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "acp_attachments.html", 406)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 407
                    echo "\t\t";
                } else {
                    // line 408
                    echo "\t\t\t&bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t";
                }
                // line 410
                echo "\t";
            }
            // line 411
            echo "\t</div>

";
            // line 413
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attachments", [], "any", false, false, false, 413))) {
                // line 414
                echo "\t<table class=\"table1 zebra-table fixed-width-table\">
\t<thead>
\t<tr>
\t\t<th>";
                // line 417
                echo $this->extensions['phpbb\template\twig\extension']->lang("FILENAME");
                echo "</th>
\t\t<th style=\"width: 15%;\">";
                // line 418
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTED");
                echo "</th>
\t\t<th style=\"width: 15%;\" class=\"centered-text\">";
                // line 419
                echo $this->extensions['phpbb\template\twig\extension']->lang("FILESIZE");
                echo "</th>
\t\t<th style=\"width: 10%;\" class=\"centered-text\">";
                // line 420
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
                echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 424
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attachments"]);
                foreach ($context['_seq'] as $context["_key"] => $context["attachments"]) {
                    // line 425
                    echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
                    // line 427
                    echo ($this->extensions['phpbb\template\twig\extension']->lang("EXTENSION_GROUP") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["attachments"], "EXT_GROUP_NAME", [], "any", false, false, false, 427);
                    echo "</strong>
\t\t\t\t";
                    // line 428
                    if (twig_get_attribute($this->env, $this->source, $context["attachments"], "S_IN_MESSAGE", [], "any", false, false, false, 428)) {
                        // line 429
                        echo "\t\t\t\t\t<br>";
                        echo twig_get_attribute($this->env, $this->source, $context["attachments"], "L_DOWNLOAD_COUNT", [], "any", false, false, false, 429);
                        echo "
\t\t\t\t\t<br>";
                        // line 430
                        echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                        echo " ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATE_MESSAGE");
                        echo "
\t\t\t\t";
                    } else {
                        // line 432
                        echo "\t\t\t\t\t<br><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["attachments"], "U_FILE", [], "any", false, false, false, 432);
                        echo "\"><strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["attachments"], "REAL_FILENAME", [], "any", false, false, false, 432);
                        echo "</strong></a>
\t\t\t\t\t";
                        // line 433
                        if (twig_get_attribute($this->env, $this->source, $context["attachments"], "COMMENT", [], "any", false, false, false, 433)) {
                            echo "<br>";
                            echo twig_get_attribute($this->env, $this->source, $context["attachments"], "COMMENT", [], "any", false, false, false, 433);
                        }
                        // line 434
                        echo "\t\t\t\t\t<br>";
                        echo twig_get_attribute($this->env, $this->source, $context["attachments"], "L_DOWNLOAD_COUNT", [], "any", false, false, false, 434);
                        echo "
\t\t\t\t\t<br>";
                        // line 435
                        echo ($this->extensions['phpbb\template\twig\extension']->lang("TOPIC") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["attachments"], "U_VIEW_TOPIC", [], "any", false, false, false, 435);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["attachments"], "TOPIC_TITLE", [], "any", false, false, false, 435);
                        echo "</a>
\t\t\t\t";
                    }
                    // line 437
                    echo "\t\t\t</td>
\t\t\t<td>";
                    // line 438
                    echo twig_get_attribute($this->env, $this->source, $context["attachments"], "FILETIME", [], "any", false, false, false, 438);
                    echo "<br>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["attachments"], "ATTACHMENT_POSTER", [], "any", false, false, false, 438);
                    echo "</td>
\t\t\t<td class=\"centered-text\">";
                    // line 439
                    echo twig_get_attribute($this->env, $this->source, $context["attachments"], "FILESIZE", [], "any", false, false, false, 439);
                    echo "</td>
\t\t\t<td class=\"centered-text\"><input type=\"checkbox\" class=\"radio\" name=\"delete[";
                    // line 440
                    echo twig_get_attribute($this->env, $this->source, $context["attachments"], "ATTACH_ID", [], "any", false, false, false, 440);
                    echo "]\" /></td>
\t\t</tr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachments'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 443
                echo "\t</tbody>
\t</table>
";
            } else {
                // line 446
                echo "\t<div class=\"errorbox\">
\t\t<p>";
                // line 447
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_ATTACHMENTS");
                echo "</p>
\t</div>
";
            }
            // line 450
            echo "
\t";
            // line 451
            if (($context["TOTAL_FILES"] ?? null)) {
                // line 452
                echo "\t<div class=\"pagination\">
\t\t";
                // line 453
                echo $this->extensions['phpbb\template\twig\extension']->lang("NUMBER_FILES");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["TOTAL_FILES"] ?? null);
                echo " &bull; ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_SIZE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["TOTAL_SIZE"] ?? null);
                echo "
\t\t";
                // line 454
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 454))) {
                    // line 455
                    echo "\t\t\t&bull; ";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "acp_attachments.html", 455)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 456
                    echo "\t\t";
                } else {
                    // line 457
                    echo "\t\t\t&bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t";
                }
                // line 459
                echo "\t</div>
\t";
            }
            // line 461
            echo "
\t<fieldset class=\"display-options\">
\t\t";
            // line 463
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_LOG");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " &nbsp;";
            echo ($context["S_LIMIT_DAYS"] ?? null);
            echo "&nbsp;";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_BY");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " ";
            echo ($context["S_SORT_KEY"] ?? null);
            echo " ";
            echo ($context["S_SORT_DIR"] ?? null);
            echo "
\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 464
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
            echo "\" name=\"sort\" />
\t</fieldset>

\t<hr />

";
            // line 469
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attachments", [], "any", false, false, false, 469))) {
                // line 470
                echo "\t<fieldset class=\"quick\">
\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                // line 471
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MARKED");
                echo "\" /><br />
\t\t<p class=\"small\">
\t\t\t<a href=\"#\" onclick=\"marklist('attachments', 'delete', true); return false;\">";
                // line 473
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
                echo "</a> &bull;
\t\t\t<a href=\"#\" onclick=\"marklist('attachments', 'delete', false); return false;\">";
                // line 474
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
                echo "</a>
\t\t</p>
\t</fieldset>
";
            }
            // line 478
            echo "\t";
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

\t";
            // line 482
            if (($context["S_ACTION_OPTIONS"] ?? null)) {
                // line 483
                echo "\t<fieldset>
\t\t<legend>";
                // line 484
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESYNC_STATS");
                echo "</legend>
\t\t<form id=\"action_stats_form\" method=\"post\" action=\"";
                // line 485
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt><label for=\"action_stats\">";
                // line 487
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESYNC_FILES_STATS");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESYNC_FILES_STATS_EXPLAIN");
                echo "</span></dt>
\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"stats\" /><input class=\"button2\" type=\"submit\" id=\"action_stats\" name=\"action_stats\" value=\"";
                // line 488
                echo $this->extensions['phpbb\template\twig\extension']->lang("RUN");
                echo "\" /></dd>
\t\t\t</dl>
\t\t</form>
\t</fieldset>
\t";
            }
        }
        // line 494
        echo "
";
        // line 495
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_attachments.html", 495)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_attachments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1408 => 495,  1405 => 494,  1396 => 488,  1390 => 487,  1385 => 485,  1381 => 484,  1378 => 483,  1376 => 482,  1368 => 478,  1361 => 474,  1357 => 473,  1352 => 471,  1349 => 470,  1347 => 469,  1339 => 464,  1325 => 463,  1321 => 461,  1317 => 459,  1311 => 457,  1308 => 456,  1295 => 455,  1293 => 454,  1281 => 453,  1278 => 452,  1276 => 451,  1273 => 450,  1267 => 447,  1264 => 446,  1259 => 443,  1250 => 440,  1246 => 439,  1238 => 438,  1235 => 437,  1226 => 435,  1221 => 434,  1216 => 433,  1209 => 432,  1202 => 430,  1197 => 429,  1195 => 428,  1189 => 427,  1185 => 425,  1181 => 424,  1174 => 420,  1170 => 419,  1166 => 418,  1162 => 417,  1157 => 414,  1155 => 413,  1151 => 411,  1148 => 410,  1142 => 408,  1139 => 407,  1126 => 406,  1124 => 405,  1111 => 404,  1109 => 403,  1103 => 400,  1097 => 397,  1094 => 396,  1092 => 395,  1085 => 391,  1082 => 390,  1076 => 387,  1072 => 386,  1069 => 385,  1067 => 384,  1064 => 383,  1060 => 381,  1054 => 379,  1051 => 378,  1038 => 377,  1036 => 376,  1024 => 375,  1021 => 374,  1019 => 373,  1016 => 372,  1010 => 369,  1007 => 368,  997 => 363,  991 => 362,  987 => 360,  978 => 357,  974 => 356,  965 => 355,  961 => 354,  957 => 353,  951 => 352,  948 => 351,  944 => 350,  937 => 346,  933 => 345,  929 => 344,  925 => 343,  921 => 342,  917 => 341,  912 => 338,  910 => 337,  906 => 335,  903 => 334,  897 => 332,  894 => 331,  881 => 330,  879 => 329,  866 => 328,  864 => 327,  858 => 324,  852 => 321,  849 => 320,  847 => 319,  840 => 315,  835 => 313,  831 => 312,  825 => 308,  814 => 305,  810 => 304,  806 => 303,  803 => 302,  797 => 298,  794 => 297,  790 => 296,  783 => 292,  779 => 291,  775 => 290,  766 => 284,  760 => 281,  753 => 277,  748 => 275,  741 => 271,  737 => 270,  731 => 267,  727 => 266,  722 => 264,  717 => 262,  714 => 261,  712 => 260,  709 => 259,  701 => 254,  696 => 252,  691 => 251,  686 => 248,  671 => 245,  667 => 244,  664 => 243,  659 => 242,  652 => 241,  646 => 240,  640 => 239,  636 => 238,  633 => 237,  627 => 233,  624 => 232,  620 => 231,  613 => 227,  609 => 226,  605 => 225,  596 => 219,  591 => 217,  588 => 216,  580 => 211,  575 => 209,  571 => 208,  564 => 204,  556 => 203,  548 => 202,  541 => 201,  535 => 198,  527 => 197,  522 => 196,  514 => 193,  509 => 192,  495 => 189,  484 => 187,  478 => 185,  470 => 182,  465 => 181,  457 => 178,  452 => 177,  446 => 174,  439 => 173,  433 => 170,  428 => 169,  423 => 167,  418 => 165,  414 => 164,  409 => 162,  366 => 123,  359 => 119,  351 => 113,  349 => 112,  346 => 111,  344 => 110,  336 => 106,  330 => 104,  322 => 99,  315 => 95,  310 => 94,  304 => 92,  302 => 91,  298 => 90,  290 => 85,  283 => 81,  279 => 80,  272 => 79,  264 => 75,  259 => 73,  255 => 72,  251 => 70,  245 => 67,  242 => 66,  240 => 65,  234 => 62,  230 => 61,  226 => 60,  221 => 57,  215 => 56,  208 => 52,  195 => 51,  191 => 49,  186 => 47,  183 => 46,  179 => 44,  176 => 43,  173 => 42,  169 => 41,  165 => 40,  162 => 39,  160 => 38,  157 => 37,  153 => 35,  146 => 33,  132 => 32,  127 => 31,  123 => 30,  117 => 28,  115 => 27,  112 => 26,  106 => 23,  102 => 22,  99 => 21,  97 => 20,  94 => 19,  88 => 16,  84 => 15,  81 => 14,  79 => 13,  74 => 11,  69 => 9,  66 => 8,  56 => 6,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_attachments.html", "");
    }
}
