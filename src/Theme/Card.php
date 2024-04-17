<?php

namespace RiteChoiceInnovations\TabUi\Theme;

class Card
{
    public static function make(): self
    {
        return new static();
    }

    public function render(): array
    {
        return $this->generateClasses();
    }

    private function generateClasses(): array
    {
        return [
            'content' => $this->contentClasses(),
            'footer' => $this->footerClasses(),
            'head' => $this->headClasses(),
            'title' => $this->titleClasses(),
            'description' => $this->descriptionClasses(),
            'root' => $this->rootClasses(),
        ];
    }

    public function contentClasses(string $class = ''): string
    {
        return "p-6 pt-0 {$class}";
    }

    public function footerClasses(string $class = ''): string
    {
        return "flex flex-col space-y-1.5 p-6 {$class}";
    }

    public function headClasses(string $class = ''): string
    {
        return "flex flex-col space-y-1.5 p-6 {$class}";
    }

    public function titleClasses($class = ""): string
    {
        return "text-2xl font-semibold leading-none tracking-tight {$class}";
    }

    public function descriptionClasses($class = ""): string
    {
        return "text-sm text-slate-500 $class";
    }

    public function rootClasses($class = ""): string
    {
        return "rounded-lg border bg-card text-card-foreground shadow-sm $class";
    }

}