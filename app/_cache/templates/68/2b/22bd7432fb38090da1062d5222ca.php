<?php

/* partials/navigation/category-lists.html */
class __TwigTemplate_682b22bd7432fb38090da1062d5222ca extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 2
            echo "  ";
            if ($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "children")) {
                // line 3
                echo "    <!--div class=\"projects pure-u-1\"-->
    ";
                // line 4
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "children"));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 5
                    echo "      <div class=\"trace-segment pure-g-r ";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "id");
                    echo "\"><!-- pure-u-1 werkt in sommige browsers wel en andere niet-->
\t\t<!--span class=\"trace-segment\"-->
\t\t  <span class=\"trace-date pure-u-1-5\">";
                    // line 7
                    echo twig_date_format_filter($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "date"), "M || d || Y ");
                    echo "</span>
          <span class=\"trace-name pure-u-3-5\"><a href=\"";
                    // line 8
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "url");
                    echo "\">";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "title");
                    echo "</a></span>
          <span class=\"pure-u-1-5 trace-avatar\">
\t\t\t";
                    // line 10
                    if ($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "thumb")) {
                        // line 11
                        echo "            <img src=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "thumb"), "url");
                        echo "\" width=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "thumb"), "width");
                        echo "\" height=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "thumb"), "height");
                        echo "\" class=\"project-thumb\" alt=\"\">
            ";
                    }
                    // line 13
                    echo "\t\t  </span>
     </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 16
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/navigation/category-lists.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
