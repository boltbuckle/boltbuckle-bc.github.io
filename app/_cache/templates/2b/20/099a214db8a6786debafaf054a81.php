<?php

/* partials/feed/feed-entry.atom */
class __TwigTemplate_2b20099a214db8a6786debafaf054a81 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<entry>
   <title>";
        // line 2
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "</title>
   <id>tag:";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "domain_name");
        echo ",";
        echo twig_date_format_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date"), "Y");
        echo ":/";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink");
        echo "</id>
   <updated>";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "updated");
        echo "</updated>
   <link rel=\"alternate\" type=\"text/html\" href=\"http://";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "base_url");
        echo "/";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink");
        echo "\" />
   <content type=\"xhtml\" xml:lang=\"en\">
      <div xmlns=\"http://www.w3.org/1999/xhtml\">
          ";
        // line 8
        $this->env->loadTemplate("partials/feed/assets/feed-images.atom")->display($context);
        // line 9
        echo "          ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "
      </div>
   </content>
</entry>";
    }

    public function getTemplateName()
    {
        return "partials/feed/feed-entry.atom";
    }

    public function isTraitable()
    {
        return false;
    }
}
