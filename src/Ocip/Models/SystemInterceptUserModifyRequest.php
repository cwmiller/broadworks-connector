<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInterceptUserModifyRequest
 *
 * Modify the system-level intercept user service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemInterceptUserModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName emergencyAndRepairIntercept
     * @Type bool
     * @var bool|null
     */
    private $emergencyAndRepairIntercept = null;

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

