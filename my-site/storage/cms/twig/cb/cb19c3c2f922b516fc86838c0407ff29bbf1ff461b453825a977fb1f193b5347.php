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

/* /Users/onege/Desktop/october — копия 2/my-site/themes/moving-test/partials/site/header.htm */
class __TwigTemplate_fa112b8dd83b1a0256559a0aab183605f3fa696a7cd54daf20044cc599aac6c4 extends \Twig\Template
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
        echo "<header class=\"header\">
    <div class=\"container\">
        <div class=\"nav-wrapper\">
            <a href=\"/\" class=\"logo\">
                <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"Logo\">
            </a>

            <nav class=\"menu\">
                <div class=\"menu__item\">
                    <a href=\"#services\" class=\"menu__link\">Services</a>
                    <div class=\"dropdown\">
                        <ul class=\"dropdown__list\">
                            <li><a href=\"#services\">Local Moving</a></li>
                            <li><a href=\"#services\">Long Distance Moving</a></li>
                            <li><a href=\"#services\">Office / Commercial Moving</a></li>
                            <li><a href=\"#services\">Packing Services</a></li>
                            <li><a href=\"#services\">Storage Solutions</a></li>
                        </ul>
                    </div>
                </div>
                <a href=\"#about\" class=\"menu__link\">About Us</a>
                <a href=\"#gallery\" class=\"menu__link\">Gallery</a>
                <a href=\"#reviews\" class=\"menu__link\">Reviews</a>
                <a href=\"#contact\" class=\"menu__link\">Contact Us</a>
            </nav>

            <div class=\"actions\">
                <div class=\"desktop-only\">
                    <a href=\"tel:+77777777777\" class=\"phone\">
                        <img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Group 1597878739.svg");
        echo "\" alt=\"Phone Icon\">
                        <span>+ 7 (777) 777–77–77</span>
                    </a>

                    <a href=\"#contact\" class=\"btn-quote\">
                        Get a Quote
                    </a>
                </div>

                <button class=\"search-btn\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
                        <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
                    </svg>
                </button>

                <div class=\"burger\" id=\"burger\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>

    <div class=\"mobile-menu\" id=\"mobileMenu\">
        <div class=\"mobile-menu__inner\">
            <ul class=\"mobile-nav\">
                <li class=\"mobile-item\">
                    <a href=\"/\" class=\"mobile-link\">Home</a>
                </li>
                <li class=\"mobile-item\">
                    <div class=\"mobile-link\">
                        Services <span class=\"toggle-icon\">+</span>
                    </div>
                    <ul class=\"mobile-dropdown\">
                        <li><a href=\"#services\">Local Moving</a></li>
                        <li><a href=\"#services\">Long Distance Moving</a></li>
                        <li><a href=\"#services\">Office / Commercial Moving</a></li>
                        <li><a href=\"#services\">Packing Services</a></li>
                        <li><a href=\"#services\">Storage Solutions</a></li>
                    </ul>
                </li>
                <li class=\"mobile-item\"><a href=\"#about\" class=\"mobile-link\">About Us</a></li>
                <li class=\"mobile-item\"><a href=\"#gallery\" class=\"mobile-link\">Gallery</a></li>
                <li class=\"mobile-item\"><a href=\"#reviews\" class=\"mobile-link\">Reviews</a></li>
                <li class=\"mobile-item\"><a href=\"#contact\" class=\"mobile-link\">Contact Us</a></li>
            </ul>

            <div class=\"mobile-footer\">
                <a href=\"tel:+77777777777\" class=\"mobile-phone\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"></path>
                    </svg>
                    + 7 (777) 777-77-77
                </a>
                <a href=\"#contact\" class=\"mobile-btn\">Get a Quote</a>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/Users/onege/Desktop/october — копия 2/my-site/themes/moving-test/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 30,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\">
    <div class=\"container\">
        <div class=\"nav-wrapper\">
            <a href=\"/\" class=\"logo\">
                <img src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"Logo\">
            </a>

            <nav class=\"menu\">
                <div class=\"menu__item\">
                    <a href=\"#services\" class=\"menu__link\">Services</a>
                    <div class=\"dropdown\">
                        <ul class=\"dropdown__list\">
                            <li><a href=\"#services\">Local Moving</a></li>
                            <li><a href=\"#services\">Long Distance Moving</a></li>
                            <li><a href=\"#services\">Office / Commercial Moving</a></li>
                            <li><a href=\"#services\">Packing Services</a></li>
                            <li><a href=\"#services\">Storage Solutions</a></li>
                        </ul>
                    </div>
                </div>
                <a href=\"#about\" class=\"menu__link\">About Us</a>
                <a href=\"#gallery\" class=\"menu__link\">Gallery</a>
                <a href=\"#reviews\" class=\"menu__link\">Reviews</a>
                <a href=\"#contact\" class=\"menu__link\">Contact Us</a>
            </nav>

            <div class=\"actions\">
                <div class=\"desktop-only\">
                    <a href=\"tel:+77777777777\" class=\"phone\">
                        <img src=\"{{ 'assets/images/Group 1597878739.svg'|theme }}\" alt=\"Phone Icon\">
                        <span>+ 7 (777) 777–77–77</span>
                    </a>

                    <a href=\"#contact\" class=\"btn-quote\">
                        Get a Quote
                    </a>
                </div>

                <button class=\"search-btn\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
                        <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
                    </svg>
                </button>

                <div class=\"burger\" id=\"burger\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>

    <div class=\"mobile-menu\" id=\"mobileMenu\">
        <div class=\"mobile-menu__inner\">
            <ul class=\"mobile-nav\">
                <li class=\"mobile-item\">
                    <a href=\"/\" class=\"mobile-link\">Home</a>
                </li>
                <li class=\"mobile-item\">
                    <div class=\"mobile-link\">
                        Services <span class=\"toggle-icon\">+</span>
                    </div>
                    <ul class=\"mobile-dropdown\">
                        <li><a href=\"#services\">Local Moving</a></li>
                        <li><a href=\"#services\">Long Distance Moving</a></li>
                        <li><a href=\"#services\">Office / Commercial Moving</a></li>
                        <li><a href=\"#services\">Packing Services</a></li>
                        <li><a href=\"#services\">Storage Solutions</a></li>
                    </ul>
                </li>
                <li class=\"mobile-item\"><a href=\"#about\" class=\"mobile-link\">About Us</a></li>
                <li class=\"mobile-item\"><a href=\"#gallery\" class=\"mobile-link\">Gallery</a></li>
                <li class=\"mobile-item\"><a href=\"#reviews\" class=\"mobile-link\">Reviews</a></li>
                <li class=\"mobile-item\"><a href=\"#contact\" class=\"mobile-link\">Contact Us</a></li>
            </ul>

            <div class=\"mobile-footer\">
                <a href=\"tel:+77777777777\" class=\"mobile-phone\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"></path>
                    </svg>
                    + 7 (777) 777-77-77
                </a>
                <a href=\"#contact\" class=\"mobile-btn\">Get a Quote</a>
            </div>
        </div>
    </div>
</header>", "/Users/onege/Desktop/october — копия 2/my-site/themes/moving-test/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 5);
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
