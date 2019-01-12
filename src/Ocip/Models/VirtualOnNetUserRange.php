<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VirtualOnNetUserRange
 *
 * Virtual On-Net User Range.
 *
 * @Groups [{"id":"179b744b0183abe614e8c32c17c96b7e:352","type":"sequence"}]
 */
class VirtualOnNetUserRange
{

    /**
     * @ElementName dnRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNRange
     * @Group 179b744b0183abe614e8c32c17c96b7e:352
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange|null
     */
    private $dnRange = null;

    /**
     * @ElementName extensionRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17
     * @Group 179b744b0183abe614e8c32c17c96b7e:352
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17|null
     */
    private $extensionRange = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:352
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:352
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName callingLineIdFirstName
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:352
     * @var string|null
     */
    private $callingLineIdFirstName = null;

    /**
     * @ElementName callingLineIdLastName
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:352
     * @var string|null
     */
    private $callingLineIdLastName = null;

    /**
     * @ElementName virtualOnNetCallTypeName
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:352
     * @var string|null
     */
    private $virtualOnNetCallTypeName = null;

    /**
     * Getter for dnRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange
     */
    public function getDnRange()
    {
        return $this->dnRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnRange;
    }

    /**
     * Setter for dnRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange $dnRange
     * @return $this
     */
    public function setDnRange(\CWM\BroadWorksConnector\Ocip\Models\DNRange $dnRange)
    {
        $this->dnRange = $dnRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnRange()
    {
        $this->dnRange = null;
        return $this;
    }

    /**
     * Getter for extensionRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17
     */
    public function getExtensionRange()
    {
        return $this->extensionRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extensionRange;
    }

    /**
     * Setter for extensionRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17 $extensionRange
     * @return $this
     */
    public function setExtensionRange(\CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17 $extensionRange)
    {
        $this->extensionRange = $extensionRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtensionRange()
    {
        $this->extensionRange = null;
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

