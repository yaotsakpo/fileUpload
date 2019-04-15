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

/* default/index.html.twig */
class __TwigTemplate_c4ca287658dc4c3eca411bbbe04133e0758daca179d90eb775b4203fa330080e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["rechercheForm"] ?? $this->getContext($context, "rechercheForm")), "vars", []), "errors", []), "form", []), "getErrors", [0 => true], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            echo "          
      <div class=\"alert bg-danger\" role=\"alert\">
        <svg class=\"glyph stroked cancel\">
          <use xlink:href=\"#stroked-cancel\"></use></svg>  ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
            echo " 
        <a href=\"#\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["produitForm"] ?? $this->getContext($context, "produitForm")), "vars", []), "errors", []), "form", []), "getErrors", [0 => true], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            echo "          
      <div class=\"alert bg-danger\" role=\"alert\">
        <svg class=\"glyph stroked cancel\">
          <use xlink:href=\"#stroked-cancel\"></use></svg>  ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
            echo " 
        <a href=\"#\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
      ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["typeOperationForm"] ?? $this->getContext($context, "typeOperationForm")), "vars", []), "errors", []), "form", []), "getErrors", [0 => true], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            echo "          
      <div class=\"alert bg-danger\" role=\"alert\">
        <svg class=\"glyph stroked cancel\">
          <use xlink:href=\"#stroked-cancel\"></use></svg>  ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
            echo " 
        <a href=\"#\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo " 
        <div class=\"col-md-12\" >
        <div class=\"panel panel-default\">
            <div class=\"panel-body tabs\">
            
                <ul class=\"nav nav-pills\">
                    <li class=\"active\"><a href=\"#pilltab1\" data-toggle=\"tab\">Importation de fichier</a></li>
                    <li><a href=\"#pilltab2\" data-toggle=\"tab\">Affichage des Importations</a></li>
                    <li><a href=\"#pilltab3\" data-toggle=\"tab\">Recherche d'importation</a></li>
                    <li><a href=\"#pilltab4\" data-toggle=\"tab\">Parametres</a></li>
                </ul>

                <div class=\"tab-content\">
                    <div class=\"tab-pane fade in active\" id=\"pilltab1\">
                          <div class=\"col-lg-12\">
                                  ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["v" => "v", "class" => "form-horizontal style-form"]]);
        echo "
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">Fichier CSV:</label>
                                      <div class=\"col-sm-10\">
                                      ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datacsv", []), 'errors');
        echo "
                                       ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datacsv", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                                      </div>
                                  </div>
                                  <br>
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">Type d'operation:</label>
                                      <div class=\"col-sm-10\">
                                      ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeOperation", []), 'errors');
        echo "
                                       ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeOperation", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
                                      </div>
                                  </div>
                                  <br>
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">Mois:</label>
                                    <div class=\"col-sm-10\">
                                     <b>  *veuillez renseigner le numero du mois</b>
                                     ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mois", []), 'errors');
        echo "
                                     ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mois", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
        echo "
                                    </div>
                                  </div>
                                  <br>
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">annee: </label>
                                    <div class=\"col-sm-10\">
                                     ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", []), 'errors');
        echo "
                                     ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
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
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                              </div>
                            </div>
                    <div class=\"tab-pane fade\" id=\"pilltab2\">
                        <div class=\"col-lg-12\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                     <table data-toggle=\"table\" data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                        <thead>
                                        <tr>
                                            <th data-field=\"jour\"  >Jour d'importation</th>
                                            <th ddata-field=\"periode\">Mois-Annee de l'operation</th>
                                            <th ddata-field=\"periode\">Type de l'operation importé</th>
                                            <th data-field=\"action\">Action</th>
                                           
                                        </tr>                           
                                        </thead>
                                        <tbody>
                                            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["importations"] ?? $this->getContext($context, "importations")));
        foreach ($context['_seq'] as $context["_key"] => $context["importation"]) {
            // line 127
            echo "                                            <tr>
                                                <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["importation"], "dateCreation", []), "d-m-Y"), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["importation"], "mois", []), "m"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["importation"], "annee", []), "Y"), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["importation"], "typeOperation", []), "libelletypeOperation", []), "html", null, true);
            echo " </td> 
                                             
                                                <td>
                                                  ";
            // line 133
            if (($this->getAttribute($context["importation"], "status", []) == 0)) {
                // line 134
                echo "                                                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operationCaisse", ["importation" => $this->getAttribute($context["importation"], "id", [])]), "html", null, true);
                echo "\" onclick=\"return confirm('confirmez?')\" ><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Traiter l'importation</button></a>
                                                  ";
            }
            // line 136
            echo "                                                  ";
            if (($this->getAttribute($context["importation"], "status", []) == 1)) {
                // line 137
                echo "                                                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generationDeJournal", ["importation" => $this->getAttribute($context["importation"], "id", [])]), "html", null, true);
                echo "\" onclick=\"return confirm('confirmez?')\" ><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Creer le Journal de l'operation</button></a>
                                                  ";
            }
            // line 139
            echo "                                                  ";
            if (($this->getAttribute($context["importation"], "status", []) == 2)) {
                // line 140
                echo "                                                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visualisationDeJournal", ["importation" => $this->getAttribute($context["importation"], "id", [])]), "html", null, true);
                echo "\" ><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Voir Le Journal</button></a>
                                                  ";
            }
            // line 142
            echo "                                                </td>  

                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['importation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class=\"tab-pane fade\" id=\"pilltab3\">
                        <div class=\"col-lg-12\">
                            <div class=\"col-lg-12\">
                                  ";
        // line 156
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["rechercheForm"] ?? $this->getContext($context, "rechercheForm")), 'form_start', ["attr" => ["v" => "v", "class" => "form-horizontal style-form"]]);
        echo "
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">Type d'operation:</label>
                                      <div class=\"col-sm-10\">
                                      ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["rechercheForm"] ?? $this->getContext($context, "rechercheForm")), "typeOperation", []), 'errors');
        echo "
                                       ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["rechercheForm"] ?? $this->getContext($context, "rechercheForm")), "typeOperation", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
                                      </div>
                                  </div>
                                  <br>
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">Mois:</label>
                                    <div class=\"col-sm-10\">
                                     <b>  *veuillez renseigner le numero du mois</b>
                                     ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["rechercheForm"] ?? $this->getContext($context, "rechercheForm")), "mois", []), 'errors');
        echo "
                                     ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["rechercheForm"] ?? $this->getContext($context, "rechercheForm")), "mois", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
        echo "
                                    </div>
                                  </div>
                                  <br>
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">annee: </label>
                                    <div class=\"col-sm-10\">
                                     ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["rechercheForm"] ?? $this->getContext($context, "rechercheForm")), "annee", []), 'errors');
        echo "
                                     ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["rechercheForm"] ?? $this->getContext($context, "rechercheForm")), "annee", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
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
        // line 189
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["rechercheForm"] ?? $this->getContext($context, "rechercheForm")), 'form_end');
        echo "
                              </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"pilltab4\">
                        <div class=\"col-lg-12\">
                            <div class=\"col-lg-12\">
                                  <div class=\"panel panel-default\">
                                  <div class=\"panel-body tabs\">
                                    <ul class=\"nav nav-tabs\">
                                      <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">Ajout de produits</a></li>
                                      <li class=\"\"><a href=\"#tab2\" data-toggle=\"tab\">Liste des produits</a></li>
                                      <li class=\"\"><a href=\"#tab3\" data-toggle=\"tab\">Ajout de type operation</a></li>
                                      <li class=\"\"><a href=\"#tab4\" data-toggle=\"tab\">Liste des types operation</a></li>
                                    </ul>
                                    <div class=\"tab-content\">
                                      <div class=\"tab-pane fade active in\" id=\"tab1\">
                                        ";
        // line 206
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["produitForm"] ?? $this->getContext($context, "produitForm")), 'form_start', ["attr" => ["v" => "v", "class" => "form-horizontal style-form"]]);
        echo "
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Nom du produit:</label>
                                                <div class=\"col-sm-10\">
                                                ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["produitForm"] ?? $this->getContext($context, "produitForm")), "nomProduit", []), 'errors');
        echo "
                                                 ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["produitForm"] ?? $this->getContext($context, "produitForm")), "nomProduit", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Numero de code du produit:</label>
                                                <div class=\"col-sm-10\">
                                                ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["produitForm"] ?? $this->getContext($context, "produitForm")), "numeroDeCodeProduit", []), 'errors');
        echo "
                                                 ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["produitForm"] ?? $this->getContext($context, "produitForm")), "numeroDeCodeProduit", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Numero de compte du produit: </label>
                                              <div class=\"col-sm-10\">
                                               ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["produitForm"] ?? $this->getContext($context, "produitForm")), "numCptCredit", []), 'errors');
        echo "
                                               ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["produitForm"] ?? $this->getContext($context, "produitForm")), "numCptCredit", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
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
        // line 238
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["produitForm"] ?? $this->getContext($context, "produitForm")), 'form_end');
        echo "
                                      </div>

                                      <div class=\"tab-pane fade\" id=\"tab2\">
                                        <table data-toggle=\"table\" data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                        <thead>
                                        <tr>
                                            <th data-field=\"nomProduit\"  >Nom du produit</th>
                                            <th ddata-field=\"numeroDeCodeProduit\">Numero de code du produit</th>
                                            <th ddata-field=\"numCptCredit\">Numero de compte du profuit</th>
                                            <th data-field=\"action\">Action</th>
                                           
                                        </tr>                           
                                        </thead>
                                        <tbody>
                                           ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 254
            echo "                                            <tr>
                                                <td>";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomProduit", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "numeroDeCodeProduit", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "numCptCredit", []), "html", null, true);
            echo "</td> 
                                                <td>
                                                <a  href=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProduit", ["produit" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
            echo "\"><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Modifier</button></a>
                                                <a  href=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("effacerProduit", ["produit" => $this->getAttribute($context["produit"], "id", [])]), "html", null, true);
            echo "\"><button class=\"btn btn-danger waves-effect\" type=\"submit\" onclick=\"return confirm('confirmez?')\" >Supprimer</button></a>
                                                </td>  

                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                                        </tbody>
                                    </table>
                                      </div>
                                      <div class=\"tab-pane fade\" id=\"tab3\">
                                        ";
        // line 269
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["typeOperationForm"] ?? $this->getContext($context, "typeOperationForm")), 'form_start', ["attr" => ["v" => "v", "class" => "form-horizontal style-form"]]);
        echo "
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Nom du type d'operation:</label>
                                                <div class=\"col-sm-10\">
                                                ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["typeOperationForm"] ?? $this->getContext($context, "typeOperationForm")), "libelleTypeOperation", []), 'errors');
        echo "
                                                 ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["typeOperationForm"] ?? $this->getContext($context, "typeOperationForm")), "libelleTypeOperation", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
        echo " 
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Numero de compte du type d'operation:</label>
                                                <div class=\"col-sm-10\">
                                                ";
        // line 281
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["typeOperationForm"] ?? $this->getContext($context, "typeOperationForm")), "numCptDebit", []), 'errors');
        echo "
                                                 ";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["typeOperationForm"] ?? $this->getContext($context, "typeOperationForm")), "numCptDebit", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
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
        // line 293
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["typeOperationForm"] ?? $this->getContext($context, "typeOperationForm")), 'form_end');
        echo "
                                      </div>


                                      <div class=\"tab-pane fade\" id=\"tab4\">
                                        <table data-toggle=\"table\" data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                        <thead>
                                        <tr>
                                            <th data-field=\"nomTypeOperation\"  >Nom du type d'operation</th>
                                            <th ddata-field=\"numTypeOperation\">Numero de compte du type d'operation</th>
                                            <th data-field=\"action\">Action</th>
                                           
                                        </tr>                           
                                        </thead>
                                        <tbody>
                                            ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeOperations"] ?? $this->getContext($context, "typeOperations")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeOperation"]) {
            // line 309
            echo "                                            <tr>
                                                <td>";
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeOperation"], "libelleTypeOperation", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeOperation"], "numCptDebit", []), "html", null, true);
            echo "</td> 
                                             
                                                <td>
                                                <a  href=\"";
            // line 314
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editTypeOperation", ["typeOperation" => $this->getAttribute($context["typeOperation"], "id", [])]), "html", null, true);
            echo "\"><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Modifier</button></a>
                                                <a  href=\"";
            // line 315
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("effacerTypeOperation", ["typeOperation" => $this->getAttribute($context["typeOperation"], "id", [])]), "html", null, true);
            echo "\"><button class=\"btn btn-danger waves-effect\" type=\"submit\" onclick=\"return confirm('confirmez?')\" >Supprimer</button></a>
                                                </td>  

                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeOperation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "                                        </tbody>
                                    </table>
                                      </div>
                                    </div>
                                  </div>
                                </div><!--/.panel-->
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.panel-->
    </div><!-- /.col-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 335
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 336
        echo "

<script src=\"";
        // line 338
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
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 338,  677 => 336,  668 => 335,  645 => 320,  634 => 315,  630 => 314,  624 => 311,  620 => 310,  617 => 309,  613 => 308,  595 => 293,  581 => 282,  577 => 281,  567 => 274,  563 => 273,  556 => 269,  550 => 265,  539 => 260,  535 => 259,  530 => 257,  526 => 256,  522 => 255,  519 => 254,  515 => 253,  497 => 238,  483 => 227,  479 => 226,  469 => 219,  465 => 218,  455 => 211,  451 => 210,  444 => 206,  424 => 189,  410 => 178,  406 => 177,  396 => 170,  392 => 169,  381 => 161,  377 => 160,  370 => 156,  358 => 146,  349 => 142,  343 => 140,  340 => 139,  334 => 137,  331 => 136,  325 => 134,  323 => 133,  317 => 130,  311 => 129,  307 => 128,  304 => 127,  300 => 126,  279 => 108,  265 => 97,  261 => 96,  251 => 89,  247 => 88,  236 => 80,  232 => 79,  222 => 72,  218 => 71,  211 => 67,  194 => 52,  184 => 48,  176 => 45,  173 => 44,  163 => 40,  155 => 37,  152 => 36,  142 => 32,  134 => 29,  131 => 28,  121 => 24,  113 => 21,  110 => 20,  99 => 15,  94 => 12,  90 => 11,  87 => 10,  78 => 9,  65 => 5,  62 => 4,  53 => 3,  22 => 1,);
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

    {% for error in rechercheForm.vars.errors.form.getErrors(true) %}          
      <div class=\"alert bg-danger\" role=\"alert\">
        <svg class=\"glyph stroked cancel\">
          <use xlink:href=\"#stroked-cancel\"></use></svg>  {{ error.message }} 
        <a href=\"#\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
      </div>
    {% endfor %}

        {% for error in produitForm.vars.errors.form.getErrors(true) %}          
      <div class=\"alert bg-danger\" role=\"alert\">
        <svg class=\"glyph stroked cancel\">
          <use xlink:href=\"#stroked-cancel\"></use></svg>  {{ error.message }} 
        <a href=\"#\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
      </div>
    {% endfor %}

      {% for error in typeOperationForm.vars.errors.form.getErrors(true) %}          
      <div class=\"alert bg-danger\" role=\"alert\">
        <svg class=\"glyph stroked cancel\">
          <use xlink:href=\"#stroked-cancel\"></use></svg>  {{ error.message }} 
        <a href=\"#\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
      </div>
    {% endfor %}
 
        <div class=\"col-md-12\" >
        <div class=\"panel panel-default\">
            <div class=\"panel-body tabs\">
            
                <ul class=\"nav nav-pills\">
                    <li class=\"active\"><a href=\"#pilltab1\" data-toggle=\"tab\">Importation de fichier</a></li>
                    <li><a href=\"#pilltab2\" data-toggle=\"tab\">Affichage des Importations</a></li>
                    <li><a href=\"#pilltab3\" data-toggle=\"tab\">Recherche d'importation</a></li>
                    <li><a href=\"#pilltab4\" data-toggle=\"tab\">Parametres</a></li>
                </ul>

                <div class=\"tab-content\">
                    <div class=\"tab-pane fade in active\" id=\"pilltab1\">
                          <div class=\"col-lg-12\">
                                  {{ form_start(form,{'attr': {'v':'v' ,'class':'form-horizontal style-form' }}) }}
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">Fichier CSV:</label>
                                      <div class=\"col-sm-10\">
                                      {{ form_errors(form.datacsv) }}
                                       {{ form_widget(form.datacsv,{'attr':{'class':'form-control'}}) }} 
                                      </div>
                                  </div>
                                  <br>
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">Type d'operation:</label>
                                      <div class=\"col-sm-10\">
                                      {{ form_errors(form.typeOperation) }}
                                       {{ form_widget(form.typeOperation,{'attr':{'class':'form-control'}}) }}  
                                      </div>
                                  </div>
                                  <br>
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">Mois:</label>
                                    <div class=\"col-sm-10\">
                                     <b>  *veuillez renseigner le numero du mois</b>
                                     {{ form_errors(form.mois) }}
                                     {{ form_widget(form.mois,{'attr':{'class':'form-control','autocomplete': 'off'}}) }}
                                    </div>
                                  </div>
                                  <br>
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">annee: </label>
                                    <div class=\"col-sm-10\">
                                     {{ form_errors(form.annee) }}
                                     {{ form_widget(form.annee,{'attr':{'class':'form-control','autocomplete': 'off'}}) }}
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
                    <div class=\"tab-pane fade\" id=\"pilltab2\">
                        <div class=\"col-lg-12\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                     <table data-toggle=\"table\" data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                        <thead>
                                        <tr>
                                            <th data-field=\"jour\"  >Jour d'importation</th>
                                            <th ddata-field=\"periode\">Mois-Annee de l'operation</th>
                                            <th ddata-field=\"periode\">Type de l'operation importé</th>
                                            <th data-field=\"action\">Action</th>
                                           
                                        </tr>                           
                                        </thead>
                                        <tbody>
                                            {% for importation in importations %}
                                            <tr>
                                                <td>{{ importation.dateCreation|date('d-m-Y') }}</td> 
                                                <td>{{ importation.mois|date('m') }} - {{ importation.annee|date('Y') }}</td> 
                                                <td>{{ importation.typeOperation.libelletypeOperation }} </td> 
                                             
                                                <td>
                                                  {% if importation.status == 0 %}
                                                    <a  href=\"{{ path('operationCaisse',{'importation':importation.id}) }}\" onclick=\"return confirm('confirmez?')\" ><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Traiter l'importation</button></a>
                                                  {% endif %}
                                                  {% if importation.status == 1 %}
                                                    <a  href=\"{{ path('generationDeJournal',{'importation':importation.id}) }}\" onclick=\"return confirm('confirmez?')\" ><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Creer le Journal de l'operation</button></a>
                                                  {% endif %}
                                                  {% if importation.status == 2 %}
                                                    <a  href=\"{{ path('visualisationDeJournal',{'importation':importation.id}) }}\" ><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Voir Le Journal</button></a>
                                                  {% endif %}
                                                </td>  

                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class=\"tab-pane fade\" id=\"pilltab3\">
                        <div class=\"col-lg-12\">
                            <div class=\"col-lg-12\">
                                  {{ form_start(rechercheForm,{'attr': {'v':'v' ,'class':'form-horizontal style-form' }}) }}
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">Type d'operation:</label>
                                      <div class=\"col-sm-10\">
                                      {{ form_errors(rechercheForm.typeOperation) }}
                                       {{ form_widget(rechercheForm.typeOperation,{'attr':{'class':'form-control'}}) }}  
                                      </div>
                                  </div>
                                  <br>
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">Mois:</label>
                                    <div class=\"col-sm-10\">
                                     <b>  *veuillez renseigner le numero du mois</b>
                                     {{ form_errors(rechercheForm.mois) }}
                                     {{ form_widget(rechercheForm.mois,{'attr':{'class':'form-control','autocomplete': 'off'}}) }}
                                    </div>
                                  </div>
                                  <br>
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">annee: </label>
                                    <div class=\"col-sm-10\">
                                     {{ form_errors(rechercheForm.annee) }}
                                     {{ form_widget(rechercheForm.annee,{'attr':{'class':'form-control','autocomplete': 'off'}}) }}
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
                                  {{ form_end(rechercheForm) }}
                              </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"pilltab4\">
                        <div class=\"col-lg-12\">
                            <div class=\"col-lg-12\">
                                  <div class=\"panel panel-default\">
                                  <div class=\"panel-body tabs\">
                                    <ul class=\"nav nav-tabs\">
                                      <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">Ajout de produits</a></li>
                                      <li class=\"\"><a href=\"#tab2\" data-toggle=\"tab\">Liste des produits</a></li>
                                      <li class=\"\"><a href=\"#tab3\" data-toggle=\"tab\">Ajout de type operation</a></li>
                                      <li class=\"\"><a href=\"#tab4\" data-toggle=\"tab\">Liste des types operation</a></li>
                                    </ul>
                                    <div class=\"tab-content\">
                                      <div class=\"tab-pane fade active in\" id=\"tab1\">
                                        {{ form_start(produitForm,{'attr': {'v':'v' ,'class':'form-horizontal style-form' }}) }}
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Nom du produit:</label>
                                                <div class=\"col-sm-10\">
                                                {{ form_errors(produitForm.nomProduit) }}
                                                 {{ form_widget(produitForm.nomProduit,{'attr':{'class':'form-control'}}) }} 
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Numero de code du produit:</label>
                                                <div class=\"col-sm-10\">
                                                {{ form_errors(produitForm.numeroDeCodeProduit) }}
                                                 {{ form_widget(produitForm.numeroDeCodeProduit,{'attr':{'class':'form-control'}}) }}  
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Numero de compte du produit: </label>
                                              <div class=\"col-sm-10\">
                                               {{ form_errors(produitForm.numCptCredit) }}
                                               {{ form_widget(produitForm.numCptCredit,{'attr':{'class':'form-control','autocomplete': 'off'}}) }}
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
                                            {{ form_end(produitForm) }}
                                      </div>

                                      <div class=\"tab-pane fade\" id=\"tab2\">
                                        <table data-toggle=\"table\" data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                        <thead>
                                        <tr>
                                            <th data-field=\"nomProduit\"  >Nom du produit</th>
                                            <th ddata-field=\"numeroDeCodeProduit\">Numero de code du produit</th>
                                            <th ddata-field=\"numCptCredit\">Numero de compte du profuit</th>
                                            <th data-field=\"action\">Action</th>
                                           
                                        </tr>                           
                                        </thead>
                                        <tbody>
                                           {% for produit in produits %}
                                            <tr>
                                                <td>{{ produit.nomProduit }}</td> 
                                                <td>{{ produit.numeroDeCodeProduit }}</td> 
                                                <td>{{ produit.numCptCredit }}</td> 
                                                <td>
                                                <a  href=\"{{ path('editProduit',{'produit':produit.id}) }}\"><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Modifier</button></a>
                                                <a  href=\"{{ path('effacerProduit',{'produit':produit.id}) }}\"><button class=\"btn btn-danger waves-effect\" type=\"submit\" onclick=\"return confirm('confirmez?')\" >Supprimer</button></a>
                                                </td>  

                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                      </div>
                                      <div class=\"tab-pane fade\" id=\"tab3\">
                                        {{ form_start(typeOperationForm,{'attr': {'v':'v' ,'class':'form-horizontal style-form' }}) }}
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Nom du type d'operation:</label>
                                                <div class=\"col-sm-10\">
                                                {{ form_errors(typeOperationForm.libelleTypeOperation) }}
                                                 {{ form_widget(typeOperationForm.libelleTypeOperation,{'attr':{'class':'form-control','autocomplete': 'off'}}) }} 
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Numero de compte du type d'operation:</label>
                                                <div class=\"col-sm-10\">
                                                {{ form_errors(typeOperationForm.numCptDebit) }}
                                                 {{ form_widget(typeOperationForm.numCptDebit,{'attr':{'class':'form-control','autocomplete': 'off'}}) }}  
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
                                            {{ form_end(typeOperationForm) }}
                                      </div>


                                      <div class=\"tab-pane fade\" id=\"tab4\">
                                        <table data-toggle=\"table\" data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                        <thead>
                                        <tr>
                                            <th data-field=\"nomTypeOperation\"  >Nom du type d'operation</th>
                                            <th ddata-field=\"numTypeOperation\">Numero de compte du type d'operation</th>
                                            <th data-field=\"action\">Action</th>
                                           
                                        </tr>                           
                                        </thead>
                                        <tbody>
                                            {% for typeOperation in typeOperations %}
                                            <tr>
                                                <td>{{ typeOperation.libelleTypeOperation }}</td> 
                                                <td>{{ typeOperation.numCptDebit }}</td> 
                                             
                                                <td>
                                                <a  href=\"{{ path('editTypeOperation',{'typeOperation':typeOperation.id}) }}\"><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Modifier</button></a>
                                                <a  href=\"{{ path('effacerTypeOperation',{'typeOperation':typeOperation.id}) }}\"><button class=\"btn btn-danger waves-effect\" type=\"submit\" onclick=\"return confirm('confirmez?')\" >Supprimer</button></a>
                                                </td>  

                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                      </div>
                                    </div>
                                  </div>
                                </div><!--/.panel-->
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.panel-->
    </div><!-- /.col-->
    {% endblock %}

{% block javascripts %}


<script src=\"{{ asset ('js/bootstrap-table.js') }}\"></script>

<script type=\"text/javascript\">

</script>

{% endblock %}", "default/index.html.twig", "C:\\wamp\\www\\fileUpload\\app\\Resources\\views\\default\\index.html.twig");
    }
}
