<?php

namespace NGFramer\ElementsPHP\Elements;

class Textarea
{
    /**
     * Variable to store the textarea config data.
     */
    private array $textareaConfig = [];


    /**
     * Define the textarea name.
     *
     * @param string $name
     * @return Textarea
     */
    public function name(string $name): static
    {
        $this->textareaConfig['name'] = $name;
        return $this;
    }


    /**
     * Define the textarea id.
     *
     * @param string $id
     * @return Textarea
     */
    public function id(string $id): static
    {
        $this->textareaConfig['id'] = $id;
        return $this;
    }


    /**
     * Define the textarea rows.
     *
     * @param int $rows
     * @return Textarea
     */
    public function rows(int $rows): static
    {
        $this->textareaConfig['rows'] = $rows;
        return $this;
    }


    /**
     * Define the textarea cols.
     *
     * @param int $cols
     * @return Textarea
     */
    public function cols(int $cols): static
    {
        $this->textareaConfig['cols'] = $cols;
        return $this;
    }


    /**
     * Define the textarea placeholder.
     *
     * @param string $placeholder
     * @return Textarea
     */
    public function placeholder(string $placeholder): static
    {
        $this->textareaConfig['placeholder'] = $placeholder;
        return $this;
    }


    /**
     * Define the textarea value.
     *
     * @param string $value
     * @return Textarea
     */
    public function value(string $value): static
    {
        $this->textareaConfig['value'] = $value;
        return $this;
    }


    /**
     * Define the textarea class.
     *
     * @param string $class
     * @return Textarea
     */
    public function class(string $class): static
    {
        $this->textareaConfig['class'] = $class;
        return $this;
    }


    /**
     * Define the textarea required.
     *
     * @return Textarea
     */
    public function required(): static
    {
        $this->textareaConfig['required'] = true;
        return $this;
    }


    /**
     * Define the textarea readonly.
     *
     * @return Textarea
     */
    public function readonly(): static
    {
        $this->textareaConfig['readonly'] = true;
        return $this;
    }


    /**
     * Define the textarea disabled.
     *
     * @return Textarea
     */
    public function disabled(): static
    {
        $this->textareaConfig['disabled'] = true;
        return $this;
    }


    /**
     * Define the textarea autofocus.
     *
     * @return Textarea
     */
    public function autofocus(): static
    {
        $this->textareaConfig['autofocus'] = true;
        return $this;
    }


    /**
     * Render the textarea.
     */
    public function render(): string
    {
        $textarea = "<textarea";

        foreach ($this->textareaConfig as $key => $value) {
            $textarea .= " $key=\"$value\"";
        }
        $textarea .= "></textarea>";
        return $textarea;
    }
}