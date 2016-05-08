<?php

/* IITChampBundle:Joueur:new.html.twig */
class __TwigTemplate_54b016f005b68936612d6d5f51741e8a2d6b534290415b3128149cff25b686fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IITChampBundle:Joueur:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0384c1130ba69736300d892f79a5faae237ee35d8832052077efbfe65e4adeba = $this->env->getExtension("native_profiler");
        $__internal_0384c1130ba69736300d892f79a5faae237ee35d8832052077efbfe65e4adeba->enter($__internal_0384c1130ba69736300d892f79a5faae237ee35d8832052077efbfe65e4adeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITChampBundle:Joueur:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0384c1130ba69736300d892f79a5faae237ee35d8832052077efbfe65e4adeba->leave($__internal_0384c1130ba69736300d892f79a5faae237ee35d8832052077efbfe65e4adeba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ddd01868c79121bcba45e5759f14da0ba6f371d142b3b5f8402ba2fb6da24ef = $this->env->getExtension("native_profiler");
        $__internal_6ddd01868c79121bcba45e5759f14da0ba6f371d142b3b5f8402ba2fb6da24ef->enter($__internal_6ddd01868c79121bcba45e5759f14da0ba6f371d142b3b5f8402ba2fb6da24ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Joueur creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_6ddd01868c79121bcba45e5759f14da0ba6f371d142b3b5f8402ba2fb6da24ef->leave($__internal_6ddd01868c79121bcba45e5759f14da0ba6f371d142b3b5f8402ba2fb6da24ef_prof);

    }

    public function getTemplateName()
    {
        return "IITChampBundle:Joueur:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
