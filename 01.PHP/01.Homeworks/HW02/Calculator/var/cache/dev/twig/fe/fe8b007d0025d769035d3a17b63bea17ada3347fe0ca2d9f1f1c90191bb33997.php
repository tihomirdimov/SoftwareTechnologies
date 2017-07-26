<?php

/* base.html.twig */
class __TwigTemplate_1f58f2548c05d1342c713900e3ca1afb0f1ba3495de3b6888a23a725f9e14088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b614f910f52e437f736e3b1ec005493a179be7abb4437003df0a10dc7a190957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b614f910f52e437f736e3b1ec005493a179be7abb4437003df0a10dc7a190957->enter($__internal_b614f910f52e437f736e3b1ec005493a179be7abb4437003df0a10dc7a190957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_b614f910f52e437f736e3b1ec005493a179be7abb4437003df0a10dc7a190957->leave($__internal_b614f910f52e437f736e3b1ec005493a179be7abb4437003df0a10dc7a190957_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_50e2fb8e47d2ac367528d5a6b6698dfdb93ac3d73df610bba0d475a514d25987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e2fb8e47d2ac367528d5a6b6698dfdb93ac3d73df610bba0d475a514d25987->enter($__internal_50e2fb8e47d2ac367528d5a6b6698dfdb93ac3d73df610bba0d475a514d25987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_50e2fb8e47d2ac367528d5a6b6698dfdb93ac3d73df610bba0d475a514d25987->leave($__internal_50e2fb8e47d2ac367528d5a6b6698dfdb93ac3d73df610bba0d475a514d25987_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c5d99ca0ac686b082cb0a9bb801b8436f0a2dc12c3fd2a8e2d0eb44151948dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5d99ca0ac686b082cb0a9bb801b8436f0a2dc12c3fd2a8e2d0eb44151948dd->enter($__internal_1c5d99ca0ac686b082cb0a9bb801b8436f0a2dc12c3fd2a8e2d0eb44151948dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_1c5d99ca0ac686b082cb0a9bb801b8436f0a2dc12c3fd2a8e2d0eb44151948dd->leave($__internal_1c5d99ca0ac686b082cb0a9bb801b8436f0a2dc12c3fd2a8e2d0eb44151948dd_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_950b65d42e4c79d2b1e12b0ccc39c5a972c3a95a38b851f22cc2e6b7e34fd925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950b65d42e4c79d2b1e12b0ccc39c5a972c3a95a38b851f22cc2e6b7e34fd925->enter($__internal_950b65d42e4c79d2b1e12b0ccc39c5a972c3a95a38b851f22cc2e6b7e34fd925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_950b65d42e4c79d2b1e12b0ccc39c5a972c3a95a38b851f22cc2e6b7e34fd925->leave($__internal_950b65d42e4c79d2b1e12b0ccc39c5a972c3a95a38b851f22cc2e6b7e34fd925_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_73c6919f2add1397c03ba432029bd8f82ec71d3c5b319c8a8f7649e563f063c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c6919f2add1397c03ba432029bd8f82ec71d3c5b319c8a8f7649e563f063c3->enter($__internal_73c6919f2add1397c03ba432029bd8f82ec71d3c5b319c8a8f7649e563f063c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_73c6919f2add1397c03ba432029bd8f82ec71d3c5b319c8a8f7649e563f063c3->leave($__internal_73c6919f2add1397c03ba432029bd8f82ec71d3c5b319c8a8f7649e563f063c3_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea9c2615b3c815ac8a58af6bdac20dcbe975e45e19bd0c2446e800424f96a25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9c2615b3c815ac8a58af6bdac20dcbe975e45e19bd0c2446e800424f96a25d->enter($__internal_ea9c2615b3c815ac8a58af6bdac20dcbe975e45e19bd0c2446e800424f96a25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_ea9c2615b3c815ac8a58af6bdac20dcbe975e45e19bd0c2446e800424f96a25d->leave($__internal_ea9c2615b3c815ac8a58af6bdac20dcbe975e45e19bd0c2446e800424f96a25d_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_92c2d88021c132ec56b5d0a2802139e60637fbab764ee76f2da5492548efcf86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c2d88021c132ec56b5d0a2802139e60637fbab764ee76f2da5492548efcf86->enter($__internal_92c2d88021c132ec56b5d0a2802139e60637fbab764ee76f2da5492548efcf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_92c2d88021c132ec56b5d0a2802139e60637fbab764ee76f2da5492548efcf86->leave($__internal_92c2d88021c132ec56b5d0a2802139e60637fbab764ee76f2da5492548efcf86_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_76ceda45b88bfbec12d005435012eac37b6295697e32cdc3b5c8e08cf4b0c3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ceda45b88bfbec12d005435012eac37b6295697e32cdc3b5c8e08cf4b0c3de->enter($__internal_76ceda45b88bfbec12d005435012eac37b6295697e32cdc3b5c8e08cf4b0c3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_76ceda45b88bfbec12d005435012eac37b6295697e32cdc3b5c8e08cf4b0c3de->leave($__internal_76ceda45b88bfbec12d005435012eac37b6295697e32cdc3b5c8e08cf4b0c3de_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
