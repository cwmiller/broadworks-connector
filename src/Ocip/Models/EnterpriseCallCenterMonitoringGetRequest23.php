<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterMonitoringGetRequest23
 *
 * Request the enterprise level data associated with Call Center Monitoring.
 *         The response is either an EnterpriseCallCenterMonitoringGetResponse23 or an
 *         ErrorResponse.
 *
 * @see EnterpriseCallCenterMonitoringGetResponse23
 * @see ErrorResponse
 * @Groups [{"id":"b5e86c5d60603bdb61de308d278500d9:48","type":"sequence"}]
 */
class EnterpriseCallCenterMonitoringGetRequest23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b5e86c5d60603bdb61de308d278500d9:48
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }
}

