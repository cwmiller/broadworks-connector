<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VirtualOnNetUserRange
 *
 * Virtual On-Net User Range.
 */
class VirtualOnNetUserRange
{

    /**
     * @ElementName dnRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange|null
     */
    private $dnRange = null;

    /**
     * @ElementName extensionRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17|null
     */
    private $extensionRange = null;

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
     * Getter for dnRange
     *
     * @ElementName dnRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange|null
     */
    public function getDnRange()
    {
        return $this->dnRange;
    }

    /**
     * Setter for dnRange
     *
     * @ElementName dnRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange|null $dnRange
     * @return $this
     */
    public function setDnRange(\CWM\BroadWorksConnector\Ocip\Models\DNRange $dnRange)
    {
        $this->dnRange = $dnRange;
        return $this;
    }

    /**
     * Getter for extensionRange
     *
     * @ElementName extensionRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17|null
     */
    public function getExtensionRange()
    {
        return $this->extensionRange;
    }

    /**
     * Setter for extensionRange
     *
     * @ElementName extensionRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17|null $extensionRange
     * @return $this
     */
    public function setExtensionRange(\CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17 $extensionRange)
    {
        $this->extensionRange = $extensionRange;
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

