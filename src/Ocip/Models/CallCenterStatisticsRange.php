<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterStatisticsRange
 *
 * Statistics Range
 *
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:6949","type":"sequence"}]
 */
class CallCenterStatisticsRange
{

    /**
     * @ElementName start
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6949
     * @var string|null
     */
    private $start = null;

    /**
     * @ElementName end
     * @Type string
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6949
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

