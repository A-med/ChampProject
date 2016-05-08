<?php

/* IITChampBundle:Joueur:index.html.twig */
class __TwigTemplate_81748561bfa8fdede2f8e3e3d2339c2c37bb9b8b76d3918999e2b0cc38344ff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IITChampBundle:Joueur:index.html.twig", 1);
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
        $__internal_2f9f15eb139555bfaba0305e508051ff1caa8cf2a79ddb1ecd24a4e2c83649b6 = $this->env->getExtension("native_profiler");
        $__internal_2f9f15eb139555bfaba0305e508051ff1caa8cf2a79ddb1ecd24a4e2c83649b6->enter($__internal_2f9f15eb139555bfaba0305e508051ff1caa8cf2a79ddb1ecd24a4e2c83649b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITChampBundle:Joueur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f9f15eb139555bfaba0305e508051ff1caa8cf2a79ddb1ecd24a4e2c83649b6->leave($__internal_2f9f15eb139555bfaba0305e508051ff1caa8cf2a79ddb1ecd24a4e2c83649b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d54a7971f2959b208543f8652657388fdc26b1c8a43662d0f69c1fc67e2b05df = $this->env->getExtension("native_profiler");
        $__internal_d54a7971f2959b208543f8652657388fdc26b1c8a43662d0f69c1fc67e2b05df->enter($__internal_d54a7971f2959b208543f8652657388fdc26b1c8a43662d0f69c1fc67e2b05df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Joueur list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Nationalite</th>
                <th>Datenaiss</th>
                <th>Taille</th>
                <th>Poids</th>
                <th>Image</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nationalite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["entity"], "datenaiss", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datenaiss", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "taille", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "poids", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 43
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("joueur_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_d54a7971f2959b208543f8652657388fdc26b1c8a43662d0f69c1fc67e2b05df->leave($__internal_d54a7971f2959b208543f8652657388fdc26b1c8a43662d0f69c1fc67e2b05df_prof);

    }

    public function getTemplateName()
    {
        return "IITChampBundle:Joueur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 48,  123 => 43,  111 => 37,  105 => 34,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Joueur list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Nationalite</th>*/
/*                 <th>Datenaiss</th>*/
/*                 <th>Taille</th>*/
/*                 <th>Poids</th>*/
/*                 <th>Image</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('joueur_show', { 'id': entity.id }) }}">{{ entity.nom }}</a></td>*/
/*                 <td>{{ entity.prenom }}</td>*/
/*                 <td>{{ entity.nationalite }}</td>*/
/*                 <td>{% if entity.datenaiss %}{{ entity.datenaiss|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.taille }}</td>*/
/*                 <td>{{ entity.poids }}</td>*/
/*                 <td>{{ entity.image }}</td>*/
/*                 <td>{{ entity.id }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('joueur_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('joueur_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('joueur_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
