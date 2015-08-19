<?php

/* default/web.html.twig */
class __TwigTemplate_c7d63dd1b9c3ae81beedad8923e4ef3ccdb708ffee7155b90e1b62467fa8e707 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/section.html.twig", "default/web.html.twig", 1);
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
        echo "Web";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/css/web.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/web/web-01.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-2\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/web/web-02.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-3\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/web/web-03.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-4\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/web/web-04.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-5\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/web/web-05.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-6\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/web/web-06.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-7\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/web/web-07.png"), "html", null, true);
        echo "\" /></li>
    <li class=\"item-8\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/web/web-08.png"), "html", null, true);
        echo "\" /></li>
  </ul> 
";
    }

    public function getTemplateName()
    {
        return "default/web.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
