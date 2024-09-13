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

/* home/index.html.twig */
class __TwigTemplate_93d49cab7bbb214631d032e0466859c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Bienvenue sur I-Dev";
        
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
                <h1 class=\"fw-light\">Formation I-Dev</h1>
                <p class=\"lead text-muted\">Bienvenur sur le meilleur site de formation en francais et en anglais</p>
                <p>
                <a href=\"https://about.udemy.com/fr/\" class=\"btn btn-primary my-2\">Le I-Dev</a>
                <a href=\"https://www.udemy.com/teaching/?ref=teach_footer\" class=\"btn btn-secondary my-2\">Enseigner sur I-Dev</a>
                </p>
            </div>
        </div>
    </section>

        <div class=\"album py-5 bg-light\">
            <div class=\"container\">

                <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tutos"]) || array_key_exists("tutos", $context) ? $context["tutos"] : (function () { throw new RuntimeError('Variable "tutos" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tuto"]) {
            // line 24
            yield "                    
                    <div class=\"col\">
                        <div class=\"card shadow-sm\">
                            <img src=\"/uploads/";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tuto"], "image", [], "any", false, false, false, 27), "html", null, true);
            yield "\" width=\"100%\" height=\"225\"></img>
                            <div class=\"card-body\">
                                <h4 class=\"card-text\"><strong>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tuto"], "titre", [], "any", false, false, false, 29), "html", null, true);
            yield "</strong></h4>
                                <p>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tuto"], "sousTitre", [], "any", false, false, false, 30), "html", null, true);
            yield "</p>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"btn-group\">
                                    <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tuto_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tuto"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">Voir le tuto</a>
                                    
                                    ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "roles", [], "any", false, false, false, 35)))) {
                // line 36
                yield "                                    <a href=\"https://127.0.0.1:8000/admin\" class=\"btn btn-sm btn-outline-secondary\">Editer</a>
                                    ";
            }
            // line 38
            yield "                                    </div>
                                    <small class=\"text-muted\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tuto"], "prix", [], "any", false, false, false, 39), "html", null, true);
            yield " €</small>
                                </div>
                            </div>
                        </div>
                    </div>
                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tuto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                </div>
            </div>
        </div>
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
        return "home/index.html.twig";
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
        return array (  160 => 46,  147 => 39,  144 => 38,  140 => 36,  138 => 35,  133 => 33,  127 => 30,  123 => 29,  118 => 27,  113 => 24,  109 => 23,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue sur I-Dev{% endblock %}

{% block body %}
    <section class=\"py-5 text-center container\">
        <div class=\"row py-lg-5\">
            <div class=\"col-lg-6 col-md-8 mx-auto\">
                <h1 class=\"fw-light\">Formation I-Dev</h1>
                <p class=\"lead text-muted\">Bienvenur sur le meilleur site de formation en francais et en anglais</p>
                <p>
                <a href=\"https://about.udemy.com/fr/\" class=\"btn btn-primary my-2\">Le I-Dev</a>
                <a href=\"https://www.udemy.com/teaching/?ref=teach_footer\" class=\"btn btn-secondary my-2\">Enseigner sur I-Dev</a>
                </p>
            </div>
        </div>
    </section>

        <div class=\"album py-5 bg-light\">
            <div class=\"container\">

                <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
                {% for tuto in tutos %}
                    
                    <div class=\"col\">
                        <div class=\"card shadow-sm\">
                            <img src=\"/uploads/{{tuto.image}}\" width=\"100%\" height=\"225\"></img>
                            <div class=\"card-body\">
                                <h4 class=\"card-text\"><strong>{{tuto.titre}}</strong></h4>
                                <p>{{tuto.sousTitre}}</p>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"btn-group\">
                                    <a href=\"{{path('app_tuto_details',{ 'id' : tuto.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">Voir le tuto</a>
                                    
                                    {% if app.user and \"ROLE_ADMIN\" in app.user.roles %}
                                    <a href=\"https://127.0.0.1:8000/admin\" class=\"btn btn-sm btn-outline-secondary\">Editer</a>
                                    {% endif %}
                                    </div>
                                    <small class=\"text-muted\">{{tuto.prix}} €</small>
                                </div>
                            </div>
                        </div>
                    </div>
                
                {% endfor %}
                </div>
            </div>
        </div>
{% endblock %}
", "home/index.html.twig", "D:\\Cours\\Cours\\Dev Pers\\Symfony 7\\projet_skeleton_symfony\\templates\\home\\index.html.twig");
    }
}
