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

    <div class=\"footer-container\" style=\"position: relative;\">
        <div class=\"footer-top-row\">
            <div class=\"footer-left-info\">
                <h2 class=\"footer-title\">Have a Questions?</h2>
                <p class=\"footer-subtitle\">We’re here to Help</p>
                <button class=\"footer-btn\" id=\"openQuote\">Get a Quote</button>
            </div>

            <div class=\"footer-right-groups\">
                <div class=\"footer-group\">
                    <h4 class=\"group-title\">Navigation</h4>
                    <nav class=\"group-list\">
                        <a href=\"#about\">About Us</a>
                        <a href=\"#gallery\">Gallery</a>
                        <a href=\"#reviews\">Reviews</a>
                    </nav>
                </div>

                <div class=\"footer-group\">
                    <h4 class=\"group-title\">Our Services</h4>
                    <nav class=\"group-list\">
                        <a href=\"#services\">Office / Commercial Moving</a>
                        <a href=\"#services\">Local Moving</a>
                        <a href=\"#services\">Long Distance Moving</a>
                        <a href=\"#services\">Packing Services</a>
                        <a href=\"#services\">Storage Solutions</a>
                    </nav>
                </div>

                <div class=\"footer-group\">
                    <h4 class=\"group-title\">Contact Us</h4>
                    <div class=\"group-list contact-list\">
                        ";
        // line 39
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/contacts.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 40
        echo "                    </div>
                </div>
            </div>

            <div class=\"footer-socials\">
                <a href=\"#\" class=\"social-icon fb\">
                    <img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram.svg");
        echo "\" alt=\"Instagram\">
                </a>
                <a href=\"#\" class=\"social-icon insta\">
                    <img src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/facebook.svg");
        echo "\" alt=\"Facebook\">
                </a>
            </div>
        </div>

        <div class=\"footer-bottom\">
            <div class=\"footer-line\"></div>
            <div class=\"footer-copyright\">
                <p class=\"copyright-text\">";
        // line 57
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/copyright.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
            </div>
        </div>
    </div>

    <div id=\"quoteModal\" class=\"modal\">
        <div class=\"modal-content\">
            <span class=\"close-modal\">&times;</span>
            <h2 class=\"modal-title\">Get a Quote</h2>
            <p class=\"modal-subtitle\">Leave your details and we will call you back</p>

            <form class=\"modal-form\">
                <input type=\"text\" placeholder=\"Your Name\" required>
                <input type=\"tel\" placeholder=\"Phone Number\" required>
                <textarea placeholder=\"Tell us about your move...\"></textarea>
                <button type=\"submit\" class=\"modal-submit-btn\">Send Request</button>
            </form>
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
        return array (  108 => 57,  97 => 49,  91 => 46,  83 => 40,  79 => 39,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    <div class=\"footer-vector-wrapper\">
        <div class=\"f-vector v-left\"></div>
        <div class=\"f-vector v-right\"></div>
    </div>

    <div class=\"footer-container\" style=\"position: relative;\">
        <div class=\"footer-top-row\">
            <div class=\"footer-left-info\">
                <h2 class=\"footer-title\">Have a Questions?</h2>
                <p class=\"footer-subtitle\">We’re here to Help</p>
                <button class=\"footer-btn\" id=\"openQuote\">Get a Quote</button>
            </div>

            <div class=\"footer-right-groups\">
                <div class=\"footer-group\">
                    <h4 class=\"group-title\">Navigation</h4>
                    <nav class=\"group-list\">
                        <a href=\"#about\">About Us</a>
                        <a href=\"#gallery\">Gallery</a>
                        <a href=\"#reviews\">Reviews</a>
                    </nav>
                </div>

                <div class=\"footer-group\">
                    <h4 class=\"group-title\">Our Services</h4>
                    <nav class=\"group-list\">
                        <a href=\"#services\">Office / Commercial Moving</a>
                        <a href=\"#services\">Local Moving</a>
                        <a href=\"#services\">Long Distance Moving</a>
                        <a href=\"#services\">Packing Services</a>
                        <a href=\"#services\">Storage Solutions</a>
                    </nav>
                </div>

                <div class=\"footer-group\">
                    <h4 class=\"group-title\">Contact Us</h4>
                    <div class=\"group-list contact-list\">
                        {% content 'footer/contacts.htm' %}
                    </div>
                </div>
            </div>

            <div class=\"footer-socials\">
                <a href=\"#\" class=\"social-icon fb\">
                    <img src=\"{{ 'assets/images/instagram.svg'|theme }}\" alt=\"Instagram\">
                </a>
                <a href=\"#\" class=\"social-icon insta\">
                    <img src=\"{{ 'assets/images/facebook.svg'|theme }}\" alt=\"Facebook\">
                </a>
            </div>
        </div>

        <div class=\"footer-bottom\">
            <div class=\"footer-line\"></div>
            <div class=\"footer-copyright\">
                <p class=\"copyright-text\">{% content 'footer/copyright.txt' %}</p>
            </div>
        </div>
    </div>

    <div id=\"quoteModal\" class=\"modal\">
        <div class=\"modal-content\">
            <span class=\"close-modal\">&times;</span>
            <h2 class=\"modal-title\">Get a Quote</h2>
            <p class=\"modal-subtitle\">Leave your details and we will call you back</p>

            <form class=\"modal-form\">
                <input type=\"text\" placeholder=\"Your Name\" required>
                <input type=\"tel\" placeholder=\"Phone Number\" required>
                <textarea placeholder=\"Tell us about your move...\"></textarea>
                <button type=\"submit\" class=\"modal-submit-btn\">Send Request</button>
            </form>
        </div>
    </div>
</footer>", "/Users/onege/Desktop/october — копия 2/my-site/themes/moving-test/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 39);
        static $filters = array("theme" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
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
