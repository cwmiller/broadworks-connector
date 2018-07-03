<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceStatisticsReportingRequest
 *
 * Request to get the call center statistics reporting settings.
 *         The response is either
 * GroupCallCenterGetInstanceStatisticsReportingResponse or ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterGetInstanceStatisticsReportingRequest16
 *
 * @see GroupCallCenterGetInstanceStatisticsReportingResponse
 * @see ErrorResponse
 * @see GroupCallCenterGetInstanceStatisticsReportingRequest16
 */
class GroupCallCenterGetInstanceStatisticsReportingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

