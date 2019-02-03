<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupScheduleGetListResponse17sp1
 *
 * Response to GroupScheduleGetListRequest17sp1.
 *         The response contains a list of group schedules. If the group belongs to an enterprise, 
 *         it also contains the schedules for the enterprise.
 *
 * @see GroupScheduleGetListRequest17sp1
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:6520","type":"sequence"}]
 */
class GroupScheduleGetListResponse17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleGlobalKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6520
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey[]
     */
    private $scheduleGlobalKey = array(
        
    );

    /**
     * Getter for scheduleGlobalKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey[]
     */
    public function getScheduleGlobalKey()
    {
        return $this->scheduleGlobalKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleGlobalKey;
    }

    /**
     * Setter for scheduleGlobalKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey[] $scheduleGlobalKey
     * @return $this
     */
    public function setScheduleGlobalKey(array $scheduleGlobalKey)
    {
        $this->scheduleGlobalKey = $scheduleGlobalKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleGlobalKey()
    {
        $this->scheduleGlobalKey = null;
        return $this;
    }

    /**
     * Adder for scheduleGlobalKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey $scheduleGlobalKey
     * @return $this
     */
    public function addScheduleGlobalKey($scheduleGlobalKey)
    {
        $this->scheduleGlobalKey[] = $scheduleGlobalKey;
        return $this;
    }


}

