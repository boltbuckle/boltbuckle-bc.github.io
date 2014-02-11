<?php

/* partials/navigation/navigation-ext-links.html */
class __TwigTemplate_f6735e56f6e71ceef6394750d8891a02 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"pure-u-1-5\">
  <ul>
  <li>
      <a href=\"";
        // line 4
        echo (isset($context["root_path"]) ? $context["root_path"] : null);
        echo "/pmwiki\">wiki</a>
  </li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation/navigation-ext-links.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
