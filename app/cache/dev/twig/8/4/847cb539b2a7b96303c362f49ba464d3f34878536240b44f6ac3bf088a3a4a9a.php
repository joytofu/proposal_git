<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_847cb539b2a7b96303c362f49ba464d3f34878536240b44f6ac3bf088a3a4a9a extends Twig_Template
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
        $__internal_5e68b62002e08def86751a586a35df75266cc25be4ab0764be315867ee81c1dd = $this->env->getExtension("native_profiler");
        $__internal_5e68b62002e08def86751a586a35df75266cc25be4ab0764be315867ee81c1dd->enter($__internal_5e68b62002e08def86751a586a35df75266cc25be4ab0764be315867ee81c1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e68b62002e08def86751a586a35df75266cc25be4ab0764be315867ee81c1dd->leave($__internal_5e68b62002e08def86751a586a35df75266cc25be4ab0764be315867ee81c1dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_404564115721d20c804e2b4f90ba37ab8d70f8de92167ea32f44ae73e498d09e = $this->env->getExtension("native_profiler");
        $__internal_404564115721d20c804e2b4f90ba37ab8d70f8de92167ea32f44ae73e498d09e->enter($__internal_404564115721d20c804e2b4f90ba37ab8d70f8de92167ea32f44ae73e498d09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_404564115721d20c804e2b4f90ba37ab8d70f8de92167ea32f44ae73e498d09e->leave($__internal_404564115721d20c804e2b4f90ba37ab8d70f8de92167ea32f44ae73e498d09e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d83c1002a5d4490740d0fe3b7aff5c9e350f60b4407c07fc675132272cfc51a = $this->env->getExtension("native_profiler");
        $__internal_0d83c1002a5d4490740d0fe3b7aff5c9e350f60b4407c07fc675132272cfc51a->enter($__internal_0d83c1002a5d4490740d0fe3b7aff5c9e350f60b4407c07fc675132272cfc51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d83c1002a5d4490740d0fe3b7aff5c9e350f60b4407c07fc675132272cfc51a->leave($__internal_0d83c1002a5d4490740d0fe3b7aff5c9e350f60b4407c07fc675132272cfc51a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ae8eb8250497a446d470a4e284425d4b54f271b7851eae285b98b0b9e249253 = $this->env->getExtension("native_profiler");
        $__internal_8ae8eb8250497a446d470a4e284425d4b54f271b7851eae285b98b0b9e249253->enter($__internal_8ae8eb8250497a446d470a4e284425d4b54f271b7851eae285b98b0b9e249253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8ae8eb8250497a446d470a4e284425d4b54f271b7851eae285b98b0b9e249253->leave($__internal_8ae8eb8250497a446d470a4e284425d4b54f271b7851eae285b98b0b9e249253_prof);

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
