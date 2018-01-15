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
     * @var string[]
     */
    private $subscriberType = array(
        
    );

    /**
     * Getter for subscriberType
     *
     * @ElementName subscriberType
     * @return string[]
     */
    public function getSubscriberType()
    {
        return $this->subscriberType;
    }

    /**
     * Setter for subscriberType
     *
     * @ElementName subscriberType
     * @param string[] $subscriberType
     * @return $this
     */
    public function setSubscriberType($subscriberType)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * Adder for subscriberType
     *
     * @ElementName subscriberType
     * @param string $subscriberType
     * @return $this
     */
    public function addSubscriberType($subscriberType)
    {
        $this->subscriberType []= $subscriberType;
        return $this;
    }


}

