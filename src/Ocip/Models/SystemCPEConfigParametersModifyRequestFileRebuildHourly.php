<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigParametersModifyRequestFileRebuildHourly
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:25985","type":"sequence"}]
 */
class SystemCPEConfigParametersModifyRequestFileRebuildHourly
{
    /**
     * @ElementName startMinute
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:25985
     * @MinInclusive 0
     * @MaxInclusive 59
     * @var int|null
     */
    protected $startMinute = null;

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

