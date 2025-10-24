<?php
namespace Veneridze\LaravelForms\Elements;
use Illuminate\Support\Str;
use Veneridze\LaravelForms\Interfaces\Element;
use Veneridze\LaravelForms\Prototype\Input;

class Color extends Input implements Element
{
    public function __construct(
        public string $label,
        public string $key,
        public bool $disabled = false,
        public bool $required = false,
        public array $visibleif = [],
        public array $displayifset = [],

    ) {
    }
    public function toArray(): array
    {
        return [
            'type' => 'color',
            'label' => $this->label,
            'disabled' => $this->disabled,
            'required' => $this->required,
            'key' => $this->key,
            'visibleif' => $this->visibleif,
            'displayifset' => $this->displayifset
        ];
    }

    public function getRawValue($label)
    {
        return trim(Str::lower($label));
    }
}