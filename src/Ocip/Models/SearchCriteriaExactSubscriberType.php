<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactSubscriberType
 *
 * Criteria for searching for a particular Subscriber Type.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1303","type":"sequence"}]
 */
class SearchCriteriaExactSubscriberType extends SearchCriteria
{
    /**
     * @ElementName subscriberType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SubscriberType
     * @Group 972fbf832439609ec8f2765c5637c3f1:1303
     * @var \CWM\BroadWorksConnector\Ocip\Models\SubscriberType|null
     */
    protected $subscriberType = null;

    /**
     * Getter for subscriberType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SubscriberType
     */
    public function getSubscriberType()
    {
        return $this->subscriberType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->subscriberType;
    }

    /**
     * Setter for subscriberType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SubscriberType $subscriberType
     * @return $this
     */
    public function setSubscriberType(\CWM\BroadWorksConnector\Ocip\Models\SubscriberType $subscriberType)
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
}

