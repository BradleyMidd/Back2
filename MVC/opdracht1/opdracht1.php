<?php

class Message
{

    public $subject;
    public $text;

    function setSubject($name)
    {

        if(strlen($name) < 32)
        {
            $name = str_replace('\' ', '\'', ucwords(str_replace('\'', '\' ', strtolower($name))));
            $this->subject = $name;

        }

        else
        {

            return "Onderwerp is te lang, probeer het opnieuw";

        }
    }

    function getSubject()
    {

        return $this->subject;

    }

    function setText($t)
    {

        $this->text = $t;

    }

    function getText()
    {

        return $this->text;

    }

}