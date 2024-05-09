<?php

namespace RiteChoiceInnovations\TabUi\Theme;

use RiteChoiceInnovations\TabUi\Theme\Base\Rounded;

class Input
{
    public string $variant = 'outlined';
    public string $color = 'primary';
    public string $rounded = 'lg';
    public string $size = 'md';

    private string $variantClasses;
    private string $sizeClasses;
    private string $roundedClasses;
    private string $colorClasses;

    public static function make(): self
    {
        return new static();
    }

    public function render(): string
    {
        return $this->generateClasses();
    }

    public function generateClasses(): string
    {
        $base = $this->baseClass();
        $this->variant($this->variant);
        $this->rounded($this->rounded);
        $this->size($this->size);
        $this->color($this->color);
        return "{$base} {$this->variantClasses} {$this->sizeClasses} {$this->roundedClasses} {$this->colorClasses}";
    }

    public function baseClass(): string
    {
        return "file:border-0 file:bg-transparent file:text-sm file:font-medium";
    }

    public function variant(string $variant = ''): self
    {
        $this->variant = $variant ?? $this->variant;
        $this->variantClasses = $this->variantClasses()[$this->variant] ?? '';
        return $this;
    }

    private function variantClasses(): array
    {
        return [
            'outlined' => 'border dark:border',
            'solid' => 'bg-gray-300 dark:bg-gray-900 dark:text-gray-300',
            'transparent' => 'bg-transparent border-none outline-none focus:ring-0',
        ];
    }

    public function rounded(string $rounded = ''): self
    {
        $this->rounded = $rounded ?? $this->rounded;
        $this->roundedClasses = $this->roundedClasses()[$this->rounded] ?? '';
        return $this;
    }

    private function roundedClasses(): array
    {
        return Rounded::rounded();
    }

    public function size(string $size = ''): static
    {
        $this->size = !$size ? $this->size : $size;
        $this->sizeClasses = $this->sizeClasses()[$this->size] ?? '';
        return $this;
    }

    private function sizeClasses(): array
    {
        return [
            'sm' => 'text-sm',
            'md' => 'text-base',
            'lg' => 'text-lg',
        ];
    }

    public function color(string $color = ''): self
    {
        $this->color = !$color ? $this->color : $color;
        $this->colorClasses = $this->colorClasses()[$this->color] ?? '';
        return $this;
    }

    public function colorClasses(): array
    {
        return [
            'primary' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary-500 dark:focus:border-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 placeholder-text-slate-400',
            'secondary' => 'border-secondary-300 dark:border-secondary-700 text-secondary-500 dark:text-secondary-400 focus:border-secondary-500 dark:focus:border-secondary-400 focus:ring-secondary-500 dark:focus:ring-secondary-400 placeholder-text-secondary-400',
            'negative' => 'border-negative-300 dark:border-secondary-700 text-negative-500 dark:text-negative-600 focus:border-negative-500 dark:focus:border-negative-600 focus:ring-negative-500 dark:focus:ring-negative-600 placeholder-text-slate-400',
            'positive' => 'border-positive-300 dark:border-secondary-700 text-positive-500 dark:text-positive-600 focus:border-positive-500 dark:focus:border-positive-600 focus:ring-positive-500 dark:focus:ring-positive-600 placeholder-text-slate-400',
            'warning' => 'border-warning-300 dark:border-secondary-700 text-warning-500 dark:text-warning-600 focus:border-warning-500 dark:focus:border-warning-600 focus:ring-warning-500 dark:focus:ring-warning-600 placeholder-text-slate-400',
            'info' => 'border-info-300 dark:border-secondary-700 text-info-500 dark:text-info-600 focus:border-info-500 dark:focus:border-info-600 focus:ring-info-500 dark:focus:ring-info-600 placeholder-text-slate-400',
        ];
    }


}