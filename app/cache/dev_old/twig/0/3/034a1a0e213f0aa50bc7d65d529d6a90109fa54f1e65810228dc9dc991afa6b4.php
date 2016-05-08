<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_034a1a0e213f0aa50bc7d65d529d6a90109fa54f1e65810228dc9dc991afa6b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef9283e702f224ecadc7e5e597064c9d9c6c6355b98a02bc2e2f7d11559f7a6e = $this->env->getExtension("native_profiler");
        $__internal_ef9283e702f224ecadc7e5e597064c9d9c6c6355b98a02bc2e2f7d11559f7a6e->enter($__internal_ef9283e702f224ecadc7e5e597064c9d9c6c6355b98a02bc2e2f7d11559f7a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef9283e702f224ecadc7e5e597064c9d9c6c6355b98a02bc2e2f7d11559f7a6e->leave($__internal_ef9283e702f224ecadc7e5e597064c9d9c6c6355b98a02bc2e2f7d11559f7a6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6690df735b08f322832a52eb5564ee435998a8785b71c47e7af1d4d21948d924 = $this->env->getExtension("native_profiler");
        $__internal_6690df735b08f322832a52eb5564ee435998a8785b71c47e7af1d4d21948d924->enter($__internal_6690df735b08f322832a52eb5564ee435998a8785b71c47e7af1d4d21948d924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6690df735b08f322832a52eb5564ee435998a8785b71c47e7af1d4d21948d924->leave($__internal_6690df735b08f322832a52eb5564ee435998a8785b71c47e7af1d4d21948d924_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8546f1dd838fc8409aa3a351ddf2d48d747356dcd3afb747ea1c933ff42279b = $this->env->getExtension("native_profiler");
        $__internal_a8546f1dd838fc8409aa3a351ddf2d48d747356dcd3afb747ea1c933ff42279b->enter($__internal_a8546f1dd838fc8409aa3a351ddf2d48d747356dcd3afb747ea1c933ff42279b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a8546f1dd838fc8409aa3a351ddf2d48d747356dcd3afb747ea1c933ff42279b->leave($__internal_a8546f1dd838fc8409aa3a351ddf2d48d747356dcd3afb747ea1c933ff42279b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b6468096129a21e486e03408fca7a22d8db0edda8a4d3d8f66255e3e37a8075 = $this->env->getExtension("native_profiler");
        $__internal_3b6468096129a21e486e03408fca7a22d8db0edda8a4d3d8f66255e3e37a8075->enter($__internal_3b6468096129a21e486e03408fca7a22d8db0edda8a4d3d8f66255e3e37a8075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3b6468096129a21e486e03408fca7a22d8db0edda8a4d3d8f66255e3e37a8075->leave($__internal_3b6468096129a21e486e03408fca7a22d8db0edda8a4d3d8f66255e3e37a8075_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
