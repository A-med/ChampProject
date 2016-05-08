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
        $__internal_8cc0e2d15e4f09d389ec1155241f1161021a77ee7fcafae1a043904444ceb3e0 = $this->env->getExtension("native_profiler");
        $__internal_8cc0e2d15e4f09d389ec1155241f1161021a77ee7fcafae1a043904444ceb3e0->enter($__internal_8cc0e2d15e4f09d389ec1155241f1161021a77ee7fcafae1a043904444ceb3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8cc0e2d15e4f09d389ec1155241f1161021a77ee7fcafae1a043904444ceb3e0->leave($__internal_8cc0e2d15e4f09d389ec1155241f1161021a77ee7fcafae1a043904444ceb3e0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a415d95862307078d4622c6a58f444015b85ae1a6cdf608ce8076070770ac81 = $this->env->getExtension("native_profiler");
        $__internal_2a415d95862307078d4622c6a58f444015b85ae1a6cdf608ce8076070770ac81->enter($__internal_2a415d95862307078d4622c6a58f444015b85ae1a6cdf608ce8076070770ac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2a415d95862307078d4622c6a58f444015b85ae1a6cdf608ce8076070770ac81->leave($__internal_2a415d95862307078d4622c6a58f444015b85ae1a6cdf608ce8076070770ac81_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1976d2fb50d893401718882bb05672254bb40cc9dccd4c8e2bc0693b4f779dfd = $this->env->getExtension("native_profiler");
        $__internal_1976d2fb50d893401718882bb05672254bb40cc9dccd4c8e2bc0693b4f779dfd->enter($__internal_1976d2fb50d893401718882bb05672254bb40cc9dccd4c8e2bc0693b4f779dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1976d2fb50d893401718882bb05672254bb40cc9dccd4c8e2bc0693b4f779dfd->leave($__internal_1976d2fb50d893401718882bb05672254bb40cc9dccd4c8e2bc0693b4f779dfd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_46e3ce84ad1e22702e540d7e88c95c130bbac9f1761e639e553fbcdd30262147 = $this->env->getExtension("native_profiler");
        $__internal_46e3ce84ad1e22702e540d7e88c95c130bbac9f1761e639e553fbcdd30262147->enter($__internal_46e3ce84ad1e22702e540d7e88c95c130bbac9f1761e639e553fbcdd30262147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46e3ce84ad1e22702e540d7e88c95c130bbac9f1761e639e553fbcdd30262147->leave($__internal_46e3ce84ad1e22702e540d7e88c95c130bbac9f1761e639e553fbcdd30262147_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09444dbe290059a6679314454aec3aab2c0bb5a539a64b654d090bf3a79f703a = $this->env->getExtension("native_profiler");
        $__internal_09444dbe290059a6679314454aec3aab2c0bb5a539a64b654d090bf3a79f703a->enter($__internal_09444dbe290059a6679314454aec3aab2c0bb5a539a64b654d090bf3a79f703a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_09444dbe290059a6679314454aec3aab2c0bb5a539a64b654d090bf3a79f703a->leave($__internal_09444dbe290059a6679314454aec3aab2c0bb5a539a64b654d090bf3a79f703a_prof);

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
