<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCIReportingAddACLEntryRequest13mp9
 *
 * Add an entry to the OCI Reporting Access Control List.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemOCIReportingAddACLEntryRequest13mp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName netAddress
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName restrictMessages
     * @var bool|null
     */
    private $restrictMessages = null;

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

    /**
     * Getter for restrictMessages
     *
     * @ElementName restrictMessages
     * @return bool|null
     */
    public function getRestrictMessages()
    {
        return $this->restrictMessages;
    }

    /**
     * Setter for restrictMessages
     *
     * @ElementName restrictMessages
     * @param bool|null $restrictMessages
     * @return $this
     */
    public function setRestrictMessages($restrictMessages)
    {
        $this->restrictMessages = $restrictMessages;
        return $this;
    }


}

