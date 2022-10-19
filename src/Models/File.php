<?php

namespace Devavi\Architecture\Models;

use Devavi\Architecture\TextServices\TextField;

class File
{
    public string $content;
    public string $filename;
    public TextField $textField;

    public function __construct(string $filename, string $content)
    {
        $this->content = $content;
        $this->filename = $filename;
        $this->textField = new TextField();
    }

    public function getText(): string
    {
        return file_get_contents($this->filename);
    }


    public function getSelectedText($start, $end)
    {
        $this->textField->setAllCoords($start, $end);
    }
}
