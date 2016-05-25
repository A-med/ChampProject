<?php

/* IITChampBundle:Home:home.html.twig */
class __TwigTemplate_110eeab7fb27dce9eb21463b6d3aa213e6dc417e811f52088e1749e6a8e8a317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IITChampBundle:Home:home.html.twig", 1);
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
        $__internal_887cb07e370a37df65258396bf27efe081c31cd6957a9fc445479e9ad7c75de2 = $this->env->getExtension("native_profiler");
        $__internal_887cb07e370a37df65258396bf27efe081c31cd6957a9fc445479e9ad7c75de2->enter($__internal_887cb07e370a37df65258396bf27efe081c31cd6957a9fc445479e9ad7c75de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITChampBundle:Home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_887cb07e370a37df65258396bf27efe081c31cd6957a9fc445479e9ad7c75de2->leave($__internal_887cb07e370a37df65258396bf27efe081c31cd6957a9fc445479e9ad7c75de2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35c84c9081345487cedd156a3c32a37388241c1c3a43b9f27a45308ee27f0fbe = $this->env->getExtension("native_profiler");
        $__internal_35c84c9081345487cedd156a3c32a37388241c1c3a43b9f27a45308ee27f0fbe->enter($__internal_35c84c9081345487cedd156a3c32a37388241c1c3a43b9f27a45308ee27f0fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
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
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competitions"]) ? $context["competitions"] : $this->getContext($context, "competitions")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 71
            echo "            <tr>
                <td><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competition_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "designation", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "paysoraganisation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 74
            if ($this->getAttribute($context["entity"], "datedeb", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datedeb", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 75
            if ($this->getAttribute($context["entity"], "datefin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datefin", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typecompetition", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competition_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 84
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
        // line 90
        echo "        </tbody>
    </table>
        
        
        
        <table class=\"records_list\">
        <thead>
            <tr>
                <th>Buteq1</th>
                <th>Buteq2</th>
                <th>Pointeq1</th>
                <th>Pointeq2</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 108
            echo "            <tr>
                <td><a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resultat_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "buteq1", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "buteq2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pointeq1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pointeq2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resultat_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resultat_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 126
        echo "        </tbody>
    </table>
        
        <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parties"]) ? $context["parties"] : $this->getContext($context, "parties")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 138
            echo "            <tr>
                <td><a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partie_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partie_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 146
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
        // line 152
        echo "        </tbody>
    </table>
        
         <table class=\"records_list\">
        <thead>
            <tr>
                <th>Saison</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendrier"]) ? $context["calendrier"] : $this->getContext($context, "calendrier")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 165
            echo "            <tr>
                <td><a href=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendrier_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "saison", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendrier_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendrier_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 180
        echo "        </tbody>
    </table>
        
        AASA
    ";
        
        $__internal_35c84c9081345487cedd156a3c32a37388241c1c3a43b9f27a45308ee27f0fbe->leave($__internal_35c84c9081345487cedd156a3c32a37388241c1c3a43b9f27a45308ee27f0fbe_prof);

    }

    public function getTemplateName()
    {
        return "IITChampBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 180,  369 => 174,  363 => 171,  356 => 167,  350 => 166,  347 => 165,  343 => 164,  329 => 152,  317 => 146,  311 => 143,  302 => 139,  299 => 138,  295 => 137,  282 => 126,  270 => 120,  264 => 117,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  239 => 109,  236 => 108,  232 => 107,  213 => 90,  201 => 84,  195 => 81,  188 => 77,  184 => 76,  178 => 75,  172 => 74,  168 => 73,  162 => 72,  159 => 71,  155 => 70,  130 => 48,  123 => 43,  111 => 37,  105 => 34,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
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
/*         {% for entity in joueurs %}*/
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
/*                 */
/*                 */
/*                 */
/*                 */
/*                 <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Designation</th>*/
/*                 <th>Paysoraganisation</th>*/
/*                 <th>Datedeb</th>*/
/*                 <th>Datefin</th>*/
/*                 <th>Typecompetition</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in competitions %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('competition_show', { 'id': entity.id }) }}">{{ entity.designation }}</a></td>*/
/*                 <td>{{ entity.paysoraganisation }}</td>*/
/*                 <td>{% if entity.datedeb %}{{ entity.datedeb|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if entity.datefin %}{{ entity.datefin|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.typecompetition }}</td>*/
/*                 <td>{{ entity.id }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('competition_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('competition_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         */
/*         */
/*         */
/*         <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Buteq1</th>*/
/*                 <th>Buteq2</th>*/
/*                 <th>Pointeq1</th>*/
/*                 <th>Pointeq2</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in resultats %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('resultat_show', { 'id': entity.id }) }}">{{ entity.buteq1 }}</a></td>*/
/*                 <td>{{ entity.buteq2 }}</td>*/
/*                 <td>{{ entity.pointeq1 }}</td>*/
/*                 <td>{{ entity.pointeq2 }}</td>*/
/*                 <td>{{ entity.id }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('resultat_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('resultat_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         */
/*         <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in parties %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('partie_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('partie_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('partie_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         */
/*          <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Saison</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in calendrier %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('calendrier_show', { 'id': entity.id }) }}">{{ entity.saison }}</a></td>*/
/*                 <td>{{ entity.id }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('calendrier_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('calendrier_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         */
/*         AASA*/
/*     {% endblock %}*/
/* */
