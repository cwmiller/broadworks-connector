<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupDeviceMultipleContactEndpointModify
 *
 * Trunk group device endpoint used in the context of modify that can have multiple
 * contacts.
 */
class TrunkGroupDeviceMultipleContactEndpointModify
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName linePort
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName contactList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $contactList = null;

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
     * Getter for linePort
     *
     * @ElementName linePort
     * @return string|null
     */
    public function getLinePort()
    {
        return $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @ElementName linePort
     * @param string|null $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * Getter for contactList
     *
     * @ElementName contactList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getContactList()
    {
        return $this->contactList;
    }

    /**
     * Setter for contactList
     *
     * @ElementName contactList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList|null|\CWM\BroadWorksConnector\Ocip\Nil $contactList
     * @return $this
     */
    public function setContactList($contactList)
    {
        $this->contactList = $contactList;
        return $this;
    }


}

