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
class __TwigTemplate_073dc9af915051cb33e8787440527dcd extends Template
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

        yield "Bienvenue sur UDEMY!";
        
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
                <h1 class=\"fw-light\">Formation UDEMY</h1>
                <p class=\"lead text-muted\">Bienvenur sur le meilleur site de formation en francais</p>
                <p>
                <a href=\"#\" class=\"btn btn-primary my-2\">Voir les formations</a>
                <a href=\"#\" class=\"btn btn-secondary my-2\">En savoir plus</a>
                </p>
            </div>
            </div>
        </section>

        <div class=\"album py-5 bg-light\">
            <div class=\"container\">

            <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/33211.jpg"), "html", null, true);
        yield "\" width=\"100%\" height=\"225\"></img>
                    <div class=\"card-body\">
                    <p class=\"card-text\">Apprenez le langage C# car c'est le langage de programmation le plus cool du monde</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Voir</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Editer</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>

                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>

                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
            </div>
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
        return array (  111 => 25,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue sur UDEMY!{% endblock %}

{% block body %}
    <section class=\"py-5 text-center container\">
            <div class=\"row py-lg-5\">
            <div class=\"col-lg-6 col-md-8 mx-auto\">
                <h1 class=\"fw-light\">Formation UDEMY</h1>
                <p class=\"lead text-muted\">Bienvenur sur le meilleur site de formation en francais</p>
                <p>
                <a href=\"#\" class=\"btn btn-primary my-2\">Voir les formations</a>
                <a href=\"#\" class=\"btn btn-secondary my-2\">En savoir plus</a>
                </p>
            </div>
            </div>
        </section>

        <div class=\"album py-5 bg-light\">
            <div class=\"container\">

            <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <img src=\"{{ asset('assets/img/33211.jpg')}}\" width=\"100%\" height=\"225\"></img>
                    <div class=\"card-body\">
                    <p class=\"card-text\">Apprenez le langage C# car c'est le langage de programmation le plus cool du monde</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Voir</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Editer</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>

                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>

                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"col\">
                <div class=\"card shadow-sm\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

                    <div class=\"card-body\">
                    <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                        </div>
                        <small class=\"text-muted\">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

{% endblock %}
", "home/index.html.twig", "D:\\Cours\\Cours\\Dev Pers\\Symfony 7\\projet_skeleton_symfony\\templates\\home\\index.html.twig");
    }
}
