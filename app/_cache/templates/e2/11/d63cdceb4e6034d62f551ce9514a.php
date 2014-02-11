<?php

/* feed.atom */
class __TwigTemplate_e211d63cdceb4e6034d62f551ce9514a extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
  <feed xmlns=\"http://www.w3.org/2005/Atom\" xml:lang=\"en\">

  <title>";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "'s ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feed_name");
        echo "</title>
  <subtitle>";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "profession");
        echo "</subtitle>
  <link href=\"http://";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "base_url");
        echo "/";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink");
        echo "\" hreflang=\"en\" rel=\"self\" type=\"application/atom+xml\"/>
  <link href=\"http://";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "base_url");
        echo "/\" hreflang=\"en\" rel=\"alternate\" type=\"text/html\"/>
  
  <updated>";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "site_updated");
        echo "</updated>
  <generator uri=\"http://staceyapp.com/\" version=\"";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "stacey_version");
        echo "\">Stacey</generator>

  <author>
    <name>";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "</name>
    <uri>http://";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "base_url");
        echo "</uri>
  </author>

  <id>tag:";
        // line 17
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "domain_name");
        echo ",";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_year");
        echo ":/";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink");
        echo "</id>
  <rights>©";
        // line 18
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_year");
        echo " ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "</rights>
  ";
        // line 19
        $this->env->loadTemplate("partials/feed/feed-loop.atom")->display($context);
        // line 20
        echo "
</feed>";
    }

    public function getTemplateName()
    {
        return "feed.atom";
    }

    public function isTraitable()
    {
        return false;
    }
}
