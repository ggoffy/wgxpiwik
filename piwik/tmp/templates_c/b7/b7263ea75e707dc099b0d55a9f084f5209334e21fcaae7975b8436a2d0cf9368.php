<?php

/* _iframeBuster.twig */
class __TwigTemplate_46b3607934624e6065142cb8fdb33ee4454af1cbce23972f1d2f4982ab49ca77 extends Twig_Template
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
        if ((array_key_exists("enableFrames", $context) && ((isset($context["enableFrames"]) ? $context["enableFrames"] : $this->getContext($context, "enableFrames")) == false))) {
            // line 2
            echo "    <script type=\"text/javascript\">
        \$(function () {
        \$('body').css(\"display\", \"none\");
        if (self == top) {
            var theBody = document.getElementsByTagName('body')[0];
            theBody.style.display = 'block';
        } else { top.location = self.location; }
    });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "_iframeBuster.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% if (enableFrames is defined and enableFrames == false) %}*/
/*     <script type="text/javascript">*/
/*         $(function () {*/
/*         $('body').css("display", "none");*/
/*         if (self == top) {*/
/*             var theBody = document.getElementsByTagName('body')[0];*/
/*             theBody.style.display = 'block';*/
/*         } else { top.location = self.location; }*/
/*     });*/
/*     </script>*/
/* {% endif %}*/
