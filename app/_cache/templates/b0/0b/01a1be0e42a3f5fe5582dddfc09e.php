<?php

/* partials/assets/mp3.html */
class __TwigTemplate_b00b01a1be0e42a3f5fe5582dddfc09e extends Twig_Template
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
  }); </script>
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "mp3"));
        foreach ($context['_seq'] as $context["_key"] => $context["mp3"]) {
            // line 7
            echo "  <audio src=\"";
            echo $this->getAttribute((isset($context["mp3"]) ? $context["mp3"] : null), "url");
            echo "\" preload=\"auto\" ></audio>
    ";
            // line 8
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "thumb")) {
                // line 9
                echo "      <div class=\"cover\"><img src=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "thumb"), "url");
                echo "\" width=\"90px\" height=\"90px\" class=\"project-thumb\" alt=\"\"></div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mp3'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/assets/mp3.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
