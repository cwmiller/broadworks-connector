<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCICallControlApplicationAddACLEntryRequest
 *
 * Add an entry to the OCI call control application access control list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOCICallControlApplicationAddACLEntryRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName applicationId
     * @var string|null
     */
    private $applicationId = null;

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
     * Getter for applicationId
     *
     * @ElementName applicationId
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @ElementName applicationId
     * @param string|null $applicationId
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

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


}

