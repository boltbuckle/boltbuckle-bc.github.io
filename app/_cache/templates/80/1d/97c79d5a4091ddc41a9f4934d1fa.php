<?php

/* partials/fonts/source-sans-pro.html */
class __TwigTemplate_801d97c79d5a4091ddc41a9f4934d1fa extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "  <link href='";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/fonts/source-sans-pro.css' rel='stylesheet' type='text/css'>
";
    }

    public function getTemplateName()
    {
        return "partials/fonts/source-sans-pro.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
