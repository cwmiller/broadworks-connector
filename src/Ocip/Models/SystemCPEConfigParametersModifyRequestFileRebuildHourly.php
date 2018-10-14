<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigParametersModifyRequestFileRebuildHourly
 */
class SystemCPEConfigParametersModifyRequestFileRebuildHourly
{

    /**
     * @ElementName startMinute
     * @var int|null
     */
    private $startMinute = null;

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

