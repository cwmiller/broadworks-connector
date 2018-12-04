<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigParametersGetResponse14sp6FileRebuildDaily
 *
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:21337","type":"sequence"}]
 */
class SystemCPEConfigParametersGetResponse14sp6FileRebuildDaily
{

    /**
     * @ElementName startHour
     * @Type int
     * @Group 1a79c7896cb04feac6eff47a5321756e:21337
     * @var int|null
     */
    private $startHour = null;

    /**
     * @ElementName startMinute
     * @Type int
     * @Group 1a79c7896cb04feac6eff47a5321756e:21337
     * @var int|null
     */
    private $startMinute = null;

    /**
     * Getter for startHour
     *
     * @return int
     */
    public function getStartHour()
    {
        return $this->startHour instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startHour;
    }

    /**
     * Setter for startHour
     *
     * @param int $startHour
     * @return $this
     */
    public function setStartHour($startHour)
    {
        $this->startHour = $startHour;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartHour()
    {
        $this->startHour = null;
        return $this;
    }

    /**
     * Getter for startMinute
     *
     * @return int
     */
    public function getStartMinute()
    {
        return $this->startMinute instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startMinute;
    }

    /**
     * Setter for startMinute
     *
     * @param int $startMinute
     * @return $this
     */
    public function setStartMinute($startMinute)
    {
        $this->startMinute = $startMinute;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartMinute()
    {
        $this->startMinute = null;
        return $this;
    }


}

