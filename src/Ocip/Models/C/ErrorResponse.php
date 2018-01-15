<?php

namespace CWM\BroadWorksConnector\Ocip\Models\C;

/**
 * ErrorResponse
 *
 * The ErrorResponse is concrete response sent whenever a transaction fails and
 * does not return any data.
 */
class ErrorResponse extends OCIResponse
{

    /**
     * @ElementName errorCode
     * @var int|null
     */
    private $errorCode = null;

    /**
     * @ElementName summary
     * @var string|null
     */
    private $summary = null;

    /**
     * @ElementName summaryEnglish
     * @var string|null
     */
    private $summaryEnglish = null;

    /**
     * @ElementName detail
     * @var string|null
     */
    private $detail = null;

    /**
     * Getter for errorCode
     *
     * @ElementName errorCode
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Setter for errorCode
     *
     * @ElementName errorCode
     * @param int|null $errorCode
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * Getter for summary
     *
     * @ElementName summary
     * @return string|null
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Setter for summary
     *
     * @ElementName summary
     * @param string|null $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Getter for summaryEnglish
     *
     * @ElementName summaryEnglish
     * @return string|null
     */
    public function getSummaryEnglish()
    {
        return $this->summaryEnglish;
    }

    /**
     * Setter for summaryEnglish
     *
     * @ElementName summaryEnglish
     * @param string|null $summaryEnglish
     * @return $this
     */
    public function setSummaryEnglish($summaryEnglish)
    {
        $this->summaryEnglish = $summaryEnglish;
        return $this;
    }

    /**
     * Getter for detail
     *
     * @ElementName detail
     * @return string|null
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Setter for detail
     *
     * @ElementName detail
     * @param string|null $detail
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
        return $this;
    }


}

