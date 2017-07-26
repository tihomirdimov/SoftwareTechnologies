<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_41eec747444a41ba7c6c8ad1b7ab6ddaab1504348a88328f457ab4ab9c7a595d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c75397453a28a64869d2486eb376989c57770881f98e6486c5012274621fcb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75397453a28a64869d2486eb376989c57770881f98e6486c5012274621fcb81->enter($__internal_c75397453a28a64869d2486eb376989c57770881f98e6486c5012274621fcb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c75397453a28a64869d2486eb376989c57770881f98e6486c5012274621fcb81->leave($__internal_c75397453a28a64869d2486eb376989c57770881f98e6486c5012274621fcb81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6a60abce7a5adda7b57197ae37a9bf0d781b42c60dd11b58fdd6ed49aca9187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a60abce7a5adda7b57197ae37a9bf0d781b42c60dd11b58fdd6ed49aca9187->enter($__internal_f6a60abce7a5adda7b57197ae37a9bf0d781b42c60dd11b58fdd6ed49aca9187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f6a60abce7a5adda7b57197ae37a9bf0d781b42c60dd11b58fdd6ed49aca9187->leave($__internal_f6a60abce7a5adda7b57197ae37a9bf0d781b42c60dd11b58fdd6ed49aca9187_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_08f07907d38fcafa27849f48fe4b8584dc36a0692bdb2a6f2955d5c1f96e75ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f07907d38fcafa27849f48fe4b8584dc36a0692bdb2a6f2955d5c1f96e75ec->enter($__internal_08f07907d38fcafa27849f48fe4b8584dc36a0692bdb2a6f2955d5c1f96e75ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_08f07907d38fcafa27849f48fe4b8584dc36a0692bdb2a6f2955d5c1f96e75ec->leave($__internal_08f07907d38fcafa27849f48fe4b8584dc36a0692bdb2a6f2955d5c1f96e75ec_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ae5e8e58bbfdc5952bf157e53d984502649df3230f7ed7ed25224398348176c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae5e8e58bbfdc5952bf157e53d984502649df3230f7ed7ed25224398348176c->enter($__internal_1ae5e8e58bbfdc5952bf157e53d984502649df3230f7ed7ed25224398348176c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1ae5e8e58bbfdc5952bf157e53d984502649df3230f7ed7ed25224398348176c->leave($__internal_1ae5e8e58bbfdc5952bf157e53d984502649df3230f7ed7ed25224398348176c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
