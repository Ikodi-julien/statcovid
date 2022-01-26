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

/* home/index.html.twig */
class __TwigTemplate_40c9c4fc6d58be325d6704701e1acd216ce55f5bac006d4d43ff6ae13d766d85 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Les chiffres du Covid en France ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Statistiques COVID-19</h1>
<section class=\"france\">
  <h2>Données pour la France le ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["franceData"] ?? null), "date", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>
  
  <p>Source : https://coronavirusapifr.herokuapp.com/data/live/france</p>
  <p>Date : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["franceData"] ?? null), "date", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
  
  <p>Nombre de patients actuellement hospitalisés pour COVID-19 : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["franceData"] ?? null), "hosp", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
  <p>Nombre de patients actuellement en réanimation ou en soins intensifs : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["franceData"] ?? null), "rea", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
  <p>Taux d'occupation des lits de réa par des patients Covid * : ";
        // line 13
        echo twig_escape_filter($this->env, (twig_round(twig_get_attribute($this->env, $this->source, ($context["franceData"] ?? null), "TO", [], "any", false, false, false, 13), 3, "floor") * 100), "html", null, true);
        echo " %</p>
  <p>Cumul des décès : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["franceData"] ?? null), "dc_tot", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
  <p>Nombre cumulé de patients ayant été hospitalisés pour COVID-19 et de retour à domicile en raison de l'amélioration de leur état de santé : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["franceData"] ?? null), "rad", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
  <p>* tension hospitalière sur la capacité en réanimation (Proportion de patients atteints de COVID-19 actuellement en réanimation, en soins intensifs, ou en unité de surveillance continue rapportée au total des lits en capacité initiale, c’est-à-dire avant d’augmenter les capacités de lits de réanimation dans un hôpital)</p>
</section>

<section class=\"deps\">
  <h2>Données par département le ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["depsData"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "date", [], "any", false, false, false, 20), "html", null, true);
        echo "</h2>
  <div class=\"deps__cards\">
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["depsData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 23
            echo "    <article class=\"card\">
      <h1>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "dep", [], "any", false, false, false, 24), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "lib_dep", [], "any", false, false, false, 24), "html", null, true);
            echo "</h1>
      <main>
        <p>Hospitalisés : ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "hosp", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
        <p>En réa : ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "rea", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
        <p>Décès : ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dep"], "dchosp", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
      </main>
  
      <footer>
        <a href=\"#\"> Détails </a>
      </footer>
    </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "  </div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 36,  139 => 28,  135 => 27,  131 => 26,  124 => 24,  121 => 23,  117 => 22,  112 => 20,  104 => 15,  100 => 14,  96 => 13,  92 => 12,  88 => 11,  83 => 9,  77 => 6,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/var/www/project/templates/home/index.html.twig");
    }
}
