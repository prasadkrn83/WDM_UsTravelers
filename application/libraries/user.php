<?php
    class user implements \JsonSerializable{
        private $id;
        private $userId;
        private $password;
        private $fname;
        private $mname;
        private $lname;
        private $emailId;
        private $dob;
        private $address1;
        private $address2;
        private $countryId;
        private $stateId;
        private $cityId;
        private $zipcode;
        private $passport;
        private $visatypeId;
        private $visaNumber;
        private $visaExpDate;
        private $type;
        private $userAccountStatus;
        private $issuingCountry;
        private $pexpdate;




    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

        public function getPassport()
    {
        return $this->passport;
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
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param mixed $fname
     *
     * @return self
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMname()
    {
        return $this->mname;
    }

    /**
     * @param mixed $mname
     *
     * @return self
     */
    public function setMname($mname)
    {
        $this->mname = $mname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @param mixed $lname
     *
     * @return self
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * @param mixed $emailId
     *
     * @return self
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     *
     * @return self
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param mixed $address1
     *
     * @return self
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param mixed $address2
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param mixed $countryId
     *
     * @return self
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * @param mixed $stateId
     *
     * @return self
     */
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param mixed $cityId
     *
     * @return self
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param mixed $zipcode
     *
     * @return self
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVisatypeId()
    {
        return $this->visatypeId;
    }

    /**
     * @param mixed $visatypeId
     *
     * @return self
     */
    public function setVisatypeId($visatypeId)
    {
        $this->visatypeId = $visatypeId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVisaNumber()
    {
        return $this->visaNumber;
    }

    /**
     * @param mixed $visaNumber
     *
     * @return self
     */
    public function setVisaNumber($visaNumber)
    {
        $this->visaNumber = $visaNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVisaExpDate()
    {
        return $this->visaExpDate;
    }

    /**
     * @param mixed $visaExpDate
     *
     * @return self
     */
    public function setVisaExpDate($visaExpDate)
    {
        $this->visaExpDate = $visaExpDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserAccountStatus()
    {
        return $this->userAccountStatus;
    }

    /**
     * @param mixed $userAccountStatus
     *
     * @return self
     */
    public function setUserAccountStatus($userAccountStatus)
    {
        $this->userAccountStatus = $userAccountStatus;

        return $this;
    }
     public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @return mixed
     */
    public function getIssuingCountry()
    {
        return $this->issuingCountry;
    }

    /**
     * @param mixed $issuingCountry
     *
     * @return self
     */
    public function setIssuingCountry($issuingCountry)
    {
        $this->issuingCountry = $issuingCountry;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPexpdate()
    {
        return $this->pexpdate;
    }

    /**
     * @param mixed $pexpdate
     *
     * @return self
     */
    public function setPexpdate($pexpdate)
    {
        $this->pexpdate = $pexpdate;

        return $this;
    }

    /**
     * @param mixed $passport
     *
     * @return self
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;

        return $this;
    }
}
?>
