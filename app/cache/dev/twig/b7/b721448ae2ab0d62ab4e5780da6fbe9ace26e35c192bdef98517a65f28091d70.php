<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_66180a81fa6d88078605ab5f4a40198bf87f64ef894c1a52919f6a9edf20c897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cab83a4eb801cf3638ee51597c631ecf35a7427ad27848e870ea7ad74a5bd80d = $this->env->getExtension("native_profiler");
        $__internal_cab83a4eb801cf3638ee51597c631ecf35a7427ad27848e870ea7ad74a5bd80d->enter($__internal_cab83a4eb801cf3638ee51597c631ecf35a7427ad27848e870ea7ad74a5bd80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cab83a4eb801cf3638ee51597c631ecf35a7427ad27848e870ea7ad74a5bd80d->leave($__internal_cab83a4eb801cf3638ee51597c631ecf35a7427ad27848e870ea7ad74a5bd80d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23e07d24947f5d4625aca61c0c3322a5afaee16c50bc4027283e9af9a26cb2ec = $this->env->getExtension("native_profiler");
        $__internal_23e07d24947f5d4625aca61c0c3322a5afaee16c50bc4027283e9af9a26cb2ec->enter($__internal_23e07d24947f5d4625aca61c0c3322a5afaee16c50bc4027283e9af9a26cb2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_23e07d24947f5d4625aca61c0c3322a5afaee16c50bc4027283e9af9a26cb2ec->leave($__internal_23e07d24947f5d4625aca61c0c3322a5afaee16c50bc4027283e9af9a26cb2ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
