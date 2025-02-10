<?php

namespace NGFramer\ElementsPHP\Elements;

class Input
{
    /**
     * Variable to store the input config data.
     */
    private array $inputConfig = [];


    /**
     * Define the input type.
     *
     * @param string $type
     * @return Input
     */
    public function type(string $type): static
    {
        $this->inputConfig['type'] = $type;
        return $this;
    }


    /**
     * Define the input name.
     *
     * @param string $name
     * @return Input
     */
    public function name(string $name): static
    {
        $this->inputConfig['name'] = $name;
        return $this;
    }


    /**
     * Define the input value.
     *
     * @param string $value
     * @return Input
     */
    public function value(string $value): static
    {
        $this->inputConfig['value'] = $value;
        return $this;
    }


    /**
     * Define the input id.
     *
     * @param string $id
     * @return Input
     */
    public function id(string $id): static
    {
        $this->inputConfig['id'] = $id;
        return $this;
    }


    /**
     * Define the input class.
     *
     * @param string $class
     * @return Input
     */
    public function class(string $class): static
    {
        $this->inputConfig['class'] = $class;
        return $this;
    }


    /**
     * Define the input placeholder.
     *
     * @param string $placeholder
     * @return Input
     */
    public function placeholder(string $placeholder): static
    {
        $this->inputConfig['placeholder'] = $placeholder;
        return $this;
    }


    /**
     * Define the input required.
     *
     * @param bool $required
     * @return Input
     */
    public function required(bool $required): static
    {
        $this->inputConfig['required'] = $required;
        return $this;
    }


    /**
     * Define the input readonly.
     *
     * @param bool $readonly
     * @return Input
     */
    public function readonly(bool $readonly): static
    {
        $this->inputConfig['readonly'] = $readonly;
        return $this;
    }


    /**
     * Define the input disabled.
     *
     * @param bool $disabled
     * @return Input
     */
    public function disabled(bool $disabled): static
    {
        $this->inputConfig['disabled'] = $disabled;
        return $this;
    }


    /**
     * Define the input autofocus.
     *
     * @param bool $autofocus
     * @return Input
     */
    public function autofocus(bool $autofocus): static
    {
        $this->inputConfig['autofocus'] = $autofocus;
        return $this;
    }


    /**
     * Render the input based on the data entered.
     *
     * @return string
     */
    public function render(): string
    {
        $input = '<input ';
        foreach ($this->inputConfig as $key => $value) {
            $input .= $key . '="' . $value . '" ';
        }
        $input .= '>';
        return $input;
    }
}