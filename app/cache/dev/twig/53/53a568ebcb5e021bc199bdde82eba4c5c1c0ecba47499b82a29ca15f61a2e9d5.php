<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_32b36889bfea53420bcabb98a449dbc290aecb5852c9e069d04b1815d5d51600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_e505bc87e1ec5f1c2b1610c060f5f7928d2bd202490f4f64fb959825e90728d0 = $this->env->getExtension("native_profiler");
        $__internal_e505bc87e1ec5f1c2b1610c060f5f7928d2bd202490f4f64fb959825e90728d0->enter($__internal_e505bc87e1ec5f1c2b1610c060f5f7928d2bd202490f4f64fb959825e90728d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e505bc87e1ec5f1c2b1610c060f5f7928d2bd202490f4f64fb959825e90728d0->leave($__internal_e505bc87e1ec5f1c2b1610c060f5f7928d2bd202490f4f64fb959825e90728d0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5fb955d93a8ff235b9d2c13bfbe2c5d442f88aac522b7c4e3c8623012121dfbb = $this->env->getExtension("native_profiler");
        $__internal_5fb955d93a8ff235b9d2c13bfbe2c5d442f88aac522b7c4e3c8623012121dfbb->enter($__internal_5fb955d93a8ff235b9d2c13bfbe2c5d442f88aac522b7c4e3c8623012121dfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_5fb955d93a8ff235b9d2c13bfbe2c5d442f88aac522b7c4e3c8623012121dfbb->leave($__internal_5fb955d93a8ff235b9d2c13bfbe2c5d442f88aac522b7c4e3c8623012121dfbb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
