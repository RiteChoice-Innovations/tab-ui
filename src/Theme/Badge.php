<?php

namespace RiteChoiceInnovations\TabUi\Theme;

class Badge
{
    private string $variant = 'solid';
    private string $color = 'primary';
    private string $size = 'xs';
    private string $rounded = 'xl';

    private string $variantClasses;
    private string $sizeClasses;
    private string $roundedClasses;

    public static function make(): self
    {
        return new static();
    }

    public function render(): string
    {
        return $this->generateClasses();
    }

    private function generateClasses(): string
    {
        $base = $this->baseClasses();
        $this->rounded($this->rounded);
        $this->size($this->size);
        $this->color($this->color);
        $this->variant($this->variant);
        return "{$base} {$this->variantClasses} {$this->sizeClasses} {$this->roundedClasses}";
    }


    /**
     * @return string
     */
    private function baseClasses(): string
    {
        return "px-2.5 py-0.5 font-medium inline-flex items-center justify-center";
    }

    public function rounded(string $rounded = null): static
    {
        $this->rounded = $rounded ?? $this->rounded;
        $this->roundedClasses = $this->setRoundedClasses()[$this->rounded] ?? "rounded-xl";
        return $this;
    }

    /**
     * @return string[]
     */
    private function setRoundedClasses(): array
    {
        return Classes::rounded();
    }

    public function size(string $size = null): static
    {
        $size = $size ?? $this->size;
        $this->sizeClasses = $this->sizeClasses()[$size];
        return $this;
    }

    /**
     * @return string[]
     */
    private function sizeClasses(): array
    {
        return [
            "md" => "text-md",
            "sm" => "text-sm",
            "xs" => "text-xs",
            "lg" => "text-lg",
            "icon" => "text-sm",
        ];
    }

    public function color(string $color = null): static
    {
        $this->color = $color ?? $this->color;
        return $this;
    }

    public function variant(string $variant = null): static
    {
        $this->variant = $variant ?? $this->variant;
        $color = $this->color;
        $this->variantClasses = $this->variantClasses()[$variant][$color] ?? ['solid']['primary'];
//        dd($this->variant);
        return $this;
    }

    private function variantClasses(): array
    {
        return [
            'solid' => $this->solidVariantClasses(),
            'outlined' => $this->outlinedVariantClasses(),
        ];
    }

    /**
     * @return string[]
     */
    public function solidVariantClasses(): array
    {
        return [
            'primary' => 'bg-primary-100 text-primary-800 text-xs font-medium dark:bg-primary-900 dark:text-primary-300',
            'secondary' => 'bg-secondary-100 text-secondary-800 text-xs font-medium dark:bg-secondary-900 dark:text-secondary-300',
            'negative' => 'bg-negative-100 text-negative-800 text-xs font-medium dark:bg-negative-900 dark:text-negative-300',
            'warning' => 'bg-warning-100 text-warning-800 text-xs font-medium dark:bg-warning-900 dark:text-warning-300',
            'positive' => 'bg-positive-100 text-positive-800 text-xs font-medium dark:bg-positive-900 dark:text-positive-300',
            'info' => 'bg-info-100 text-info-800 text-xs font-medium dark:bg-info-900 dark:text-info-300',
        ];
    }

    /**
     * @return string[]
     */
    private function outlinedVariantClasses(): array
    {
        return [
            'primary' => 'bg-primary-100 text-primary-800 dark:bg-gray-700 dark:text-primary-400 border border-primary-400',
            'secondary' => 'bg-secondary-100 text-secondary-800 dark:bg-gray-700 dark:text-secondary-400 border border-secondary-400',
            'negative' => 'bg-negative-100 text-negative-800 dark:bg-gray-700 dark:text-negative-400 border border-negative-400',
            'warning' => 'bg-warning-100 text-warning-800 dark:bg-gray-700 dark:text-warning-400 border border-warning-400',
            'positive' => 'bg-positive-100 text-positive-800 dark:bg-gray-700 dark:text-positive-400 border border-positive-400',
            'info' => 'bg-info-100 text-info-800 dark:bg-gray-700 dark:text-info-400 border border-info-400',
        ];
    }
}