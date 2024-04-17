<?php

namespace RiteChoiceInnovations\TabUi\Theme;

class Typography
{
    protected string $variant = 'p';
    protected string $variantClasses = '';

    public static function make(): self
    {
        return new static();
    }

    public function render(): string
    {
        return $this->generateClasses();
    }

    protected function generateClasses(): string
    {
        $this->variant($this->variant);
        return $this->variantClasses;
    }

    public function variant(string $variant = ''): self
    {
        $this->variant = $variant ?? $this->variant;
        $this->variantClasses = $this->variantClasses()[$this->variant] ?? '';
        return $this;
    }

    protected function variantClasses(): array
    {
        return [
            'h1' => $this->h1Classes(),
            'h2' => $this->h2Classes(),
            'h3' => $this->h3Classes(),
            'h4' => $this->h4Classes(),
            'h5' => $this->h5Classes(),
            'h6' => $this->h6Classes(),
            'p' => $this->pClasses(),
            'blockquote' => $this->blockquoteClasses(),
            'code' => $this->codeClasses(),
            'lead' => $this->leadClasses(),
            'large' => $this->largeClasses(),
            'small' => $this->smallClasses(),
            'caption' => $this->captionClasses(),
            'overline' => $this->overlineClasses(),
        ];
    }

    /**
     * @return string
     */
    protected function h1Classes(): string
    {
        return 'scroll-m-20 text-4xl font-extrabold tracking-tight lg:text-5xl';
    }

    /**
     * @return string
     */
    protected function h2Classes(): string
    {
        return 'scroll-m-20 pb-2 text-3xl font-semibold tracking-tight first:mt-0';
    }

    /**
     * @return string
     */
    protected function h3Classes(): string
    {
        return 'scroll-m-20 text-2xl font-semibold tracking-tight';
    }

    /**
     * @return string
     */
    protected function h4Classes(): string
    {
        return 'scroll-m-20 text-xl font-semibold tracking-tight';
    }

    /**
     * @return string
     */
    protected function h5Classes(): string
    {
        return 'scroll-m-20 text-lg font-semibold tracking-tight';
    }

    /**
     * @return string
     */
    protected function h6Classes(): string
    {
        return 'scroll-m-20 text-base font-semibold tracking-tight';
    }

    /**
     * @return string
     */
    protected function pClasses(): string
    {
        return 'leading-7 [&:not(:first-child)]:mt-6';
    }

    /**
     * @return string
     */
    protected function blockquoteClasses(): string
    {
        return 'mt-6 border-l-2 pl-6 italic';
    }

    /**
     * @return string
     */
    protected function codeClasses(): string
    {
        return 'relative rounded bg-slate-300 px-[0.3rem] py-[0.2rem] font-mono text-sm font-semibold';
    }

    /**
     * @return string
     */
    protected function leadClasses(): string
    {
        return 'text-xl';
    }

    /**
     * @return string
     */
    protected function largeClasses(): string
    {
        return 'text-lg font-semibold';
    }

    /**
     * @return string
     */
    protected function smallClasses(): string
    {
        return 'text-sm font-medium leading-none';
    }

    /**
     * @return string
     */
    protected function captionClasses(): string
    {
        return 'text-xs';
    }

    /**
     * @return string
     */
    protected function overlineClasses(): string
    {
        return 'text-xs uppercase';
    }
}