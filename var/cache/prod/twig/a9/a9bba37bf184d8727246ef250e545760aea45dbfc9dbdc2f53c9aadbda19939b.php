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

/* @EasyAdmin/default/field_smallint.html.twig */
class __TwigTemplate_75f92358700824c379fcb50657e4dd78bfc67e9602cb8826e92c53a6d4aa9851 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "format", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf(twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "format", [], "any", false, false, false, 2), ($context["value"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? null)), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_smallint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/field_smallint.html.twig", "/home/burei/OWL-Eyewear/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_smallint.html.twig");
    }
}
