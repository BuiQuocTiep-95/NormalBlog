<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_82aa70d212ea65769c3929113d02fdb6c5ead92dfdc6f9837519f09f36a193a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b47e11a1e044ddba03acd7087c096bd6221fbbe476c95904382788439dae4ef7 = $this->env->getExtension("native_profiler");
        $__internal_b47e11a1e044ddba03acd7087c096bd6221fbbe476c95904382788439dae4ef7->enter($__internal_b47e11a1e044ddba03acd7087c096bd6221fbbe476c95904382788439dae4ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47e11a1e044ddba03acd7087c096bd6221fbbe476c95904382788439dae4ef7->leave($__internal_b47e11a1e044ddba03acd7087c096bd6221fbbe476c95904382788439dae4ef7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d22cf196553b89e33715ffb14bd02e5ab0e976fd69cd2bdeafadeab68c228e82 = $this->env->getExtension("native_profiler");
        $__internal_d22cf196553b89e33715ffb14bd02e5ab0e976fd69cd2bdeafadeab68c228e82->enter($__internal_d22cf196553b89e33715ffb14bd02e5ab0e976fd69cd2bdeafadeab68c228e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d22cf196553b89e33715ffb14bd02e5ab0e976fd69cd2bdeafadeab68c228e82->leave($__internal_d22cf196553b89e33715ffb14bd02e5ab0e976fd69cd2bdeafadeab68c228e82_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9057c6c15eb5e92369d67d5c61718ea7c6f1c0927354ffc50944d8f458baf127 = $this->env->getExtension("native_profiler");
        $__internal_9057c6c15eb5e92369d67d5c61718ea7c6f1c0927354ffc50944d8f458baf127->enter($__internal_9057c6c15eb5e92369d67d5c61718ea7c6f1c0927354ffc50944d8f458baf127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9057c6c15eb5e92369d67d5c61718ea7c6f1c0927354ffc50944d8f458baf127->leave($__internal_9057c6c15eb5e92369d67d5c61718ea7c6f1c0927354ffc50944d8f458baf127_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0528e8e5b62329431a9b18d76a84c7bc3c70f4d971709c95191d5b4f0332b02b = $this->env->getExtension("native_profiler");
        $__internal_0528e8e5b62329431a9b18d76a84c7bc3c70f4d971709c95191d5b4f0332b02b->enter($__internal_0528e8e5b62329431a9b18d76a84c7bc3c70f4d971709c95191d5b4f0332b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0528e8e5b62329431a9b18d76a84c7bc3c70f4d971709c95191d5b4f0332b02b->leave($__internal_0528e8e5b62329431a9b18d76a84c7bc3c70f4d971709c95191d5b4f0332b02b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
