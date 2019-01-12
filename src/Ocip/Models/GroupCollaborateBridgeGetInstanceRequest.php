<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeGetInstanceRequest
 *
 * Request to get all the information of a collaborate bridge.
 *         The response is either GroupCollaborateBridgeGetInstanceResponse or ErrorResponse.
 *         
 *         Replaced by: GroupCollaborateBridgeGetInstanceRequest20sp1
 *
 * @see GroupCollaborateBridgeGetInstanceResponse
 * @see ErrorResponse
 * @see GroupCollaborateBridgeGetInstanceRequest20sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:35298","type":"sequence"}]
 */
class GroupCollaborateBridgeGetInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35298
     * @var string|null
     */
    private $serviceUserId = null;

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

