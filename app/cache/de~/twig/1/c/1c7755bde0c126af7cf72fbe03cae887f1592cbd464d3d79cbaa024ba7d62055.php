<?php

/* IITChampBundle:Partie:new.html.twig */
class __TwigTemplate_1c7755bde0c126af7cf72fbe03cae887f1592cbd464d3d79cbaa024ba7d62055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IITChampBundle:Partie:new.html.twig", 1);
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
        $__internal_065250f80c394d5ab0566b4b0241d0cb4fc223e018774df47756f9c4c67b6efb = $this->env->getExtension("native_profiler");
        $__internal_065250f80c394d5ab0566b4b0241d0cb4fc223e018774df47756f9c4c67b6efb->enter($__internal_065250f80c394d5ab0566b4b0241d0cb4fc223e018774df47756f9c4c67b6efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITChampBundle:Partie:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_065250f80c394d5ab0566b4b0241d0cb4fc223e018774df47756f9c4c67b6efb->leave($__internal_065250f80c394d5ab0566b4b0241d0cb4fc223e018774df47756f9c4c67b6efb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea9b0efece6377afbea6a791736f074355b88fe7a3b5878154547d266a8ee1b0 = $this->env->getExtension("native_profiler");
        $__internal_ea9b0efece6377afbea6a791736f074355b88fe7a3b5878154547d266a8ee1b0->enter($__internal_ea9b0efece6377afbea6a791736f074355b88fe7a3b5878154547d266a8ee1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Partie creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("partie");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_ea9b0efece6377afbea6a791736f074355b88fe7a3b5878154547d266a8ee1b0->leave($__internal_ea9b0efece6377afbea6a791736f074355b88fe7a3b5878154547d266a8ee1b0_prof);

    }

    public function getTemplateName()
    {
        return "IITChampBundle:Partie:new.html.twig";
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
