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

/* achat_produit/index.html.twig */
class __TwigTemplate_cca6eb202d7a4e6f8ad2e31e7f8bec09 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "achat_produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "achat_produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "achat_produit/index.html.twig", 1);
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

        yield "Commande de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuto"]) || array_key_exists("tuto", $context) ? $context["tuto"] : (function () { throw new RuntimeError('Variable "tuto" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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
            <form action=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_achat_produit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuto"]) || array_key_exists("tuto", $context) ? $context["tuto"] : (function () { throw new RuntimeError('Variable "tuto" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        yield "\" method=\"post\">
                <div class=\"col-lg-6 col-md-8 mx-auto\">
                    <h1 class=\"light\">Achat de ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuto"]) || array_key_exists("tuto", $context) ? $context["tuto"] : (function () { throw new RuntimeError('Variable "tuto" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
                    <h3 style=\"color: red;\" >";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "</h3>
                    <h4 class=\"fw-light\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuto"]) || array_key_exists("tuto", $context) ? $context["tuto"] : (function () { throw new RuntimeError('Variable "tuto" does not exist.', 12, $this->source); })()), "sousTitre", [], "any", false, false, false, 12), "html", null, true);
        yield "</h4>
                    <img src=\"/uploads/";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuto"]) || array_key_exists("tuto", $context) ? $context["tuto"] : (function () { throw new RuntimeError('Variable "tuto" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13), "html", null, true);
        yield "\" style=\"margin-left: -50px;\" width=\"400\" height=\"250\" alt=\"\">
                    <p class=\"lead text-muted\">";
        // line 14
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuto"]) || array_key_exists("tuto", $context) ? $context["tuto"] : (function () { throw new RuntimeError('Variable "tuto" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14);
        yield "</p>
                    <p>
                    <h2>Prix <strong>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tuto"]) || array_key_exists("tuto", $context) ? $context["tuto"] : (function () { throw new RuntimeError('Variable "tuto" does not exist.', 16, $this->source); })()), "prix", [], "any", false, false, false, 16), "html", null, true);
        yield "</strong> <small>€</small> </h2>
                    </p>
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleInputEmail1\" class=\"form-label\">Email inscrit dans la banque</label>
                    <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                    <div id=\"emailHelp\" class=\"form-text\">We'll never share your email with anyone else.</div>
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleInputEmail1\" class=\"form-label\">Numero de compte de la bank</label>
                    <input type=\"text\" name=\"bank\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleInputEmail1\" class=\"form-label\">Mot de passe du compte bancaire</label>
                    <input type=\"password\" name=\"mdp\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                </div>
                <h3>Si vous n'avez pas encore du compte  sur MyBank, deposer des argent dans votre compte d'abord</h3>
                <p>Ouvrir un compte sur <strong><a href=\"https://localhost:7075/Home/LogIn\">MyBank</a></strong></p>
                <p></p>
                <button type=\"submit\" class=\"btn btn-primary\">Acheter Maintenant</button>
            </form>
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
        return "achat_produit/index.html.twig";
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
        return array (  121 => 16,  116 => 14,  112 => 13,  108 => 12,  104 => 11,  100 => 10,  95 => 8,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commande de {{ tuto.titre }}{% endblock %}

{% block body %}
    <section class=\"py-5 text-center container\">
        <div class=\"row py-lg-5\">
            <form action=\"{{path('app_achat_produit',{ 'id' : tuto.id}) }}\" method=\"post\">
                <div class=\"col-lg-6 col-md-8 mx-auto\">
                    <h1 class=\"light\">Achat de {{tuto.titre}}</h1>
                    <h3 style=\"color: red;\" >{{ msg }}</h3>
                    <h4 class=\"fw-light\">{{tuto.sousTitre}}</h4>
                    <img src=\"/uploads/{{tuto.image}}\" style=\"margin-left: -50px;\" width=\"400\" height=\"250\" alt=\"\">
                    <p class=\"lead text-muted\">{{tuto.description | raw }}</p>
                    <p>
                    <h2>Prix <strong>{{ tuto.prix }}</strong> <small>€</small> </h2>
                    </p>
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleInputEmail1\" class=\"form-label\">Email inscrit dans la banque</label>
                    <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                    <div id=\"emailHelp\" class=\"form-text\">We'll never share your email with anyone else.</div>
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleInputEmail1\" class=\"form-label\">Numero de compte de la bank</label>
                    <input type=\"text\" name=\"bank\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleInputEmail1\" class=\"form-label\">Mot de passe du compte bancaire</label>
                    <input type=\"password\" name=\"mdp\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                </div>
                <h3>Si vous n'avez pas encore du compte  sur MyBank, deposer des argent dans votre compte d'abord</h3>
                <p>Ouvrir un compte sur <strong><a href=\"https://localhost:7075/Home/LogIn\">MyBank</a></strong></p>
                <p></p>
                <button type=\"submit\" class=\"btn btn-primary\">Acheter Maintenant</button>
            </form>
        </div>
    </section>
{% endblock %}
", "achat_produit/index.html.twig", "D:\\Cours\\Cours\\Dev Pers\\Symfony 7\\projet_skeleton_symfony\\templates\\achat_produit\\index.html.twig");
    }
}
