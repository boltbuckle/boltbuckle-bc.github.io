<?php

/* trail-simple.html */
class __TwigTemplate_755417a336872597cde3c9ae4a2eb868 extends Twig_Template
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
        $this->env->loadTemplate("partials/head-min-simple.html")->display($context);
        // line 5
        echo "  </head>
  <body>
    <div class=\"pure-g-r\">
      <div class=\"logo-space pure-u-1-5\"><img class=\"logo\" src=\"public/docs/img/bolt-logo.png\"</img>
      </div><!-- end logo-space -->
      <div class=\"title-space pure-u-4-5\"> <h1 class=\"title\">
        <!--a href=\"";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "site_name");
        echo "</a-->
        <strong>";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "project_title");
        echo "</strong>
      </div><!-- end title-space -->
        ";
        // line 14
        $this->env->loadTemplate("partials/navigation/navigation-ol.html")->display($context);
        // line 15
        echo "      <div id=\"content\" class=\"pure-u-4-5\">
      <div class=\"trail-list pure-g-r\">
\t\t";
        // line 17
        $this->env->loadTemplate("partials/navigation/trail-list-simple.html")->display($context);
        // line 18
        echo "      </div><!-- end trail-list pure-g-r -->
      </div><!-- end content -->
      <div class=\"placeholder1 pure-u-1-5\"><p><a href=\"";
        // line 20
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/admin\">admin login</a></p>
      </div><!-- end placeholder1 -->
      <div id=\"footer\" class=\"pure-u-4-5\">&copy; Copyright ";
        // line 22
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
        return "trail-simple.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
