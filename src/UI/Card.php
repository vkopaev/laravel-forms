<?php
namespace Veneridze\LaravelForms\UI;
use Illuminate\Contracts\Support\Arrayable;
//use Veneridze\LaravelForms\Prototype\MultipleSelectFromList;

final class Card implements Arrayable
{
    public function __construct(
        public string|int $id,
        public string $label,
        public array $data = [],
        public ?array $fields = null,
        public ?string $hint = null,
        public ?string $icon = null,
        public ?array $features = null,
        public ?array $actions = null,
    ) {
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'label' => $this->label,
            'fields' => $this->fields,
            'data' => $this->data,
            'hint' => $this->hint,
            'icon' => $this->icon,
            'features' => $this->features,
            'actions' => $this->actions
        ];
    }
}