<?php
namespace Todo\Model;

class Todo
{
    public $id;
    public $description;

    public function exchangeArray($data)
    {
        $this->id     = (!empty($data['id'])) ? $data['id'] : null;
        $this->description = (!empty($data['description'])) ? $data['description'] : null;
    }
}
