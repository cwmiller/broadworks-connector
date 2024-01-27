<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInterceptUserGetResponse
 *
 * Response to the SystemInterceptUserGetRequest.
 *
 * @see SystemInterceptUserGetRequest
 * @Groups [{"id":"2a762bb9361e88044885b796c1d6b979:219","type":"sequence"}]
 */
class SystemInterceptUserGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName emergencyAndRepairIntercept
     * @Type bool
     * @Group 2a762bb9361e88044885b796c1d6b979:219
     * @var bool|null
     */
    protected $emergencyAndRepairIntercept = null;

    /**
     * Getter for emergencyAndRepairIntercept
     *
     * @return bool
     */
    public function getEmergencyAndRepairIntercept()
    {
        return $this->emergencyAndRepairIntercept instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyAndRepairIntercept;
    }

    /**
     * Setter for emergencyAndRepairIntercept
     *
     * @param bool $emergencyAndRepairIntercept
     * @return $this
     */
    public function setEmergencyAndRepairIntercept($emergencyAndRepairIntercept)
    {
        $this->emergencyAndRepairIntercept = $emergencyAndRepairIntercept;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencyAndRepairIntercept()
    {
        $this->emergencyAndRepairIntercept = null;
        return $this;
    }
}

