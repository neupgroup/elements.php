<?php

namespace NGFramer\ElementsPHP\Elements;

class Button
{
    /**
     * Variable to store the button config data.
     */
    private array $buttonConfig = [];


    /**
     * Define the button type.
     *
     * @param string $type
     * @return Button
     */
    public function type(string $type): static
    {
        $this->buttonConfig['type'] = $type;
        return $this;
    }


    /**
     * Define the button name.
     *
     * @param string $name
     * @return Button
     */
    public function name(string $name): static
    {
        $this->buttonConfig['name'] = $name;
        return $this;
    }


    /**
     * Define the button value.
     *
     * @param string $value
     * @return Button
     */
    public function value(string $value): static
    {
        $this->buttonConfig['value'] = $value;
        return $this;
    }


    /**
     * Define the button id.
     *
     * @param string $id
     * @return Button
     */
    public function id(string $id): static
    {
        $this->buttonConfig['id'] = $id;
        return $this;
    }


    /**
     * Define the button class.
     *
     * @param string $class
     * @return Button
     */
    public function class(string $class): static
    {
        $this->buttonConfig['class'] = $class;
        return $this;
    }


    /**
     * Define the button style.
     *
     * @param string $style
     * @return Button
     */
    public function style(string $style): static
    {
        $this->buttonConfig['style'] = $style;
        return $this;
    }


    /**
     * Define the button onclick event.
     *
     * @param string $onclick
     * @return Button
     */
    public function onclick(string $onclick): static
    {
        $this->buttonConfig['onclick'] = $onclick;
        return $this;
    }


    /**
     * Render the button.
     *
     * @return string
     */
    public function render(): string
    {
        $button = '<button';
        foreach ($this->buttonConfig as $key => $value) {
            $button .= ' ' . $key . '="' . $value . '"';
        }
        $button .= '>';
        return $button;
    }
}