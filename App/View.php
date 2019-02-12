<?php

namespace App;


class View
{
    use Magic;

    /**
     * @deprecated
     */
    public function assign($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function render($template)
    {
        // $this->data['articles']
        // extract($this->data)
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }

        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }
}