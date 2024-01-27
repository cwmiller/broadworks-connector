<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCallProcessingPolicyProfileSubscriberTypeList21
 *
 * A list of CallProcessingPolicyProfileSubscriberType21. The list replaces a previously configured list.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4203","type":"sequence"}]
 */
class ReplacementCallProcessingPolicyProfileSubscriberTypeList21
{
    /**
     * @ElementName subscriberType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType21
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4203
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType21[]
     */
    protected $subscriberType = [
        
    ];

    /**
     * Getter for subscriberType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType21[]
     */
    public function getSubscriberType()
    {
        return $this->subscriberType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->subscriberType;
    }

    /**
     * Setter for subscriberType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType21[] $subscriberType
     * @return $this
     */
    public function setSubscriberType(array $subscriberType)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSubscriberType()
    {
        $this->subscriberType = null;
        return $this;
    }

    /**
     * Adder for subscriberType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType21 $subscriberType
     * @return $this
     */
    public function addSubscriberType($subscriberType)
    {
        $this->subscriberType[] = $subscriberType;
        return $this;
    }
}

