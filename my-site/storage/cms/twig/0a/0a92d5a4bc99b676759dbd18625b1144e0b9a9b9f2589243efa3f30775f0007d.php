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

/* /Users/onege/Desktop/october — копия 2/my-site/themes/moving-test/pages/home.htm */
class __TwigTemplate_183431c35404e15d9cc7a3be1dc94259444aa79d28755ce48151b3da136dec31 extends \Twig\Template
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
        echo "<section class=\"hero\">
    <video autoplay muted loop playsinline class=\"hero-video\">
        <source src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/video/hero-bg.mp4");
        echo "\" type=\"video/mp4\">
    </video>
    <div class=\"hero-overlay\"></div>

    <div class=\"hero__container\">
      <div class=\"hero__content\">
    <h1 class=\"hero__title\">Your Seamless Move</h1>
    <h2 class=\"hero__subtitle\">Starts With TI Moving</h2>
    <p class=\"hero__text\">Licensed, insured, stress-free moves across Florida</p>

    <a href=\"#\" class=\"btn-hero-quote\">Get a Quote</a>
</div>

    </div>

    <div class=\"hero__divider\">
        <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rectangle 1862.svg");
        echo "\" alt=\"divider\">
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/onege/Desktop/october — копия 2/my-site/themes/moving-test/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero\">
    <video autoplay muted loop playsinline class=\"hero-video\">
        <source src=\"{{ 'assets/video/hero-bg.mp4'|theme }}\" type=\"video/mp4\">
    </video>
    <div class=\"hero-overlay\"></div>

    <div class=\"hero__container\">
      <div class=\"hero__content\">
    <h1 class=\"hero__title\">Your Seamless Move</h1>
    <h2 class=\"hero__subtitle\">Starts With TI Moving</h2>
    <p class=\"hero__text\">Licensed, insured, stress-free moves across Florida</p>

    <a href=\"#\" class=\"btn-hero-quote\">Get a Quote</a>
</div>

    </div>

    <div class=\"hero__divider\">
        <img src=\"{{ 'assets/images/Rectangle 1862.svg'|theme }}\" alt=\"divider\">
    </div>
</section>", "/Users/onege/Desktop/october — копия 2/my-site/themes/moving-test/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
