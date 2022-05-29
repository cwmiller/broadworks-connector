<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactCallCenterType
 *
 * Criteria for searching for a particular fully specified call center type.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:789","type":"sequence"}]
 */
class SearchCriteriaExactCallCenterType extends SearchCriteria
{

    /**
     * @ElementName callCenterType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterType
     * @Group f0ada2681ca347fa83b464734259b304:789
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

