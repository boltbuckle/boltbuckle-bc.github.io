<?php

/* partials/feed/assets/feed-images.atom */
class __TwigTemplate_d3c7cbacf88a649efe1db8bc5e921a5e extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 2
            echo "  <img src=\"";
            echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "url");
            echo "\" alt=\"";
            echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "name");
            echo ".\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/feed/assets/feed-images.atom";
    }

    public function isTraitable()
    {
        return false;
    }
}
