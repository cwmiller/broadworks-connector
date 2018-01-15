<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VirtualOnNetUser
 *
 * Virtual On-Net User.
 */
class VirtualOnNetUser
{

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName extension
     * @var string|null
     */
    private $extension = null;

    /**
     * @ElementName firstName
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName lastName
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName callingLineIdFirstName
     * @var string|null
     */
    private $callingLineIdFirstName = null;

    /**
     * @ElementName callingLineIdLastName
     * @var string|null
     */
    private $callingLineIdLastName = null;

    /**
     * @ElementName virtualOnNetCallTypeName
     * @var string|null
     */
    private $virtualOnNetCallTypeName = null;

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
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
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Setter for extension
     *
     * @ElementName extension
     * @param string|null $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Getter for firstName
     *
     * @ElementName firstName
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @ElementName firstName
     * @param string|null $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Getter for lastName
     *
     * @ElementName lastName
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @ElementName lastName
     * @param string|null $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
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
     * Getter for virtualOnNetCallTypeName
     *
     * @ElementName virtualOnNetCallTypeName
     * @return string|null
     */
    public function getVirtualOnNetCallTypeName()
    {
        return $this->virtualOnNetCallTypeName;
    }

    /**
     * Setter for virtualOnNetCallTypeName
     *
     * @ElementName virtualOnNetCallTypeName
     * @param string|null $virtualOnNetCallTypeName
     * @return $this
     */
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName)
    {
        $this->virtualOnNetCallTypeName = $virtualOnNetCallTypeName;
        return $this;
    }


}

