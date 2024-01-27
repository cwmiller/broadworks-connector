<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeDeleteInstanceRequest
 *
 * Delete a collaborate bridge from a group.
 *         The request fails when attempting to delete the default collaborate bridge.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:187","type":"sequence"}]
 */
class GroupCollaborateBridgeDeleteInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group bc805893b9cc7e3e01eec64e9ad62768:187
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

