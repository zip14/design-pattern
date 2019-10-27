<?php
namespace Singletone;

class FileSave
{
    private $fileName;

    private static $_instance = null;

    private function __construct()
    {
        $this->fileName = md5(microtime()) . '.txt';
    }

    public function getInstance() : FileSave
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function save($dir)
    {
        $fileDir = $dir . '/' . $this->fileName;
        $content = "text";

        if (file_exists($fileDir)) {
            $content = file_get_contents($fileDir) . $content;
        }

        file_put_contents($fileDir, $content);
    }

    public function __clone()
    {
    }

    public function __wakeup()
    {
    }
}