<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_648a86e24310ae9fa31a8b7b8a424ec2397d813ea72cc0d7092d06ae9bf3b473 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81b4e0753e72a5a07957e3dc773ad058e93c6c11f029c99feb8057594ab084a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b4e0753e72a5a07957e3dc773ad058e93c6c11f029c99feb8057594ab084a0->enter($__internal_81b4e0753e72a5a07957e3dc773ad058e93c6c11f029c99feb8057594ab084a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81b4e0753e72a5a07957e3dc773ad058e93c6c11f029c99feb8057594ab084a0->leave($__internal_81b4e0753e72a5a07957e3dc773ad058e93c6c11f029c99feb8057594ab084a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d63da6492250e24687424350e897607af476c56a1903f644a7dc289b8ea93416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63da6492250e24687424350e897607af476c56a1903f644a7dc289b8ea93416->enter($__internal_d63da6492250e24687424350e897607af476c56a1903f644a7dc289b8ea93416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d63da6492250e24687424350e897607af476c56a1903f644a7dc289b8ea93416->leave($__internal_d63da6492250e24687424350e897607af476c56a1903f644a7dc289b8ea93416_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_64b51c77ebb35000374a7f663c4f5d6982365d094653ea5668259da53bd52c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b51c77ebb35000374a7f663c4f5d6982365d094653ea5668259da53bd52c5e->enter($__internal_64b51c77ebb35000374a7f663c4f5d6982365d094653ea5668259da53bd52c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_64b51c77ebb35000374a7f663c4f5d6982365d094653ea5668259da53bd52c5e->leave($__internal_64b51c77ebb35000374a7f663c4f5d6982365d094653ea5668259da53bd52c5e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_21f87d01c465c14b21e88bde173437dc529645fa5a4870eb40055e5e55b35675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f87d01c465c14b21e88bde173437dc529645fa5a4870eb40055e5e55b35675->enter($__internal_21f87d01c465c14b21e88bde173437dc529645fa5a4870eb40055e5e55b35675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_21f87d01c465c14b21e88bde173437dc529645fa5a4870eb40055e5e55b35675->leave($__internal_21f87d01c465c14b21e88bde173437dc529645fa5a4870eb40055e5e55b35675_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
