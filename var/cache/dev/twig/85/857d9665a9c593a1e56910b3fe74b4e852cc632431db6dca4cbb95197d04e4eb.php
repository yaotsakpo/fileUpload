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

/* journal.html.twig */
class __TwigTemplate_ff5a931080054eb23951b15ee1734ff850f661d54ebbaba2308479dabb66c7e4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "journal.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "journal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "journal.html.twig"));

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
      ";
        // line 13
        if (($this->getAttribute($this->getAttribute(($context["journalArray"] ?? $this->getContext($context, "journalArray")), 0, [], "array"), "dispatch", []) != 1)) {
            // line 14
            echo "      <a onclick=\"return confirm('confirmez?')\" class=\"btn btn-success pull-right\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exportationJournal", ["importation" => ($context["importation"] ?? $this->getContext($context, "importation"))]), "html", null, true);
            echo "\" style=\"margin:2%\">Exporter le journal en format CSV</a>
        ";
        }
        // line 16
        echo "              <div class=\"panel panel-default\">
                     <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                     <table data-toggle=\"table\" data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                        <thead>
                                        <tr>
                                            <th data-field=\"jour\"  >Jour</th>
                                            <th ddata-field=\"NumPiece\">Numero Piece</th>
                                            <th data-field=\"NumFact\">Numero Facture</th>
                                            <th data-field=\"Ref\">Reference</th>
                                            <th data-field=\"NumCompteGen\">Numero de Compte General</th>
                                            <th data-field=\"NumCptTiers\">Numero Compte Tiers</th>
                                            <th data-field=\"Libecriture\">Libelle Ecriture</th>
                                            <th data-field=\"DateEcheance\">Date Echeance</th>
                                            <th data-field=\"PositionJournal\">Position Journal</th>
                                            <th data-field=\"debit\">Debit</th>
                                            <th data-field=\"Credit\">Credit</th>
                                            <th data-field=\"action\">Action</th>

                                        </tr>                           
                                        </thead>
                                        <tbody>
                                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["journalArray"] ?? $this->getContext($context, "journalArray")));
        foreach ($context['_seq'] as $context["_key"] => $context["journal"]) {
            // line 39
            echo "                                            <tr>
                                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["journal"], "jour", []), "d-m-Y H:m:s"), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "numPiece", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "numFacture", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "reference", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "numCompteGeneral", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "numComptTiers", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "libelleEcriture", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "dateEcheance", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "positionJournal", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "montantDebit", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "montantCredit", []), "html", null, true);
            echo "</td> 
                                                <td>
                                                    ";
            // line 52
            if (($this->getAttribute($context["journal"], "cumul", []) == null)) {
                // line 53
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dispatch", ["ligneJournal" => $this->getAttribute($context["journal"], "id", [])]), "html", null, true);
                echo "\" >
                                                        <button class=\"btn btn-primary waves-effect\" type=\"submit\" >Dispatcher</button></a>
                                                    ";
            }
            // line 56
            echo "                                                </td> 
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['journal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
              </div>
          </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "

<script src=\"";
        // line 71
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
        return "journal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 71,  222 => 69,  213 => 68,  196 => 59,  188 => 56,  181 => 53,  179 => 52,  174 => 50,  170 => 49,  166 => 48,  162 => 47,  158 => 46,  154 => 45,  150 => 44,  146 => 43,  142 => 42,  138 => 41,  134 => 40,  131 => 39,  127 => 38,  103 => 16,  97 => 14,  95 => 13,  91 => 12,  87 => 10,  78 => 9,  65 => 5,  62 => 4,  53 => 3,  22 => 1,);
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
      {% if journalArray[0].dispatch != 1 %}
      <a onclick=\"return confirm('confirmez?')\" class=\"btn btn-success pull-right\" href=\"{{ path('exportationJournal',{'importation':importation}) }}\" style=\"margin:2%\">Exporter le journal en format CSV</a>
        {% endif %}
              <div class=\"panel panel-default\">
                     <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                     <table data-toggle=\"table\" data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                        <thead>
                                        <tr>
                                            <th data-field=\"jour\"  >Jour</th>
                                            <th ddata-field=\"NumPiece\">Numero Piece</th>
                                            <th data-field=\"NumFact\">Numero Facture</th>
                                            <th data-field=\"Ref\">Reference</th>
                                            <th data-field=\"NumCompteGen\">Numero de Compte General</th>
                                            <th data-field=\"NumCptTiers\">Numero Compte Tiers</th>
                                            <th data-field=\"Libecriture\">Libelle Ecriture</th>
                                            <th data-field=\"DateEcheance\">Date Echeance</th>
                                            <th data-field=\"PositionJournal\">Position Journal</th>
                                            <th data-field=\"debit\">Debit</th>
                                            <th data-field=\"Credit\">Credit</th>
                                            <th data-field=\"action\">Action</th>

                                        </tr>                           
                                        </thead>
                                        <tbody>
                                            {% for journal in journalArray %}
                                            <tr>
                                                <td>{{ journal.jour|date('d-m-Y H:m:s') }}</td> 
                                                <td>{{ journal.numPiece }}</td> 
                                                <td>{{ journal.numFacture }}</td> 
                                                <td>{{ journal.reference }}</td> 
                                                <td>{{ journal.numCompteGeneral }}</td> 
                                                <td>{{ journal.numComptTiers }}</td> 
                                                <td>{{ journal.libelleEcriture }}</td> 
                                                <td>{{ journal.dateEcheance }}</td> 
                                                <td>{{ journal.positionJournal }}</td> 
                                                <td>{{ journal.montantDebit }}</td> 
                                                <td>{{ journal.montantCredit }}</td> 
                                                <td>
                                                    {% if journal.cumul==null %}
                                                        <a href=\"{{ path('dispatch',{'ligneJournal':journal.id}) }}\" >
                                                        <button class=\"btn btn-primary waves-effect\" type=\"submit\" >Dispatcher</button></a>
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
    {% endblock %}

{% block javascripts %}


<script src=\"{{ asset ('js/bootstrap-table.js') }}\"></script>

<script type=\"text/javascript\">

</script>

{% endblock %}", "journal.html.twig", "C:\\wamp\\www\\fileUpload\\app\\Resources\\views\\journal.html.twig");
    }
}
