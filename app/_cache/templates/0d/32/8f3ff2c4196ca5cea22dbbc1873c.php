<?php

/* partials/navigation/navigation-ol.html */
class __TwigTemplate_0d328f3ff2c4196ca5cea22dbbc1873c extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"pure-u-1-5\">
  <ol id=\"navigation\" class=\"sections\">
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "      <li>
        <a href=\"";
            // line 5
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "url");
            echo "\">";
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "title");
            echo " &rarr;</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "      <li><a href=\"";
        echo (isset($context["root_path"]) ? $context["root_path"] : null);
        echo "/eli/_pmwiki\">Wiki &rarr;</a></li>
  </ol>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation/navigation-ol.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
