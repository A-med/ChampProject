<?php

/* IITChampBundle:Partie:index.html.twig */
class __TwigTemplate_009e82ac9b99ab68d543e654b2f0bf7b92544ee686dfb7deab083e49fa399c03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IITChampBundle:Partie:index.html.twig", 1);
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
        $__internal_284f5b6a63a47736f991d1517249a701c5c35a17b35461f4186647bbb73a83d6 = $this->env->getExtension("native_profiler");
        $__internal_284f5b6a63a47736f991d1517249a701c5c35a17b35461f4186647bbb73a83d6->enter($__internal_284f5b6a63a47736f991d1517249a701c5c35a17b35461f4186647bbb73a83d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITChampBundle:Partie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284f5b6a63a47736f991d1517249a701c5c35a17b35461f4186647bbb73a83d6->leave($__internal_284f5b6a63a47736f991d1517249a701c5c35a17b35461f4186647bbb73a83d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47affce358ee6245d974952a268eb0b8ae993c564ff5958e2590eab122022792 = $this->env->getExtension("native_profiler");
        $__internal_47affce358ee6245d974952a268eb0b8ae993c564ff5958e2590eab122022792->enter($__internal_47affce358ee6245d974952a268eb0b8ae993c564ff5958e2590eab122022792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Partie list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partie_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partie_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partie_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("partie_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_47affce358ee6245d974952a268eb0b8ae993c564ff5958e2590eab122022792->leave($__internal_47affce358ee6245d974952a268eb0b8ae993c564ff5958e2590eab122022792_prof);

    }

    public function getTemplateName()
    {
        return "IITChampBundle:Partie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  86 => 29,  74 => 23,  68 => 20,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
