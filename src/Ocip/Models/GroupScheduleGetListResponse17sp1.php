<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupScheduleGetListResponse17sp1
 *
 * Response to GroupScheduleGetListRequest17sp1.
 *         The response contains a list of group schedules. If the group belongs to
 * an enterprise, 
 *         it also contains the schedules for the enterprise.
 *
 * @see GroupScheduleGetListRequest17sp1
 */
class GroupScheduleGetListResponse17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleGlobalKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey[]
     */
    private $scheduleGlobalKey = array(
        
    );

    /**
     * Getter for scheduleGlobalKey
     *
     * @ElementName scheduleGlobalKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey[]
     */
    public function getScheduleGlobalKey()
    {
        return $this->scheduleGlobalKey;
    }

    /**
     * Setter for scheduleGlobalKey
     *
     * @ElementName scheduleGlobalKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey[] $scheduleGlobalKey
     * @return $this
     */
    public function setScheduleGlobalKey(array $scheduleGlobalKey)
    {
        $this->scheduleGlobalKey = $scheduleGlobalKey;
        return $this;
    }

    /**
     * Adder for scheduleGlobalKey
     *
     * @ElementName scheduleGlobalKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey $scheduleGlobalKey
     * @return $this
     */
    public function addScheduleGlobalKey($scheduleGlobalKey)
    {
        $this->scheduleGlobalKey []= $scheduleGlobalKey;
        return $this;
    }


}

