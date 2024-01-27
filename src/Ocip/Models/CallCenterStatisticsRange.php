<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterStatisticsRange
 *
 * Statistics Range
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7710","type":"sequence"}]
 */
class CallCenterStatisticsRange
{
    /**
     * @ElementName start
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:7710
     * @var string|null
     */
    protected $start = null;

    /**
     * @ElementName end
     * @Type string
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7710
     * @var string|null
     */
    protected $end = null;

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

