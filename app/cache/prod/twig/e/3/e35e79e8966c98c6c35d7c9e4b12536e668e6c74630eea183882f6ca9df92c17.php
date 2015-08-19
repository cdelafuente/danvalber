<?php

/* default/editorial.html.twig */
class __TwigTemplate_e35e79e8966c98c6c35d7c9e4b12536e668e6c74630eea183882f6ca9df92c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/section.html.twig", "default/editorial.html.twig", 1);
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
        echo "Editorial";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/css/editorial.css"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "  <ul>
    <li class=\"item-1\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-01.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-2\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-02.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-3\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-03.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-4\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-04.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-5\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-05.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-6\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-06.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-7\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-07.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-8\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-08.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-9\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-09.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-10\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-10.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-11\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-11.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-12\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-12.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-13\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-13.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-14\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/editorial/editorial-14.png"), "html", null, true);
        echo "\" /></li>
  </ul> 
";
    }

    public function getTemplateName()
    {
        return "default/editorial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
