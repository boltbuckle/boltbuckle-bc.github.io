<?php

/* partials/assets/html5_mp3.html */
class __TwigTemplate_c1896729d3b77f77e2176363175d77e1 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\" src=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/js/audiojs/audio.js\"></script>  
<script>
  audiojs.events.ready(function() {
    var as = audiojs.createAll();
  }); 
</script>
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "mp3"));
        foreach ($context['_seq'] as $context["_key"] => $context["mp3"]) {
            // line 8
            echo "  <div class=\"audio-attachment\">
  <audio src=\"";
            // line 9
            echo $this->getAttribute((isset($context["mp3"]) ? $context["mp3"] : null), "url");
            echo "\" preload=\"none\"></audio>
    ";
            // line 10
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "cover")) {
                // line 11
                echo "      ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "cover"));
                foreach ($context['_seq'] as $context["_key"] => $context["cover"]) {
                    // line 12
                    echo "        <div class=\"cover\"><img src=\"";
                    echo $this->getAttribute((isset($context["cover"]) ? $context["cover"] : null), "url");
                    echo "\" width=\"90px\" height=\"90px\" alt=\"";
                    echo $this->getAttribute((isset($context["mp3"]) ? $context["mp3"] : null), "name");
                    echo "\" ></div>
        <div class=\"audio-info\"><p>";
                    // line 13
                    echo $this->getAttribute((isset($context["mp3"]) ? $context["mp3"] : null), "name");
                    echo "</p>";
                    echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "mp3_description");
                    echo "</div>
  </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cover'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 16
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mp3'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/assets/html5_mp3.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
