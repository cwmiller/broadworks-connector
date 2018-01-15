<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceDeleteRequest
 *
 * Delete a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingCallBlockingServiceDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callBlockingService
     * @var string|null
     */
    private $callBlockingService = null;

    /**
     * Getter for callBlockingService
     *
     * @ElementName callBlockingService
     * @return string|null
     */
    public function getCallBlockingService()
    {
        return $this->callBlockingService;
    }

    /**
     * Setter for callBlockingService
     *
     * @ElementName callBlockingService
     * @param string|null $callBlockingService
     * @return $this
     */
    public function setCallBlockingService($callBlockingService)
    {
        $this->callBlockingService = $callBlockingService;
        return $this;
    }


}

