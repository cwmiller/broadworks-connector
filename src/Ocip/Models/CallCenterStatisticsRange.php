<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterStatisticsRange
 *
 * Statistics Range
 */
class CallCenterStatisticsRange
{

    /**
     * @ElementName start
     * @var string|null
     */
    private $start = null;

    /**
     * @ElementName end
     * @var string|null
     */
    private $end = null;

    /**
     * Getter for start
     *
     * @ElementName start
     * @return string|null
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Setter for start
     *
     * @ElementName start
     * @param string|null $start
     * @return $this
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Getter for end
     *
     * @ElementName end
     * @return string|null
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Setter for end
     *
     * @ElementName end
     * @param string|null $end
     * @return $this
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }


}

