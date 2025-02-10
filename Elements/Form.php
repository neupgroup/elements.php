<?php

namespace NGFramer\ElementsPHP\Elements;

class Form
{
    /**
     * Variable to store the form config data.
     */
    private array $formConfig = [];


    /**
     * Define the form data.
     *
     * @param string $url
     * @return Form
     */
    public function action(string $url): static
    {
        $this->formConfig['action'] = $url;
        return $this;
    }


    /**
     * Define the form method.
     *
     * @param string $method
     * @return Form
     */
    public function method(string $method): static
    {
        $this->formConfig['method'] = $method;
        return $this;
    }


    /**
     * Define the form enctype.
     *
     * @param string $enctype
     * @return Form
     */
    public function enctype(string $enctype): static
    {
        $this->formConfig['enctype'] = $enctype;
        return $this;
    }


    /**
     * Define the id for the form.
     *
     * @param string $id
     * @return $this
     */
    public function id(string $id): static
    {
        $this->formConfig['id'] = $id;
        return $this;
    }


    /**
     * Define the name for the form.
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name): static
    {
        $this->formConfig['name'] = $name;
        return $this;
    }


    /**
     * Define the class for the form.
     *
     * @param string $class
     * @return $this
     */
    public function class(string $class): static
    {
        $this->formConfig['class'] = $class;
        return $this;
    }


    /**
     * Set the form's style.
     *
     * @param string $style
     * @return $this
     */
    public function style(string $style): static
    {
        $this->formConfig['style'] = $style;
        return $this;
    }


    /**
     * Set the form's onclick event.
     *
     * @param string $onClick
     * @return $this
     */
    public function onClick(string $onClick): static
    {
        $this->formConfig['onClick'] = $onClick;
        return $this;
    }


    /**
     * Set the form's onsubmit event.
     *
     * @param string $onSubmit
     * @return $this
     */
    public function onSubmit(string $onSubmit): static
    {
        $this->formConfig['onSubmit'] = $onSubmit;
        return $this;
    }


    /**
     * Render the form based on the data entered.
     *
     * @return string
     */
    public function render(): string
    {
        $form = '<form';
        foreach ($this->formConfig as $key => $value) {
            $form .= ' ' . $key . '="' . $value . '"';
        }
        return $form;
    }
}