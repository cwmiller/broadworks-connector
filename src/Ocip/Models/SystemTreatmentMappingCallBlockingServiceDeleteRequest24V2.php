<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceDeleteRequest24V2
 *
 * Delete a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18947","type":"sequence"}]
 */
class SystemTreatmentMappingCallBlockingServiceDeleteRequest24V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callBlockingService
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService24V2
     * @Group da582a1f8028404e70d260cf1f891033:18947
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService24V2|null
     */
    protected $callBlockingService = null;

    /**
     * Getter for callBlockingService
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService24V2
     */
    public function getCallBlockingService()
    {
        return $this->callBlockingService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callBlockingService;
    }

    /**
     * Setter for callBlockingService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService24V2 $callBlockingService
     * @return $this
     */
    public function setCallBlockingService(\CWM\BroadWorksConnector\Ocip\Models\CallBlockingService24V2 $callBlockingService)
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

