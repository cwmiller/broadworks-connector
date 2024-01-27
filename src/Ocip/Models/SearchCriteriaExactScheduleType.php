<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactScheduleType
 *
 * Criteria for searching for a particular schedule type.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1213","type":"sequence"}]
 */
class SearchCriteriaExactScheduleType extends SearchCriteria
{
    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleType
     * @Group 972fbf832439609ec8f2765c5637c3f1:1213
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null
     */
    protected $type = null;

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

