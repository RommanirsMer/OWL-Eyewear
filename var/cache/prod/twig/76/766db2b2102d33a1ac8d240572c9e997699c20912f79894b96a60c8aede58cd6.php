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

/* @EasyAdmin/page/blank.html.twig */
class __TwigTemplate_82688813b6286dfe2460e437660a43a26e431ab1a70bc12e1ae00c7f175d1e20 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.templates.layout"), "@EasyAdmin/page/blank.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["__internal_b1b624d0b7120f33f6cf9757fd7eeacbbaa9bce4ef59521101abdee7c3fb632e"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("translation_domain");
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-blank";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/blank.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  49 => 4,  45 => 2,  43 => 1,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/blank.html.twig", "E:\\wamp64\\www\\owleyewear\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\page\\blank.html.twig");
    }
}
