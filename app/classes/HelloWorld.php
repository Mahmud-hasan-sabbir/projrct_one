<?php


namespace APP\classes;


class HelloWorld
{
    public function index()
    {
        header('Location: action.php?page=home');
    }
}