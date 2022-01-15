<?php

namespace App\View\Components;

use Illuminate\View\Component;

abstract class AbstractComponent extends Component
{
    public $name;
    public $value;
    public $label;
    public $type;
    public $required;
    public $rows;
    public $class;
    public $inputClass;
    public $autocomplete;

    /**
     * Create a new component instance.
     *
     * @param $name
     * @param $label
     * @param string $type
     * @param bool $required
     * @param string $class
     * @param $rows
     * @param null $inputClass
     * @param null $value
     * @param null $autocomplete
     */
    public function __construct($name, $label = null, $type = 'text', $required = false, $class = 'mb-5', $rows = 2, $inputClass = null, $value = null, $autocomplete = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
        $this->type = $type;
        $this->required = $required;
        $this->rows = $rows;
        $this->class = $class;
        $this->inputClass = $inputClass;
        $this->autocomplete = $autocomplete;
    }
}
