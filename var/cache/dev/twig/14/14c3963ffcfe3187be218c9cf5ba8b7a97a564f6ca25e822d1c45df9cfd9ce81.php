<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vat/index.html.twig */
class __TwigTemplate_cb51ffce60c56085f9a68adf383b67cf43665943846e4d373b28dc0692b52205 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vat/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vat/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Vat
Calculation";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">

\t<div class=\"row\">
\t\t<div class=\"col-sm-4 tools\">
\t\t\t<div>
\t\t\t\t<button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\"
\t\t\t\t\tdata-target=\"#vatModal\">Calculate VAT</button>
\t\t\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vat_export");
        echo "\" class=\"btn btn-warning\">Export Csv</a>
\t\t\t</div>
\t\t\t<div class=\"dropdown\">
\t\t\t\t<button class=\"btn btn-primary dropdown-toggle\" type=\"button\"
\t\t\t\t\tdata-toggle=\"dropdown\">
\t\t\t\t\tSend &nbsp;<span class=\"caret\"></span>
\t\t\t\t</button>
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<form class=\"form-inline\" method=\"post\" action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mail");
        echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email Address\"
\t\t\t\t\t\t\t\t\tclass=\"form-control\" name=\"email\" id=\"email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Submit</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-sm-8 text-right\">

\t\t\t<a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vat_delete_all");
        echo "\" class=\"btn btn-danger\">Remove</a>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t    <div class=\"col-sm-1\">Nr.</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">Cost</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">VAT Rate (%)</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">VAT Amount (\$)</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">Cost + VAT (\$)</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">Date</div>
\t\t\t\t\t\t<div class=\"col-sm-1 text-right\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 52, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 53
            echo "\t\t\t\t\t<div class=\"row\" style=\"padding:10px 0px; border-bottom: ";
            echo (((-1 === twig_compare(($context["key"] + 1), twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 53)))) ? (1) : (0));
            echo "px solid #dedede\">
\t\t\t\t\t    <div class=\"col-sm-1\">";
            // line 54
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo ".</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cost", [], "any", false, false, false, 55), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "vatRatePercentage", [], "any", false, false, false, 56), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "vatRateAmount", [], "any", false, false, false, 57), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "grossAmount", [], "any", false, false, false, 58), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, false, 59), "Y-m-d H:i"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"col-sm-1 text-right\"><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vat_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></a></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Modal -->
\t<div id=\"vatModal\" class=\"modal fade\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">

\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<h4 class=\"modal-title text-center\">VAT Calculator</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t\t\t";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["calculator"]) || array_key_exists("calculator", $context) ? $context["calculator"] : (function () { throw new RuntimeError('Variable "calculator" does not exist.', 82, $this->source); })()), 'form_start');
        echo " 
\t\t\t\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["calculator"]) || array_key_exists("calculator", $context) ? $context["calculator"] : (function () { throw new RuntimeError('Variable "calculator" does not exist.', 83, $this->source); })()), 'errors');
        echo "
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["calculator"]) || array_key_exists("calculator", $context) ? $context["calculator"] : (function () { throw new RuntimeError('Variable "calculator" does not exist.', 86, $this->source); })()), "cost", [], "any", false, false, false, 86), 'row');
        echo "</div>
\t\t\t\t\t\t\t<div class=\"form-group\">";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["calculator"]) || array_key_exists("calculator", $context) ? $context["calculator"] : (function () { throw new RuntimeError('Variable "calculator" does not exist.', 87, $this->source); })()), "vat_rate_amount", [], "any", false, false, false, 87), 'row');
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["calculator"]) || array_key_exists("calculator", $context) ? $context["calculator"] : (function () { throw new RuntimeError('Variable "calculator" does not exist.', 90, $this->source); })()), "vat_rate_percentage", [], "any", false, false, false, 90), 'row');
        echo "</div>
\t\t\t\t\t\t\t<div class=\"form-group\">";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["calculator"]) || array_key_exists("calculator", $context) ? $context["calculator"] : (function () { throw new RuntimeError('Variable "calculator" does not exist.', 91, $this->source); })()), "gross_amount", [], "any", false, false, false, 91), 'row');
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["calculator"]) || array_key_exists("calculator", $context) ? $context["calculator"] : (function () { throw new RuntimeError('Variable "calculator" does not exist.', 94, $this->source); })()), "save", [], "any", false, false, false, 94), 'row');
        echo "</div>
\t\t\t\t\t\t\t";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["calculator"]) || array_key_exists("calculator", $context) ? $context["calculator"] : (function () { throw new RuntimeError('Variable "calculator" does not exist.', 95, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 95,  262 => 94,  256 => 91,  252 => 90,  246 => 87,  242 => 86,  236 => 83,  232 => 82,  211 => 63,  194 => 60,  190 => 59,  186 => 58,  182 => 57,  178 => 56,  174 => 55,  170 => 54,  165 => 53,  148 => 52,  126 => 33,  110 => 20,  98 => 11,  88 => 3,  78 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Vat
Calculation{%endblock %} {% block body %}

<div class=\"container\">

\t<div class=\"row\">
\t\t<div class=\"col-sm-4 tools\">
\t\t\t<div>
\t\t\t\t<button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\"
\t\t\t\t\tdata-target=\"#vatModal\">Calculate VAT</button>
\t\t\t\t<a href=\"{{ path('app_vat_export') }}\" class=\"btn btn-warning\">Export Csv</a>
\t\t\t</div>
\t\t\t<div class=\"dropdown\">
\t\t\t\t<button class=\"btn btn-primary dropdown-toggle\" type=\"button\"
\t\t\t\t\tdata-toggle=\"dropdown\">
\t\t\t\t\tSend &nbsp;<span class=\"caret\"></span>
\t\t\t\t</button>
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<form class=\"form-inline\" method=\"post\" action=\"{{ path('app_mail') }}\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email Address\"
\t\t\t\t\t\t\t\t\tclass=\"form-control\" name=\"email\" id=\"email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Submit</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-sm-8 text-right\">

\t\t\t<a href=\"{{ path('app_vat_delete_all') }}\" class=\"btn btn-danger\">Remove</a>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t    <div class=\"col-sm-1\">Nr.</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">Cost</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">VAT Rate (%)</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">VAT Amount (\$)</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">Cost + VAT (\$)</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">Date</div>
\t\t\t\t\t\t<div class=\"col-sm-1 text-right\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t    {% for key,item in items %}
\t\t\t\t\t<div class=\"row\" style=\"padding:10px 0px; border-bottom: {{ (key + 1 < loop.length) ? 1 : 0 }}px solid #dedede\">
\t\t\t\t\t    <div class=\"col-sm-1\">{{ key + 1 }}.</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">{{ item.cost }}</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">{{ item.vatRatePercentage }}</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">{{ item.vatRateAmount }}</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">{{ item.grossAmount }}</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">{{ item.date|date('Y-m-d H:i') }}</div>
\t\t\t\t\t\t<div class=\"col-sm-1 text-right\"><a href=\"{{ path('app_vat_delete', {'id': item.id}) }}\" class=\"btn btn-sm btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></a></div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Modal -->
\t<div id=\"vatModal\" class=\"modal fade\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">

\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<h4 class=\"modal-title text-center\">VAT Calculator</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t\t\t{{ form_start(calculator) }} 
\t\t\t\t\t\t\t{{form_errors(calculator) }}
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">{{ form_row(calculator.cost) }}</div>
\t\t\t\t\t\t\t<div class=\"form-group\">{{ form_row(calculator.vat_rate_amount) }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">{{ form_row(calculator.vat_rate_percentage) }}</div>
\t\t\t\t\t\t\t<div class=\"form-group\">{{ form_row(calculator.gross_amount) }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">{{ form_row(calculator.save) }}</div>
\t\t\t\t\t\t\t{{ form_end(calculator) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</div>
{% endblock %}
", "vat/index.html.twig", "C:\\Wamp\\www\\vat\\templates\\vat\\index.html.twig");
    }
}
