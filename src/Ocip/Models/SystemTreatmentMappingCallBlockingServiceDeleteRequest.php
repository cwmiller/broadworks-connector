<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceDeleteRequest
 *
 * Delete a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemTreatmentMappingCallBlockingServiceDeleteRequest22 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemTreatmentMappingCallBlockingServiceDeleteRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:15579","type":"sequence"}]
 */
class SystemTreatmentMappingCallBlockingServiceDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callBlockingService
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService
     * @Group 240b50f54d060859e5e275082fdf49f9:15579
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService|null
     */
    protected $callBlockingService = null;

    /**
     * Getter for callBlockingService
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService
     */
    public function getCallBlockingService()
    {
        return $this->callBlockingService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callBlockingService;
    }

    /**
     * Setter for callBlockingService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService $callBlockingService
     * @return $this
     */
    public function setCallBlockingService(\CWM\BroadWorksConnector\Ocip\Models\CallBlockingService $callBlockingService)
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
}

