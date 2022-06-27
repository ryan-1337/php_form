<?php
namespace App\Type;

class TextType implements TypeInterface
{
    public function build(object $field): string
    {
        var_dump($field);
        return '<input type="text" id="'.$field->name.'" name="'.$field->name.'" required="'.$field->required.'">';
    }
}