<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_70b8f5631a9cff6b9d213ed1a7e5dfd8fb2f48927b33156b498854f5aa63ca97 extends Twig_Template
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
        $__internal_b6d6ca7996f63715016a36da5cd0defff0108ed3b0ad685df2e386ab09035fe6 = $this->env->getExtension("native_profiler");
        $__internal_b6d6ca7996f63715016a36da5cd0defff0108ed3b0ad685df2e386ab09035fe6->enter($__internal_b6d6ca7996f63715016a36da5cd0defff0108ed3b0ad685df2e386ab09035fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6d6ca7996f63715016a36da5cd0defff0108ed3b0ad685df2e386ab09035fe6->leave($__internal_b6d6ca7996f63715016a36da5cd0defff0108ed3b0ad685df2e386ab09035fe6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a45c77d953d7814d5bdd6b45aea40cdbdabd0974f2d3aeb08b35cfcdd9b241b = $this->env->getExtension("native_profiler");
        $__internal_1a45c77d953d7814d5bdd6b45aea40cdbdabd0974f2d3aeb08b35cfcdd9b241b->enter($__internal_1a45c77d953d7814d5bdd6b45aea40cdbdabd0974f2d3aeb08b35cfcdd9b241b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1a45c77d953d7814d5bdd6b45aea40cdbdabd0974f2d3aeb08b35cfcdd9b241b->leave($__internal_1a45c77d953d7814d5bdd6b45aea40cdbdabd0974f2d3aeb08b35cfcdd9b241b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca1b15202c12d9830d37d14f41a5c63f09e5ec59ae2a8b826f0a9202d5eeb041 = $this->env->getExtension("native_profiler");
        $__internal_ca1b15202c12d9830d37d14f41a5c63f09e5ec59ae2a8b826f0a9202d5eeb041->enter($__internal_ca1b15202c12d9830d37d14f41a5c63f09e5ec59ae2a8b826f0a9202d5eeb041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ca1b15202c12d9830d37d14f41a5c63f09e5ec59ae2a8b826f0a9202d5eeb041->leave($__internal_ca1b15202c12d9830d37d14f41a5c63f09e5ec59ae2a8b826f0a9202d5eeb041_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dde0973369552a2f2fd9a17dfd93cb896c40ccc5cdee153d1083240af848c03 = $this->env->getExtension("native_profiler");
        $__internal_3dde0973369552a2f2fd9a17dfd93cb896c40ccc5cdee153d1083240af848c03->enter($__internal_3dde0973369552a2f2fd9a17dfd93cb896c40ccc5cdee153d1083240af848c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3dde0973369552a2f2fd9a17dfd93cb896c40ccc5cdee153d1083240af848c03->leave($__internal_3dde0973369552a2f2fd9a17dfd93cb896c40ccc5cdee153d1083240af848c03_prof);

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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
