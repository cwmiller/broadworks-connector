<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceDeleteRequest22
 *
 * Delete a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemTreatmentMappingCallBlockingServiceDeleteRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callBlockingService
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService22|null
     */
    private $callBlockingService = null;

    /**
     * Getter for callBlockingService
     *
     * @ElementName callBlockingService
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService22|null
     */
    public function getCallBlockingService()
    {
        return $this->callBlockingService;
    }

    /**
     * Setter for callBlockingService
     *
     * @ElementName callBlockingService
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService22|null $callBlockingService
     * @return $this
     */
    public function setCallBlockingService(\CWM\BroadWorksConnector\Ocip\Models\CallBlockingService22 $callBlockingService)
    {
        $this->callBlockingService = $callBlockingService;
        return $this;
    }


}

