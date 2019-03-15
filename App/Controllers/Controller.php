<?php

namespace App\Controllers;


use App\View;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class Controller
{
    protected $view;
    protected $twig;

    public function __construct()
    {
        $this->view = new View;
        $loader = new FilesystemLoader(__DIR__ . '/../templates');
        $this->twig = new Environment($loader);
    }

    abstract protected function handle();

    public function action()
    {
        $this->handle();
    }

    protected function loadTemplate(string $template)
    {
        return $this->twig->load($template);
    }
}