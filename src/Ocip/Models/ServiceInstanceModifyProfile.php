<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceInstanceModifyProfile
 *
 * Service Profile Information for group service used when modifying an existing
 * service instance.
 */
class ServiceInstanceModifyProfile
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName callingLineIdLastName
     * @var string|null
     */
    private $callingLineIdLastName = null;

    /**
     * @ElementName callingLineIdFirstName
     * @var string|null
     */
    private $callingLineIdFirstName = null;

    /**
     * @ElementName hiraganaLastName
     * @var string|null
     */
    private $hiraganaLastName = null;

    /**
     * @ElementName hiraganaFirstName
     * @var string|null
     */
    private $hiraganaFirstName = null;

    /**
     * @ElementName phoneNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumber = null;

    /**
     * @ElementName extension
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $extension = null;

    /**
     * @ElementName password
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName department
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $department = null;

    /**
     * @ElementName language
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName timeZone
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName sipAliasList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipAliasList = null;

    /**
     * @ElementName publicUserIdentity
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $publicUserIdentity = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for callingLineIdLastName
     *
     * @ElementName callingLineIdLastName
     * @return string|null
     */
    public function getCallingLineIdLastName()
    {
        return $this->callingLineIdLastName;
    }

    /**
     * Setter for callingLineIdLastName
     *
     * @ElementName callingLineIdLastName
     * @param string|null $callingLineIdLastName
     * @return $this
     */
    public function setCallingLineIdLastName($callingLineIdLastName)
    {
        $this->callingLineIdLastName = $callingLineIdLastName;
        return $this;
    }

    /**
     * Getter for callingLineIdFirstName
     *
     * @ElementName callingLineIdFirstName
     * @return string|null
     */
    public function getCallingLineIdFirstName()
    {
        return $this->callingLineIdFirstName;
    }

    /**
     * Setter for callingLineIdFirstName
     *
     * @ElementName callingLineIdFirstName
     * @param string|null $callingLineIdFirstName
     * @return $this
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName)
    {
        $this->callingLineIdFirstName = $callingLineIdFirstName;
        return $this;
    }

    /**
     * Getter for hiraganaLastName
     *
     * @ElementName hiraganaLastName
     * @return string|null
     */
    public function getHiraganaLastName()
    {
        return $this->hiraganaLastName;
    }

    /**
     * Setter for hiraganaLastName
     *
     * @ElementName hiraganaLastName
     * @param string|null $hiraganaLastName
     * @return $this
     */
    public function setHiraganaLastName($hiraganaLastName)
    {
        $this->hiraganaLastName = $hiraganaLastName;
        return $this;
    }

    /**
     * Getter for hiraganaFirstName
     *
     * @ElementName hiraganaFirstName
     * @return string|null
     */
    public function getHiraganaFirstName()
    {
        return $this->hiraganaFirstName;
    }

    /**
     * Setter for hiraganaFirstName
     *
     * @ElementName hiraganaFirstName
     * @param string|null $hiraganaFirstName
     * @return $this
     */
    public function setHiraganaFirstName($hiraganaFirstName)
    {
        $this->hiraganaFirstName = $hiraganaFirstName;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for extension
     *
     * @ElementName extension
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Setter for extension
     *
     * @ElementName extension
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Getter for password
     *
     * @ElementName password
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Setter for password
     *
     * @ElementName password
     * @param string|null $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Getter for department
     *
     * @ElementName department
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Setter for department
     *
     * @ElementName department
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil $department
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Getter for language
     *
     * @ElementName language
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Setter for language
     *
     * @ElementName language
     * @param string|null $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Getter for timeZone
     *
     * @ElementName timeZone
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @ElementName timeZone
     * @param string|null $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * Getter for sipAliasList
     *
     * @ElementName sipAliasList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSipAliasList()
    {
        return $this->sipAliasList;
    }

    /**
     * Setter for sipAliasList
     *
     * @ElementName sipAliasList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null|\CWM\BroadWorksConnector\Ocip\Nil $sipAliasList
     * @return $this
     */
    public function setSipAliasList($sipAliasList)
    {
        $this->sipAliasList = $sipAliasList;
        return $this;
    }

    /**
     * Getter for publicUserIdentity
     *
     * @ElementName publicUserIdentity
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity;
    }

    /**
     * Setter for publicUserIdentity
     *
     * @ElementName publicUserIdentity
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $publicUserIdentity
     * @return $this
     */
    public function setPublicUserIdentity($publicUserIdentity)
    {
        $this->publicUserIdentity = $publicUserIdentity;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @ElementName callingLineIdPhoneNumber
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @ElementName callingLineIdPhoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        return $this;
    }


}

