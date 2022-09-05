<?php

class card
{
    protected $number;
    protected $expirationdate;
    protected $cvv;

    public function __construct($_number, $_expirationdate, $cvv)
    {

        $this->number = $_number;
        $this->expirationdate = $_expirationdate;
        $this->cvv = $cvv;
    }

    public function getnumber()
    {

        return $this->number;
    }

    public function setnumber($_number)
    {

        $this->number = $_number;
    }

    public function getexpirationdate()
    {

        return $this->expirationdate;
    }

    public function setexpirationdate($_expirationdate)
    {

        $this->expirationdate = $_expirationdate;
    }

    public function getcvv()
    {

        return $this->cvv;
    }

    public function setcvv($cvv)
    {

        $this->cvv = $cvv;
    }
}