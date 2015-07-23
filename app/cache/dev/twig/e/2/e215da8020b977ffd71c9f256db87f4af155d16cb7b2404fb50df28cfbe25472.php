<?php

/* ProposalWebBundle:Default:proposal.html.twig */
class __TwigTemplate_e215da8020b977ffd71c9f256db87f4af155d16cb7b2404fb50df28cfbe25472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10527a8c324d8bed3277f12ebc95d9541ae5b5f8ccc0c13f3d2913deb83c9ed2 = $this->env->getExtension("native_profiler");
        $__internal_10527a8c324d8bed3277f12ebc95d9541ae5b5f8ccc0c13f3d2913deb83c9ed2->enter($__internal_10527a8c324d8bed3277f12ebc95d9541ae5b5f8ccc0c13f3d2913deb83c9ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProposalWebBundle:Default:proposal.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
<head>
<meta charset=\"utf-8\">
<title>proposal</title>
<link rel=\"stylesheet\" style=\"text/css\"  href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/proposalweb/css/proposal.css"), "html", null, true);
        echo "\" media=\"all\" />
    <link rel=\"stylesheet\" style=\"text/css\"  href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/proposalweb/css/base.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" style=\"text/css\"  href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/proposalweb/css/button.css"), "html", null, true);
        echo "\"  />
</head>

<body>

<div class=\"bg1\">
<div class=\"title1\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["title0"]) ? $context["title0"] : $this->getContext($context, "title0")), "html", null, true);
        echo "
<br>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["title1"]) ? $context["title1"] : $this->getContext($context, "title1")), "html", null, true);
        echo "
        </div>
    <div class=\"button-middle\">
    <a href=\"proposal2.php\"><button class=\"button blue\" ><div class=\"shine\"></div>开始>></button></a>
\t\t</div>
</div>


</body>
</html>
";
        
        $__internal_10527a8c324d8bed3277f12ebc95d9541ae5b5f8ccc0c13f3d2913deb83c9ed2->leave($__internal_10527a8c324d8bed3277f12ebc95d9541ae5b5f8ccc0c13f3d2913deb83c9ed2_prof);

    }

    public function getTemplateName()
    {
        return "ProposalWebBundle:Default:proposal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  46 => 14,  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }
}
