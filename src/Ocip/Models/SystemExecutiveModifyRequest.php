<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExecutiveModifyRequest
 *
 * Request to modify the Executive system parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"3a54ac906cb7002cc1a30fbb0efadb0a:82","type":"sequence"}]
 */
class SystemExecutiveModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName treatVirtualOnNetCallsAsInternal
     * @Type bool
     * @Optional
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:82
     * @var bool|null
     */
    protected $treatVirtualOnNetCallsAsInternal = null;

    /**
     * Getter for treatVirtualOnNetCallsAsInternal
     *
     * @return bool
     */
    public function getTreatVirtualOnNetCallsAsInternal()
    {
        return $this->treatVirtualOnNetCallsAsInternal instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatVirtualOnNetCallsAsInternal;
    }

    /**
     * Setter for treatVirtualOnNetCallsAsInternal
     *
     * @param bool $treatVirtualOnNetCallsAsInternal
     * @return $this
     */
    public function setTreatVirtualOnNetCallsAsInternal($treatVirtualOnNetCallsAsInternal)
    {
        $this->treatVirtualOnNetCallsAsInternal = $treatVirtualOnNetCallsAsInternal;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatVirtualOnNetCallsAsInternal()
    {
        $this->treatVirtualOnNetCallsAsInternal = null;
        return $this;
    }
}

