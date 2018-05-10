<?php
class portofentry implements \JsonSerializable{
	private $id;
	private $locationAddress;
	private $mailingAddress;
	private $operatingHours;
	private $phone;
	private $fax;
	private $email;




    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * @param mixed $locationAddress
     *
     * @return self
     */
    public function setLocationAddress($locationAddress)
    {
        $this->locationAddress = $locationAddress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMailingAddress()
    {
        return $this->mailingAddress;
    }

    /**
     * @param mixed $mailingAddress
     *
     * @return self
     */
    public function setMailingAddress($mailingAddress)
    {
        $this->mailingAddress = $mailingAddress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOperatingHours()
    {
        return $this->operatingHours;
    }

    /**
     * @param mixed $operatingHours
     *
     * @return self
     */
    public function setOperatingHours($operatingHours)
    {
        $this->operatingHours = $operatingHours;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     *
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
?>