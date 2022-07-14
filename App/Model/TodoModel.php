<?php

namespace App\Model;

use DateTime;

class TodoModel {


    private $title;
    private $paragraph;
    private $date;


    public function __construct(string $title, string $paragraph, DateTime $date)
    {
        $this->title = $title;
        $this->paragraph = $paragraph;
        $this->date = new DateTime();
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }    

    /**
     * Get the value of paragraph
     */ 
    public function getParagraph()
    {
        return $this->paragraph;
    }

    /**
     * Set the value of paragraph
     *
     * @return  self
     */ 
    public function setParagraph($paragraph)
    {
        $this->paragraph = $paragraph;

        return $this;
    }

    
    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }




}