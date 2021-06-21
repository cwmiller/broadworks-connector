<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HolidaySchedule
 *
 * Holiday Schedule.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2916","type":"sequence"}]
 */
class HolidaySchedule
{

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2916
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel|null
     */
    private $type = null;

    /**
     * @ElementName name
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2916
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel $type)
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

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }


}

