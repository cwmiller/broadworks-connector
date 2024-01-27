<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupMultipleContactPilotUser
 *
 * Trunk Group pilot user information used when adding a Trunk Group.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5573","type":"sequence"}]
 */
class TrunkGroupMultipleContactPilotUser
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $lastName = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $firstName = null;

    /**
     * @ElementName callingLineIdLastName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $callingLineIdLastName = null;

    /**
     * @ElementName callingLineIdFirstName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $callingLineIdFirstName = null;

    /**
     * @ElementName hiraganaLastName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $hiraganaLastName = null;

    /**
     * @ElementName hiraganaFirstName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $hiraganaFirstName = null;

    /**
     * @ElementName password
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $password = null;

    /**
     * @ElementName department
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey,\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    protected $department = null;

    /**
     * @ElementName language
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $timeZone = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

    /**
     * @ElementName contact
     * @Type string
     * @Array
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @MinLength 1
     * @MaxLength 1020
     * @var string[]
     */
    protected $contact = [
        
    ];

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5573
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $callingLineIdPhoneNumber = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastName()
    {
        $this->lastName = null;
        return $this;
    }

    /**
     * Getter for firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFirstName()
    {
        $this->firstName = null;
        return $this;
    }

    /**
     * Getter for callingLineIdLastName
     *
     * @return string
     */
    public function getCallingLineIdLastName()
    {
        return $this->callingLineIdLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdLastName;
    }

    /**
     * Setter for callingLineIdLastName
     *
     * @param string $callingLineIdLastName
     * @return $this
     */
    public function setCallingLineIdLastName($callingLineIdLastName)
    {
        $this->callingLineIdLastName = $callingLineIdLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdLastName()
    {
        $this->callingLineIdLastName = null;
        return $this;
    }

    /**
     * Getter for callingLineIdFirstName
     *
     * @return string
     */
    public function getCallingLineIdFirstName()
    {
        return $this->callingLineIdFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdFirstName;
    }

    /**
     * Setter for callingLineIdFirstName
     *
     * @param string $callingLineIdFirstName
     * @return $this
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName)
    {
        $this->callingLineIdFirstName = $callingLineIdFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdFirstName()
    {
        $this->callingLineIdFirstName = null;
        return $this;
    }

    /**
     * Getter for hiraganaLastName
     *
     * @return string
     */
    public function getHiraganaLastName()
    {
        return $this->hiraganaLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hiraganaLastName;
    }

    /**
     * Setter for hiraganaLastName
     *
     * @param string $hiraganaLastName
     * @return $this
     */
    public function setHiraganaLastName($hiraganaLastName)
    {
        $this->hiraganaLastName = $hiraganaLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHiraganaLastName()
    {
        $this->hiraganaLastName = null;
        return $this;
    }

    /**
     * Getter for hiraganaFirstName
     *
     * @return string
     */
    public function getHiraganaFirstName()
    {
        return $this->hiraganaFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hiraganaFirstName;
    }

    /**
     * Setter for hiraganaFirstName
     *
     * @param string $hiraganaFirstName
     * @return $this
     */
    public function setHiraganaFirstName($hiraganaFirstName)
    {
        $this->hiraganaFirstName = $hiraganaFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHiraganaFirstName()
    {
        $this->hiraganaFirstName = null;
        return $this;
    }

    /**
     * Getter for password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->password;
    }

    /**
     * Setter for password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPassword()
    {
        $this->password = null;
        return $this;
    }

    /**
     * Getter for department
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     */
    public function getDepartment()
    {
        return $this->department instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->department;
    }

    /**
     * Setter for department
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $department
     * @return $this
     */
    public function setDepartment(\CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartment()
    {
        $this->department = null;
        return $this;
    }

    /**
     * Getter for language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->language;
    }

    /**
     * Setter for language
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguage()
    {
        $this->language = null;
        return $this;
    }

    /**
     * Getter for timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @param string $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZone()
    {
        $this->timeZone = null;
        return $this;
    }

    /**
     * Getter for linePort
     *
     * @return string
     */
    public function getLinePort()
    {
        return $this->linePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @param string $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePort()
    {
        $this->linePort = null;
        return $this;
    }

    /**
     * Getter for contact
     *
     * @return string[]
     */
    public function getContact()
    {
        return $this->contact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contact;
    }

    /**
     * Setter for contact
     *
     * @param string[] $contact
     * @return $this
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContact()
    {
        $this->contact = null;
        return $this;
    }

    /**
     * Adder for contact
     *
     * @param string $contact
     * @return $this
     */
    public function addContact(string $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @return string
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @param string $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdPhoneNumber()
    {
        $this->callingLineIdPhoneNumber = null;
        return $this;
    }
}

