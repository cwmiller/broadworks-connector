<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDirectoryNumberHuntingGetRequest
 *
 * Request to get the properties of the DNH service for a specified serviceUserId.
 *         It gets the agents of a call center or hunt group that are members
 *         of a directory number hunting group.  They are agents that are not
 * already
 *         assigned to any other directory number hunting group.
 *         The response is either GroupDirectoryNumberHuntingGetResponse or
 * ErrorResponse.
 *  
 *         Replaced by: GroupDirectoryNumberHuntingGetRequest17sp1
 *
 * @see GroupDirectoryNumberHuntingGetResponse
 * @see ErrorResponse
 * @see GroupDirectoryNumberHuntingGetRequest17sp1
 */
class GroupDirectoryNumberHuntingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
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

