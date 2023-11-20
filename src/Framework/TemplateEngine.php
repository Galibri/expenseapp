<?php

declare(strict_types=1);

namespace Framework;

class TemplateEngine
{
    private array $globalTemplateData = [];

    public function __construct(private string $templatePath)
    {

    }

    /**
     * @throws \Exception
     */
    public function render(string $template, array $data = []): void
    {
        $templatePath = "{$this->templatePath}/{$template}.php";
        $templatePath = str_replace('/', DIRECTORY_SEPARATOR, $templatePath);
        if (!file_exists($templatePath)) {
            throw new \Exception("Template {$template} not found");
        }

        extract($data, EXTR_SKIP);
        extract($this->globalTemplateData, EXTR_SKIP);

        ob_start();
        require $templatePath;
        $output = ob_get_contents();
        ob_end_clean();
        echo $output;
    }

    public function resolve(string $path): string
    {
        return "{$this->templatePath}/{$path}";
    }

    public function addGlobal(string $key, mixed $value): void
    {
        $this->globalTemplateData[$key] = $value;
    }
}