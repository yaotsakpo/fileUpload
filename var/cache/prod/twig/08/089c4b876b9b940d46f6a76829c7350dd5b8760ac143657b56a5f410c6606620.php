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
class __TwigTemplate_592bcb5755ae700fca23baba9dec87e440f0392e7bc845101bb3d728923c4bfb extends \Twig\Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        echo "
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "flashes", [0 => "notice"], "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "errors", []), "form", []), "getErrors", [0 => true], "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["rechercheForm"] ?? null), "vars", []), "errors", []), "form", []), "getErrors", [0 => true], "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["produitForm"] ?? null), "vars", []), "errors", []), "form", []), "getErrors", [0 => true], "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["typeOperationForm"] ?? null), "vars", []), "errors", []), "form", []), "getErrors", [0 => true], "method"));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["v" => "v", "class" => "form-horizontal style-form"]]);
        echo "
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">Fichier CSV:</label>
                                      <div class=\"col-sm-10\">
                                      ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "datacsv", []), 'errors');
        echo "
                                       ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "datacsv", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                                      </div>
                                  </div>
                                  <br>
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">Type d'operation:</label>
                                      <div class=\"col-sm-10\">
                                      ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "typeOperation", []), 'errors');
        echo "
                                       ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "typeOperation", []), 'widget', ["attr" => ["class" => "form-control"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mois", []), 'errors');
        echo "
                                     ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mois", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
        echo "
                                    </div>
                                  </div>
                                  <br>
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">annee: </label>
                                    <div class=\"col-sm-10\">
                                     ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "annee", []), 'errors');
        echo "
                                     ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "annee", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable(($context["importations"] ?? null));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["rechercheForm"] ?? null), 'form_start', ["attr" => ["v" => "v", "class" => "form-horizontal style-form"]]);
        echo "
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">Type d'operation:</label>
                                      <div class=\"col-sm-10\">
                                      ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["rechercheForm"] ?? null), "typeOperation", []), 'errors');
        echo "
                                       ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["rechercheForm"] ?? null), "typeOperation", []), 'widget', ["attr" => ["class" => "form-control"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["rechercheForm"] ?? null), "mois", []), 'errors');
        echo "
                                     ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["rechercheForm"] ?? null), "mois", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
        echo "
                                    </div>
                                  </div>
                                  <br>
                                  <div class=\"form-group\">
                                    <label class=\"col-sm-2 col-sm-2 control-label\">annee: </label>
                                    <div class=\"col-sm-10\">
                                     ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["rechercheForm"] ?? null), "annee", []), 'errors');
        echo "
                                     ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["rechercheForm"] ?? null), "annee", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["rechercheForm"] ?? null), 'form_end');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["produitForm"] ?? null), 'form_start', ["attr" => ["v" => "v", "class" => "form-horizontal style-form"]]);
        echo "
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Nom du produit:</label>
                                                <div class=\"col-sm-10\">
                                                ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["produitForm"] ?? null), "nomProduit", []), 'errors');
        echo "
                                                 ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["produitForm"] ?? null), "nomProduit", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Numero de code du produit:</label>
                                                <div class=\"col-sm-10\">
                                                ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["produitForm"] ?? null), "numeroDeCodeProduit", []), 'errors');
        echo "
                                                 ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["produitForm"] ?? null), "numeroDeCodeProduit", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Numero de compte du produit: </label>
                                              <div class=\"col-sm-10\">
                                               ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["produitForm"] ?? null), "numCptCredit", []), 'errors');
        echo "
                                               ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["produitForm"] ?? null), "numCptCredit", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["produitForm"] ?? null), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? null));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["typeOperationForm"] ?? null), 'form_start', ["attr" => ["v" => "v", "class" => "form-horizontal style-form"]]);
        echo "
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Nom du type d'operation:</label>
                                                <div class=\"col-sm-10\">
                                                ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["typeOperationForm"] ?? null), "libelleTypeOperation", []), 'errors');
        echo "
                                                 ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["typeOperationForm"] ?? null), "libelleTypeOperation", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
        echo " 
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Numero de compte du type d'operation:</label>
                                                <div class=\"col-sm-10\">
                                                ";
        // line 281
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["typeOperationForm"] ?? null), "numCptDebit", []), 'errors');
        echo "
                                                 ";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["typeOperationForm"] ?? null), "numCptDebit", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["typeOperationForm"] ?? null), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable(($context["typeOperations"] ?? null));
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
    }

    // line 335
    public function block_javascripts($context, array $blocks = [])
    {
        // line 336
        echo "

<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-table.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">

</script>

";
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
        return array (  639 => 338,  635 => 336,  632 => 335,  615 => 320,  604 => 315,  600 => 314,  594 => 311,  590 => 310,  587 => 309,  583 => 308,  565 => 293,  551 => 282,  547 => 281,  537 => 274,  533 => 273,  526 => 269,  520 => 265,  509 => 260,  505 => 259,  500 => 257,  496 => 256,  492 => 255,  489 => 254,  485 => 253,  467 => 238,  453 => 227,  449 => 226,  439 => 219,  435 => 218,  425 => 211,  421 => 210,  414 => 206,  394 => 189,  380 => 178,  376 => 177,  366 => 170,  362 => 169,  351 => 161,  347 => 160,  340 => 156,  328 => 146,  319 => 142,  313 => 140,  310 => 139,  304 => 137,  301 => 136,  295 => 134,  293 => 133,  287 => 130,  281 => 129,  277 => 128,  274 => 127,  270 => 126,  249 => 108,  235 => 97,  231 => 96,  221 => 89,  217 => 88,  206 => 80,  202 => 79,  192 => 72,  188 => 71,  181 => 67,  164 => 52,  154 => 48,  146 => 45,  143 => 44,  133 => 40,  125 => 37,  122 => 36,  112 => 32,  104 => 29,  101 => 28,  91 => 24,  83 => 21,  80 => 20,  69 => 15,  64 => 12,  60 => 11,  57 => 10,  54 => 9,  47 => 5,  44 => 4,  41 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/index.html.twig", "C:\\wamp\\www\\fileUpload\\app\\Resources\\views\\default\\index.html.twig");
    }
}
