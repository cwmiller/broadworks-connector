<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactCallCenterType
 *
 * Criteria for searching for a particular fully specified call center type.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:823","type":"sequence"}]
 */
class SearchCriteriaExactCallCenterType extends SearchCriteria
{
    /**
     * @ElementName callCenterType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterType
     * @Group 972fbf832439609ec8f2765c5637c3f1:823
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterType|null
     */
    protected $callCenterType = null;

    /**
     * Getter for callCenterType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterType
     */
    public function getCallCenterType()
    {
        return $this->callCenterType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCenterType;
    }

    /**
     * Setter for callCenterType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterType $callCenterType
     * @return $this
     */
    public function setCallCenterType(\CWM\BroadWorksConnector\Ocip\Models\CallCenterType $callCenterType)
    {
        $this->callCenterType = $callCenterType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCenterType()
    {
        $this->callCenterType = null;
        return $this;
    }
}

