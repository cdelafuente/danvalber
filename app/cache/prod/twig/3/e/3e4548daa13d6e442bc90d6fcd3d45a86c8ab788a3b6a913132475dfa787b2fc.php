<?php

/* default/miscellaneous.html.twig */
class __TwigTemplate_3e4548daa13d6e442bc90d6fcd3d45a86c8ab788a3b6a913132475dfa787b2fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/section.html.twig", "default/miscellaneous.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/section.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Miscellaneous";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/css/miscellaneous.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "  <ul>
    <li class=\"item-1\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/misc/misc-01.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-2\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/misc/misc-02.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-3\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/misc/misc-03.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-4\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/misc/misc-04.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-5\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/misc/misc-05.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-6\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/misc/misc-06.png"), "html", null, true);
        echo "\" /></li>
  </ul>  
";
    }

    public function getTemplateName()
    {
        return "default/miscellaneous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
