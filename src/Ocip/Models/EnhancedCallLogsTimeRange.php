<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsTimeRange
 *
 * Time range used to filter call logs.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2556","type":"sequence"}]
 */
class EnhancedCallLogsTimeRange
{

    /**
     * @ElementName startDateTime
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2556
     * @var string|null
     */
    private $startDateTime = null;

    /**
     * @ElementName endDateTime
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2556
     * @var string|null
     */
    private $endDateTime = null;

    /**
     * Getter for startDateTime
     *
     * @return string
     */
    public function getStartDateTime()
    {
        return $this->startDateTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startDateTime;
    }

    /**
     * Setter for startDateTime
     *
     * @param string $startDateTime
     * @return $this
     */
    public function setStartDateTime($startDateTime)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartDateTime()
    {
        $this->startDateTime = null;
        return $this;
    }

    /**
     * Getter for endDateTime
     *
     * @return string
     */
    public function getEndDateTime()
    {
        return $this->endDateTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endDateTime;
    }

    /**
     * Setter for endDateTime
     *
     * @param string $endDateTime
     * @return $this
     */
    public function setEndDateTime($endDateTime)
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndDateTime()
    {
        $this->endDateTime = null;
        return $this;
    }


}

