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

    <div class=\"footer-container\" style=\"position: relative;\"> <div class=\"footer-top-row\">
            <div class=\"footer-left-info\">
                <h2 class=\"footer-title\">Have a Questions?</h2>
                <p class=\"footer-subtitle\">We’re here to Help</p>
                <button class=\"footer-btn\">Get a Quote</button>
            </div>

            <div class=\"footer-right-groups\">
                <div class=\"footer-group\">
                    <h4 class=\"group-title\">Navigation</h4>
                    <nav class=\"group-list\">
                        <a href=\"#\">About Us</a>
                        <a href=\"#\">Gallery</a>
                        <a href=\"#\">Reviews</a>
                    </nav>
                </div>

                <div class=\"footer-group\">
                    <h4 class=\"group-title\">Our Services</h4>
                    <nav class=\"group-list\">
                        <a href=\"#\">Office / Commercial Moving</a>
                        <a href=\"#\">Local Moving</a>
                        <a href=\"#\">Long Distance Moving</a>
                        <a href=\"#\">Packing Services</a>
                        <a href=\"#\">Storage Solutions</a>
                    </nav>
                </div>

                <div class=\"footer-group\">
                    <h4 class=\"group-title\">Contact Us</h4>
                    <div class=\"group-list contact-list\">
                        <p class=\"contact-item address\">1234 NW 45TH AVE, FORT LAUDERDALE, FL 33309</p>
                        <a href=\"mailto:examplemail.kz@mail.ru\" class=\"contact-item email\">examplemail.kz@mail.ru</a>
                        <a href=\"tel:+77777777777\" class=\"contact-item phone\">+7 (777) 777 77 77</a>
                    </div>
                </div>
            </div>

            <div class=\"footer-socials\">
                <a href=\"#\" class=\"social-icon fb\">
                    <img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram.svg");
        echo "\" alt=\"Facebook\">
                </a>
                <a href=\"#\" class=\"social-icon insta\">
                    <img src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/facebook.svg");
        echo "\" alt=\"Instagram\">
                </a>
            </div>
        </div> <div class=\"footer-bottom\">
            <div class=\"footer-line\"></div>
            <div class=\"footer-copyright\">
                <p class=\"copyright-text\">abc design</p>
            </div>
        </div>

    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/Users/onege/Desktop/october — копия 2/my-site/themes/moving-test/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 50,  87 => 47,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    <div class=\"footer-vector-wrapper\">
        <div class=\"f-vector v-left\"></div>
        <div class=\"f-vector v-right\"></div>
    </div>

    <div class=\"footer-container\" style=\"position: relative;\"> <div class=\"footer-top-row\">
            <div class=\"footer-left-info\">
                <h2 class=\"footer-title\">Have a Questions?</h2>
                <p class=\"footer-subtitle\">We’re here to Help</p>
                <button class=\"footer-btn\">Get a Quote</button>
            </div>

            <div class=\"footer-right-groups\">
                <div class=\"footer-group\">
                    <h4 class=\"group-title\">Navigation</h4>
                    <nav class=\"group-list\">
                        <a href=\"#\">About Us</a>
                        <a href=\"#\">Gallery</a>
                        <a href=\"#\">Reviews</a>
                    </nav>
                </div>

                <div class=\"footer-group\">
                    <h4 class=\"group-title\">Our Services</h4>
                    <nav class=\"group-list\">
                        <a href=\"#\">Office / Commercial Moving</a>
                        <a href=\"#\">Local Moving</a>
                        <a href=\"#\">Long Distance Moving</a>
                        <a href=\"#\">Packing Services</a>
                        <a href=\"#\">Storage Solutions</a>
                    </nav>
                </div>

                <div class=\"footer-group\">
                    <h4 class=\"group-title\">Contact Us</h4>
                    <div class=\"group-list contact-list\">
                        <p class=\"contact-item address\">1234 NW 45TH AVE, FORT LAUDERDALE, FL 33309</p>
                        <a href=\"mailto:examplemail.kz@mail.ru\" class=\"contact-item email\">examplemail.kz@mail.ru</a>
                        <a href=\"tel:+77777777777\" class=\"contact-item phone\">+7 (777) 777 77 77</a>
                    </div>
                </div>
            </div>

            <div class=\"footer-socials\">
                <a href=\"#\" class=\"social-icon fb\">
                    <img src=\"{{ 'assets/images/instagram.svg'|theme }}\" alt=\"Facebook\">
                </a>
                <a href=\"#\" class=\"social-icon insta\">
                    <img src=\"{{ 'assets/images/facebook.svg'|theme }}\" alt=\"Instagram\">
                </a>
            </div>
        </div> <div class=\"footer-bottom\">
            <div class=\"footer-line\"></div>
            <div class=\"footer-copyright\">
                <p class=\"copyright-text\">abc design</p>
            </div>
        </div>

    </div>
</footer>", "/Users/onege/Desktop/october — копия 2/my-site/themes/moving-test/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 47);
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
