<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* style.css */
class __TwigTemplate_d6e77a6451d82e6b7ab5440700bd34a1 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "style.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "style.css"));

        yield ".navbar-toggler-icon{
    color: white;
}
.navbar-light{
    color: white;
}
.contact-details{
    text-align: center;
}
li{
    list-style: none;
}
a{
    list-style: none;
    text-decoration: none;
}
a:hover{
    text-decoration: none;
}
.custom_buttons{
    padding: 15px;
    font-size: 20px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
}
.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
    background: #3B5998;
    color: white;
}

.fa-google {
    background: #dd4b39;
    color: white;
}

.fa-linkedin {
    background: #007bb5;
    color: white;
}

.fa-youtube {
    background: #bb0000;
    color: white;
}

.fa-instagram {
    background: #f45bff;
    color: white;
}
.card-img {
    width: 100%;
    height: 100%;
    transition: transform 2s ease,z-index 0s 3s; /* Adaugă o tranziție pentru efectul de zoom */
    cursor: pointer;
    object-fit: cover;
    position: relative; /* Necesită pentru a folosi z-index */
    z-index: 1; /* Setează z-index implicit */

}
.card-img:hover {
    transform: scale(1.5); /* Aplică zoom la imagine */
    z-index: 10; /* Ridică imaginea deasupra celorlalte elemente */
    transition: transform 3s ease, z-index 0s; /* Elimină întârzierea pentru z-index */
}


.book {
    width: 400px;
    height: 600px;
    position: relative;
    transform-style: preserve-3d;
    transition: transform 0.5s ease;
}

.page {
    width: 100%;
    height: 100%;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    position: absolute;
    top: 0;
    left: 0;
    transform-style: preserve-3d;
    backface-visibility: hidden;
    overflow-y: auto; /* Permitem scroll în cazul în care conținutul depășește înălțimea paginii */
}

.page.active {
    transform: rotateY(0deg); /* Pagina activă este rotită în față */
    z-index: 1; /* Asigurăm că pagina activă este în față */
}

#about {
    transform: rotateY(180deg); /* Inițial rotit la 180 de grade */
}
#reviews {
    transform: rotateY(180deg); /* Inițial rotit la 180 de grade */
}

h2 {
    margin-top: 0;
}

.review {
    margin-bottom: 20px;
}

blockquote {
    margin: 0;
}
.review {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: box-shadow 0.3s ease;
}

.review:hover {
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.review h3 {
    font-size: 1.2rem;
    margin-top: 0;
    color: #333;
}

.review blockquote {
    font-size: 1rem;
    margin: 0;
    color: #666;
}

/* Stilizare pentru titlul secțiunii de recenzii */
#reviews .text-center {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #333;
    text-transform: uppercase;
    font-weight: bold;
}

/* Product page */

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}



.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
footer{
    box-shadow: none !important;
}

.product {
    display: flex;
    flex-wrap: wrap;
}

.product-gallery {
    flex: 1;
    max-width: 600px;
    margin-right: 20px;
}

.product-gallery .main-image {
    display: block;
    width: 100%;
    height: auto;
    margin-bottom: 20px;
    transition: opacity 0.3s ease-in-out; /* Adăugăm tranziția pentru opacitate */
}

.thumbnails {
    display: flex;
    justify-content: flex-start;
    gap: 10px;
}

.thumbnails img {
    width: 80px;
    height: auto;
    cursor: pointer;
    transition: opacity 0.3s ease-in-out; /* Adăugăm tranziția pentru opacitate */
}

.thumbnails img:hover {
    opacity: 0.7; /* Reducem opacitatea la hover */
}

.product-details {
    flex: 1;
    padding: 20px;
}

.product-details .title-product {
    font-size: 24px;
    margin-bottom: 10px;
}



.product-details .price {
    font-size: 20px;
    color: #333;
    margin-bottom: 10px;
}

.product-details .description  {
    line-height: 1.6;
    margin-bottom: 20px;
}

.options {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.options label {
    margin-right: 10px;
}

.options input {
    width: 60px;
    padding: 5px;
    margin-right: 10px;
}

.add-to-cart {
    padding: 10px 20px;
    background-color: #9a9a9a;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 4px;
}

.add-to-cart:hover {
    background-color: #717171;
}

.tabs {
    margin-top: 20px;
}

.tablinks {
    padding: 10px 15px;
    background-color: #f0f0f0;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.tablinks:hover {
    background-color: #e0e0e0;
}

.tablinks.active {
    background-color: #9a9a9a;
    color: #fff;
}

.tabcontent {
    display: none;
    padding: 20px;
    border-top: 1px solid #ddd;
}

.tabcontent.active {
    display: block;
}
.specifications {
    max-width: 600px;
    margin: 0 auto;
}
h1 {
    text-align: center;
    margin-bottom: 20px;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}
th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}
th {
    background-color: #f2f2f2;
}

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "style.css";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source(".navbar-toggler-icon{
    color: white;
}
.navbar-light{
    color: white;
}
.contact-details{
    text-align: center;
}
li{
    list-style: none;
}
a{
    list-style: none;
    text-decoration: none;
}
a:hover{
    text-decoration: none;
}
.custom_buttons{
    padding: 15px;
    font-size: 20px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
}
.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
    background: #3B5998;
    color: white;
}

.fa-google {
    background: #dd4b39;
    color: white;
}

.fa-linkedin {
    background: #007bb5;
    color: white;
}

.fa-youtube {
    background: #bb0000;
    color: white;
}

.fa-instagram {
    background: #f45bff;
    color: white;
}
.card-img {
    width: 100%;
    height: 100%;
    transition: transform 2s ease,z-index 0s 3s; /* Adaugă o tranziție pentru efectul de zoom */
    cursor: pointer;
    object-fit: cover;
    position: relative; /* Necesită pentru a folosi z-index */
    z-index: 1; /* Setează z-index implicit */

}
.card-img:hover {
    transform: scale(1.5); /* Aplică zoom la imagine */
    z-index: 10; /* Ridică imaginea deasupra celorlalte elemente */
    transition: transform 3s ease, z-index 0s; /* Elimină întârzierea pentru z-index */
}


.book {
    width: 400px;
    height: 600px;
    position: relative;
    transform-style: preserve-3d;
    transition: transform 0.5s ease;
}

.page {
    width: 100%;
    height: 100%;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    position: absolute;
    top: 0;
    left: 0;
    transform-style: preserve-3d;
    backface-visibility: hidden;
    overflow-y: auto; /* Permitem scroll în cazul în care conținutul depășește înălțimea paginii */
}

.page.active {
    transform: rotateY(0deg); /* Pagina activă este rotită în față */
    z-index: 1; /* Asigurăm că pagina activă este în față */
}

#about {
    transform: rotateY(180deg); /* Inițial rotit la 180 de grade */
}
#reviews {
    transform: rotateY(180deg); /* Inițial rotit la 180 de grade */
}

h2 {
    margin-top: 0;
}

.review {
    margin-bottom: 20px;
}

blockquote {
    margin: 0;
}
.review {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: box-shadow 0.3s ease;
}

.review:hover {
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.review h3 {
    font-size: 1.2rem;
    margin-top: 0;
    color: #333;
}

.review blockquote {
    font-size: 1rem;
    margin: 0;
    color: #666;
}

/* Stilizare pentru titlul secțiunii de recenzii */
#reviews .text-center {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #333;
    text-transform: uppercase;
    font-weight: bold;
}

/* Product page */

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}



.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
footer{
    box-shadow: none !important;
}

.product {
    display: flex;
    flex-wrap: wrap;
}

.product-gallery {
    flex: 1;
    max-width: 600px;
    margin-right: 20px;
}

.product-gallery .main-image {
    display: block;
    width: 100%;
    height: auto;
    margin-bottom: 20px;
    transition: opacity 0.3s ease-in-out; /* Adăugăm tranziția pentru opacitate */
}

.thumbnails {
    display: flex;
    justify-content: flex-start;
    gap: 10px;
}

.thumbnails img {
    width: 80px;
    height: auto;
    cursor: pointer;
    transition: opacity 0.3s ease-in-out; /* Adăugăm tranziția pentru opacitate */
}

.thumbnails img:hover {
    opacity: 0.7; /* Reducem opacitatea la hover */
}

.product-details {
    flex: 1;
    padding: 20px;
}

.product-details .title-product {
    font-size: 24px;
    margin-bottom: 10px;
}



.product-details .price {
    font-size: 20px;
    color: #333;
    margin-bottom: 10px;
}

.product-details .description  {
    line-height: 1.6;
    margin-bottom: 20px;
}

.options {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.options label {
    margin-right: 10px;
}

.options input {
    width: 60px;
    padding: 5px;
    margin-right: 10px;
}

.add-to-cart {
    padding: 10px 20px;
    background-color: #9a9a9a;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 4px;
}

.add-to-cart:hover {
    background-color: #717171;
}

.tabs {
    margin-top: 20px;
}

.tablinks {
    padding: 10px 15px;
    background-color: #f0f0f0;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.tablinks:hover {
    background-color: #e0e0e0;
}

.tablinks.active {
    background-color: #9a9a9a;
    color: #fff;
}

.tabcontent {
    display: none;
    padding: 20px;
    border-top: 1px solid #ddd;
}

.tabcontent.active {
    display: block;
}
.specifications {
    max-width: 600px;
    margin: 0 auto;
}
h1 {
    text-align: center;
    margin-bottom: 20px;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}
th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}
th {
    background-color: #f2f2f2;
}

", "style.css", "/var/www/html/Dennis/myShop/templates/style.css");
    }
}
