<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDirectoryNumberHuntingGetAvailableUserListRequest
 *
 * Request to get the agents of a call center or hunt group that are available
 *         to be assigned to a directory number hunting group.  They are agents that
 *         are not already assigned to any other directory number hunting group.
 *         The response is either a GroupDirectoryNumberHuntingGetAvailableUserListResponse or ErrorResponse.
 *
 * @see GroupDirectoryNumberHuntingGetAvailableUserListResponse
 * @see ErrorResponse
 * @Groups [{"id":"98227cfa4fa3d2af84e4bff7d8508ae7:46","type":"sequence"}]
 */
class GroupDirectoryNumberHuntingGetAvailableUserListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 98227cfa4fa3d2af84e4bff7d8508ae7:46
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

