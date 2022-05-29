<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDirectoryNumberHuntingGetRequest17sp1
 *
 * Request to get the properties of the DNH service for a specified serviceUserId.
 *         It gets the agents of a call center or hunt group that are members
 *         of a directory number hunting group.  They are agents that are not already
 *         assigned to any other directory number hunting group.
 *         The response is either GroupDirectoryNumberHuntingGetResponse or ErrorResponse.
 *
 * @see GroupDirectoryNumberHuntingGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"7c509136e6ce6be616e313c3b28a0449:84","type":"sequence"}]
 */
class GroupDirectoryNumberHuntingGetRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 7c509136e6ce6be616e313c3b28a0449:84
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

