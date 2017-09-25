<?php

/* bib.html */
class __TwigTemplate_7af0a08d98949a91948db3f56d043ae6c625e7559ccef536236936cedf10e333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "bib.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["bib"] ?? null), "getTitle", array(), "method"), "html", null, true);
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["bib"] ?? null), "getTitle", array(), "method"), "html", null, true);
        echo "</h1>
<div id=\"record\">
<h4>Raw MARC</h4>
<div id=\"raw_record\">
<pre>
";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["bib"] ?? null), "getRecord", array(), "method"), "html", null, true);
        echo "
</pre>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "bib.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bib.html", "/Users/swayh/OneDrive - Online Computer Library Center, Inc/wms-test-3/app/views/bib.html");
    }
}
