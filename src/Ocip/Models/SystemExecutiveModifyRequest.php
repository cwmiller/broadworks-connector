<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExecutiveModifyRequest
 *
 * Request to modify the Executive system parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemExecutiveModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName treatVirtualOnNetCallsAsInternal
     * @var bool|null
     */
    private $treatVirtualOnNetCallsAsInternal = null;

    /**
     * Getter for treatVirtualOnNetCallsAsInternal
     *
     * @ElementName treatVirtualOnNetCallsAsInternal
     * @return bool|null
     */
    public function getTreatVirtualOnNetCallsAsInternal()
    {
        return $this->treatVirtualOnNetCallsAsInternal;
    }

    /**
     * Setter for treatVirtualOnNetCallsAsInternal
     *
     * @ElementName treatVirtualOnNetCallsAsInternal
     * @param bool|null $treatVirtualOnNetCallsAsInternal
     * @return $this
     */
    public function setTreatVirtualOnNetCallsAsInternal($treatVirtualOnNetCallsAsInternal)
    {
        $this->treatVirtualOnNetCallsAsInternal = $treatVirtualOnNetCallsAsInternal;
        return $this;
    }


}

