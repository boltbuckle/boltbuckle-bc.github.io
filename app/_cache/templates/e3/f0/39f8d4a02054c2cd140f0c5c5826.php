<?php

/* trace-audiojs.html */
class __TwigTemplate_e3f039f8d4a02054c2cd140f0c5c5826 extends Twig_Template
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
        echo "  <!--";
        $this->env->loadTemplate("partials/fonts/open-sans.html")->display($context);
        echo "-->
  <!--";
        // line 6
        $this->env->loadTemplate("partials/fonts/source-sans-pro.html")->display($context);
        echo "-->
  </head>
  <body>
    <div id=\"container\" class=\"";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id");
        echo " trace-media-page pure-g-r\">
    <div class=\"logo-space pure-u-1-5\"><img class=\"logo\" src=\"public/docs/img/bolt-logo.png\"</img>
      </div><!-- end logo-space -->
      <div class=\"title-space pure-u-4-5\"><h1 class=\"title\">
        <!--a href=\"";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "site_name");
        echo "</a-->
        <strong>";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "project_title");
        echo "</strong>
      </div><!-- einde title-space -->
      ";
        // line 16
        $this->env->loadTemplate("partials/navigation/navigation-ol.html")->display($context);
        // line 17
        echo "      <div id=\"content\" class=\"pure-u-4-5\">
        <div class=\"trace-content-wrap\">
        <p class=\"date\">";
        // line 19
        echo twig_date_format_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date"), "M || d || Y");
        echo " &rarr; <em>Trace &#8470;</em> ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "index");
        echo "/";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "siblings_count");
        echo "</p>
        <div class=\"trace-description\">
          <h2 class=\"\"><a href=\"";
        // line 21
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "</a></h2>
          ";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "
        </div>
        <p id=\"project-count\" class=\"\"><em>Trace &#8470;</em> ";
        // line 24
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "index");
        echo "/";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "siblings_count");
        echo "</p>
        <p id=\"gallery-count\" class=\"\">
          <em>&#8470;</em> <span>1/1</span>
        </p>
        <div id=\"gallery-navigation\" class=\"pure-g-r\">
          <p class=\"pure-u-1-2 previous\"><a href=\"#\" id=\"previous-image\" >Previous image</a> <em>&larr;</em></p>
          <p class=\"pure-u-1-2 next\" ><a href=\"#\" id=\"next-image\">Next image</a> <em>&rarr;</em></p>
        </div><!-- einde gallerij navigatie -->
        <div class=\"pure-g-r\">
          ";
        // line 33
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "siblings")) {
            // line 34
            echo "            ";
            $this->env->loadTemplate("partials/previous-page.html")->display($context);
            // line 35
            echo "            ";
            $this->env->loadTemplate("partials/next-page.html")->display($context);
            // line 36
            echo "          ";
        }
        // line 37
        echo "        </div>
        ";
        // line 38
        $this->env->loadTemplate("partials/assets/media.html")->display($context);
        // line 39
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
        // line 46
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/js/jquery-1.3.2.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 47
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/js/gallery.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 48
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/js/init-gallery.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "trace-audiojs.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
