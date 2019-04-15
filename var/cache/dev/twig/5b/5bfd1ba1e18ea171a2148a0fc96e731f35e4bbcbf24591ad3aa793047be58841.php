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

/* editProduit.html.twig */
class __TwigTemplate_3c124a80077d6fd3516df6a42e29d27d1cd106533f798905336f7446a4416bc1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "editProduit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editProduit.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "vars", []), "errors", []), "form", []), "getErrors", [0 => true], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            echo "          
      <div class=\"alert bg-danger\" role=\"alert\">
        <svg class=\"glyph stroked cancel\">
          <use xlink:href=\"#stroked-cancel\"></use></svg>  ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
            echo " 
        <a href=\"#\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo " <center><h3>Modification d'un produit</h3></center>

    <div class=\"col-lg-12\">
      <a class=\"btn btn-primary\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" style=\"margin:2%\">retour</a>
              <div class=\"panel panel-default\">
                     <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                  ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["editForm"] ?? $this->getContext($context, "editForm")), 'form_start', ["attr" => ["v" => "v", "class" => "form-horizontal style-form"]]);
        echo "
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Nom du produit:</label>
                                                <div class=\"col-sm-10\">
                                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "nomProduit", []), 'errors');
        echo "
                                                 ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "nomProduit", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Numero de code du produit:</label>
                                                <div class=\"col-sm-10\">
                                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "numeroDeCodeProduit", []), 'errors');
        echo "
                                                 ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "numeroDeCodeProduit", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Numero de compte du produit: </label>
                                              <div class=\"col-sm-10\">
                                               ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "numCptCredit", []), 'errors');
        echo "
                                               ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "numCptCredit", []), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "off"]]);
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
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["editForm"] ?? $this->getContext($context, "editForm")), 'form_end');
        echo "           
                        </div>
                    </div>
              </div>
          </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "

<script src=\"";
        // line 67
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
        return "editProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 67,  198 => 65,  189 => 64,  173 => 57,  159 => 46,  155 => 45,  145 => 38,  141 => 37,  131 => 30,  127 => 29,  120 => 25,  113 => 21,  108 => 18,  98 => 14,  90 => 11,  87 => 10,  78 => 9,  65 => 5,  62 => 4,  53 => 3,  22 => 1,);
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
  
     {% for error in editForm.vars.errors.form.getErrors(true) %}          
      <div class=\"alert bg-danger\" role=\"alert\">
        <svg class=\"glyph stroked cancel\">
          <use xlink:href=\"#stroked-cancel\"></use></svg>  {{ error.message }} 
        <a href=\"#\" class=\"pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
      </div>
    {% endfor %}
 <center><h3>Modification d'un produit</h3></center>

    <div class=\"col-lg-12\">
      <a class=\"btn btn-primary\" href=\"{{ path('homepage')}}\" style=\"margin:2%\">retour</a>
              <div class=\"panel panel-default\">
                     <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                  {{ form_start(editForm,{'attr': {'v':'v' ,'class':'form-horizontal style-form' }}) }}
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Nom du produit:</label>
                                                <div class=\"col-sm-10\">
                                                {{ form_errors(editForm.nomProduit) }}
                                                 {{ form_widget(editForm.nomProduit,{'attr':{'class':'form-control'}}) }} 
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Numero de code du produit:</label>
                                                <div class=\"col-sm-10\">
                                                {{ form_errors(editForm.numeroDeCodeProduit) }}
                                                 {{ form_widget(editForm.numeroDeCodeProduit,{'attr':{'class':'form-control'}}) }}  
                                                </div>
                                            </div>
                                            <br>
                                            <div class=\"form-group\">
                                              <label class=\"col-sm-2 col-sm-2 control-label\">Numero de compte du produit: </label>
                                              <div class=\"col-sm-10\">
                                               {{ form_errors(editForm.numCptCredit) }}
                                               {{ form_widget(editForm.numCptCredit,{'attr':{'class':'form-control','autocomplete': 'off'}}) }}
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
                                {{ form_end(editForm) }}           
                        </div>
                    </div>
              </div>
          </div>
    {% endblock %}

{% block javascripts %}


<script src=\"{{ asset ('js/bootstrap-table.js') }}\"></script>

<script type=\"text/javascript\">

</script>

{% endblock %}", "editProduit.html.twig", "C:\\wamp\\www\\fileUpload\\app\\Resources\\views\\editProduit.html.twig");
    }
}
