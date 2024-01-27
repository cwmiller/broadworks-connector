<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceDeleteRequest22V2
 *
 * Delete a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemTreatmentMappingCallBlockingServiceDeleteRequest23 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemTreatmentMappingCallBlockingServiceDeleteRequest23
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:15615","type":"sequence"}]
 */
class SystemTreatmentMappingCallBlockingServiceDeleteRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callBlockingService
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService22V2
     * @Group 240b50f54d060859e5e275082fdf49f9:15615
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService22V2|null
     */
    protected $callBlockingService = null;

    /**
     * Getter for callBlockingService
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService22V2
     */
    public function getCallBlockingService()
    {
        return $this->callBlockingService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callBlockingService;
    }

    /**
     * Setter for callBlockingService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService22V2 $callBlockingService
     * @return $this
     */
    public function setCallBlockingService(\CWM\BroadWorksConnector\Ocip\Models\CallBlockingService22V2 $callBlockingService)
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

