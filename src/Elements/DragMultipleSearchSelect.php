<?php
namespace Veneridze\LaravelForms\Elements;
use Exception;
use Illuminate\Support\Collection;
use Veneridze\LaravelForms\Prototype\MultipleSelectFromList;
use Veneridze\LaravelForms\UI\Card;

final class DragMultipleSearchSelect extends MultipleSelectFromList
{
    public string $type = 'dragmultiplesearchselect';
    public function __construct(
        public array $keys = [],
        public ?string $label = null,
        public ?string $key = null,
        public ?array $form = null,
        public ?array $addFields = null,
        public ?array $fields = null,
        public bool $emptyFetch = false,
        public bool $showSearch = true,
        public bool $dragOnly = false,
        public bool $canSearch = false,
        public string $dropTag = 'form-bulletlist', 
        public array $visibleif = [],
        public array $displayifset = [],
        public ?string $link = null,
        public ?\Closure $format = null,
        public bool $required = false
    ) {
    }

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'keys' => $this->keys,
            'form' => $this->form,
            'dropTag' => $this->dropTag,
            'showDrag' => $this->dragOnly,
            'showSearch' => $this->showSearch,
            'required' => $this->required,
            'emptyFetch' => $this->emptyFetch,
            'canSearch' => $this->canSearch,
            'link' => $this->link,
            'fields' => $this->fields,
            'addFields' => $this->addFields,
            'label' => $this->label,
            'key' => $this->key,
            'visibleif' => $this->visibleif,
            'displayifset' => $this->displayifset
        ];
    }
}