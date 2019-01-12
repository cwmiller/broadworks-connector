<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupDeviceMultipleContactEndpointModify22
 *
 * Trunk group device endpoint used in the context of modify that can have multiple contacts.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:4216","type":"sequence"}]
 */
class TrunkGroupDeviceMultipleContactEndpointModify22
{

    /**
     * @ElementName name
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4216
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4216
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName contactList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4216
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $contactList = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
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
     * Getter for contactList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22|null
     */
    public function getContactList()
    {
        return $this->contactList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contactList;
    }

    /**
     * Setter for contactList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22|null $contactList
     * @return $this
     */
    public function setContactList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22 $contactList)
    {
        if ($contactList === null) {
            $this->contactList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->contactList = $contactList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContactList()
    {
        $this->contactList = null;
        return $this;
    }


}

