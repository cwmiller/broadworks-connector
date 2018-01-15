<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInterceptUserGetResponse
 *
 * Response to the SystemInterceptUserGetRequest.
 */
class SystemInterceptUserGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName emergencyAndRepairIntercept
     * @var bool|null
     */
    private $emergencyAndRepairIntercept = null;

    /**
     * Getter for emergencyAndRepairIntercept
     *
     * @ElementName emergencyAndRepairIntercept
     * @return bool|null
     */
    public function getEmergencyAndRepairIntercept()
    {
        return $this->emergencyAndRepairIntercept;
    }

    /**
     * Setter for emergencyAndRepairIntercept
     *
     * @ElementName emergencyAndRepairIntercept
     * @param bool|null $emergencyAndRepairIntercept
     * @return $this
     */
    public function setEmergencyAndRepairIntercept($emergencyAndRepairIntercept)
    {
        $this->emergencyAndRepairIntercept = $emergencyAndRepairIntercept;
        return $this;
    }


}

