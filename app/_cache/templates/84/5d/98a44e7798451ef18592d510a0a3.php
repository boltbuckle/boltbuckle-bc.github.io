<?php

/* default.html */
class __TwigTemplate_845d98a44e7798451ef18592d510a0a3 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\"
  \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
  ";
        // line 4
        $this->env->loadTemplate("partials/head-min.html")->display($context);
        // line 5
        echo "  </head>
  <body>
    <div class=\"pure-g-r\">
      <div class=\"logo-space pure-u-1-5\"><img class=\"logo\" src=\"public/docs/img/bolt-logo.png\" alt=\"boltbuckle\">
      </div><!-- end logo-space -->
      <div class=\"title-space pure-u-4-5\">
\t\t <h1 class=\"title\"><strong>";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "project_title");
        echo "</strong></h1>
      </div><!-- end title-space -->
        ";
        // line 13
        $this->env->loadTemplate("partials/navigation/navigation-ol.html")->display($context);
        // line 14
        echo "      <div id=\"content\" class=\"pure-u-4-5\">
      <div class=\"trail-list pure-g-r\">
\t\t";
        // line 16
        $this->env->loadTemplate("partials/navigation/trail-list-oldest-first.html")->display($context);
        // line 17
        echo "      </div><!-- end trail-list pure-g-r -->
      </div><!-- end content -->
      <div class=\"placeholder1 pure-u-1-5\"><p><a href=\"";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/admin\">admin login</a></p>
      </div><!-- end placeholder1 -->
      <div id=\"footer\" class=\"pure-u-4-5\">&copy; Copyright ";
        // line 21
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo " ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_year");
        echo " <a class=\"atom-rss\" href=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/?/feed/\">RSS</a><br>
      </div><!-- end footer -->
    </div><!-- end main pure-g-r -->
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
