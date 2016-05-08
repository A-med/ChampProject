<?php

/* IITChampBundle:Competition:index.html.twig */
class __TwigTemplate_de9c73bf41a5dd0aa6b4862ca55926179bfd6dceea7bdee9cef303471181d74e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IITChampBundle:Competition:index.html.twig", 1);
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
        $__internal_55d9e75f7fdd6b850655981531ad124a61bfa350053f2252c04eef4ab9ff8593 = $this->env->getExtension("native_profiler");
        $__internal_55d9e75f7fdd6b850655981531ad124a61bfa350053f2252c04eef4ab9ff8593->enter($__internal_55d9e75f7fdd6b850655981531ad124a61bfa350053f2252c04eef4ab9ff8593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITChampBundle:Competition:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55d9e75f7fdd6b850655981531ad124a61bfa350053f2252c04eef4ab9ff8593->leave($__internal_55d9e75f7fdd6b850655981531ad124a61bfa350053f2252c04eef4ab9ff8593_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6d1d9e3fde5e8b413338751bc104c6f7d21ec9d3e15d5e0882c6629dc7b467c = $this->env->getExtension("native_profiler");
        $__internal_b6d1d9e3fde5e8b413338751bc104c6f7d21ec9d3e15d5e0882c6629dc7b467c->enter($__internal_b6d1d9e3fde5e8b413338751bc104c6f7d21ec9d3e15d5e0882c6629dc7b467c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Competition list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Designation</th>
                <th>Paysoraganisation</th>
                <th>Datedeb</th>
                <th>Datefin</th>
                <th>Typecompetition</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competition_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "designation", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "paysoraganisation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["entity"], "datedeb", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datedeb", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["entity"], "datefin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datefin", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typecompetition", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competition_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competition_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 39
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("competition_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_b6d1d9e3fde5e8b413338751bc104c6f7d21ec9d3e15d5e0882c6629dc7b467c->leave($__internal_b6d1d9e3fde5e8b413338751bc104c6f7d21ec9d3e15d5e0882c6629dc7b467c_prof);

    }

    public function getTemplateName()
    {
        return "IITChampBundle:Competition:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  115 => 39,  103 => 33,  97 => 30,  90 => 26,  86 => 25,  80 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
