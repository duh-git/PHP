<?php

namespace MyProject\View;

class View
{
    private $templatesPath;
    private $extraVars = [];

    public function __construct(string $templatesPath)
    {
        $this->templatesPath = $templatesPath;
    }

    public function renderHtml(string $templateName, array $vars = [], int $code = 200)
    {
        http_response_code($code);
        extract($vars);
        ob_start();
        include $this->templatesPath . '/' . $templateName;
        $buffer = ob_get_contents();
        ob_end_clean();
        echo $buffer;
    }

    public function setVar(string $name, $value): void
    {
        $this->extraVars[$name] = $value;
    }
}
