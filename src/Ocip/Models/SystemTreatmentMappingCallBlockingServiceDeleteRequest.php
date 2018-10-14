<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceDeleteRequest
 *
 * Delete a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemTreatmentMappingCallBlockingServiceDeleteRequest22 in
 * AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemTreatmentMappingCallBlockingServiceDeleteRequest22
 */
class SystemTreatmentMappingCallBlockingServiceDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callBlockingService
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService|null
     */
    private $callBlockingService = null;

    /**
     * Getter for callBlockingService
     *
     * @ElementName callBlockingService
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService|null
     */
    public function getCallBlockingService()
    {
        return $this->callBlockingService;
    }

    /**
     * Setter for callBlockingService
     *
     * @ElementName callBlockingService
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService|null $callBlockingService
     * @return $this
     */
    public function setCallBlockingService(\CWM\BroadWorksConnector\Ocip\Models\CallBlockingService $callBlockingService)
    {
        $this->callBlockingService = $callBlockingService;
        return $this;
    }


}

