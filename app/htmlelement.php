<?php

namespace App;

Class HtmlElement

{
    /**
     * @var 
     */ 

    private $attributes;

    public function __construct(string $name, array $attributes = [], $content =null)
    {
        $this->name = $name;
        $this->content = $content;
        $this->attributes = $attributes;

    }

    public function render()
    {
        if(! empty($this->attributes)){

            $result = '<'.$this->name.'>';
        }else {
            $result = '<'.$this->name.'>';
        }


        $result = '<'.$this->name.'>';

        $result = '<'.$this->name.'>';

        $result .= $this->content;

        $result .= '</'.$this->name.'>';

        return $result;
    }
}