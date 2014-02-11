<?php

/* partials/navigation/trail-list-oldest-first.html */
class __TwigTemplate_ee91229fb1b707eb100f66b202da9cf4 extends Twig_Template
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
\t\t<!--div class=\"trace-segment\"-->
\t\t  <div class=\"trace-date pure-u-1-5\"><p>";
                    // line 7
                    echo twig_date_format_filter($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "date"), "M || d || Y ");
                    echo "</p></div>
          <div class=\"trace-name pure-u-3-5\"><p><a href=\"";
                    // line 8
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "url");
                    echo "\">";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "title");
                    echo "</a></p></div>
          <div class=\"pure-u-1-5 trace-avatar\">
\t\t\t";
                    // line 10
                    if ($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "thumb")) {
                        // line 11
                        echo "            <img src=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "thumb"), "url");
                        echo "\" width=\"30px\" height=\"30px\" class=\"project-thumb\" alt=\"\">
            ";
                    }
                    // line 13
                    echo "\t\t  </div>
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
        return "partials/navigation/trail-list-oldest-first.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
