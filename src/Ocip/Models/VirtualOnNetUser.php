<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VirtualOnNetUser
 *
 * Virtual On-Net User.
 *
 * @Groups [{"id":"179b744b0183abe614e8c32c17c96b7e:331","type":"sequence"}]
 */
class VirtualOnNetUser
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:331
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName extension
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:331
     * @MinLength 2
     * @MaxLength 20
     * @var string|null
     */
    private $extension = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:331
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:331
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName callingLineIdFirstName
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:331
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $callingLineIdFirstName = null;

    /**
     * @ElementName callingLineIdLastName
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:331
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $callingLineIdLastName = null;

    /**
     * @ElementName virtualOnNetCallTypeName
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:331
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $virtualOnNetCallTypeName = null;

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extension;
    }

    /**
     * Setter for extension
     *
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtension()
    {
        $this->extension = null;
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
     * Getter for virtualOnNetCallTypeName
     *
     * @return string
     */
    public function getVirtualOnNetCallTypeName()
    {
        return $this->virtualOnNetCallTypeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->virtualOnNetCallTypeName;
    }

    /**
     * Setter for virtualOnNetCallTypeName
     *
     * @param string $virtualOnNetCallTypeName
     * @return $this
     */
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName)
    {
        $this->virtualOnNetCallTypeName = $virtualOnNetCallTypeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVirtualOnNetCallTypeName()
    {
        $this->virtualOnNetCallTypeName = null;
        return $this;
    }


}

