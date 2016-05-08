<?php

/* ::base.html.twig */
class __TwigTemplate_9815b3e2985a17579fd42577dbfd7f3043c9db6d16a05dbbb69f162bef9ac22d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_401bfc17470d241c15fed8f917a9dd674091caab241e6f6a273190a3c7416fe2 = $this->env->getExtension("native_profiler");
        $__internal_401bfc17470d241c15fed8f917a9dd674091caab241e6f6a273190a3c7416fe2->enter($__internal_401bfc17470d241c15fed8f917a9dd674091caab241e6f6a273190a3c7416fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_401bfc17470d241c15fed8f917a9dd674091caab241e6f6a273190a3c7416fe2->leave($__internal_401bfc17470d241c15fed8f917a9dd674091caab241e6f6a273190a3c7416fe2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34bd478b2b761e9ca126a0a7e8a78edf64c3faef76bef8437d0363b34c719812 = $this->env->getExtension("native_profiler");
        $__internal_34bd478b2b761e9ca126a0a7e8a78edf64c3faef76bef8437d0363b34c719812->enter($__internal_34bd478b2b761e9ca126a0a7e8a78edf64c3faef76bef8437d0363b34c719812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_34bd478b2b761e9ca126a0a7e8a78edf64c3faef76bef8437d0363b34c719812->leave($__internal_34bd478b2b761e9ca126a0a7e8a78edf64c3faef76bef8437d0363b34c719812_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9df7da4d141983f514ec7d223d8e82d7084a798aca3068984a789de6395119fa = $this->env->getExtension("native_profiler");
        $__internal_9df7da4d141983f514ec7d223d8e82d7084a798aca3068984a789de6395119fa->enter($__internal_9df7da4d141983f514ec7d223d8e82d7084a798aca3068984a789de6395119fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9df7da4d141983f514ec7d223d8e82d7084a798aca3068984a789de6395119fa->leave($__internal_9df7da4d141983f514ec7d223d8e82d7084a798aca3068984a789de6395119fa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_825026d84b6b8661a7630810fde10dfb3c1b5953d615e375bc353ca7c563ce1e = $this->env->getExtension("native_profiler");
        $__internal_825026d84b6b8661a7630810fde10dfb3c1b5953d615e375bc353ca7c563ce1e->enter($__internal_825026d84b6b8661a7630810fde10dfb3c1b5953d615e375bc353ca7c563ce1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_825026d84b6b8661a7630810fde10dfb3c1b5953d615e375bc353ca7c563ce1e->leave($__internal_825026d84b6b8661a7630810fde10dfb3c1b5953d615e375bc353ca7c563ce1e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83835a8ae3c4e33c2fea0d7a48f4fa955ba50cfa7bc0f079a07bfb0ba9d33e98 = $this->env->getExtension("native_profiler");
        $__internal_83835a8ae3c4e33c2fea0d7a48f4fa955ba50cfa7bc0f079a07bfb0ba9d33e98->enter($__internal_83835a8ae3c4e33c2fea0d7a48f4fa955ba50cfa7bc0f079a07bfb0ba9d33e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_83835a8ae3c4e33c2fea0d7a48f4fa955ba50cfa7bc0f079a07bfb0ba9d33e98->leave($__internal_83835a8ae3c4e33c2fea0d7a48f4fa955ba50cfa7bc0f079a07bfb0ba9d33e98_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
