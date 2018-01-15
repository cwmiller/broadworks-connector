<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsTimeRange
 *
 * Time range used to filter call logs.
 */
class EnhancedCallLogsTimeRange
{

    /**
     * @ElementName startDateTime
     * @var string|null
     */
    private $startDateTime = null;

    /**
     * @ElementName endDateTime
     * @var string|null
     */
    private $endDateTime = null;

    /**
     * Getter for startDateTime
     *
     * @ElementName startDateTime
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Setter for startDateTime
     *
     * @ElementName startDateTime
     * @param string|null $startDateTime
     * @return $this
     */
    public function setStartDateTime($startDateTime)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * Getter for endDateTime
     *
     * @ElementName endDateTime
     * @return string|null
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * Setter for endDateTime
     *
     * @ElementName endDateTime
     * @param string|null $endDateTime
     * @return $this
     */
    public function setEndDateTime($endDateTime)
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }


}

