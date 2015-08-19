<?php

/* default/index.html.twig */
class __TwigTemplate_a8fe6aec631fd38fcb219ba5154a3d927340bbddb155c394bc099b6b0e0edecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/css/home.css"), "html", null, true);
        echo "\" /> 
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "  <nav>
    <ul>
      <li id=\"editorial\">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("editorial");
        echo "\">
          <img width=\"250\" alt=\"Editorial\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/home/editorial.png"), "html", null, true);
        echo "\" />
        </a>
      </li>
      <li id=\"web\">
        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("web");
        echo "\">
          <img width=\"140\" alt=\"Web\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/home/web.png"), "html", null, true);
        echo "\" />
        </a>
      </li>
      <li id=\"identity\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("identity");
        echo "\">
          <img width=\"210\" alt=\"Identity\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/home/identity.png"), "html", null, true);
        echo "\" />
        </a>
      </li>
      <li id=\"miscellaneous\">
        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("miscellaneous");
        echo "\">
          <img width=\"380\" alt=\"Miscellaneous\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/home/miscellaneous.png"), "html", null, true);
        echo "\" />
        </a>
      </li>
    </ul>
  </nav>
  <footer>
    <p>
      <img width=\"500\" alt=\"Danvalber Graphics Designer\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/home/danvalber.png"), "html", null, true);
        echo "\" />
    </p>
    <ul>
      <li>
        <a href=\"mailto:danvalber@gmail.com\">
          <img width=\"55\" alt=\"Email\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/home/email.png"), "html", null, true);
        echo "\" />
        </a>
      </li>
      <li>
        <a href=\"skype:danvalber?call\">
          <img width=\"55\" alt=\"Skype\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/home/skype.png"), "html", null, true);
        echo "\" />
        </a>
      </li>
      <li>
        <a href=\"https://www.linkedin.com/in/danvalber\" target=\"_blank\">
          <img width=\"55\" alt=\"Linkedin\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/home/linkedin.png"), "html", null, true);
        echo "\" />
        </a>
      </li>
    </ul>
  </footer>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 51,  117 => 46,  109 => 41,  101 => 36,  91 => 29,  87 => 28,  80 => 24,  76 => 23,  69 => 19,  65 => 18,  58 => 14,  54 => 13,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
