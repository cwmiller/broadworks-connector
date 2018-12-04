<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigParametersModifyRequestFileRebuildHourly
 *
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:21411","type":"sequence"}]
 */
class SystemCPEConfigParametersModifyRequestFileRebuildHourly
{

    /**
     * @ElementName startMinute
     * @Type int
     * @Group 1a79c7896cb04feac6eff47a5321756e:21411
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

