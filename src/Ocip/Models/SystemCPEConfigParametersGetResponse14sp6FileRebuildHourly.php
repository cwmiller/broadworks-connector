<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigParametersGetResponse14sp6FileRebuildHourly
 *
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:21346","type":"sequence"}]
 */
class SystemCPEConfigParametersGetResponse14sp6FileRebuildHourly
{

    /**
     * @ElementName startMinute
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:21346
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

