<?php

/* partials/fonts/open-sans.html */
class __TwigTemplate_57b7a11c88c769fffaf5f2e5a921c8f4 extends Twig_Template
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
        echo "/public/docs/fonts/open-sans.css' rel='stylesheet' type='text/css'>
";
    }

    public function getTemplateName()
    {
        return "partials/fonts/open-sans.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
