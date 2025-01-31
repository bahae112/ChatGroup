<?php
class Utilisateur{
    private $email;
    private $psw;
    private $name;
    private $birthday;
    private $tel;
    private $visibility;
    private $site;
    private $desc;

    public function __construct($email,$psw,$name,$birthday,$tel,$visibility,$site,$desc)
    {
        $this->email=$email;
        $this->psw=$psw;
        $this->name=$name;
        $this->birthday=$birthday;
        $this->tel=$tel;
        $this->visibility=$visibility;
        $this->site=$site;
        $this->desc=$desc;
    }
    

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of psw
     */
    public function getPsw()
    {
        return $this->psw;
    }

    /**
     * Set the value of psw
     */
    public function setPsw($psw): self
    {
        $this->psw = $psw;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set the value of birthday
     */
    public function setBirthday($birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get the value of tel
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     */
    public function setTel($tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of visibility
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set the value of visibility
     */
    public function setVisibility($visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get the value of site
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set the value of site
     */
    public function setSite($site): self
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get the value of desc
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set the value of desc
     */
    public function setDesc($desc): self
    {
        $this->desc = $desc;

        return $this;
    }
}

?>