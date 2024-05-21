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

/* core/profiles/demo_umami/themes/umami/templates/components/messages/status-messages.html.twig */
class __TwigTemplate_51f52121dc653df21e6790d5c70e97f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        yield "<div data-drupal-messages>
";
        // line 23
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 57
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings", "attributes"]);        return; yield '';
    }

    // line 23
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            yield "  ";
            // line 26
            $context["classes"] = ["messages", ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 28
$context["type"], 28, $this->source))];
            // line 31
            yield "  <div role=\"contentinfo\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 31, $this->source), "html", null, true);
            yield "\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "role", "aria-label"), "html", null, true);
            yield ">
    <div class=\"messages__content container\">
      ";
            // line 33
            if (($context["type"] == "error")) {
                // line 34
                yield "        <div role=\"alert\">
      ";
            }
            // line 36
            yield "        ";
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                // line 37
                yield "          <h2 class=\"visually-hidden\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 37, $this->source), "html", null, true);
                yield "</h2>
        ";
            }
            // line 39
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["messages"]) > 1)) {
                // line 40
                yield "          <ul class=\"messages__list\">
            ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 42
                    yield "              <li class=\"messages__item\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 42, $this->source), "html", null, true);
                    yield "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                yield "          </ul>
        ";
            } else {
                // line 46
                yield "          <span class=\"messages__item\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["messages"], 46, $this->source)), "html", null, true);
                yield "</span>
        ";
            }
            // line 48
            yield "      ";
            if (($context["type"] == "error")) {
                // line 49
                yield "        </div>
      ";
            }
            // line 51
            yield "    </div>
  </div>
  ";
            // line 54
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 54);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/messages/status-messages.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  129 => 54,  125 => 51,  121 => 49,  118 => 48,  112 => 46,  108 => 44,  99 => 42,  95 => 41,  92 => 40,  89 => 39,  83 => 37,  80 => 36,  76 => 34,  74 => 33,  66 => 31,  64 => 28,  63 => 26,  61 => 25,  57 => 24,  53 => 23,  46 => 57,  44 => 23,  41 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/messages/status-messages.html.twig", "/var/www/html/core/profiles/demo_umami/themes/umami/templates/components/messages/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 23, "for" => 24, "set" => 26, "if" => 33);
        static $filters = array("escape" => 31, "without" => 31, "length" => 39, "first" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
