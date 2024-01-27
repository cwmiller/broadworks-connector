<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeGetInstanceRequest20sp1
 *
 * Request to get all the information of a collaborate bridge.
 *         The response is either GroupCollaborateBridgeGetInstanceResponse20sp1 or ErrorResponse.
 *
 * @see GroupCollaborateBridgeGetInstanceResponse20sp1
 * @see ErrorResponse
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:393","type":"sequence"}]
 */
class GroupCollaborateBridgeGetInstanceRequest20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group bc805893b9cc7e3e01eec64e9ad62768:393
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }
}

