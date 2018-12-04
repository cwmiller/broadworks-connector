<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCallProcessingPolicyProfileSubscriberTypeList20
 *
 * A list of CallProcessingPolicyProfileSubscriberType20. The list replaces a previously configured list.
 *
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:39484","type":"sequence"}]
 */
class ReplacementCallProcessingPolicyProfileSubscriberTypeList20
{

    /**
     * @ElementName subscriberType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType20
     * @Array
     * @Group 1a79c7896cb04feac6eff47a5321756e:39484
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType20[]
     */
    private $subscriberType = array(
        
    );

    /**
     * Getter for subscriberType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType20[]
     */
    public function getSubscriberType()
    {
        return $this->subscriberType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->subscriberType;
    }

    /**
     * Setter for subscriberType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType20[] $subscriberType
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType20 $subscriberType
     * @return $this
     */
    public function addSubscriberType($subscriberType)
    {
        $this->subscriberType[] = $subscriberType;
        return $this;
    }


}

