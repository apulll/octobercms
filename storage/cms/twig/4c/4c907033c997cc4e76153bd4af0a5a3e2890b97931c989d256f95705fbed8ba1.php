<?php

/* D:\cpu\xamp\htdocs\myproject\P_php\octobercms/themes/responsiv-flat/pages/error.htm */
class __TwigTemplate_c1d8780dd58e8f583717bca16ef8c310a8e12ba2439632233b6861d8cda0d6e3 extends Twig_Template
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
        // line 1
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-2 text-center\">
                <br />
                <img src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/icons/svg/toilet-paper.svg");
        echo "\" alt=\"\">
            </div>
            <div class=\"col-xs-10\">
                <h1>Clean up on aisle three!</h1>
                <p>We're very sorry, but something went wrong and the page cannot be displayed due to a <em>messy error</em>.</p>
                <p>Don't worry, our specially programmed robotic workers have been deployed to clean things up.</p>
                <p><small><em>Error code: 500</em></small>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\cpu\\xamp\\htdocs\\myproject\\P_php\\octobercms/themes/responsiv-flat/pages/error.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-2 text-center\">
                <br />
                <img src=\"{{ 'assets/images/icons/svg/toilet-paper.svg'|theme }}\" alt=\"\">
            </div>
            <div class=\"col-xs-10\">
                <h1>Clean up on aisle three!</h1>
                <p>We're very sorry, but something went wrong and the page cannot be displayed due to a <em>messy error</em>.</p>
                <p>Don't worry, our specially programmed robotic workers have been deployed to clean things up.</p>
                <p><small><em>Error code: 500</em></small>
            </div>
        </div>
    </div>
</div>", "D:\\cpu\\xamp\\htdocs\\myproject\\P_php\\octobercms/themes/responsiv-flat/pages/error.htm", "");
    }
}
