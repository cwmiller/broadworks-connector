<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMoveMessage
 *
 * The message describes the impact made when moving a user from one group to another group within the enterprise. The message could also contain the error condition that prevents the user move.
 *
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:4629","type":"sequence"}]
 */
class UserMoveMessage
{

    /**
     * @ElementName messageCode
     * @Type int
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4629
     * @var int|null
     */
    protected $messageCode = null;

    /**
     * @ElementName summary
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4629
     * @var string|null
     */
    protected $summary = null;

    /**
     * @ElementName summaryEnglish
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4629
     * @var string|null
     */
    protected $summaryEnglish = null;

    /**
     * Getter for messageCode
     *
     * @return int
     */
    public function getMessageCode()
    {
        return $this->messageCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageCode;
    }

    /**
     * Setter for messageCode
     *
     * @param int $messageCode
     * @return $this
     */
    public function setMessageCode($messageCode)
    {
        $this->messageCode = $messageCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMessageCode()
    {
        $this->messageCode = null;
        return $this;
    }

    /**
     * Getter for summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->summary;
    }

    /**
     * Setter for summary
     *
     * @param string $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSummary()
    {
        $this->summary = null;
        return $this;
    }

    /**
     * Getter for summaryEnglish
     *
     * @return string
     */
    public function getSummaryEnglish()
    {
        return $this->summaryEnglish instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->summaryEnglish;
    }

    /**
     * Setter for summaryEnglish
     *
     * @param string $summaryEnglish
     * @return $this
     */
    public function setSummaryEnglish($summaryEnglish)
    {
        $this->summaryEnglish = $summaryEnglish;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSummaryEnglish()
    {
        $this->summaryEnglish = null;
        return $this;
    }


}

