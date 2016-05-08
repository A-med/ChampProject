<?php

/* IITChampBundle:Joueur:show.html.twig */
class __TwigTemplate_75c1481642c7d10da88e0931fe5455842fdf7d701702c2380d06c3edd2d809b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IITChampBundle:Joueur:show.html.twig", 1);
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
        $__internal_511a417f6cb50b7031cb7eb706ee09022d26028de8f28d84b82f97a55d83b318 = $this->env->getExtension("native_profiler");
        $__internal_511a417f6cb50b7031cb7eb706ee09022d26028de8f28d84b82f97a55d83b318->enter($__internal_511a417f6cb50b7031cb7eb706ee09022d26028de8f28d84b82f97a55d83b318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITChampBundle:Joueur:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_511a417f6cb50b7031cb7eb706ee09022d26028de8f28d84b82f97a55d83b318->leave($__internal_511a417f6cb50b7031cb7eb706ee09022d26028de8f28d84b82f97a55d83b318_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_31597090e51be2b6801ded1831ef83ceb62ac254b5583f8aa140969714e56fa7 = $this->env->getExtension("native_profiler");
        $__internal_31597090e51be2b6801ded1831ef83ceb62ac254b5583f8aa140969714e56fa7->enter($__internal_31597090e51be2b6801ded1831ef83ceb62ac254b5583f8aa140969714e56fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Joueur</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nationalite</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nationalite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datenaiss</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datenaiss", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Taille</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "taille", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Poids</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "poids", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><image  src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array())), "html", null, true);
        echo "\" /></td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("joueur");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_31597090e51be2b6801ded1831ef83ceb62ac254b5583f8aa140969714e56fa7->leave($__internal_31597090e51be2b6801ded1831ef83ceb62ac254b5583f8aa140969714e56fa7_prof);

    }

    public function getTemplateName()
    {
        return "IITChampBundle:Joueur:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 54,  115 => 50,  107 => 45,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
