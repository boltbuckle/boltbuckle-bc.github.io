<?php

/* trace.html */
class __TwigTemplate_85a39003a77454870e19981b59bec627 extends Twig_Template
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
    <div class=\"logo-space pure-u-1-5\"><img class=\"logo\" src=\"public/docs/img/bolt-logo.png\" alt=\"Boltbuckle\">
      </div><!-- end logo-space -->
      <div class=\"title-space pure-u-4-5\"><h1 class=\"title\">
        <strong>";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "project_title");
        echo "</strong></h1>
      </div><!-- einde title-space -->
      ";
        // line 13
        $this->env->loadTemplate("partials/navigation/navigation-ol.html")->display($context);
        // line 14
        echo "      <div id=\"content\" class=\"pure-u-4-5\">
        <div class=\"trace-content-wrap\">
        <p class=\"date\">";
        // line 16
        echo twig_date_format_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date"), "M || d || Y");
        echo " &rarr; <em>Trace &#8470;</em> ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "index");
        echo "/";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "siblings_count");
        echo "</p>
        <div class=\"trace-description\">
          <h2 class=\"\"><a href=\"";
        // line 18
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "</a></h2>
          ";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "
        </div>
         <div class=\"pure-g-r trace-nav\">
          ";
        // line 22
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "siblings")) {
            // line 23
            echo "            ";
            $this->env->loadTemplate("partials/previous-page.html")->display($context);
            // line 24
            echo "            ";
            $this->env->loadTemplate("partials/next-page.html")->display($context);
            // line 25
            echo "          ";
        }
        // line 26
        echo "        </div>
        <p id=\"project-count\" class=\"trace-count\"><em>Trace &#8470;</em> ";
        // line 27
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "index");
        echo "/";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "siblings_count");
        echo "</p>
        <div id=\"gallery-navigation\" class=\"pure-g-r\">
\t\t  <p class=\"pure-u-1-2 previous\"><a href=\"#\" id=\"previous-image\" >Previous image</a> <em>&larr;</em></p>
          <p class=\"pure-u-1-2 next\" ><a href=\"#\" id=\"next-image\">Next image</a> <em>&rarr;</em></p>
        </div><!-- einde gallerij navigatie -->
        <p id=\"gallery-count\" class=\"image-count pure-u-1\">
          <em>&#8470;</em> <span>1/1</span>
        </p>
        ";
        // line 35
        $this->env->loadTemplate("partials/assets/media.html")->display($context);
        // line 36
        echo "        <p id=\"footer\" class=\"pure-u-1\">&copy; Copyright ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo " ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_year");
        echo " <a class=\"atom-rss\" href=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/?/feed/\">RSS</a><br>
        </p>
        </div><!-- einde content-wrap -->
      </div><!-- end content -->
    <script type=\"text/javascript\" charset=\"utf-8\">
      document.getElementsByTagName('body')[0].className += ' js-enabled';
    </script>
    <script src=\"";
        // line 43
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/js/jquery-1.3.2.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 44
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/js/gallery.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 45
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/js/init-gallery.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "trace.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
