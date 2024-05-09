<?php

namespace RiteChoiceInnovations\TabUi\Theme;

use RiteChoiceInnovations\TabUi\Theme\Base\Rounded;

class Button
{
    private string $variant;
    private string $color;
    private string $size;
    private string $rounded;

    private string $variantClasses;
    private string $sizeClasses;
    private string $roundedClasses;

    public function __construct(string $variant = 'solid', string $color = 'primary', string $size = 'md', string $rounded = 'xl')
    {
        $this->variant = $variant;
        $this->color = $color;
        $this->size = $size;
        $this->rounded = $rounded;
    }

    public static function make(): self
    {
        return new static('solid', 'primary', 'md', 'xl');
    }

    public function __toString(): string
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

    private function baseClasses(): string
    {
        return "inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-white disabled:pointer-events-none disabled:opacity-65 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 dark:ring-offset-slate-950 dark:focus-visible:ring-slate-300";
    }

    public function rounded(string $rounded = null): self
    {
        $this->rounded = $rounded ?? $this->rounded;
        $this->roundedClasses = $this->setRoundedClasses()[$this->rounded] ?? "rounded-xl";
        return $this;
    }

    private function setRoundedClasses(): array
    {
        return Rounded::rounded();
    }

    public function size(string $size = null): self
    {
        $size = $size ?? $this->size;
        $this->sizeClasses = $this->sizeClasses()[$size] ?? $this->mdSizeClasses();
        return $this;
    }

    private function sizeClasses(): array
    {
        return [
            "md" => $this->mdSizeClasses(),
            "sm" => $this->smSizeClasses(),
            "xs" => $this->xsSizeClasses(),
            "lg" => $this->lgSizeClasses(),
            "icon" => $this->iconSizeClasses(),
        ];
    }

    private function mdSizeClasses(): string
    {
        return "h-10 px-4 py-2";
    }

    private function smSizeClasses(): string
    {
        return "h-9 rounded-md px-3";
    }

    private function xsSizeClasses(): string
    {
        return "h-6 rounded-md px-1";
    }

    private function lgSizeClasses(): string
    {
        return "h-11 rounded-md px-8";
    }

    private function iconSizeClasses(): string
    {
        return "h-10 w-10";
    }

    public function color(string $color = null): self
    {
        $this->color = $color ?? $this->color;
        return $this;
    }

    public function variant(string $variant = null): self
    {
        $this->variant = $variant ?? $this->variant;
        $color = $this->color;
        $this->variantClasses = $this->variantClasses()[$variant][$color] ?? ['solid']['primary'];
        return $this;
    }

    private function variantClasses(): array
    {
        return [
            'solid' => $this->solidVariantClasses(),
            'outlined' => $this->outlinedVariantClasses(),
            'transparent' => $this->transparentVariantClasses(),
            'link' => $this->linkVariantClasses(),
        ];
    }

    private function solidVariantClasses(): array
    {
        return [
            'primary' => $this->solidPrimaryVariantClasses(),
            'secondary' => $this->solidSecondaryVariantClasses(),
            'negative' => $this->solidNegativeVariantClasses(),
            'warning' => $this->solidWarningVariantClasses(),
            'positive' => $this->solidPositiveVariantClasses(),
            'info' => $this->solidInfoVariantClasses(),
        ];
    }

    /**
     * @return string
     */
    public function solidPrimaryVariantClasses(): string
    {
        return "bg-primary-500 text-slate-50 hover:bg-primary-500/80 dark:bg-slate-50 dark:text-primary-500 dark:hover:bg-slate-100";
    }

    /**
     * @return string
     */
    public function solidSecondaryVariantClasses(): string
    {
        return 'bg-secondary-500 text-slate-50 hover:bg-secondary-500/90 dark:bg-secondary-900 dark:text-slate-50 dark:hover:bg-secondary-900/90';
    }

    /**
     * @return string
     */
    public function solidNegativeVariantClasses(): string
    {
        return 'bg-negative-500 text-slate-50 hover:bg-negative-500/90 dark:bg-negative-900 dark:text-slate-50 dark:hover:bg-negative-900/90';
    }

    /**
     * @return string
     */
    public function solidWarningVariantClasses(): string
    {
        return 'bg-warning-500 text-slate-50 hover:bg-warning-500/90 dark:bg-warning-900 dark:text-slate-50 dark:hover:bg-warning-900/90';
    }

    /**
     * @return string
     */
    public function solidPositiveVariantClasses(): string
    {
        return 'bg-positive-500 text-slate-50 hover:bg-positive-500/90 dark:bg-positive-900 dark:text-slate-50 dark:hover:bg-positive-900/90';
    }

    /**
     * @return string
     */
    public function solidInfoVariantClasses(): string
    {
        return 'bg-info-500 text-slate-50 hover:bg-info-500/90 dark:bg-info-900 dark:text-slate-50 dark:hover:bg-info-900/90';
    }

    private function outlinedVariantClasses(): array
    {
        return [
            'primary' => $this->outlinedPrimaryVariantClasses(),
            'secondary' => 'border border-secondary-500 bg-white text-secondary-500 hover:text-slate-50 hover:bg-secondary-500/90 hover:border-secondary-600 dark:border-secondary-900 dark:bg-secondary-900 dark:hover:bg-secondary-900/90 dark:hover:text-slate-50',
            'negative' => 'border border-negative-500 bg-white text-negative-500 hover:text-slate-50 hover:bg-negative-500/90 hover:border-negative-600 dark:border-negative-900 dark:bg-negative-900 dark:hover:bg-negative-900/90 dark:hover:text-slate-50',
            'warning' => 'border border-warning-500 bg-white hover:text-slate-50 text-warning-500 hover:bg-warning-500/90 hover:border-warning-600 dark:border-warning-900 dark:bg-warning-900 dark:hover:bg-warning-900/90 dark:hover:text-slate-50',
            'positive' => 'border border-positive-500 bg-white text-positive-500 hover:text-slate-50 hover:bg-positive-500/90 hover:border-positive-600 dark:border-positive-900 dark:bg-positive-900 dark:hover:bg-positive-900/90 dark:hover:text-slate-50',
            'info' => 'border border-info-500 bg-white hover:text-slate-50 text-info-500 hover:bg-info-500/90 hover:border-info-600 dark:border-info-900 dark:bg-info-900 dark:hover:bg-info-900/90 dark:hover:text-slate-50',
        ];
    }

    /**
     * @return string
     */
    public function outlinedPrimaryVariantClasses(): string
    {
        return 'border border-slate-200 hover:text-slate-50 bg-white hover:bg-slate-100 hover:text-slate-900 dark:border-slate-800 dark:bg-slate-950 dark:hover:bg-slate-800 dark:hover:text-slate-50';
    }

    private function transparentVariantClasses(): array
    {
        return [
            'primary' => 'hover:bg-slate-100 hover:text-slate-900 dark:hover:bg-slate-800 dark:hover:text-slate-50',
            'secondary' => 'hover:bg-secondary-100 hover:text-secondary-900 dark:hover:bg-secondary-800 dark:hover:text-slate-50',
            'negative' => 'hover:bg-negative-100 hover:text-negative-900 dark:hover:bg-negative-900 dark:hover:text-slate-50',
            'warning' => 'hover:bg-warning-100 hover:text-warning-900 dark:hover:bg-warning-900 dark:hover:text-slate-50',
            'positive' => 'hover:bg-positive-100 hover:text-positive-900 dark:hover:bg-positive-900 dark:hover:text-slate-50',
            'info' => 'hover:bg-info-100 hover:text-info-900 dark:hover:bg-info-900 dark:hover:text-slate-50',
        ];
    }

    private function linkVariantClasses(): array
    {
        return [
            'primary' => 'text-primary-500 underline-offset-4 hover:underline dark:text-primary-50',
            'secondary' => 'text-secondary-500 underline-offset-4 hover:text-secondary-900 dark:text-secondary-900 dark:hover:text-slate-50',
            'negative' => 'text-negative-500 underline-offset-4 hover:text-negative-900 dark:text-negative-900 dark:hover:text-slate-50',
            'warning' => 'text-warning-500 underline-offset-4 hover:text-warning-900 dark:text-warning-900 dark:hover:text-slate-50',
            'positive' => 'text-positive-500 underline-offset-4 hover:text-positive-900 dark:text-positive-900 dark:hover:text-slate-50',
            'info' => 'text-info-500 underline-offset-4 hover:text-info-900 dark:text-info-900 dark:hover:text-slate-50',
        ];
    }
}
