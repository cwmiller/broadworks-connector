<?php

namespace CWM\BroadWorksConnector\Ocip\Models\C;

/**
 * ErrorResponse
 *
 * The ErrorResponse is concrete response sent whenever a transaction fails and does not return any data.
 *
 * @see ErrorResponse
 * @Groups [{"id":"77f32f6c8e214eb5c1a80dedfce1cb56:201","type":"sequence"}]
 */
class ErrorResponse extends OCIResponse
{

    /**
     * @ElementName errorCode
     * @Type int
     * @Optional
     * @Group 77f32f6c8e214eb5c1a80dedfce1cb56:201
     * @var int|null
     */
    private $errorCode = null;

    /**
     * @ElementName summary
     * @Type string
     * @Group 77f32f6c8e214eb5c1a80dedfce1cb56:201
     * @var string|null
     */
    private $summary = null;

    /**
     * @ElementName summaryEnglish
     * @Type string
     * @Group 77f32f6c8e214eb5c1a80dedfce1cb56:201
     * @var string|null
     */
    private $summaryEnglish = null;

    /**
     * @ElementName detail
     * @Type string
     * @Optional
     * @Group 77f32f6c8e214eb5c1a80dedfce1cb56:201
     * @var string|null
     */
    private $detail = null;

    /**
     * Getter for errorCode
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->errorCode;
    }

    /**
     * Setter for errorCode
     *
     * @param int $errorCode
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetErrorCode()
    {
        $this->errorCode = null;
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

    /**
     * Getter for detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->detail;
    }

    /**
     * Setter for detail
     *
     * @param string $detail
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDetail()
    {
        $this->detail = null;
        return $this;
    }


}

