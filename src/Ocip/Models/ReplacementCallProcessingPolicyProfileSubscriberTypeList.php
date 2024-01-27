<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCallProcessingPolicyProfileSubscriberTypeList
 *
 * A list of CallProcessingPolicyProfileSubscriberType. The list replaces a previously configured list.
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:50281","type":"sequence"}]
 */
class ReplacementCallProcessingPolicyProfileSubscriberTypeList
{
    /**
     * @ElementName subscriberType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType
     * @Array
     * @Group d8f04177e438f303b41c211e518706bf:50281
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType[]
     */
    protected $subscriberType = [
        
    ];

    /**
     * Getter for subscriberType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType[]
     */
    public function getSubscriberType()
    {
        return $this->subscriberType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->subscriberType;
    }

    /**
     * Setter for subscriberType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType[] $subscriberType
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType $subscriberType
     * @return $this
     */
    public function addSubscriberType($subscriberType)
    {
        $this->subscriberType[] = $subscriberType;
        return $this;
    }
}

