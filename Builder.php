<?php

namespace NGFramer\ElementsPHP;

use NGFramer\ElementsPHP\Elements\Form;

class Builder
{
    /**
     * Singleton instance saving variable.
     *
     * @var Builder
     */
    private static Builder $instance;


    /**
     * Elements constructor.
     */
    private function __construct() {}


    /**
     * Function to initialize the class.
     *
     * @return Builder
     */
    public function init(): static
    {
        if (empty(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }


    /**
     * Function to build the form element.
     *
     * @return Form
     */
    public function form(): Form
    {
        return new Form();
    }
}