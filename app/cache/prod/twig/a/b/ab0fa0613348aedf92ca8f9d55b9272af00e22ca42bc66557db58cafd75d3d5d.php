<?php

/* base.html.twig */
class __TwigTemplate_ab0fa0613348aedf92ca8f9d55b9272af00e22ca42bc66557db58cafd75d3d5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <title>danvalber | ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "  </head>
  <body>
    ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "    <section id=\"content\">
      ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </section>
  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  63 => 9,  58 => 6,  53 => 5,  46 => 12,  44 => 11,  41 => 10,  39 => 9,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
