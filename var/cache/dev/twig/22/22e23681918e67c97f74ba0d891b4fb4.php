<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* tuto/details.html.twig */
class __TwigTemplate_f35d2b1717b5ae6c35bff1ed08fbbfbc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tuto/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tuto/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tuto/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Le tuto";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <section class=\"py-5 text-center container\">
        <div class=\"row py-lg-5\">
            <div class=\"col-lg-6 col-md-8 mx-auto\">
                <h1 class=\"light\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuto"]) || array_key_exists("tuto", $context) ? $context["tuto"] : (function () { throw new RuntimeError('Variable "tuto" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
                <h4 class=\"fw-light\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuto"]) || array_key_exists("tuto", $context) ? $context["tuto"] : (function () { throw new RuntimeError('Variable "tuto" does not exist.', 10, $this->source); })()), "sousTitre", [], "any", false, false, false, 10), "html", null, true);
        yield "</h4>
                <img src=\"/uploads/";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuto"]) || array_key_exists("tuto", $context) ? $context["tuto"] : (function () { throw new RuntimeError('Variable "tuto" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11), "html", null, true);
        yield "\" style=\"margin-left: -50px;\" width=\"700\" height=\"350\" alt=\"\">
                <p class=\"lead text-muted\">";
        // line 12
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuto"]) || array_key_exists("tuto", $context) ? $context["tuto"] : (function () { throw new RuntimeError('Variable "tuto" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12);
        yield "</p>
                <p>
                <h2>Prix <strong>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuto"]) || array_key_exists("tuto", $context) ? $context["tuto"] : (function () { throw new RuntimeError('Variable "tuto" does not exist.', 14, $this->source); })()), "prix", [], "any", false, false, false, 14), "html", null, true);
        yield "</strong> <small>€</small> </h2>
                ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15)))) {
            // line 16
            yield "                ";
        } else {
            // line 17
            yield "                    ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17))) {
                // line 18
                yield "                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client");
                yield "\" class=\"btn btn-primary my-2\">S'authentifier d'abord</a>
                        ";
            } else {
                // line 20
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_achat_produit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuto"]) || array_key_exists("tuto", $context) ? $context["tuto"] : (function () { throw new RuntimeError('Variable "tuto" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
                yield "\" class=\"btn btn-primary my-2\">Acheter le tuto</a>
                    ";
            }
            // line 22
            yield "                ";
        }
        // line 23
        yield "                <a href=\"https://anthonyc.gumroad.com/l/formations-prompt-engineer\" target=\"_blank\" class=\"btn btn-secondary my-2\">En savoir plus</a>
                </p>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "tuto/details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  139 => 23,  136 => 22,  130 => 20,  124 => 18,  121 => 17,  118 => 16,  116 => 15,  112 => 14,  107 => 12,  103 => 11,  99 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Le tuto{% endblock %}

{% block body %}
    <section class=\"py-5 text-center container\">
        <div class=\"row py-lg-5\">
            <div class=\"col-lg-6 col-md-8 mx-auto\">
                <h1 class=\"light\">{{tuto.titre}}</h1>
                <h4 class=\"fw-light\">{{tuto.sousTitre}}</h4>
                <img src=\"/uploads/{{tuto.image}}\" style=\"margin-left: -50px;\" width=\"700\" height=\"350\" alt=\"\">
                <p class=\"lead text-muted\">{{tuto.description | raw }}</p>
                <p>
                <h2>Prix <strong>{{ tuto.prix }}</strong> <small>€</small> </h2>
                {% if app.user and \"ROLE_ADMIN\" in app.user.roles %}
                {% else %}
                    {% if app.user is null %}
                        <a href=\"{{path('app_client')}}\" class=\"btn btn-primary my-2\">S'authentifier d'abord</a>
                        {% else %}
                        <a href=\"{{path('app_achat_produit',{ 'id' : tuto.id}) }}\" class=\"btn btn-primary my-2\">Acheter le tuto</a>
                    {% endif %}
                {% endif %}
                <a href=\"https://anthonyc.gumroad.com/l/formations-prompt-engineer\" target=\"_blank\" class=\"btn btn-secondary my-2\">En savoir plus</a>
                </p>
            </div>
        </div>
    </section>
{% endblock %}
", "tuto/details.html.twig", "D:\\Cours\\Cours\\Dev Pers\\Symfony 7\\projet_skeleton_symfony\\templates\\tuto\\details.html.twig");
    }
}
