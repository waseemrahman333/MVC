<?php
namespace Framework;
class Viewer
{
    public function render($filename, $data = [])
    {
        // dump($data);
        extract($data, EXTR_SKIP);

        ob_start();
        require_once "View/" . $filename . ".php";
        return ob_get_clean();

    }
}