<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExecutiveGetResponse
 *
 * Response to SystemExecutiveGetRequest.
 *
 * @see SystemExecutiveGetRequest
 * @Groups [{"id":"3a54ac906cb7002cc1a30fbb0efadb0a:66","type":"sequence"}]
 */
class SystemExecutiveGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName treatVirtualOnNetCallsAsInternal
     * @Type bool
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:66
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

