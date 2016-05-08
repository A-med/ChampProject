<?php

/* IITChampBundle:Competition:new.html.twig */
class __TwigTemplate_11641e0536a76f73843db29e0e584915b644f4c75cafa54a0052e3b101c46634 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IITChampBundle:Competition:new.html.twig", 1);
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
        $__internal_8f38475dab1881b4046bd1cce49cb7becd92a519ae706f42262662bc4c9e82c4 = $this->env->getExtension("native_profiler");
        $__internal_8f38475dab1881b4046bd1cce49cb7becd92a519ae706f42262662bc4c9e82c4->enter($__internal_8f38475dab1881b4046bd1cce49cb7becd92a519ae706f42262662bc4c9e82c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITChampBundle:Competition:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f38475dab1881b4046bd1cce49cb7becd92a519ae706f42262662bc4c9e82c4->leave($__internal_8f38475dab1881b4046bd1cce49cb7becd92a519ae706f42262662bc4c9e82c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_380ccae8a2a568588cccdd3c7221fbff9b37a5887aa8c0a9633514dcfea53a17 = $this->env->getExtension("native_profiler");
        $__internal_380ccae8a2a568588cccdd3c7221fbff9b37a5887aa8c0a9633514dcfea53a17->enter($__internal_380ccae8a2a568588cccdd3c7221fbff9b37a5887aa8c0a9633514dcfea53a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Competition creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("competition");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_380ccae8a2a568588cccdd3c7221fbff9b37a5887aa8c0a9633514dcfea53a17->leave($__internal_380ccae8a2a568588cccdd3c7221fbff9b37a5887aa8c0a9633514dcfea53a17_prof);

    }

    public function getTemplateName()
    {
        return "IITChampBundle:Competition:new.html.twig";
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
