<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExecutiveGetResponse
 *
 * Response to SystemExecutiveGetRequest.
 */
class SystemExecutiveGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

