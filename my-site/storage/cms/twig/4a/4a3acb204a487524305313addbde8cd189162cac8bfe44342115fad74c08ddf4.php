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

/* /Users/onege/Desktop/october — копия 2/my-site/themes/moving-test/partials/site/footer.htm */
class __TwigTemplate_291ddf3c58e68147e80b4387b34fad8b357d828bf9b68d429a577965ffb3e322 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<footer class=\"footer\">
    <div class=\"footer-vector-wrapper\">
        <div class=\"f-vector v-left\"></div>
        <div class=\"f-vector v-right\"></div>
    </div>

    <div class=\"footer-container\">
        <div class=\"footer-logo\">
            <img src=\"assets/images/footer-logo.svg\" alt=\"Logo\">
        </div>

        <nav class=\"footer-nav\">
            <a href=\"#\">Main</a>
            <a href=\"#\">About</a>
            <a href=\"#\">Services</a>
            <a href=\"#\">Contact</a>
        </nav>

        <div class=\"footer-bottom\">
            <p>© 2026 All rights reserved.</p>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/Users/onege/Desktop/october — копия 2/my-site/themes/moving-test/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    <div class=\"footer-vector-wrapper\">
        <div class=\"f-vector v-left\"></div>
        <div class=\"f-vector v-right\"></div>
    </div>

    <div class=\"footer-container\">
        <div class=\"footer-logo\">
            <img src=\"assets/images/footer-logo.svg\" alt=\"Logo\">
        </div>

        <nav class=\"footer-nav\">
            <a href=\"#\">Main</a>
            <a href=\"#\">About</a>
            <a href=\"#\">Services</a>
            <a href=\"#\">Contact</a>
        </nav>

        <div class=\"footer-bottom\">
            <p>© 2026 All rights reserved.</p>
        </div>
    </div>
</footer>", "/Users/onege/Desktop/october — копия 2/my-site/themes/moving-test/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
