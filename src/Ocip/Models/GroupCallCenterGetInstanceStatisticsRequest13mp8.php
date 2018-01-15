<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceStatisticsRequest13mp8
 *
 * Get Call Center queue and agent statistics.
 *         The response is either GroupCallCenterGetInstanceStatisticsResponse13mp8
 * or ErrorResponse.
 *         Replaced By: GroupCallCenterGetInstanceStatisticsRequest14sp9
 */
class GroupCallCenterGetInstanceStatisticsRequest13mp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

