<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceAddRequest23V3
 *
 * Add a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemTreatmentMappingCallBlockingServiceAddRequest24 in AS data mode.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemTreatmentMappingCallBlockingServiceAddRequest24
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:15526","type":"sequence"}]
 */
class SystemTreatmentMappingCallBlockingServiceAddRequest23V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callBlockingService
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService23V3
     * @Group 240b50f54d060859e5e275082fdf49f9:15526
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService23V3|null
     */
    protected $callBlockingService = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:15526
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $treatmentId = null;

    /**
     * Getter for callBlockingService
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService23V3
     */
    public function getCallBlockingService()
    {
        return $this->callBlockingService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callBlockingService;
    }

    /**
     * Setter for callBlockingService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService23V3 $callBlockingService
     * @return $this
     */
    public function setCallBlockingService(\CWM\BroadWorksConnector\Ocip\Models\CallBlockingService23V3 $callBlockingService)
    {
        $this->callBlockingService = $callBlockingService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallBlockingService()
    {
        $this->callBlockingService = null;
        return $this;
    }

    /**
     * Getter for treatmentId
     *
     * @return string
     */
    public function getTreatmentId()
    {
        return $this->treatmentId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @param string $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentId()
    {
        $this->treatmentId = null;
        return $this;
    }
}

