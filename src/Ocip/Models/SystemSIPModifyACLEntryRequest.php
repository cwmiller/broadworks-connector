<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPModifyACLEntryRequest
 *
 * Modify an entry from the SIP access control list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPModifyACLEntryRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName netAddress
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName transportProtocol
     * @var string|null
     */
    private $transportProtocol = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for netAddress
     *
     * @ElementName netAddress
     * @return string|null
     */
    public function getNetAddress()
    {
        return $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @ElementName netAddress
     * @param string|null $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * Getter for transportProtocol
     *
     * @ElementName transportProtocol
     * @return string|null
     */
    public function getTransportProtocol()
    {
        return $this->transportProtocol;
    }

    /**
     * Setter for transportProtocol
     *
     * @ElementName transportProtocol
     * @param string|null $transportProtocol
     * @return $this
     */
    public function setTransportProtocol($transportProtocol)
    {
        $this->transportProtocol = $transportProtocol;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

