<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCallProcessingPolicyProfileSubscriberTypeList
 *
 * A list of CallProcessingPolicyProfileSubscriberType. The list replaces a
 * previously configured list.
 */
class ReplacementCallProcessingPolicyProfileSubscriberTypeList
{

    /**
     * @ElementName subscriberType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType[]
     */
    private $subscriberType = array(
        
    );

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

