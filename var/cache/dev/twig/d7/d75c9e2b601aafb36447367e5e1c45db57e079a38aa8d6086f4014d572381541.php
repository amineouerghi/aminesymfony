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

/* base-back.html.twig */
class __TwigTemplate_1e65b48145d322a1c91bf85f6382bdacf39e31d6478ab30df8c5b7c266df09ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>galaxy Assurance</title>
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"Tooplate\" />
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- Additional CSS Files -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/css/fontawesome.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/css/tooplate-style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/css/owl.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/css/lightbox.css"), "html", null, true);
        echo "\" />
</head>
<!--
Tooplate 2116 Blugoon
https://www.tooplate.com/view/2116-blugoon
-->
<body>
<div id=\"page-wraper\">
    <!-- Sidebar Menu -->
    <div class=\"responsive-nav\">
        <i class=\"fa fa-bars\" id=\"menu-toggle\"></i>
        <div id=\"menu\" class=\"menu\">
            <i class=\"fa fa-times\" id=\"menu-close\"></i>
            <div class=\"container\">
                <div class=\"image\">
                    <a href=\"#\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/background.jpg"), "html", null, true);
        echo "\" alt=\"Blugoon by Tooplate\" /></a>
                </div>
                <div class=\"author-content\">
                    <h4>Galaxy Assurance</h4>
                    <span>Star Surfers</span>
                </div>
                <nav class=\"main-nav\" role=\"navigation\">
                    <ul class=\"main-menu\">
                        <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#section1"), "html", null, true);
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#section2"), "html", null, true);
        echo "\">Constat</a></li>
                        <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#section3"), "html", null, true);
        echo "\">Voiture</a></li>
                        <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#section4"), "html", null, true);
        echo "\">Offre</a></li>
                        <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#section4"), "html", null, true);
        echo "\">Paiement</a></li>
                    </ul>
                </nav>
                <div class=\"social-network\">
                    <ul class=\"soial-icons\">
                        <li>
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-rss\"></i></a>
                        </li>
                    </ul>
                </div>
                <div class=\"copyright-text\">
                    <p>Copyright 2020 Blugoon<br>
                        Design: Tooplate</p>
                </div>
            </div>
        </div>
    </div>

    <section class=\"section about-me\" data-section=\"section1\">
        <div class=\"container\">
            <div class=\"p-2\">
                ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "            </div>
        </div>
    </section>
</div>
<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/js/lightbox.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/js/custom.js"), "html", null, true);
        echo "\"></script>
<script>
    //according to loftblog tut
    \$(\".main-menu li:first\").addClass(\"active\");

    var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, \"\"),
            reqSection = \$(\".section\").filter(
                '[data-section=\"' + direction + '\"]'
            ),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            \$(\"body, html\").animate(
                {
                    scrollTop: reqSectionPos
                },
                800
            );
        } else {
            \$(\"body, html\").scrollTop(reqSectionPos);
        }
    };

    var checkSection = function checkSection() {
        \$(\".section\").each(function() {
            var \$this = \$(this),
                topEdge = \$this.offset().top - 80,
                bottomEdge = topEdge + \$this.height(),
                wScroll = \$(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var currentId = \$this.data(\"section\"),
                    reqLink = \$(\"a\").filter(\"[href*=\\\\#\" + currentId + \"]\");
                reqLink
                    .closest(\"li\")
                    .addClass(\"active\")
                    .siblings()
                    .removeClass(\"active\");
            }
        });
    };

    \$(\".main-menu\").on(\"click\", \"a\", function(e) {
        e.preventDefault();
        showSection(\$(this).attr(\"href\"), true);
    });

    \$(window).scroll(function() {
        checkSection();
    });
</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 77,  251 => 76,  188 => 90,  184 => 89,  180 => 88,  176 => 87,  171 => 85,  167 => 84,  159 => 78,  157 => 76,  121 => 43,  117 => 42,  113 => 41,  109 => 40,  105 => 39,  94 => 31,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>galaxy Assurance</title>
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"Tooplate\" />
    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
    <!-- Additional CSS Files -->
    <link href=\"{{asset('https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900')}}\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"{{asset('BackOffice/assets/css/fontawesome.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{asset('BackOffice/assets/css/tooplate-style.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{asset('BackOffice/assets/css/owl.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{asset('BackOffice/assets/css/lightbox.css')}}\" />
</head>
<!--
Tooplate 2116 Blugoon
https://www.tooplate.com/view/2116-blugoon
-->
<body>
<div id=\"page-wraper\">
    <!-- Sidebar Menu -->
    <div class=\"responsive-nav\">
        <i class=\"fa fa-bars\" id=\"menu-toggle\"></i>
        <div id=\"menu\" class=\"menu\">
            <i class=\"fa fa-times\" id=\"menu-close\"></i>
            <div class=\"container\">
                <div class=\"image\">
                    <a href=\"#\"><img src=\"{{asset('FrontOffice/images/background.jpg')}}\" alt=\"Blugoon by Tooplate\" /></a>
                </div>
                <div class=\"author-content\">
                    <h4>Galaxy Assurance</h4>
                    <span>Star Surfers</span>
                </div>
                <nav class=\"main-nav\" role=\"navigation\">
                    <ul class=\"main-menu\">
                        <li><a href=\"{{asset('#section1')}}\">Home</a></li>
                        <li><a href=\"{{asset('#section2')}}\">Constat</a></li>
                        <li><a href=\"{{asset('#section3')}}\">Voiture</a></li>
                        <li><a href=\"{{asset('#section4')}}\">Offre</a></li>
                        <li><a href=\"{{asset('#section4')}}\">Paiement</a></li>
                    </ul>
                </nav>
                <div class=\"social-network\">
                    <ul class=\"soial-icons\">
                        <li>
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-rss\"></i></a>
                        </li>
                    </ul>
                </div>
                <div class=\"copyright-text\">
                    <p>Copyright 2020 Blugoon<br>
                        Design: Tooplate</p>
                </div>
            </div>
        </div>
    </div>

    <section class=\"section about-me\" data-section=\"section1\">
        <div class=\"container\">
            <div class=\"p-2\">
                {% block body%}
                {%endblock%}
            </div>
        </div>
    </section>
</div>
<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src=\"{{asset('BackOffice/vendor/jquery/jquery.min.js')}}\"></script>
<script src=\"{{asset('BackOffice/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>

<script src=\"{{asset('BackOffice/assets/js/isotope.min.js')}}\"></script>
<script src=\"{{asset('BackOffice/assets/js/owl-carousel.js')}}\"></script>
<script src=\"{{asset('BackOffice/assets/js/lightbox.js')}}\"></script>
<script src=\"{{asset('BackOffice/assets/js/custom.js')}}\"></script>
<script>
    //according to loftblog tut
    \$(\".main-menu li:first\").addClass(\"active\");

    var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, \"\"),
            reqSection = \$(\".section\").filter(
                '[data-section=\"' + direction + '\"]'
            ),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            \$(\"body, html\").animate(
                {
                    scrollTop: reqSectionPos
                },
                800
            );
        } else {
            \$(\"body, html\").scrollTop(reqSectionPos);
        }
    };

    var checkSection = function checkSection() {
        \$(\".section\").each(function() {
            var \$this = \$(this),
                topEdge = \$this.offset().top - 80,
                bottomEdge = topEdge + \$this.height(),
                wScroll = \$(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var currentId = \$this.data(\"section\"),
                    reqLink = \$(\"a\").filter(\"[href*=\\\\#\" + currentId + \"]\");
                reqLink
                    .closest(\"li\")
                    .addClass(\"active\")
                    .siblings()
                    .removeClass(\"active\");
            }
        });
    };

    \$(\".main-menu\").on(\"click\", \"a\", function(e) {
        e.preventDefault();
        showSection(\$(this).attr(\"href\"), true);
    });

    \$(window).scroll(function() {
        checkSection();
    });
</script>
</body>
</html>", "base-back.html.twig", "C:\\xampp\\htdocs\\assurance\\templates\\base-back.html.twig");
    }
}
