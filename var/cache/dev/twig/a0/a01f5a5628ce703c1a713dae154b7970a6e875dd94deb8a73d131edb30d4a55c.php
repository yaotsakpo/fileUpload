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

/* recherche.html.twig */
class __TwigTemplate_9f1e0f4c7b19a44ea44b2ea1d24c99b8dede9896e8646ebc4b0d440f835b2544 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "recherche.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recherche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recherche.html.twig"));

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
    <div class=\"col-lg-12\">
      <a class=\"btn btn-primary\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" style=\"margin:2%\">retour</a>
             <h3 style=\"margin-top:-5%\"><center>Resultat de la recherche</center></h3>
              <div class=\"panel panel-default\">
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
                                            <tr>
                                                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["importation"] ?? $this->getContext($context, "importation")), 0, [], "array"), "dateCreation", []), "d-m-Y"), "html", null, true);
        echo "</td> 
                                                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["importation"] ?? $this->getContext($context, "importation")), 0, [], "array"), "mois", []), "m"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["importation"] ?? $this->getContext($context, "importation")), 0, [], "array"), "annee", []), "Y"), "html", null, true);
        echo "</td> 
                                                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["importation"] ?? $this->getContext($context, "importation")), 0, [], "array"), "typeOperation", []), "libelletypeOperation", []), "html", null, true);
        echo " </td> 
                                             
                                                <td>
                                                  ";
        // line 34
        if (($this->getAttribute($this->getAttribute(($context["importation"] ?? $this->getContext($context, "importation")), 0, [], "array"), "status", []) == 0)) {
            // line 35
            echo "                                                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operationCaisse", ["importation" => $this->getAttribute($this->getAttribute(($context["importation"] ?? $this->getContext($context, "importation")), 0, [], "array"), "id", [])]), "html", null, true);
            echo "\" onclick=\"return confirm('confirmez?')\" ><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Traiter l'importation</button></a>
                                                  ";
        }
        // line 37
        echo "                                                  ";
        if (($this->getAttribute($this->getAttribute(($context["importation"] ?? $this->getContext($context, "importation")), 0, [], "array"), "status", []) == 1)) {
            // line 38
            echo "                                                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generationDeJournal", ["importation" => $this->getAttribute($this->getAttribute(($context["importation"] ?? $this->getContext($context, "importation")), 0, [], "array"), "id", [])]), "html", null, true);
            echo "\" onclick=\"return confirm('confirmez?')\" ><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Creer le Journal de l'operation</button></a>
                                                  ";
        }
        // line 40
        echo "                                                  ";
        if (($this->getAttribute($this->getAttribute(($context["importation"] ?? $this->getContext($context, "importation")), 0, [], "array"), "status", []) == 2)) {
            // line 41
            echo "                                                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visualisationDeJournal", ["importation" => $this->getAttribute($this->getAttribute(($context["importation"] ?? $this->getContext($context, "importation")), 0, [], "array"), "id", [])]), "html", null, true);
            echo "\" ><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Voir Le Journal</button></a>
                                                  ";
        }
        // line 43
        echo "                                                </td>  

                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
              </div>
          </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "

<script src=\"";
        // line 59
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
        return "recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 59,  183 => 57,  174 => 56,  153 => 43,  147 => 41,  144 => 40,  138 => 38,  135 => 37,  129 => 35,  127 => 34,  121 => 31,  115 => 30,  111 => 29,  91 => 12,  87 => 10,  78 => 9,  65 => 5,  62 => 4,  53 => 3,  22 => 1,);
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

    <div class=\"col-lg-12\">
      <a class=\"btn btn-primary\" href=\"{{ path('homepage')}}\" style=\"margin:2%\">retour</a>
             <h3 style=\"margin-top:-5%\"><center>Resultat de la recherche</center></h3>
              <div class=\"panel panel-default\">
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
                                            <tr>
                                                <td>{{ importation[0].dateCreation|date('d-m-Y') }}</td> 
                                                <td>{{ importation[0].mois|date('m') }} - {{ importation[0].annee|date('Y') }}</td> 
                                                <td>{{ importation[0].typeOperation.libelletypeOperation }} </td> 
                                             
                                                <td>
                                                  {% if importation[0].status == 0 %}
                                                    <a  href=\"{{ path('operationCaisse',{'importation':importation[0].id}) }}\" onclick=\"return confirm('confirmez?')\" ><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Traiter l'importation</button></a>
                                                  {% endif %}
                                                  {% if importation[0].status == 1 %}
                                                    <a  href=\"{{ path('generationDeJournal',{'importation':importation[0].id}) }}\" onclick=\"return confirm('confirmez?')\" ><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Creer le Journal de l'operation</button></a>
                                                  {% endif %}
                                                  {% if importation[0].status == 2 %}
                                                    <a  href=\"{{ path('visualisationDeJournal',{'importation':importation[0].id}) }}\" ><button class=\"btn btn-primary waves-effect\" type=\"submit\" >Voir Le Journal</button></a>
                                                  {% endif %}
                                                </td>  

                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
              </div>
          </div>
    {% endblock %}

{% block javascripts %}


<script src=\"{{ asset ('js/bootstrap-table.js') }}\"></script>

<script type=\"text/javascript\">

</script>

{% endblock %}", "recherche.html.twig", "C:\\wamp\\www\\fileUpload\\app\\Resources\\views\\recherche.html.twig");
    }
}
