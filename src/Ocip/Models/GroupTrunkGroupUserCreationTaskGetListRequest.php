<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskGetListRequest
 *
 * Get the list of user creation tasks for a trunk group.
 *         The response is either GroupTrunkGroupUserCreationTaskGetListResponse or
 * ErrorResponse.
 */
class GroupTrunkGroupUserCreationTaskGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

