<?php

/* partials/assets/fap.mp3.html */
class __TwigTemplate_3df8427e4c5da65f9b36e93aa8ead98d extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "mp3"));
        foreach ($context['_seq'] as $context["_key"] => $context["mp3"]) {
            // line 2
            echo "<div class=\"fap\">
       <script type=\"text/javascript\" src=\"";
            // line 3
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
            echo "/public/docs/js/fap/audio-player.js\"></script>  
        <script type=\"text/javascript\">  
            AudioPlayer.setup(\"";
            // line 5
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
            echo "/public/docs/js/fap/player.swf\", {  
                width: 290  
            });  
        </script>  
  
        <p id=\"audioplayer_";
            // line 10
            echo $this->getAttribute((isset($context["mp3"]) ? $context["mp3"] : null), "url");
            echo "\">Loading audio files...</p>  
        <script type=\"text/javascript\">  
        AudioPlayer.embed(\"audioplayer_";
            // line 12
            echo $this->getAttribute((isset($context["mp3"]) ? $context["mp3"] : null), "url");
            echo "\", {soundFile: \"";
            echo $this->getAttribute((isset($context["mp3"]) ? $context["mp3"] : null), "url");
            echo "\" });  
        </script>  
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mp3'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/assets/fap.mp3.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
