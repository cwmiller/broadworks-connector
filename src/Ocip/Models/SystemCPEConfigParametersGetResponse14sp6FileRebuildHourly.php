<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigParametersGetResponse14sp6FileRebuildHourly
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:25516","type":"sequence"}]
 */
class SystemCPEConfigParametersGetResponse14sp6FileRebuildHourly
{

    /**
     * @ElementName startMinute
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25516
     * @MinInclusive 0
     * @MaxInclusive 59
     * @var int|null
     */
    private $startMinute = null;

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

