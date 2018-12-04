<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceStatisticsRequest14sp9
 *
 * Get Call Center queue and agent statistics.
 *         The response is either GroupCallCenterGetInstanceStatisticsResponse14sp9 or ErrorResponse.
 *
 * @see GroupCallCenterGetInstanceStatisticsResponse14sp9
 * @see ErrorResponse
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:4174","type":"sequence"}]
 */
class GroupCallCenterGetInstanceStatisticsRequest14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:4174
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName statisticsRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:4174
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange|null
     */
    private $statisticsRange = null;

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

    /**
     * Getter for statisticsRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange
     */
    public function getStatisticsRange()
    {
        return $this->statisticsRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statisticsRange;
    }

    /**
     * Setter for statisticsRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange $statisticsRange
     * @return $this
     */
    public function setStatisticsRange(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange $statisticsRange)
    {
        $this->statisticsRange = $statisticsRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatisticsRange()
    {
        $this->statisticsRange = null;
        return $this;
    }


}

