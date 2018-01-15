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

