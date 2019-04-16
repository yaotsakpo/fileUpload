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
class __TwigTemplate_968fd2cadeec71aeb20a1c9ef125ba31aaf9149aaedd9353ebf10cbf142d2935 extends \Twig\Template
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
    <div class=\"col-lg-12\">
      <a class=\"btn btn-primary\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" style=\"margin:2%\">retour</a>
      <a onclick=\"return confirm('confirmez?')\" class=\"btn btn-success pull-right\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exportationJournal", ["importation" => ($context["importation"] ?? null)]), "html", null, true);
        echo "\" style=\"margin:2%\">Exporter le journal en format CSV</a>
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
                                        </tr>                           
                                        </thead>
                                        <tbody>
                                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["journalArray"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["journal"]) {
            // line 35
            echo "                                            <tr>
                                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["journal"], "jour", []), "d-m-Y"), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "numPiece", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "numFacture", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "reference", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "numCompteGeneral", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "numComptTiers", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "libelleEcriture", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "dateEcheance", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "positionJournal", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "montantDebit", []), "html", null, true);
            echo "</td> 
                                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["journal"], "montantCredit", []), "html", null, true);
            echo "</td> 
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['journal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
              </div>
          </div>
    ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        // line 59
        echo "

<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-table.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">

</script>

";
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
        return array (  163 => 61,  159 => 59,  156 => 58,  145 => 49,  136 => 46,  132 => 45,  128 => 44,  124 => 43,  120 => 42,  116 => 41,  112 => 40,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  93 => 35,  89 => 34,  65 => 13,  61 => 12,  57 => 10,  54 => 9,  47 => 5,  44 => 4,  41 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "journal.html.twig", "C:\\wamp\\www\\fileUpload\\app\\Resources\\views\\journal.html.twig");
    }
}
