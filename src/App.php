<?php

namespace App;


class App
{
    /**
     * @var string
     */
    private $rootDirectory;
    /**
     * @var string
     */
    private $viewDirectory;

    public function __construct(string $rootDirectory)
    {
        $this->rootDirectory = $rootDirectory;
        $this->viewDirectory = "$rootDirectory/view";
    }

    public function run()
    {
        $this->showHome();
    }

    /**
     * Show the home page
     */
    private function showHome()
    {
        $content = require $this->viewDirectory . "/home/home.html.php";

        $this->render($content);
    }

    /**
     * @param string $content
     */
    private function render(string $content)
    {
        require $this->viewDirectory . "/base.html.php";
    }
}