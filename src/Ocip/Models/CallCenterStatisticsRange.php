<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterStatisticsRange
 *
 * Statistics Range
 *
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:6949","type":"sequence"}]
 */
class CallCenterStatisticsRange
{

    /**
     * @ElementName start
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6949
     * @var string|null
     */
    private $start = null;

    /**
     * @ElementName end
     * @Type string
     * @Optional
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6949
     * @var string|null
     */
    private $end = null;

    /**
     * Getter for start
     *
     * @return string
     */
    public function getStart()
    {
        return $this->start instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->start;
    }

    /**
     * Setter for start
     *
     * @param string $start
     * @return $this
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStart()
    {
        $this->start = null;
        return $this;
    }

    /**
     * Getter for end
     *
     * @return string
     */
    public function getEnd()
    {
        return $this->end instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->end;
    }

    /**
     * Setter for end
     *
     * @param string $end
     * @return $this
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnd()
    {
        $this->end = null;
        return $this;
    }


}

