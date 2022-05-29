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
 * @Groups [{"id":"88893c72abbbb9aaf5aecca970191d94:252","type":"sequence"}]
 */
class SystemInterceptUserModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName emergencyAndRepairIntercept
     * @Type bool
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:252
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

