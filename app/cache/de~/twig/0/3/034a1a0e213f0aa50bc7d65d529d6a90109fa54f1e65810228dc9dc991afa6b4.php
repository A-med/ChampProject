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
        $__internal_f59ae95e26fa53243d41f50157d88dddd0dfb140385161713f2185b884ac6340 = $this->env->getExtension("native_profiler");
        $__internal_f59ae95e26fa53243d41f50157d88dddd0dfb140385161713f2185b884ac6340->enter($__internal_f59ae95e26fa53243d41f50157d88dddd0dfb140385161713f2185b884ac6340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f59ae95e26fa53243d41f50157d88dddd0dfb140385161713f2185b884ac6340->leave($__internal_f59ae95e26fa53243d41f50157d88dddd0dfb140385161713f2185b884ac6340_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38329ff2ea5c7a7e54c3d8d8333d7caa273bac022768d4e006729cdeeec632ac = $this->env->getExtension("native_profiler");
        $__internal_38329ff2ea5c7a7e54c3d8d8333d7caa273bac022768d4e006729cdeeec632ac->enter($__internal_38329ff2ea5c7a7e54c3d8d8333d7caa273bac022768d4e006729cdeeec632ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_38329ff2ea5c7a7e54c3d8d8333d7caa273bac022768d4e006729cdeeec632ac->leave($__internal_38329ff2ea5c7a7e54c3d8d8333d7caa273bac022768d4e006729cdeeec632ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b72990a4bf3815595e69e64a7268004dc2d1b3b497da82ddca345356c373aef4 = $this->env->getExtension("native_profiler");
        $__internal_b72990a4bf3815595e69e64a7268004dc2d1b3b497da82ddca345356c373aef4->enter($__internal_b72990a4bf3815595e69e64a7268004dc2d1b3b497da82ddca345356c373aef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b72990a4bf3815595e69e64a7268004dc2d1b3b497da82ddca345356c373aef4->leave($__internal_b72990a4bf3815595e69e64a7268004dc2d1b3b497da82ddca345356c373aef4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_119e210be418a427d6a68a69707344788b5af8afaaae3a999343e3bc4749e310 = $this->env->getExtension("native_profiler");
        $__internal_119e210be418a427d6a68a69707344788b5af8afaaae3a999343e3bc4749e310->enter($__internal_119e210be418a427d6a68a69707344788b5af8afaaae3a999343e3bc4749e310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_119e210be418a427d6a68a69707344788b5af8afaaae3a999343e3bc4749e310->leave($__internal_119e210be418a427d6a68a69707344788b5af8afaaae3a999343e3bc4749e310_prof);

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
