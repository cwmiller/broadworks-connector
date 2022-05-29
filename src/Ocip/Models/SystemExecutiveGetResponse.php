<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExecutiveGetResponse
 *
 * Response to SystemExecutiveGetRequest.
 *
 * @see SystemExecutiveGetRequest
 * @Groups [{"id":"9a6dbade05624033cf7fe782b7c9a9a7:67","type":"sequence"}]
 */
class SystemExecutiveGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treatVirtualOnNetCallsAsInternal
     * @Type bool
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:67
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

