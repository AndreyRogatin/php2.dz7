<?php

namespace App;


class View
{
    protected $data = [];

    public function assign($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function display($template)
    {
        // $this->data['articles']
        // extract($this->data)
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }

        include $template;
    }
}