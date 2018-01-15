<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDirectoryNumberHuntingGetAvailableUserListRequest
 *
 * Request to get the agents of a call center or hunt group that are available
 *         to be assigned to a directory number hunting group.  They are agents
 * that
 *         are not already assigned to any other directory number hunting group.
 *         The response is either
 *         GroupDirectoryNumberHuntingGetAvailableUserListResponse or
 * ErrorResponse.
 */
class GroupDirectoryNumberHuntingGetAvailableUserListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }


}

