<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigParametersModifyRequestFileRebuildDaily
 */
class SystemCPEConfigParametersModifyRequestFileRebuildDaily
{

    /**
     * @ElementName startHour
     * @var int|null
     */
    private $startHour = null;

    /**
     * @ElementName startMinute
     * @var int|null
     */
    private $startMinute = null;

    /**
     * Getter for startHour
     *
     * @ElementName startHour
     * @return int|null
     */
    public function getStartHour()
    {
        return $this->startHour;
    }

    /**
     * Setter for startHour
     *
     * @ElementName startHour
     * @param int|null $startHour
     * @return $this
     */
    public function setStartHour($startHour)
    {
        $this->startHour = $startHour;
        return $this;
    }

    /**
     * Getter for startMinute
     *
     * @ElementName startMinute
     * @return int|null
     */
    public function getStartMinute()
    {
        return $this->startMinute;
    }

    /**
     * Setter for startMinute
     *
     * @ElementName startMinute
     * @param int|null $startMinute
     * @return $this
     */
    public function setStartMinute($startMinute)
    {
        $this->startMinute = $startMinute;
        return $this;
    }


}

