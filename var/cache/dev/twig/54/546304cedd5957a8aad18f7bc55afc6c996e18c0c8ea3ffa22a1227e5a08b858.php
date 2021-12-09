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

/* base-front.html.twig */
class __TwigTemplate_0cf9e177d21188ae5cdb5011dfae9aa35fa0d6765c223491246c35875f31fbdc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- basic -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- mobile metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
    <!-- site metas -->
    <title>Esprit ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- bootstrap css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- style css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/css/style.css"), "html", null, true);
        echo "\">
    <!-- Responsive-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/responsive.css"), "html", null, true);
        echo "\">
    <!-- fevicon -->
    <link rel=\"icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/fevicon.png"), "html", null, true);
        echo "\" type=\"image/gif\" />
    <!-- Scrollbar Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/css/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\">
    <!-- Tweaks for older IEs-->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"), "html", null, true);
        echo "\">
    <!-- owl stylesheets -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"), "html", null, true);
        echo "\" media=\"screen\">

</head>
<body>
<!--header section start -->
<div id=\"index.html\" class=\"header_section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-lg-3\">
                <div class=\"logo\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/logo.png"), "html", null, true);
        echo "\"></a></div>
            </div>
            <div class=\"col-sm-6 col-lg-9\">
                <div class=\"menu_text\">
                    <ul>
                        <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#about"), "html", null, true);
        echo "\">Constat</a></li>
                        <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#taxis"), "html", null, true);
        echo "\">Voiture</a></li>
                        <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#booking"), "html", null, true);
        echo "\">Offre</a></li>
                        <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#contact"), "html", null, true);
        echo "\">Paiment</a></li>
                        <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/search-icon.png"), "html", null, true);
        echo "\"></a></li>
                        <div id=\"myNav\" class=\"overlay\">
                            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
                            <div class=\"overlay-content\">
                                <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">Home</a>
                                <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#about"), "html", null, true);
        echo "\">About</a>
                                <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#taxis"), "html", null, true);
        echo "\">Taxi</a>
                                <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#booking"), "html", null, true);
        echo "\">Booking</a>
                                <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#contact"), "html", null, true);
        echo "\">Contact Us</a>
                            </div>
                        </div>

                </div>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- header section end -->
<!-- banner section start -->
<div>
    <br><br><br><br><br><br><br>
    ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "</div>
<div class=\"carousel-item\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"book_now\">
                <h1 class=\"book_text\">BOOK NOW</h1>
                <h1 class=\"call_text\">(+71) 1234567890</h1>
            </div>
            <div class=\"image_1\"><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/img-1.png"), "html", null, true);
        echo "\"></div>
        </div>
        <div class=\"col-md-6\">
            <h1 class=\"booking_text\">Book a City Taxi to your destination in town</h1>
            <div class=\"contact_bg\">
                <div class=\"input_main\">
                    <div class=\"container\">
                        <h2 class=\"request_text\">Your everyday travel partner</h2>
                        <form action=\"/action_page.php\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"email-bt\" placeholder=\"PICKUP\" name=\"Name\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"email-bt\" placeholder=\"DROP\" name=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"email-bt\" placeholder=\"WHEN\" name=\"Email\">
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"send_bt\"><a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">SEARCH</a></div>
            </div>
        </div>
    </div>
</div>
<div class=\"carousel-item\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"book_now\">
                <h1 class=\"book_text\">BOOK NOW</h1>
                <h1 class=\"call_text\">(+71) 1234567890</h1>
            </div>
            <div class=\"image_1\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/car.png"), "html", null, true);
        echo "\"></div>
        </div>
        <div class=\"col-md-6\">
            <h1 class=\"booking_text\">Book a City Taxi to your destination in town</h1>
            <div class=\"contact_bg\">
                <div class=\"input_main\">
                    <div class=\"container\">
                        <h2 class=\"request_text\">Your everyday travel partner</h2>
                        <form action=\"/action_page.php\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"email-bt\" placeholder=\"PICKUP\" name=\"Name\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"email-bt\" placeholder=\"DROP\" name=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"email-bt\" placeholder=\"WHEN\" name=\"Email\">
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"send_bt\"><a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">SEARCH</a></div>
            </div>
        </div>
    </div>
</div>
</div>

</div>

</div>
</div>
<!-- banner section end -->
<!-- our taxis section start -->
<div >
</div>
<!-- our taxis section end -->
<!-- why ride section start -->
<div id=\"booking\" class=\"ride_section layout_padding\">
    <div class=\"container\">
        <div class=\"ride_main\">
            <h1 class=\"ride_text\">Why choose <span style=\"color: #a419d8;\">Us</span></h1>
        </div>
    </div>
</div>
<div class=\"ride_section_2 layout_padding\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"image_3\"><img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/img-3.png"), "html", null, true);
        echo "\"></div>
            </div>
            <div class=\"col-sm-8\">
                <h1 class=\"cabe_text\">Paiement en ligne </h1>
                <p class=\"long_text\">On offre l’option du paiement en ligne pour minimiser le temps d’attente et activer votre assurance ou la renouveler en temps réel </p>
                <div class=\"book_bt\"><a href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">BOOK NOW</a></div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
                <h1 class=\"secure_text\">Constat d’accident en ligne </h1>
                <p class=\"long_text_2\">On offre l’option du remplir votre constat en ligne pour faciliter cette tâche et minimiser le temps perdu dans le remplissage des bouts de papier </p>
                <div class=\"book_bt_2\"><a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">BOOK NOW</a></div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"image_3\"><img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/img-4.jpg"), "html", null, true);
        echo "\"></div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"image_3\"><img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/img-5.jpg"), "html", null, true);
        echo "\"></div>
            </div>
            <div class=\"col-sm-8\">
                <h1 class=\"cabe_text\">Consulter en ligne les nouvelles offres </h1>
                <p class=\"long_text\">Consulter en ligne les nouvelles offres et les remises sur les nouveaux packs d’assurance automobiles</p>
                <div class=\"book_bt\"><a href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">BOOK NOW</a></div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
                <h1 class=\"secure_text\">Gagner du temps</h1>
                <p class=\"long_text_2\">Gagner du temps, l’argent et minimiser le temps perdu en déplacent vers votre agence pour chaque information</p>
                <div class=\"book_bt_2\"><a href=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">BOOK NOW</a></div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"image_3\"><img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/img-8.jpg"), "html", null, true);
        echo "\"></div>
            </div>
        </div>
    </div>
</div>
<!-- why ride section end -->
<!-- location section start -->
<div id=\"contact\" class=\"location_sectin layout_padding\">
    <div class=\"container-fluid\">
        <div class=\"location_main\">
            <div class=\"row\">
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-5\">
                    <div class=\"download_text\">DOWNLOAD<br><span style=\"color: #fffcf4;\">OUR APP TODAY</span></div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"image_7\"><img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/img-7.png"), "html", null, true);
        echo "\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- download section end -->
<!-- section footer start -->
<div class=\"section_footer \">
    <div class=\"container\">
        <div class=\"footer_section_2\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-6 col-lg-3\">
                    <h2 class=\"account_text\">Address</h2>
                    <p class=\"ipsum_text\">ESPRIT : Ecole Supérieure Privée d'Ingénierie et de Technologies \"Se Former autrement\". Pôle Technologique El Ghazela, Ariana, Tunisie.</p>
                </div>
                <div class=\"col-sm-6 col-md-6 col-lg-3\">
                    <h2 class=\"account_text\">Links</h2>
                    <div class=\"image-icon\"><img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/bulit-icon.png"), "html", null, true);
        echo "\"><span class=\"fb_text\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Home</span></a></div>
                    <div class=\"image-icon\"><img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/bulit-icon.png"), "html", null, true);
        echo "\"><span class=\"fb_text\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Constat</span></a></div>
                    <div class=\"image-icon\"><img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/bulit-icon.png"), "html", null, true);
        echo "\"><span class=\"fb_text\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">voiture</span></a></div>
                    <div class=\"image-icon\"><img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/bulit-icon.png"), "html", null, true);
        echo "\"><span class=\"fb_text\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Offre</span></a></div>
                    <div class=\"image-icon\"><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/bulit-icon.png"), "html", null, true);
        echo "\"><span class=\"fb_text\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">paiement</span></a></div>
                </div>
                <div class=\"col-sm-6 col-md-6 col-lg-3\">
                    <h2 class=\"account_text\">Follow Us</h2>
                    <div class=\"image-icon\"><img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/fb-icon.png"), "html", null, true);
        echo "\"><span class=\"fb_text\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Facebook</a></span></div>
                    <div class=\"image-icon\"><img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/twitter-icon.png"), "html", null, true);
        echo "\"><span class=\"fb_text\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Twitter</a></span></div>
                    <div class=\"image-icon\"><img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/in-icon.png"), "html", null, true);
        echo "\"><span class=\"fb_text\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Linkedin</a></span></div>
                    <div class=\"image-icon\"><img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/youtube-icon.png"), "html", null, true);
        echo "\"><span class=\"fb_text\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Youtube</a></span></div>
                    <div class=\"image-icon\"><img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/images/instagram-icon.png"), "html", null, true);
        echo "\"><span class=\"fb_text\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Instagram</a></span></div>
                </div>
                <div class=\"col-sm-6 col-md-6 col-lg-3\">
                    <h2 class=\"adderess_text\">Newsletter</h2>
                    <input type=\"\" class=\"email_text\" placeholder=\"Enter Your Email\" name=\"Enter Your Email\">
                    <button class=\"subscribr_bt\">SUBSCRIBE</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- section footer end -->
<!-- copyright section start -->
<div class=\"copyright_section\">
    <div class=\"container\">
        <p class=\"copyright\">2019 All Rights Reserved. <a href=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://html.design"), "html", null, true);
        echo "\">Free html  Templates</a></p>
    </div>
</div>

<!-- Javascript files-->
<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/jquery-3.0.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/plugin.js"), "html", null, true);
        echo "\"></script>
<!-- sidebar -->
<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- javascript -->
<script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).ready(function(){
        \$(\".fancybox\").fancybox({
            openEffect: \"none\",
            closeEffect: \"none\"
        });

        \$(\".zoom\").hover(function(){

            \$(this).addClass('transition');
        }, function(){

            \$(this).removeClass('transition');
        });
    });
</script>
<script>
    function openNav() {
        document.getElementById(\"myNav\").style.width = \"100%\";
    }

    function closeNav() {
        document.getElementById(\"myNav\").style.width = \"0%\";
    }
</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 74
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 74,  577 => 73,  558 => 12,  520 => 283,  516 => 282,  511 => 280,  507 => 279,  502 => 277,  498 => 276,  494 => 275,  490 => 274,  486 => 273,  478 => 268,  457 => 252,  451 => 251,  445 => 250,  439 => 249,  433 => 248,  424 => 244,  418 => 243,  412 => 242,  406 => 241,  400 => 240,  379 => 222,  360 => 206,  354 => 203,  342 => 194,  334 => 189,  324 => 182,  318 => 179,  306 => 170,  298 => 165,  267 => 137,  243 => 116,  228 => 104,  204 => 83,  194 => 75,  192 => 73,  174 => 58,  170 => 57,  166 => 56,  162 => 55,  158 => 54,  153 => 52,  146 => 50,  142 => 49,  138 => 48,  134 => 47,  130 => 46,  126 => 45,  116 => 40,  104 => 31,  100 => 30,  96 => 29,  91 => 27,  86 => 25,  81 => 23,  76 => 21,  71 => 19,  66 => 17,  58 => 12,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- basic -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- mobile metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
    <!-- site metas -->
    <title>Esprit {% block title%}Index{%endblock%}</title>
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- bootstrap css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('FrontOffice/css/bootstrap.min.css')}}\">
    <!-- style css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('FrontOffice/css/style.css')}}\">
    <!-- Responsive-->
    <link rel=\"stylesheet\" href=\"{{asset('FrontOffice/responsive.css')}}\">
    <!-- fevicon -->
    <link rel=\"icon\" href=\"{{asset('FrontOffice/images/fevicon.png')}}\" type=\"image/gif\" />
    <!-- Scrollbar Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('FrontOffice/css/jquery.mCustomScrollbar.min.css')}}\">
    <!-- Tweaks for older IEs-->
    <link rel=\"stylesheet\" href=\"{{asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}\">
    <!-- owl stylesheets -->
    <link rel=\"stylesheet\" href=\"{{asset('FrontOffice/css/owl.carousel.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('FrontOffice/css/owl.theme.default.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}\" media=\"screen\">

</head>
<body>
<!--header section start -->
<div id=\"index.html\" class=\"header_section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-lg-3\">
                <div class=\"logo\"><a href=\"{{asset('index.html')}}\"><img src=\"{{asset('FrontOffice/images/logo.png')}}\"></a></div>
            </div>
            <div class=\"col-sm-6 col-lg-9\">
                <div class=\"menu_text\">
                    <ul>
                        <li><a href=\"{{asset('index.html')}}\">Home</a></li>
                        <li><a href=\"{{asset('#about')}}\">Constat</a></li>
                        <li><a href=\"{{asset('#taxis')}}\">Voiture</a></li>
                        <li><a href=\"{{asset('#booking')}}\">Offre</a></li>
                        <li><a href=\"{{asset('#contact')}}\">Paiment</a></li>
                        <li><a href=\"{{asset('#')}}\"><img src=\"{{asset('FrontOffice/images/search-icon.png')}}\"></a></li>
                        <div id=\"myNav\" class=\"overlay\">
                            <a href=\"{{asset('javascript:void(0)')}}\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
                            <div class=\"overlay-content\">
                                <a href=\"{{asset('index.html')}}\">Home</a>
                                <a href=\"{{asset('#about')}}\">About</a>
                                <a href=\"{{asset('#taxis')}}\">Taxi</a>
                                <a href=\"{{asset('#booking')}}\">Booking</a>
                                <a href=\"{{asset('#contact')}}\">Contact Us</a>
                            </div>
                        </div>

                </div>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- header section end -->
<!-- banner section start -->
<div>
    <br><br><br><br><br><br><br>
    {% block body %}
    {%endblock%}
</div>
<div class=\"carousel-item\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"book_now\">
                <h1 class=\"book_text\">BOOK NOW</h1>
                <h1 class=\"call_text\">(+71) 1234567890</h1>
            </div>
            <div class=\"image_1\"><img src=\"{{asset('FrontOffice/images/img-1.png')}}\"></div>
        </div>
        <div class=\"col-md-6\">
            <h1 class=\"booking_text\">Book a City Taxi to your destination in town</h1>
            <div class=\"contact_bg\">
                <div class=\"input_main\">
                    <div class=\"container\">
                        <h2 class=\"request_text\">Your everyday travel partner</h2>
                        <form action=\"/action_page.php\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"email-bt\" placeholder=\"PICKUP\" name=\"Name\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"email-bt\" placeholder=\"DROP\" name=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"email-bt\" placeholder=\"WHEN\" name=\"Email\">
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"send_bt\"><a href=\"{{asset('#')}}\">SEARCH</a></div>
            </div>
        </div>
    </div>
</div>
<div class=\"carousel-item\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"book_now\">
                <h1 class=\"book_text\">BOOK NOW</h1>
                <h1 class=\"call_text\">(+71) 1234567890</h1>
            </div>
            <div class=\"image_1\"><img src=\"{{asset('FrontOffice/images/car.png')}}\"></div>
        </div>
        <div class=\"col-md-6\">
            <h1 class=\"booking_text\">Book a City Taxi to your destination in town</h1>
            <div class=\"contact_bg\">
                <div class=\"input_main\">
                    <div class=\"container\">
                        <h2 class=\"request_text\">Your everyday travel partner</h2>
                        <form action=\"/action_page.php\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"email-bt\" placeholder=\"PICKUP\" name=\"Name\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"email-bt\" placeholder=\"DROP\" name=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"email-bt\" placeholder=\"WHEN\" name=\"Email\">
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"send_bt\"><a href=\"{{asset('#')}}\">SEARCH</a></div>
            </div>
        </div>
    </div>
</div>
</div>

</div>

</div>
</div>
<!-- banner section end -->
<!-- our taxis section start -->
<div >
</div>
<!-- our taxis section end -->
<!-- why ride section start -->
<div id=\"booking\" class=\"ride_section layout_padding\">
    <div class=\"container\">
        <div class=\"ride_main\">
            <h1 class=\"ride_text\">Why choose <span style=\"color: #a419d8;\">Us</span></h1>
        </div>
    </div>
</div>
<div class=\"ride_section_2 layout_padding\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"image_3\"><img src=\"{{asset('FrontOffice/images/img-3.png')}}\"></div>
            </div>
            <div class=\"col-sm-8\">
                <h1 class=\"cabe_text\">Paiement en ligne </h1>
                <p class=\"long_text\">On offre l’option du paiement en ligne pour minimiser le temps d’attente et activer votre assurance ou la renouveler en temps réel </p>
                <div class=\"book_bt\"><a href=\"{{asset('#')}}\">BOOK NOW</a></div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
                <h1 class=\"secure_text\">Constat d’accident en ligne </h1>
                <p class=\"long_text_2\">On offre l’option du remplir votre constat en ligne pour faciliter cette tâche et minimiser le temps perdu dans le remplissage des bouts de papier </p>
                <div class=\"book_bt_2\"><a href=\"{{asset('#')}}\">BOOK NOW</a></div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"image_3\"><img src=\"{{asset('FrontOffice/images/img-4.jpg')}}\"></div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"image_3\"><img src=\"{{asset('FrontOffice/images/img-5.jpg')}}\"></div>
            </div>
            <div class=\"col-sm-8\">
                <h1 class=\"cabe_text\">Consulter en ligne les nouvelles offres </h1>
                <p class=\"long_text\">Consulter en ligne les nouvelles offres et les remises sur les nouveaux packs d’assurance automobiles</p>
                <div class=\"book_bt\"><a href=\"{{asset('#')}}\">BOOK NOW</a></div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
                <h1 class=\"secure_text\">Gagner du temps</h1>
                <p class=\"long_text_2\">Gagner du temps, l’argent et minimiser le temps perdu en déplacent vers votre agence pour chaque information</p>
                <div class=\"book_bt_2\"><a href=\"{{asset('#')}}\">BOOK NOW</a></div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"image_3\"><img src=\"{{asset('FrontOffice/images/img-8.jpg')}}\"></div>
            </div>
        </div>
    </div>
</div>
<!-- why ride section end -->
<!-- location section start -->
<div id=\"contact\" class=\"location_sectin layout_padding\">
    <div class=\"container-fluid\">
        <div class=\"location_main\">
            <div class=\"row\">
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-5\">
                    <div class=\"download_text\">DOWNLOAD<br><span style=\"color: #fffcf4;\">OUR APP TODAY</span></div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"image_7\"><img src=\"{{asset('FrontOffice/images/img-7.png')}}\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- download section end -->
<!-- section footer start -->
<div class=\"section_footer \">
    <div class=\"container\">
        <div class=\"footer_section_2\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-6 col-lg-3\">
                    <h2 class=\"account_text\">Address</h2>
                    <p class=\"ipsum_text\">ESPRIT : Ecole Supérieure Privée d'Ingénierie et de Technologies \"Se Former autrement\". Pôle Technologique El Ghazela, Ariana, Tunisie.</p>
                </div>
                <div class=\"col-sm-6 col-md-6 col-lg-3\">
                    <h2 class=\"account_text\">Links</h2>
                    <div class=\"image-icon\"><img src=\"{{asset('FrontOffice/images/bulit-icon.png')}}\"><span class=\"fb_text\"><a href=\"{{asset('#')}}\">Home</span></a></div>
                    <div class=\"image-icon\"><img src=\"{{asset('FrontOffice/images/bulit-icon.png')}}\"><span class=\"fb_text\"><a href=\"{{asset('#')}}\">Constat</span></a></div>
                    <div class=\"image-icon\"><img src=\"{{asset('FrontOffice/images/bulit-icon.png')}}\"><span class=\"fb_text\"><a href=\"{{asset('#')}}\">voiture</span></a></div>
                    <div class=\"image-icon\"><img src=\"{{asset('FrontOffice/images/bulit-icon.png')}}\"><span class=\"fb_text\"><a href=\"{{asset('#')}}\">Offre</span></a></div>
                    <div class=\"image-icon\"><img src=\"{{asset('FrontOffice/images/bulit-icon.png')}}\"><span class=\"fb_text\"><a href=\"{{asset('#')}}\">paiement</span></a></div>
                </div>
                <div class=\"col-sm-6 col-md-6 col-lg-3\">
                    <h2 class=\"account_text\">Follow Us</h2>
                    <div class=\"image-icon\"><img src=\"{{asset('FrontOffice/images/fb-icon.png')}}\"><span class=\"fb_text\"><a href=\"{{asset('#')}}\">Facebook</a></span></div>
                    <div class=\"image-icon\"><img src=\"{{asset('FrontOffice/images/twitter-icon.png')}}\"><span class=\"fb_text\"><a href=\"{{asset('#')}}\">Twitter</a></span></div>
                    <div class=\"image-icon\"><img src=\"{{asset('FrontOffice/images/in-icon.png')}}\"><span class=\"fb_text\"><a href=\"{{asset('#')}}\">Linkedin</a></span></div>
                    <div class=\"image-icon\"><img src=\"{{asset('FrontOffice/images/youtube-icon.png')}}\"><span class=\"fb_text\"><a href=\"{{asset('#')}}\">Youtube</a></span></div>
                    <div class=\"image-icon\"><img src=\"{{asset('FrontOffice/images/instagram-icon.png')}}\"><span class=\"fb_text\"><a href=\"{{asset('#')}}\">Instagram</a></span></div>
                </div>
                <div class=\"col-sm-6 col-md-6 col-lg-3\">
                    <h2 class=\"adderess_text\">Newsletter</h2>
                    <input type=\"\" class=\"email_text\" placeholder=\"Enter Your Email\" name=\"Enter Your Email\">
                    <button class=\"subscribr_bt\">SUBSCRIBE</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- section footer end -->
<!-- copyright section start -->
<div class=\"copyright_section\">
    <div class=\"container\">
        <p class=\"copyright\">2019 All Rights Reserved. <a href=\"{{asset('https://html.design')}}\">Free html  Templates</a></p>
    </div>
</div>

<!-- Javascript files-->
<script src=\"{{asset('FrontOffice/js/jquery.min.js')}}\"></script>
<script src=\"{{asset('FrontOffice/js/popper.min.js')}}\"></script>
<script src=\"{{asset('FrontOffice/js/bootstrap.bundle.min.js')}}\"></script>
<script src=\"{{asset('FrontOffice/js/jquery-3.0.0.min.js')}}\"></script>
<script src=\"{{asset('FrontOffice/js/plugin.js')}}\"></script>
<!-- sidebar -->
<script src=\"{{asset('FrontOffice/js/jquery.mCustomScrollbar.concat.min.js')}}\"></script>
<script src=\"{{asset('FrontOffice/js/custom.js')}}\"></script>
<!-- javascript -->
<script src=\"{{asset('FrontOffice/js/owl.carousel.js')}}\"></script>
<script src=\"{{asset('FrontOffice/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}\"></script>
<script>
    \$(document).ready(function(){
        \$(\".fancybox\").fancybox({
            openEffect: \"none\",
            closeEffect: \"none\"
        });

        \$(\".zoom\").hover(function(){

            \$(this).addClass('transition');
        }, function(){

            \$(this).removeClass('transition');
        });
    });
</script>
<script>
    function openNav() {
        document.getElementById(\"myNav\").style.width = \"100%\";
    }

    function closeNav() {
        document.getElementById(\"myNav\").style.width = \"0%\";
    }
</script>
</body>
</html>", "base-front.html.twig", "C:\\xampp\\htdocs\\assurance\\templates\\base-front.html.twig");
    }
}
