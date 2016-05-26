<?php

/* IITChampBundle:Home:teams.html.twig */
class __TwigTemplate_0b57897434bfe95dea4fb299613a7028a3c05c6a79c56d604550d5c9a717d7b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_679a8b08b610d82a562ba59bc743655d425a54b92bd622c8142dc6289de50f2c = $this->env->getExtension("native_profiler");
        $__internal_679a8b08b610d82a562ba59bc743655d425a54b92bd622c8142dc6289de50f2c->enter($__internal_679a8b08b610d82a562ba59bc743655d425a54b92bd622c8142dc6289de50f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITChampBundle:Home:teams.html.twig"));

        // line 1
        echo " 
<div class=\"divListPlayer\" id=\"players\">

             <aside class=\"asideListPlayer\">
                    <div class=\"titre_list_player\">List of Players</div>
                    <table rules=\"all\" style=\"width:552px; \" >
                        <tbody>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["players"]) ? $context["players"] : $this->getContext($context, "players")), 3, "No item"));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "                            <tr style=\"height:190px;\">
                       ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 11
                echo "                            <div  id=\"popup";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\" class=\"overlay\">
                                <div class=\"popup\">
                                    <center><img class=\"image_playerListPlayer\" style=\"padding-left:10px;\" src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imagejoueur/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
                echo "\"></center>

                                    <h2><center>";
                // line 15
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nom", array()) . "  ") . $this->getAttribute($context["entity"], "prenom", array())), "html", null, true);
                echo "</center></h2>
                                    <a class=\"close\" href=\"#\">&times;</a>
                                    <div class=\"content\">
                                        <center><b>Nationality :</b>&nbsp;";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nationalite", array()), "html", null, true);
                echo "</center>
                                        <br>
                                        <center><b>Day of birth :</b>&nbsp;";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datenaiss", array()), "d/m/Y"), "html", null, true);
                echo "</center>
                                        <br>
                                        <center><b>Height :&nbsp;</b>";
                // line 22
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "taille", array()) . " ") . "cm"), "html", null, true);
                echo "</center>
                                        <br>
                                        <center><b> Weight :&nbsp;</b>";
                // line 24
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "poids", array()) . " ") . "kg"), "html", null, true);
                echo "</center>
                                    </div>
                                </div>
                            </div>
                                
                                    <td style=\"width:100px;\">
                                    
                                        <img class=\"image_playerListPlayer\" src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imagejoueur/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
                echo "\">
                                    <center><p  style=\"font-size: 15px;font-family: inherit;font-weight: bold;\" >  ";
                // line 32
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nom", array()) . " ") . $this->getAttribute($context["entity"], "prenom", array())), "html", null, true);
                echo " </p> </center>
                                    <center><a  href=\"#popup";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/info.png"), "html", null, true);
                echo "\" ></a></center>
                                    </td>

                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
                                     
                                 </tr>
  
                               

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "



                        </tbody>
                    </table>
                </aside>
            </div>
                        ";
        
        $__internal_679a8b08b610d82a562ba59bc743655d425a54b92bd622c8142dc6289de50f2c->leave($__internal_679a8b08b610d82a562ba59bc743655d425a54b92bd622c8142dc6289de50f2c_prof);

    }

    public function getTemplateName()
    {
        return "IITChampBundle:Home:teams.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  106 => 37,  94 => 33,  90 => 32,  85 => 31,  75 => 24,  70 => 22,  65 => 20,  60 => 18,  54 => 15,  48 => 13,  42 => 11,  38 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }
}
/*  */
/* <div class="divListPlayer" id="players">*/
/* */
/*              <aside class="asideListPlayer">*/
/*                     <div class="titre_list_player">List of Players</div>*/
/*                     <table rules="all" style="width:552px; " >*/
/*                         <tbody>*/
/*             {% for row in players|batch(3, 'No item') %}*/
/*                             <tr style="height:190px;">*/
/*                        {% for entity in row    %}*/
/*                             <div  id="popup{{entity.id}}" class="overlay">*/
/*                                 <div class="popup">*/
/*                                     <center><img class="image_playerListPlayer" style="padding-left:10px;" src="{{asset('template/image/imagejoueur/')}}{{entity.image}}"></center>*/
/* */
/*                                     <h2><center>{{entity.nom ~"  "~entity.prenom}}</center></h2>*/
/*                                     <a class="close" href="#">&times;</a>*/
/*                                     <div class="content">*/
/*                                         <center><b>Nationality :</b>&nbsp;{{entity.nationalite}}</center>*/
/*                                         <br>*/
/*                                         <center><b>Day of birth :</b>&nbsp;{{entity.datenaiss |date("d/m/Y")}}</center>*/
/*                                         <br>*/
/*                                         <center><b>Height :&nbsp;</b>{{entity.taille~" "~"cm"}}</center>*/
/*                                         <br>*/
/*                                         <center><b> Weight :&nbsp;</b>{{entity.poids~" "~"kg"}}</center>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                                 */
/*                                     <td style="width:100px;">*/
/*                                     */
/*                                         <img class="image_playerListPlayer" src="{{asset('template/image/imagejoueur/')}}{{entity.image}}">*/
/*                                     <center><p  style="font-size: 15px;font-family: inherit;font-weight: bold;" >  {{ entity.nom ~" "~entity.prenom}} </p> </center>*/
/*                                     <center><a  href="#popup{{entity.id}}"><img src="{{asset('template/image/info.png')}}" ></a></center>*/
/*                                     </td>*/
/* */
/*                                  {% endfor %}*/
/* */
/*                                      */
/*                                  </tr>*/
/*   */
/*                                */
/* */
/*                         {% endfor %}*/
/* */
/* */
/* */
/* */
/*                         </tbody>*/
/*                     </table>*/
/*                 </aside>*/
/*             </div>*/
/*                         */
