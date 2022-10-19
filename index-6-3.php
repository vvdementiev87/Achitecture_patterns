<?php

use Devavi\Architecture\TextServices\EditorService;
use Devavi\Architecture\Services\WordService;

spl_autoload_register('load');

function load($className)
{
    $file = $className . ".php";
    $nameSpace = "Devavi\Architecture";
    $file = str_replace($nameSpace, "src", $file);
    $file = str_replace("\\", "/", $file);
    $file = str_replace("_", "/", $file);
    if (file_exists($file)) {
        include $file;
    }
};

$file = 'File.txt';

$application = new WordService();
$applicationEditor = new EditorService($application->openFile($file));
$applicationEditor->getSelectedText(0, 7);
echo $applicationEditor->clipboard . PHP_EOL;
$applicationEditor->copy();
$applicationEditor->setCarriage(5);
echo $applicationEditor->clipboard . PHP_EOL;
$applicationEditor->paste();
$applicationEditor->setClipboard('To delete');
$applicationEditor->setCarriage(1);
$applicationEditor->paste();
$applicationEditor->undo();
$applicationEditor->undo();
$applicationEditor->getSelectedText(0, 10);
$applicationEditor->cut();
$applicationEditor->undo();
$applicationEditor->setCarriage(9);
$applicationEditor->paste();
$applicationEditor->undo();
echo $applicationEditor->file->content;
$application->saveFile($applicationEditor->file);
