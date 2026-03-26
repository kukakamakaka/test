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
        echo "<section id=\"hero\" class=\"hero\">
    <video autoplay muted loop playsinline class=\"hero-video\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("hero/bg.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "    </video>
    <div class=\"hero-overlay\"></div>

    <div class=\"hero__container\">
        <div class=\"hero__content\">
            ";
        // line 9
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("hero/info.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 10
        echo "
            <a href=\"#\" class=\"btn-hero-quote\">Get a Quote</a>
        </div>
    </div>

    <div class=\"hero__divider\">
        ";
        // line 16
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("hero/divider.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 17
        echo "    </div>
</section>

<section id=\"why\" class=\"why-section\">
    <div class=\"container\">
        ";
        // line 22
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("why/section-title.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 23
        echo "    </div>

    ";
        // line 25
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("why/main-description.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 26
        echo "
    <div class=\"why-grid\">
        <div class=\"why-card card-1\">
            ";
        // line 29
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("why/card-1.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 30
        echo "        </div>

        <div class=\"why-card card-2\">
            ";
        // line 33
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("why/card-2.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 34
        echo "        </div>

        <div class=\"why-card card-3\">
            ";
        // line 37
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("why/card-3.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 38
        echo "        </div>
    </div>
</section>

<section id=\"services\" class=\"services-section\">
    <h2 class=\"services-title\">";
        // line 43
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("services/title.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</h2>

    <div class=\"services-slider-wrapper\">
        <div class=\"services-track\">
            <div class=\"service-card empty-card\">";
        // line 47
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("services/card-1.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</div>
            <div class=\"service-card empty-card\">";
        // line 48
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("services/card-2.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</div>
            <div class=\"service-card empty-card\">";
        // line 49
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("services/card-3.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</div>
            <div class=\"service-card empty-card\">";
        // line 50
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("services/card-4.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</div>
            <div class=\"service-card empty-card\">";
        // line 51
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("services/card-5.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</div>
        </div>
    </div>

    <div class=\"services-pagination\">
        <span class=\"dot active\"></span>
        <span class=\"dot\"></span>
        <span class=\"dot\"></span>
        <span class=\"dot\"></span>
        <span class=\"dot\"></span>
    </div>
</section>

<section id=\"reviews\" class=\"reviews-section\">
    <h2 class=\"reviews-title\">";
        // line 65
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("reviews/title.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</h2>

    <div class=\"reviews-container\">
        <div class=\"review-card card-tall\">
            ";
        // line 69
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("reviews/stats-card.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 70
        echo "        </div>

        <div class=\"review-card card-short\">
            ";
        // line 73
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("reviews/review-1.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 74
        echo "        </div>

        <div class=\"review-card card-medium\">
            ";
        // line 77
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("reviews/review-2.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 78
        echo "        </div>
    </div>
</section>

<section id=\"about\" class=\"about-section\">
    <div class=\"section__divider\"></div>
    <div class=\"about-container\">
        <div class=\"about-image-wrapper\">
            ";
        // line 86
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/image.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 87
        echo "        </div>

        <div class=\"about-content\">
            ";
        // line 90
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/content.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 91
        echo "        </div>
    </div>
</section>

<section id=\"gallery\" class=\"movers-section\">
    <div class=\"movers-container\">
        <h2 class=\"movers-title\">";
        // line 97
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("gallery/title.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</h2>

        <div class=\"movers-slider-wrapper\">
            <div class=\"movers-track\">
                <div class=\"mover-card\">";
        // line 101
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("gallery/mover-1.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</div>
                <div class=\"mover-card\">";
        // line 102
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("gallery/mover-2.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</div>
                <div class=\"mover-card\">";
        // line 103
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("gallery/mover-3.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</div>
                <div class=\"mover-card\">";
        // line 104
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("gallery/mover-4.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</div>
                <div class=\"mover-card\">";
        // line 105
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("gallery/mover-5.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</div>
            </div>
        </div>

        <div class=\"movers-pagination\">
            <button class=\"m-dot\"></button>
            <button class=\"m-dot\"></button>
            <button class=\"m-dot active\"></button>
            <button class=\"m-dot\"></button>
            <button class=\"m-dot\"></button>
        </div>
    </div>
</section>

<section id=\"contact\" class=\"contact-section\">
    <div class=\"contact-container\">
        <div class=\"contact-banner\">
            <img src=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Rectangle.svg");
        echo "\" alt=\"Contact Background\" class=\"contact-bg-img\">

<div class=\"contact-overlay\">
    <div class=\"contact-content-wrapper\">
        <h2 class=\"contact-main-text\">
            Feel free to
            <span class=\"contact-bold-wrapper\">
                <span class=\"contact-bold\">contact</span>
                <img src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vector-line.svg");
        echo "\" class=\"contact-vector\" alt=\"\">
            </span> <br> us to learn more
        </h2>

        <div class=\"contact-form-grid\">
            <div class=\"form-item\"><input type=\"text\" placeholder=\"Your Name*\"></div>
            <div class=\"form-item\"><input type=\"text\" placeholder=\"Phone*\"></div>
            <div class=\"form-item\"><input type=\"email\" placeholder=\"Email\"></div>
            <div class=\"form-item\"><input type=\"text\" placeholder=\"From Address*\"></div>
            <div class=\"form-item\"><input type=\"text\" placeholder=\"To Address*\"></div>
            <div class=\"form-item\"><input type=\"text\" placeholder=\"Date*\"></div>

            <div class=\"form-row-last\">
                <div class=\"form-item form-item-wide\"><input type=\"text\" placeholder=\"Move Type*\"></div>
                <div class=\"form-item form-item-wide\"><input type=\"text\" placeholder=\"Volume*\"></div>
            </div>
        </div>

        <button class=\"contact-submit-btn\">Get a Quote</button>
    </div>

    <div class=\"contact-right-icon\">
        <img src=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/your-icon.svg");
        echo "\" alt=\"icon\">
    </div>
    <div class=\"contact-address-label\">Address:</div>
    <div class=\"contact-address-text\">
        1234 NW 45th Ave, <br>
        Fort Lauderdale, FL 33309
    </div>
    <a href=\"#\" class=\"contact-map-btn\">
        <img src=\"";
        // line 160
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/map-button.svg");
        echo "\" alt=\"View on map\">
    </a>

    <div class=\"contact-right-icon phone-icon\">
        <img src=\"";
        // line 164
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/phonee-icon.svg");
        echo "\" alt=\"phone icon\">
    </div>
    <div class=\"contact-address-label phone-label\">Phone:</div>
    <div class=\"contact-phone-text\">+7 (777) 777 77 77</div>

    <div class=\"contact-right-icon email-icon\">
    <img src=\"";
        // line 170
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/email-icon.svg");
        echo "\" alt=\"email icon\">
</div>

<div class=\"contact-address-label email-label\">Email:</div>

<div class=\"contact-email-text\">examplemail.kz@mail.ru</div>

</div>

</div>

        </div>
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
        return array (  355 => 170,  346 => 164,  339 => 160,  328 => 152,  303 => 130,  292 => 122,  270 => 105,  264 => 104,  258 => 103,  252 => 102,  246 => 101,  237 => 97,  229 => 91,  225 => 90,  220 => 87,  216 => 86,  206 => 78,  202 => 77,  197 => 74,  193 => 73,  188 => 70,  184 => 69,  175 => 65,  156 => 51,  150 => 50,  144 => 49,  138 => 48,  132 => 47,  123 => 43,  116 => 38,  112 => 37,  107 => 34,  103 => 33,  98 => 30,  94 => 29,  89 => 26,  85 => 25,  81 => 23,  77 => 22,  70 => 17,  66 => 16,  58 => 10,  54 => 9,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"hero\" class=\"hero\">
    <video autoplay muted loop playsinline class=\"hero-video\">
        {% content 'hero/bg.htm' %}
    </video>
    <div class=\"hero-overlay\"></div>

    <div class=\"hero__container\">
        <div class=\"hero__content\">
            {% content 'hero/info.htm' %}

            <a href=\"#\" class=\"btn-hero-quote\">Get a Quote</a>
        </div>
    </div>

    <div class=\"hero__divider\">
        {% content 'hero/divider.htm' %}
    </div>
</section>

<section id=\"why\" class=\"why-section\">
    <div class=\"container\">
        {% content 'why/section-title.htm' %}
    </div>

    {% content 'why/main-description.htm' %}

    <div class=\"why-grid\">
        <div class=\"why-card card-1\">
            {% content 'why/card-1.htm' %}
        </div>

        <div class=\"why-card card-2\">
            {% content 'why/card-2.htm' %}
        </div>

        <div class=\"why-card card-3\">
            {% content 'why/card-3.htm' %}
        </div>
    </div>
</section>

<section id=\"services\" class=\"services-section\">
    <h2 class=\"services-title\">{% content 'services/title.txt' %}</h2>

    <div class=\"services-slider-wrapper\">
        <div class=\"services-track\">
            <div class=\"service-card empty-card\">{% content 'services/card-1.htm' %}</div>
            <div class=\"service-card empty-card\">{% content 'services/card-2.htm' %}</div>
            <div class=\"service-card empty-card\">{% content 'services/card-3.htm' %}</div>
            <div class=\"service-card empty-card\">{% content 'services/card-4.htm' %}</div>
            <div class=\"service-card empty-card\">{% content 'services/card-5.htm' %}</div>
        </div>
    </div>

    <div class=\"services-pagination\">
        <span class=\"dot active\"></span>
        <span class=\"dot\"></span>
        <span class=\"dot\"></span>
        <span class=\"dot\"></span>
        <span class=\"dot\"></span>
    </div>
</section>

<section id=\"reviews\" class=\"reviews-section\">
    <h2 class=\"reviews-title\">{% content 'reviews/title.txt' %}</h2>

    <div class=\"reviews-container\">
        <div class=\"review-card card-tall\">
            {% content 'reviews/stats-card.htm' %}
        </div>

        <div class=\"review-card card-short\">
            {% content 'reviews/review-1.htm' %}
        </div>

        <div class=\"review-card card-medium\">
            {% content 'reviews/review-2.htm' %}
        </div>
    </div>
</section>

<section id=\"about\" class=\"about-section\">
    <div class=\"section__divider\"></div>
    <div class=\"about-container\">
        <div class=\"about-image-wrapper\">
            {% content 'about/image.htm' %}
        </div>

        <div class=\"about-content\">
            {% content 'about/content.htm' %}
        </div>
    </div>
</section>

<section id=\"gallery\" class=\"movers-section\">
    <div class=\"movers-container\">
        <h2 class=\"movers-title\">{% content 'gallery/title.txt' %}</h2>

        <div class=\"movers-slider-wrapper\">
            <div class=\"movers-track\">
                <div class=\"mover-card\">{% content 'gallery/mover-1.htm' %}</div>
                <div class=\"mover-card\">{% content 'gallery/mover-2.htm' %}</div>
                <div class=\"mover-card\">{% content 'gallery/mover-3.htm' %}</div>
                <div class=\"mover-card\">{% content 'gallery/mover-4.htm' %}</div>
                <div class=\"mover-card\">{% content 'gallery/mover-5.htm' %}</div>
            </div>
        </div>

        <div class=\"movers-pagination\">
            <button class=\"m-dot\"></button>
            <button class=\"m-dot\"></button>
            <button class=\"m-dot active\"></button>
            <button class=\"m-dot\"></button>
            <button class=\"m-dot\"></button>
        </div>
    </div>
</section>

<section id=\"contact\" class=\"contact-section\">
    <div class=\"contact-container\">
        <div class=\"contact-banner\">
            <img src=\"{{ 'assets/images/Rectangle.svg'|theme }}\" alt=\"Contact Background\" class=\"contact-bg-img\">

<div class=\"contact-overlay\">
    <div class=\"contact-content-wrapper\">
        <h2 class=\"contact-main-text\">
            Feel free to
            <span class=\"contact-bold-wrapper\">
                <span class=\"contact-bold\">contact</span>
                <img src=\"{{ 'assets/images/vector-line.svg'|theme }}\" class=\"contact-vector\" alt=\"\">
            </span> <br> us to learn more
        </h2>

        <div class=\"contact-form-grid\">
            <div class=\"form-item\"><input type=\"text\" placeholder=\"Your Name*\"></div>
            <div class=\"form-item\"><input type=\"text\" placeholder=\"Phone*\"></div>
            <div class=\"form-item\"><input type=\"email\" placeholder=\"Email\"></div>
            <div class=\"form-item\"><input type=\"text\" placeholder=\"From Address*\"></div>
            <div class=\"form-item\"><input type=\"text\" placeholder=\"To Address*\"></div>
            <div class=\"form-item\"><input type=\"text\" placeholder=\"Date*\"></div>

            <div class=\"form-row-last\">
                <div class=\"form-item form-item-wide\"><input type=\"text\" placeholder=\"Move Type*\"></div>
                <div class=\"form-item form-item-wide\"><input type=\"text\" placeholder=\"Volume*\"></div>
            </div>
        </div>

        <button class=\"contact-submit-btn\">Get a Quote</button>
    </div>

    <div class=\"contact-right-icon\">
        <img src=\"{{ 'assets/images/your-icon.svg'|theme }}\" alt=\"icon\">
    </div>
    <div class=\"contact-address-label\">Address:</div>
    <div class=\"contact-address-text\">
        1234 NW 45th Ave, <br>
        Fort Lauderdale, FL 33309
    </div>
    <a href=\"#\" class=\"contact-map-btn\">
        <img src=\"{{ 'assets/images/map-button.svg'|theme }}\" alt=\"View on map\">
    </a>

    <div class=\"contact-right-icon phone-icon\">
        <img src=\"{{ 'assets/images/phonee-icon.svg'|theme }}\" alt=\"phone icon\">
    </div>
    <div class=\"contact-address-label phone-label\">Phone:</div>
    <div class=\"contact-phone-text\">+7 (777) 777 77 77</div>

    <div class=\"contact-right-icon email-icon\">
    <img src=\"{{ 'assets/images/email-icon.svg'|theme }}\" alt=\"email icon\">
</div>

<div class=\"contact-address-label email-label\">Email:</div>

<div class=\"contact-email-text\">examplemail.kz@mail.ru</div>

</div>

</div>

        </div>
    </div>
</section>", "/Users/onege/Desktop/october — копия 2/my-site/themes/moving-test/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 3);
        static $filters = array("theme" => 122);
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
