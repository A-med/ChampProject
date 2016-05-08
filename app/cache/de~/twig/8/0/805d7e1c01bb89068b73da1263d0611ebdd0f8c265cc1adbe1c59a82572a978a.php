<?php

/* IITChampBundle:Competition:show.html.twig */
class __TwigTemplate_805d7e1c01bb89068b73da1263d0611ebdd0f8c265cc1adbe1c59a82572a978a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IITChampBundle:Competition:show.html.twig", 1);
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
        $__internal_8020e3519d81d9a006aa9ea0002698eb256a51c344142b35ceaa42955f356d09 = $this->env->getExtension("native_profiler");
        $__internal_8020e3519d81d9a006aa9ea0002698eb256a51c344142b35ceaa42955f356d09->enter($__internal_8020e3519d81d9a006aa9ea0002698eb256a51c344142b35ceaa42955f356d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITChampBundle:Competition:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8020e3519d81d9a006aa9ea0002698eb256a51c344142b35ceaa42955f356d09->leave($__internal_8020e3519d81d9a006aa9ea0002698eb256a51c344142b35ceaa42955f356d09_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_927c97b4ec5fd188a89bf7e23c6717eb4c2f49a79088f0ab07d6914d8533f99d = $this->env->getExtension("native_profiler");
        $__internal_927c97b4ec5fd188a89bf7e23c6717eb4c2f49a79088f0ab07d6914d8533f99d->enter($__internal_927c97b4ec5fd188a89bf7e23c6717eb4c2f49a79088f0ab07d6914d8533f99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Competition</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Designation</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "designation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Paysoraganisation</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paysoraganisation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedeb</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datedeb", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datefin</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datefin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typecompetition</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typecompetition", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("competition");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competition_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_927c97b4ec5fd188a89bf7e23c6717eb4c2f49a79088f0ab07d6914d8533f99d->leave($__internal_927c97b4ec5fd188a89bf7e23c6717eb4c2f49a79088f0ab07d6914d8533f99d_prof);

    }

    public function getTemplateName()
    {
        return "IITChampBundle:Competition:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 46,  101 => 42,  93 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
