<?php

namespace RiteChoiceInnovations\TabUi\Theme;

class Button
{
    private string $variant = 'solid';
    private string $color = 'primary';
    private string $size = 'md';
    private string $rounded = 'xl';

    private string $variantClasses;
    private string $sizeClasses;
    private string $roundedClasses;
    private string $baseClass;

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
        $this->baseClass();
        $this->rounded($this->rounded);
        $this->size($this->size);
        $this->variant($this->variant, $this->color);
        return "{$this->baseClass} {$this->variantClasses} {$this->sizeClasses} {$this->roundedClasses}";
    }

    private function baseClass(): void
    {
        $this->baseClass = $this->setBaseClasses();
    }

    /**
     * @return string
     */
    private function setBaseClasses(): string
    {
        return "inline-flex items-center justify-center whitespace-nowrap text-sm font-medium
    ring-offset-white disabled:pointer-events-none disabled:opacity-65
    transition-colors focus-visible:outline-none focus-visible:ring-2
    focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:pointer-events-none
    disabled:opacity-50 dark:ring-offset-slate-950 dark:focus-visible:ring-slate-300";
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
        return [
            "none" => "rounded-none",
            "sm" => "rounded-sm",
            "md" => "rounded-md",
            "lg" => "rounded-lg",
            "xl" => "rounded-xl",
            "full" => "rounded-full",
        ];
    }

    public function size(string $size = null): static
    {
        $size = $size ?? $this->size;
        $this->sizeClasses = $this->setSizeClasses()[$size] ?? "h-10 px-4 py-2";
        return $this;
    }

    /**
     * @return string[]
     */
    private function setSizeClasses(): array
    {
        return [
            "md" => "h-10 px-4 py-2",
            "sm" => "h-9 rounded-md px-3",
            "xs" => "h-6 rounded-md px-1",
            "lg" => "h-11 rounded-md px-8",
            "icon" => "h-10 w-10",
        ];
    }

    public function variant(string $variant = null): static
    {
        $color = $color ?? $this->color;
        $variant = $variant ?? $this->variant;
        $this->variantClasses = $this->setVariantClasses()[$variant][$color] ?? ['solid']['primary'];
        return $this;
    }

    private function setVariantClasses(): array
    {
        return [
            'solid' => $this->solidVariantClasses(),
            'outlined' => $this->outlinedVariantClasses(),
            'ghost' => $this->ghostVariantClasses(),
            'link' => $this->linkVariantClasses(),
        ];
    }

    /**
     * @return string[]
     */
    public function solidVariantClasses(): array
    {
        return [
            'primary' => 'bg-gray-900 text-slate-50 hover:bg-gray-900/80 dark:bg-slate-50 dark:text-gray-500 dark:hover:bg-slate-100',
            'secondary' => 'bg-blue-500 text-slate-50 hover:bg-blue-500/90 dark:bg-blue-900 dark:text-slate-50 dark:hover:bg-blue-900/90',
            'danger' => 'bg-red-500 text-slate-50 hover:bg-red-500/90 dark:bg-red-900 dark:text-slate-50 dark:hover:bg-red-900/90',
            'warning' => 'bg-yellow-500 text-slate-50 hover:bg-yellow-500/90 dark:bg-yellow-900 dark:text-slate-50 dark:hover:bg-yellow-900/90',
            'positive' => 'bg-green-500 text-slate-50 hover:bg-green-500/90 dark:bg-green-900 dark:text-slate-50 dark:hover:bg-green-900/90',
            'info' => 'bg-indigo-500 text-slate-50 hover:bg-indigo-500/90 dark:bg-indigo-900 dark:text-slate-50 dark:hover:bg-indigo-900/90',
        ];
    }

    /**
     * @return string[]
     */
    private function outlinedVariantClasses(): array
    {
        return [
            'primary' => 'border border-slate-200 bg-white hover:bg-slate-100 hover:text-slate-900 dark:border-slate-800 dark:bg-slate-950 dark:hover:bg-slate-800 dark:hover:text-slate-50',
            'secondary' => 'border border-blue-500 bg-white text-blue-500 hover:bg-blue-500/90 hover:border-blue-600 dark:border-blue-900 dark:bg-blue-900 dark:hover:bg-blue-900/90 dark:hover:text-slate-50',
            'danger' => 'border border-red-500 bg-white text-red-500 hover:bg-red-500/90 hover:border-red-600 dark:border-red-900 dark:bg-red-900 dark:hover:bg-red-900/90 dark:hover:text-slate-50',
            'warning' => 'border border-yellow-500 bg-white text-yellow-500 hover:bg-yellow-500/90 hover:border-yellow-600 dark:border-yellow-900 dark:bg-yellow-900 dark:hover:bg-yellow-900/90 dark:hover:text-slate-50',
            'positive' => 'border border-green-500 bg-white text-green-500 hover:bg-green-500/90 hover:border-green-600 dark:border-green-900 dark:bg-green-900 dark:hover:bg-green-900/90 dark:hover:text-slate-50',
            'info' => 'border border-indigo-500 bg-white text-indigo-500 hover:bg-indigo-500/90 hover:border-indigo-600 dark:border-indigo-900 dark:bg-indigo-900 dark:hover:bg-indigo-900/90 dark:hover:text-slate-50',
        ];
    }

    /**
     * @return string[]
     */
    private function ghostVariantClasses(): array
    {
        return [
            'primary' => 'hover:bg-slate-100 hover:text-slate-900 dark:hover:bg-slate-800 dark:hover:text-slate-50',
            'secondary' => 'hover:bg-blue-100 hover:text-blue-900 dark:hover:bg-blue-800 dark:hover:text-slate-50',
            'danger' => 'hover:bg-red-100 hover:text-red-900 dark:hover:bg-red-900 dark:hover:text-slate-50',
            'warning' => 'hover:bg-yellow-100 hover:text-yellow-900 dark:hover:bg-yellow-900 dark:hover:text-slate-50',
            'positive' => 'hover:bg-green-100 hover:text-green-900 dark:hover:bg-green-900 dark:hover:text-slate-50',
            'info' => 'hover:bg-indigo-100 hover:text-indigo-900 dark:hover:bg-indigo-900 dark:hover:text-slate-50',
        ];
    }

    /**
     * @return string[]
     */
    private function linkVariantClasses(): array
    {
        return [
            'primary' => 'text-slate-900 underline-offset-4 hover:underline dark:text-slate-50',
            'secondary' => 'text-blue-500 underline-offset-4 hover:text-blue-900 dark:text-blue-900 dark:hover:text-slate-50',
            'danger' => 'text-red-500 underline-offset-4 hover:text-red-900 dark:text-red-900 dark:hover:text-slate-50',
            'warning' => 'text-yellow-500 underline-offset-4 hover:text-yellow-900 dark:text-yellow-900 dark:hover:text-slate-50',
            'positive' => 'text-green-500 underline-offset-4 hover:text-green-900 dark:text-green-900 dark:hover:text-slate-50',
            'info' => 'text-indigo-500 underline-offset-4 hover:text-indigo-900 dark:text-indigo-900 dark:hover:text-slate-50',
        ];
    }

    public function color(string $color = null): static
    {
        $this->color = $color ?? $this->color;
        return $this;
    }
}