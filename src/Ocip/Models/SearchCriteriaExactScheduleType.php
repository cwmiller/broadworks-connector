<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactScheduleType
 *
 * Criteria for searching for a particular schedule type.
 */
class SearchCriteriaExactScheduleType extends SearchCriteria
{

    /**
     * @ElementName type
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null
     */
    private $type = null;

    /**
     * Getter for type
     *
     * @ElementName type
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\ScheduleType $type)
    {
        $this->type = $type;
        return $this;
    }


}

