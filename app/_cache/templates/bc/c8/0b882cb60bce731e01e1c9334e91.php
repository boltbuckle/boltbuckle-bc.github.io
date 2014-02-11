<?php

/* page.html */
class __TwigTemplate_bcc80b882cb60bce731e01e1c9334e91 extends Twig_Template
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
    <div id=\"container\" class=\"";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id");
        echo " trace-media-page pure-g-r\">
\t  <div class=\"logo-space pure-u-1-5\"><img class=\"logo\" src=\"public/docs/img/bolt-logo.png\"</img>
      </div><!-- end logo-space -->
        <div class=\"title-space pure-u-4-5\"><h1 class=\"title\">
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
      </div><!-- einde title-space -->
      ";
        // line 14
        $this->env->loadTemplate("partials/navigation/navigation-ol.html")->display($context);
        // line 15
        echo "      <div id=\"content\" class=\"pure-u-4-5\">
        <div class=\"info-content-wrap\">
        <p class=\"date\">";
        // line 17
        echo twig_date_format_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date"), "Y || M || d");
        echo "</p>
        <div class=\"info-content\">
          <h2 class=\"\"><a href=\"";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "</a></h2>
          ";
        // line 20
        $this->env->loadTemplate("partials/assets/images.html")->display($context);
        // line 21
        echo "          ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "
          ";
        // line 22
        $this->env->loadTemplate("partials/assets/pdfs.html")->display($context);
        // line 23
        echo "        </div><!-- einde info/content-->
        <p id=\"footer\" class=\"pure-u-1\">&copy; Copyright ";
        // line 24
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo " ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_year");
        echo " <a class=\"atom-rss\" href=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/?/feed/\">RSS</a><br>
        </p>
        </div><!-- einde content-wrap -->
      </div><!-- einde content -->
    </div>
    <script src=\"";
        // line 29
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/js/jquery-1.3.2.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
