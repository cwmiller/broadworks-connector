<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPhysicalLocationModifyRequest
 *
 * Request to modify Physical Location system parameters.
 *          The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"8250786d50d10f8fe081d126ecca3847:73","type":"sequence"}]
 */
class SystemPhysicalLocationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName alwaysAllowEmergencyCalls
     * @Type bool
     * @Optional
     * @Group 8250786d50d10f8fe081d126ecca3847:73
     * @var bool|null
     */
    protected $alwaysAllowEmergencyCalls = null;

    /**
     * Getter for alwaysAllowEmergencyCalls
     *
     * @return bool
     */
    public function getAlwaysAllowEmergencyCalls()
    {
        return $this->alwaysAllowEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alwaysAllowEmergencyCalls;
    }

    /**
     * Setter for alwaysAllowEmergencyCalls
     *
     * @param bool $alwaysAllowEmergencyCalls
     * @return $this
     */
    public function setAlwaysAllowEmergencyCalls($alwaysAllowEmergencyCalls)
    {
        $this->alwaysAllowEmergencyCalls = $alwaysAllowEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlwaysAllowEmergencyCalls()
    {
        $this->alwaysAllowEmergencyCalls = null;
        return $this;
    }
}

