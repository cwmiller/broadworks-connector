<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactScheduleType
 *
 * Criteria for searching for a particular schedule type.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1179","type":"sequence"}]
 */
class SearchCriteriaExactScheduleType extends SearchCriteria
{

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleType
     * @Group f0ada2681ca347fa83b464734259b304:1179
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null
     */
    private $type = null;

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\ScheduleType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetType()
    {
        $this->type = null;
        return $this;
    }


}

