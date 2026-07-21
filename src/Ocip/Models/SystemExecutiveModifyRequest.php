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
 * @Groups [{"id":"3a54ac906cb7002cc1a30fbb0efadb0a:86","type":"sequence"}]
 */
class SystemExecutiveModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName treatVirtualOnNetCallsAsInternal
     * @Type bool
     * @Optional
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:86
     * @var bool|null
     */
    protected $treatVirtualOnNetCallsAsInternal = null;

    /**
     * @ElementName considerExecutiveOnHookForAssistantCalls
     * @Type bool
     * @Optional
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:86
     * @var bool|null
     */
    protected $considerExecutiveOnHookForAssistantCalls = null;

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

    /**
     * Getter for considerExecutiveOnHookForAssistantCalls
     *
     * @return bool
     */
    public function getConsiderExecutiveOnHookForAssistantCalls()
    {
        return $this->considerExecutiveOnHookForAssistantCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->considerExecutiveOnHookForAssistantCalls;
    }

    /**
     * Setter for considerExecutiveOnHookForAssistantCalls
     *
     * @param bool $considerExecutiveOnHookForAssistantCalls
     * @return $this
     */
    public function setConsiderExecutiveOnHookForAssistantCalls($considerExecutiveOnHookForAssistantCalls)
    {
        $this->considerExecutiveOnHookForAssistantCalls = $considerExecutiveOnHookForAssistantCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConsiderExecutiveOnHookForAssistantCalls()
    {
        $this->considerExecutiveOnHookForAssistantCalls = null;
        return $this;
    }
}

