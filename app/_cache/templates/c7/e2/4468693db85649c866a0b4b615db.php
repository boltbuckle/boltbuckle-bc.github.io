<?php

/* partials/head-min-2014.html */
class __TwigTemplate_c7e24468693db85649c866a0b4b615db extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "  <head>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\">
    <title>";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "project_title");
        echo " | ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "site_name");
        echo "</title>
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/?/feed/\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"/min/?b=";
        // line 5
        echo $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "root");
        echo "eli/public/docs/css&amp;f=base-min.css,grids-min.css,media-gal.css,styling-trail-2014.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/fonts/font-combo-1.css\" type=\"text/css\" media=\"screen\">
";
    }

    public function getTemplateName()
    {
        return "partials/head-min-2014.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
