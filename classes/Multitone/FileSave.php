<?php
namespace Multitone;

class FileSave
{
    private $fileName;

    private static $_instance = array();

    private function __construct($instanceName)
    {
        $this->fileName = $instanceName . '-' . md5(microtime()) . '.txt';
    }

    public function getInstance($instanceName) : FileSave
    {
        if (!isset(self::$_instance[$instanceName])) {
            self::$_instance[$instanceName] = new self($instanceName);
        }

        return self::$_instance[$instanceName];
    }

    public function removeInstance($instanceName)
    {
        if (array_key_exists($instanceName, static::$_instance)) {
            unset(static::$_instance[$instanceName]);
        }
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