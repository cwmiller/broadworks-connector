<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetListResponse17sp1
 *
 * Response to UserScheduleGetListRequest17sp1.
 *         The response contains a list of schedules viewable by the user. It
 * contains the schedules 
 *         defined for the user and the group the user belongs to. If the user
 * belongs to an enterprise, 
 *         the list also contains the schedules defined for the enterprise.
 */
class UserScheduleGetListResponse17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setScheduleGlobalKey($scheduleGlobalKey)
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

