<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetListResponse17sp1
 *
 * Response to UserScheduleGetListRequest17sp1.
 *         The response contains a list of schedules viewable by the user. It contains the schedules 
 *         defined for the user and the group the user belongs to. If the user belongs to an enterprise, 
 *         the list also contains the schedules defined for the enterprise.
 *
 * @see UserScheduleGetListRequest17sp1
 * @Groups [{"id":"ee3830ce42f01a3ef2a105d473fc3b17:3099","type":"sequence"}]
 */
class UserScheduleGetListResponse17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleGlobalKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey
     * @Array
     * @Optional
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:3099
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

