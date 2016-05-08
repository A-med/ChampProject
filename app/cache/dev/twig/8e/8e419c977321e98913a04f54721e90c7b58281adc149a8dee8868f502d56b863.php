<?php

/* ::base.html.twig */
class __TwigTemplate_237de2dac5cbdd9d322f0774d05e5c57fbbcc51d5ab6d6379323f17e0d2ad9c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3ccfc435654c9416dfd230cd830294ac63fcfaa90086856899abbdc327cf378 = $this->env->getExtension("native_profiler");
        $__internal_b3ccfc435654c9416dfd230cd830294ac63fcfaa90086856899abbdc327cf378->enter($__internal_b3ccfc435654c9416dfd230cd830294ac63fcfaa90086856899abbdc327cf378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b3ccfc435654c9416dfd230cd830294ac63fcfaa90086856899abbdc327cf378->leave($__internal_b3ccfc435654c9416dfd230cd830294ac63fcfaa90086856899abbdc327cf378_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fb245fabc796c99f259b9b5cfe7b90f79ef590a703f5fd70a773a856258ca81 = $this->env->getExtension("native_profiler");
        $__internal_3fb245fabc796c99f259b9b5cfe7b90f79ef590a703f5fd70a773a856258ca81->enter($__internal_3fb245fabc796c99f259b9b5cfe7b90f79ef590a703f5fd70a773a856258ca81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3fb245fabc796c99f259b9b5cfe7b90f79ef590a703f5fd70a773a856258ca81->leave($__internal_3fb245fabc796c99f259b9b5cfe7b90f79ef590a703f5fd70a773a856258ca81_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01c89ca0c34a5f2d010af5b80612a2458464540b4d04360333f5022042ffb358 = $this->env->getExtension("native_profiler");
        $__internal_01c89ca0c34a5f2d010af5b80612a2458464540b4d04360333f5022042ffb358->enter($__internal_01c89ca0c34a5f2d010af5b80612a2458464540b4d04360333f5022042ffb358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_01c89ca0c34a5f2d010af5b80612a2458464540b4d04360333f5022042ffb358->leave($__internal_01c89ca0c34a5f2d010af5b80612a2458464540b4d04360333f5022042ffb358_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a56d4e406786585e27e11f5295a969e1d8f231fb8518213f13f006724a003dd = $this->env->getExtension("native_profiler");
        $__internal_2a56d4e406786585e27e11f5295a969e1d8f231fb8518213f13f006724a003dd->enter($__internal_2a56d4e406786585e27e11f5295a969e1d8f231fb8518213f13f006724a003dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a56d4e406786585e27e11f5295a969e1d8f231fb8518213f13f006724a003dd->leave($__internal_2a56d4e406786585e27e11f5295a969e1d8f231fb8518213f13f006724a003dd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66788be512d32c2383dbc452f97dad019cd07b91e0f79eec9f1fe487795f73ee = $this->env->getExtension("native_profiler");
        $__internal_66788be512d32c2383dbc452f97dad019cd07b91e0f79eec9f1fe487795f73ee->enter($__internal_66788be512d32c2383dbc452f97dad019cd07b91e0f79eec9f1fe487795f73ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_66788be512d32c2383dbc452f97dad019cd07b91e0f79eec9f1fe487795f73ee->leave($__internal_66788be512d32c2383dbc452f97dad019cd07b91e0f79eec9f1fe487795f73ee_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
