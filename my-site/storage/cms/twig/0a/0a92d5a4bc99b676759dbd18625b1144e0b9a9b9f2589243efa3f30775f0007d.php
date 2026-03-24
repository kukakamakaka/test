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
</section>

<section class=\"why-section\">
    <div class=\"container\">
        <h2 class=\"why-section__title\">Why TI Moving?</h2>

        </div>

    <p class=\"why-section__text\">
    Текст для описания вашей компании, нужны данные для сайта ваше описание будет здесь.
    Текст для описания вашей компании, нужны данные для сайта ваше описание будет здесь.
    Текст для описания вашей компании, нужны данные для сайта ваше описание будет здесь.
</p>

<div class=\"why-grid\">
    <div class=\"why-card card-1\">
    <div class=\"why-card__image\">
        <img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/benefit1.svg");
        echo "\" alt=\"Service 1\">
    </div>
    <div class=\"why-card__content\">
        <h3 class=\"why-card__title\">Licensed & Insured</h3>
        <p class=\"why-card__description\">Your move is fully protected by certified professionals you can trust.</p>
    </div>
</div>

    <div class=\"why-card card-2\">
    <div class=\"why-card__image\">
        <img src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/benefit2.svg");
        echo "\" alt=\"Service 2\">
    </div>
    <div class=\"why-card__content\">
        <h3 class=\"why-card__title\">Same-Day Moving</h3>
        <p class=\"why-card__description\">Fast response and efficient relocation, even on short notice.</p>
    </div>
</div>

    <div class=\"why-card card-3\">
    <div class=\"why-card__image\">
        <img src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/benefit3.svg");
        echo "\" alt=\"Service 3\">
    </div>
    <div class=\"why-card__content\">
        <h3 class=\"why-card__title\">Affordable Prices</h3>
        <p class=\"why-card__description\">Premium moving service without the premium cost. Just contact us and we send you our price!</p>
        </div>
</div>

</section>

<section class=\"services-section\">
    <h2 class=\"services-title\">Our Services</h2>

    <div class=\"services-slider-wrapper\">
    <div class=\"services-track\">

        <div class=\"service-card empty-card\">
            <div class=\"service-card__icon-container\">
                <div class=\"service-card__glow\"></div>
                <div class=\"service-card__icon-wrapper\">
<img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/card1.svg");
        echo "\" alt=\"Service 1\" class=\"service-card__svg\">
                </div>
            </div>
            <div class=\"service-card__content\">
                </div>
        </div>

        <div class=\"service-card empty-card\">
            <div class=\"service-card__icon-container\">
                <div class=\"service-card__glow\"></div>
                <div class=\"service-card__icon-wrapper\">
<img src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/card1.svg");
        echo "\" alt=\"Service 2\" class=\"service-card__svg\">
                </div>
            </div>
            <div class=\"service-card__content\"></div>
        </div>

        <div class=\"service-card empty-card\">
            <div class=\"service-card__icon-container\">
                <div class=\"service-card__glow\"></div>
                <div class=\"service-card__icon-wrapper\">
<img src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/card2.svg");
        echo "\" alt=\"Service 3\" class=\"service-card__svg\">
                </div>
            </div>
            <div class=\"service-card__content\"></div>
        </div>

        <div class=\"service-card empty-card\">
            <div class=\"service-card__icon-container\">
                <div class=\"service-card__glow\"></div>
                <div class=\"service-card__icon-wrapper\">
<img src=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/card3.svg");
        echo "\" alt=\"Service 4\" class=\"service-card__svg\">
                </div>
            </div>
            <div class=\"service-card__content\"></div>
        </div>

        <div class=\"service-card empty-card\">
            <div class=\"service-card__icon-container\">
                <div class=\"service-card__glow\"></div>
                <div class=\"service-card__icon-wrapper\">
<img src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/card3.svg");
        echo "\" alt=\"Service 4\" class=\"service-card__svg\">
                </div>
            </div>
            <div class=\"service-card__content\"></div>
        </div>

    </div>
</div>

    <div class=\"services-pagination\">
        <span class=\"dot active\"></span>
        <span class=\"dot\"></span>
        <span class=\"dot\"></span>
        <span class=\"dot\"></span>
        <span class=\"dot\"></span>
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
        return array (  186 => 119,  173 => 109,  160 => 99,  147 => 89,  133 => 78,  110 => 58,  97 => 48,  84 => 38,  62 => 19,  43 => 3,  39 => 1,);
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
</section>

<section class=\"why-section\">
    <div class=\"container\">
        <h2 class=\"why-section__title\">Why TI Moving?</h2>

        </div>

    <p class=\"why-section__text\">
    Текст для описания вашей компании, нужны данные для сайта ваше описание будет здесь.
    Текст для описания вашей компании, нужны данные для сайта ваше описание будет здесь.
    Текст для описания вашей компании, нужны данные для сайта ваше описание будет здесь.
</p>

<div class=\"why-grid\">
    <div class=\"why-card card-1\">
    <div class=\"why-card__image\">
        <img src=\"{{ 'assets/images/benefit1.svg'|theme }}\" alt=\"Service 1\">
    </div>
    <div class=\"why-card__content\">
        <h3 class=\"why-card__title\">Licensed & Insured</h3>
        <p class=\"why-card__description\">Your move is fully protected by certified professionals you can trust.</p>
    </div>
</div>

    <div class=\"why-card card-2\">
    <div class=\"why-card__image\">
        <img src=\"{{ 'assets/images/benefit2.svg'|theme }}\" alt=\"Service 2\">
    </div>
    <div class=\"why-card__content\">
        <h3 class=\"why-card__title\">Same-Day Moving</h3>
        <p class=\"why-card__description\">Fast response and efficient relocation, even on short notice.</p>
    </div>
</div>

    <div class=\"why-card card-3\">
    <div class=\"why-card__image\">
        <img src=\"{{ 'assets/images/benefit3.svg'|theme }}\" alt=\"Service 3\">
    </div>
    <div class=\"why-card__content\">
        <h3 class=\"why-card__title\">Affordable Prices</h3>
        <p class=\"why-card__description\">Premium moving service without the premium cost. Just contact us and we send you our price!</p>
        </div>
</div>

</section>

<section class=\"services-section\">
    <h2 class=\"services-title\">Our Services</h2>

    <div class=\"services-slider-wrapper\">
    <div class=\"services-track\">

        <div class=\"service-card empty-card\">
            <div class=\"service-card__icon-container\">
                <div class=\"service-card__glow\"></div>
                <div class=\"service-card__icon-wrapper\">
<img src=\"{{ 'assets/images/card1.svg'|theme }}\" alt=\"Service 1\" class=\"service-card__svg\">
                </div>
            </div>
            <div class=\"service-card__content\">
                </div>
        </div>

        <div class=\"service-card empty-card\">
            <div class=\"service-card__icon-container\">
                <div class=\"service-card__glow\"></div>
                <div class=\"service-card__icon-wrapper\">
<img src=\"{{ 'assets/images/card1.svg'|theme }}\" alt=\"Service 2\" class=\"service-card__svg\">
                </div>
            </div>
            <div class=\"service-card__content\"></div>
        </div>

        <div class=\"service-card empty-card\">
            <div class=\"service-card__icon-container\">
                <div class=\"service-card__glow\"></div>
                <div class=\"service-card__icon-wrapper\">
<img src=\"{{ 'assets/images/card2.svg'|theme }}\" alt=\"Service 3\" class=\"service-card__svg\">
                </div>
            </div>
            <div class=\"service-card__content\"></div>
        </div>

        <div class=\"service-card empty-card\">
            <div class=\"service-card__icon-container\">
                <div class=\"service-card__glow\"></div>
                <div class=\"service-card__icon-wrapper\">
<img src=\"{{ 'assets/images/card3.svg'|theme }}\" alt=\"Service 4\" class=\"service-card__svg\">
                </div>
            </div>
            <div class=\"service-card__content\"></div>
        </div>

        <div class=\"service-card empty-card\">
            <div class=\"service-card__icon-container\">
                <div class=\"service-card__glow\"></div>
                <div class=\"service-card__icon-wrapper\">
<img src=\"{{ 'assets/images/card3.svg'|theme }}\" alt=\"Service 4\" class=\"service-card__svg\">
                </div>
            </div>
            <div class=\"service-card__content\"></div>
        </div>

    </div>
</div>

    <div class=\"services-pagination\">
        <span class=\"dot active\"></span>
        <span class=\"dot\"></span>
        <span class=\"dot\"></span>
        <span class=\"dot\"></span>
        <span class=\"dot\"></span>
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
