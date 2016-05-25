<?php

/* IITChampBundle:Competition:show.html.twig */
class __TwigTemplate_d7ae872a09c57a6bab5326ef48d121cda703f930cfaa3e2864c5d86f4d54d0a4 extends Twig_Template
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
        $__internal_7cc21bbf023232b9c469d378171fdd0f834b9e3e791450b771e5993a35292edb = $this->env->getExtension("native_profiler");
        $__internal_7cc21bbf023232b9c469d378171fdd0f834b9e3e791450b771e5993a35292edb->enter($__internal_7cc21bbf023232b9c469d378171fdd0f834b9e3e791450b771e5993a35292edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITChampBundle:Competition:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cc21bbf023232b9c469d378171fdd0f834b9e3e791450b771e5993a35292edb->leave($__internal_7cc21bbf023232b9c469d378171fdd0f834b9e3e791450b771e5993a35292edb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_afa63150c57de7f9c26cd2fc685576cd12fcb121b1ebdd2a2205f05db0869d4c = $this->env->getExtension("native_profiler");
        $__internal_afa63150c57de7f9c26cd2fc685576cd12fcb121b1ebdd2a2205f05db0869d4c->enter($__internal_afa63150c57de7f9c26cd2fc685576cd12fcb121b1ebdd2a2205f05db0869d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_afa63150c57de7f9c26cd2fc685576cd12fcb121b1ebdd2a2205f05db0869d4c->leave($__internal_afa63150c57de7f9c26cd2fc685576cd12fcb121b1ebdd2a2205f05db0869d4c_prof);

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
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Competition</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Designation</th>*/
/*                 <td>{{ entity.designation }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Paysoraganisation</th>*/
/*                 <td>{{ entity.paysoraganisation }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datedeb</th>*/
/*                 <td>{{ entity.datedeb|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datefin</th>*/
/*                 <td>{{ entity.datefin|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Typecompetition</th>*/
/*                 <td>{{ entity.typecompetition }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('competition') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('competition_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
