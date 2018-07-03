<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceStatisticsRequest14sp9
 *
 * Get Call Center queue and agent statistics.
 *         The response is either GroupCallCenterGetInstanceStatisticsResponse14sp9
 * or ErrorResponse.
 *
 * @see GroupCallCenterGetInstanceStatisticsResponse14sp9
 * @see ErrorResponse
 */
class GroupCallCenterGetInstanceStatisticsRequest14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName statisticsRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange|null
     */
    private $statisticsRange = null;

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

    /**
     * Getter for statisticsRange
     *
     * @ElementName statisticsRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange|null
     */
    public function getStatisticsRange()
    {
        return $this->statisticsRange;
    }

    /**
     * Setter for statisticsRange
     *
     * @ElementName statisticsRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange|null $statisticsRange
     * @return $this
     */
    public function setStatisticsRange($statisticsRange)
    {
        $this->statisticsRange = $statisticsRange;
        return $this;
    }


}

