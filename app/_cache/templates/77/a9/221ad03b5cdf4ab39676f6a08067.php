<?php

/* partials/navigation/trail-list-latest-first.html */
class __TwigTemplate_77a9221ad03b5cdf4ab39676f6a08067 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children")) {
            // line 2
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 3
                echo "    <div class=\"trace-segment pure-g-r ";
                echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "id");
                echo "\">
\t  <div class=\"trace-date pure-u-1-5\"><p><a href=\"";
                // line 4
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url");
                echo "\">";
                echo twig_date_format_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "date"), "M || d || Y ");
                echo "</a></p></div>
      <div class=\"trace-name pure-u-3-5\"><p><a href=\"";
                // line 5
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url");
                echo "\">";
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title");
                echo "</a></p></div>
      <div class=\"pure-u-1-5 trace-avatar\">
\t    ";
                // line 7
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "thumb")) {
                    // line 8
                    echo "\t      <a href=\"";
                    echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url");
                    echo "\">
          <img src=\"";
                    // line 9
                    echo $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "thumb"), "url");
                    echo "\" width=\"30px\" height=\"30px\" class=\"project-thumb\" alt=\"\">
          </a>   
        ";
                }
                // line 12
                echo "      </div>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo " 
";
        }
    }

    public function getTemplateName()
    {
        return "partials/navigation/trail-list-latest-first.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
