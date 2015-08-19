<?php

/* default/section.html.twig */
class __TwigTemplate_92920b0c295d8001adb15da25c62dc7e76438e24434148fd15da1f43c861b8cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/section.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "  <header>
    <h1>
      <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
        <img width=\"500\" alt=\"Danvalber Graphic Designer\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/home/danvalber.png"), "html", null, true);
        echo "\" />
      </a>
    </h1>
  </header>
";
    }

    public function getTemplateName()
    {
        return "default/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
