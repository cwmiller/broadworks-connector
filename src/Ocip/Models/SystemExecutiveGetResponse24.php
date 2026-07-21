<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExecutiveGetResponse24
 *
 * Response to SystemExecutiveGetRequest.
 *
 * @see SystemExecutiveGetRequest
 * @Groups [{"id":"3a54ac906cb7002cc1a30fbb0efadb0a:69","type":"sequence"}]
 */
class SystemExecutiveGetResponse24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName treatVirtualOnNetCallsAsInternal
     * @Type bool
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:69
     * @var bool|null
     */
    protected $treatVirtualOnNetCallsAsInternal = null;

    /**
     * @ElementName considerExecutiveOnHookForAssistantCalls
     * @Type bool
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:69
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

