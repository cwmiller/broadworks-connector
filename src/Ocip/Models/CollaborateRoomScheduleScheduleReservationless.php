<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CollaborateRoomScheduleScheduleReservationless
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:1141","type":"sequence"}]
 */
class CollaborateRoomScheduleScheduleReservationless
{

    /**
     * @ElementName startTime
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1141
     * @var string|null
     */
    protected $startTime = null;

    /**
     * @ElementName endTime
     * @Type string
     * @Nillable
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1141
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $endTime = null;

    /**
     * Getter for startTime
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startTime;
    }

    /**
     * Setter for startTime
     *
     * @param string $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartTime()
    {
        $this->startTime = null;
        return $this;
    }

    /**
     * Getter for endTime
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->endTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endTime;
    }

    /**
     * Setter for endTime
     *
     * @param string|null $endTime
     * @return $this
     */
    public function setEndTime($endTime = null)
    {
        if ($endTime === null) {
            $this->endTime = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->endTime = $endTime;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndTime()
    {
        $this->endTime = null;
        return $this;
    }


}

