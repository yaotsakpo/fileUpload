<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dispatch.html.twig */
class __TwigTemplate_17cb06feb9b15b33e306fd848d0258da0fafd935252df8393694692f0bd546fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dispatch.html.twig", 1);
        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dispatch.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dispatch.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "notice"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "
    <div class=\"alert bg-success\" role=\"alert\">
      <svg class=\"glyph stroked checkmark\">
        <use xlink:href=\"#stroked-checkmark\"></use></svg> ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "  
      <a href=\"#\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
 ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "errors", []), "form", []), "getErrors", [0 => true], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            echo "          
  <div class=\"alert bg-danger\" role=\"alert\">
    <svg class=\"glyph stroked cancel\">
      <use xlink:href=\"#stroked-cancel\"></use></svg>  ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
            echo " 
    <a href=\"#\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
<a class=\"btn btn-primary\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visualisationDeJournal", ["importation" => $this->getAttribute($this->getAttribute(($context["ligneJournal"] ?? $this->getContext($context, "ligneJournal")), "importation", []), "id", [])]), "html", null, true);
        echo "\" style=\"margin:2%\">retour</a>
<div class=\"col-lg-12\">
        <div class=\"col-lg-8\">
              <div class=\"panel panel-default \">
                     <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                    <div>
                                    <h3>Dispatch de la ligne journal ci dessous</h3>
                                    <table data-toggle=\"table\" data-show-refresh=\"false\" data-show-toggle=\"true\" data-show-columns=\"false\" data-search=\"false\" data-select-item-name=\"toolbar1\" data-pagination=\"false\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                        <thead>
                                        <tr>
                                            <th data-field=\"jour\"  >Jour</th>
                                            <th data-field=\"NumCompteGen\">Numero de Compte General</th>
                                            <th data-field=\"NumCptTiers\">Numero Compte Tiers</th>
                                            <th data-field=\"Libecriture\">Libelle Ecriture</th>
                                            <th data-field=\"DateEcheance\">Date Echeance</th>
                                            <th data-field=\"PositionJournal\">Position Journal</th>
                                            <th data-field=\"debit\">Debit</th>
                                            <th data-field=\"Credit\">Credit</th>
                                        </tr>                           
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ligneJournal"] ?? $this->getContext($context, "ligneJournal")), "jour", []), "d-m-Y H:m:s"), "html", null, true);
        echo "</td> 
                                                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ligneJournal"] ?? $this->getContext($context, "ligneJournal")), "numCompteGeneral", []), "html", null, true);
        echo "</td> 
                                                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ligneJournal"] ?? $this->getContext($context, "ligneJournal")), "numComptTiers", []), "html", null, true);
        echo "</td> 
                                                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ligneJournal"] ?? $this->getContext($context, "ligneJournal")), "libelleEcriture", []), "html", null, true);
        echo "</td> 
                                                <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ligneJournal"] ?? $this->getContext($context, "ligneJournal")), "dateEcheance", []), "html", null, true);
        echo "</td> 
                                                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ligneJournal"] ?? $this->getContext($context, "ligneJournal")), "positionJournal", []), "html", null, true);
        echo "</td> 
                                                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ligneJournal"] ?? $this->getContext($context, "ligneJournal")), "montantDebit", []), "html", null, true);
        echo "</td> 
                                                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ligneJournal"] ?? $this->getContext($context, "ligneJournal")), "montantCredit", []), "html", null, true);
        echo "</td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
              </div>
          </div>
        </div>
         <div class=\"col-lg-4\">
              <div class=\"panel panel-default \">
                     <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                              <h3>Formulaire pour effectuer un dispatch de la ligne choisit</h3>
                              <br>
                                ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["v" => "v", "class" => "form-horizontal style-form"]]);
        echo "
                              <div class=\"form-group\">
                                <label class=\"col-sm-2 col-sm-2 control-label\">Numero de compte à crediter:</label>
                                  <div class=\"col-sm-10\">
                                 <input type=\"text\" name=\"\"  class=\"form-control\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["ligneJournal"] ?? $this->getContext($context, "ligneJournal")), "importation", []), "typeOperation", []), "numCptDebit", []), "html", null, true);
        echo "\" disabled>
                                  </div>
                              </div>
                              <br>
                              <div class=\"form-group\">
                                <label class=\"col-sm-2 col-sm-2 control-label\">Banque concerné par l'operation:</label>
                                <div class=\"col-sm-10\">
                                 ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numCptDebiter", []), 'errors');
        echo "
                                 ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numCptDebiter", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
        echo "
                                </div>
                              </div>
                              <br>
                              <div class=\"form-group\">
                                <label class=\"col-sm-2 col-sm-2 control-label\">montant: </label>
                                <div class=\"col-sm-10\">
                                 ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'errors');
        echo "
                                 ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
        echo "
                                </div>
                              </div>
                              <br>
                              <br>
                              <div class=\"form-group\">
                                <center>
                                <button type=\"submit\" class=\"btn btn-primary\">valider</button>
                                  <button type=\"reset\" class=\"btn btn-default\">annuler</button> 
                                </center>
                              </div>
                              ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "    
                        </div>
                  </div>
              </div>
            </div>
    </div>
 
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "

<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-table.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dispatch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 118,  283 => 116,  274 => 115,  256 => 106,  242 => 95,  238 => 94,  228 => 87,  224 => 86,  214 => 79,  207 => 75,  188 => 59,  184 => 58,  180 => 57,  176 => 56,  172 => 55,  168 => 54,  164 => 53,  160 => 52,  134 => 29,  131 => 28,  121 => 24,  113 => 21,  110 => 20,  99 => 15,  94 => 12,  90 => 11,  87 => 10,  78 => 9,  65 => 5,  62 => 4,  53 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}

<link href=\"{{ asset ('css/bootstrap-table.css') }}\" rel=\"stylesheet\">

{% endblock %}

{% block body %}

    {% for message in app.flashes('notice') %}

    <div class=\"alert bg-success\" role=\"alert\">
      <svg class=\"glyph stroked checkmark\">
        <use xlink:href=\"#stroked-checkmark\"></use></svg> {{ message }}  
      <a href=\"#\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
    </div>

    {% endfor %}

 {% for error in form.vars.errors.form.getErrors(true) %}          
  <div class=\"alert bg-danger\" role=\"alert\">
    <svg class=\"glyph stroked cancel\">
      <use xlink:href=\"#stroked-cancel\"></use></svg>  {{ error.message }} 
    <a href=\"#\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
  </div>
{% endfor %}

<a class=\"btn btn-primary\" href=\"{{ path('visualisationDeJournal',{'importation':ligneJournal.importation.id}) }}\" style=\"margin:2%\">retour</a>
<div class=\"col-lg-12\">
        <div class=\"col-lg-8\">
              <div class=\"panel panel-default \">
                     <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                    <div>
                                    <h3>Dispatch de la ligne journal ci dessous</h3>
                                    <table data-toggle=\"table\" data-show-refresh=\"false\" data-show-toggle=\"true\" data-show-columns=\"false\" data-search=\"false\" data-select-item-name=\"toolbar1\" data-pagination=\"false\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                        <thead>
                                        <tr>
                                            <th data-field=\"jour\"  >Jour</th>
                                            <th data-field=\"NumCompteGen\">Numero de Compte General</th>
                                            <th data-field=\"NumCptTiers\">Numero Compte Tiers</th>
                                            <th data-field=\"Libecriture\">Libelle Ecriture</th>
                                            <th data-field=\"DateEcheance\">Date Echeance</th>
                                            <th data-field=\"PositionJournal\">Position Journal</th>
                                            <th data-field=\"debit\">Debit</th>
                                            <th data-field=\"Credit\">Credit</th>
                                        </tr>                           
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ ligneJournal.jour|date('d-m-Y H:m:s') }}</td> 
                                                <td>{{ ligneJournal.numCompteGeneral }}</td> 
                                                <td>{{ ligneJournal.numComptTiers }}</td> 
                                                <td>{{ ligneJournal.libelleEcriture }}</td> 
                                                <td>{{ ligneJournal.dateEcheance }}</td> 
                                                <td>{{ ligneJournal.positionJournal }}</td> 
                                                <td>{{ ligneJournal.montantDebit }}</td> 
                                                <td>{{ ligneJournal.montantCredit }}</td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
              </div>
          </div>
        </div>
         <div class=\"col-lg-4\">
              <div class=\"panel panel-default \">
                     <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                              <h3>Formulaire pour effectuer un dispatch de la ligne choisit</h3>
                              <br>
                                {{ form_start(form,{'attr': {'v':'v' ,'class':'form-horizontal style-form' }}) }}
                              <div class=\"form-group\">
                                <label class=\"col-sm-2 col-sm-2 control-label\">Numero de compte à crediter:</label>
                                  <div class=\"col-sm-10\">
                                 <input type=\"text\" name=\"\"  class=\"form-control\" value=\"{{ligneJournal.importation.typeOperation.numCptDebit}}\" disabled>
                                  </div>
                              </div>
                              <br>
                              <div class=\"form-group\">
                                <label class=\"col-sm-2 col-sm-2 control-label\">Banque concerné par l'operation:</label>
                                <div class=\"col-sm-10\">
                                 {{ form_errors(form.numCptDebiter) }}
                                 {{ form_widget(form.numCptDebiter,{'attr':{'class':'form-control','autocomplete': 'off'}}) }}
                                </div>
                              </div>
                              <br>
                              <div class=\"form-group\">
                                <label class=\"col-sm-2 col-sm-2 control-label\">montant: </label>
                                <div class=\"col-sm-10\">
                                 {{ form_errors(form.montant) }}
                                 {{ form_widget(form.montant,{'attr':{'class':'form-control','autocomplete': 'off'}}) }}
                                </div>
                              </div>
                              <br>
                              <br>
                              <div class=\"form-group\">
                                <center>
                                <button type=\"submit\" class=\"btn btn-primary\">valider</button>
                                  <button type=\"reset\" class=\"btn btn-default\">annuler</button> 
                                </center>
                              </div>
                              {{ form_end(form) }}    
                        </div>
                  </div>
              </div>
            </div>
    </div>
 
    {% endblock %}

{% block javascripts %}


<script src=\"{{ asset ('js/bootstrap-table.js') }}\"></script>

<script type=\"text/javascript\">

</script>

{% endblock %}", "dispatch.html.twig", "C:\\wamp\\www\\fileUpload\\app\\Resources\\views\\dispatch.html.twig");
    }
}
