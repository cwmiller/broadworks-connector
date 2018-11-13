<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCallProcessingPolicyProfileSubscriberTypeList21
 *
 * A list of CallProcessingPolicyProfileSubscriberType21. The list replaces a
 * previously configured list.
 */
class ReplacementCallProcessingPolicyProfileSubscriberTypeList21
{

    /**
     * @ElementName subscriberType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType21
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType21[]
     */
    private $subscriberType = array(
        
    );

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

