<?php
class Message{
    private $id;
    private $message;
    private $emetteur;
    private $date;

    public function __construct($id,$message,$emetteur,$date)
    {
        $this->id=$id;
        $this->message=$message;
        $this->emetteur=$emetteur;
        $this->date=$date;
    }
    

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     */
    public function setMessage($message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of emetteur
     */
    public function getEmetteur()
    {
        return $this->emetteur;
    }

    /**
     * Set the value of emetteur
     */
    public function setEmetteur($emetteur): self
    {
        $this->emetteur = $emetteur;

        return $this;
    }

    /**
     * Get the value of Date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of Date
     */
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }
}

?>