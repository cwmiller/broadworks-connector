<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DNValidationStatusMessage
 *
 * The message contains the status and error reason that prevents DN to be assigned/validated
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2487","type":"sequence"}]
 */
class DNValidationStatusMessage
{

    /**
     * @ElementName dn
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2487
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $dn = null;

    /**
     * @ElementName status
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatus
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2487
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatus|null
     */
    private $status = null;

    /**
     * @ElementName messageCode
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2487
     * @var int|null
     */
    private $messageCode = null;

    /**
     * @ElementName summary
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2487
     * @var string|null
     */
    private $summary = null;

    /**
     * @ElementName summaryEnglish
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2487
     * @var string|null
     */
    private $summaryEnglish = null;

    /**
     * Getter for dn
     *
     * @return string
     */
    public function getDn()
    {
        return $this->dn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dn;
    }

    /**
     * Setter for dn
     *
     * @param string $dn
     * @return $this
     */
    public function setDn($dn)
    {
        $this->dn = $dn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDn()
    {
        $this->dn = null;
        return $this;
    }

    /**
     * Getter for status
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatus
     */
    public function getStatus()
    {
        return $this->status instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->status;
    }

    /**
     * Setter for status
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatus $status
     * @return $this
     */
    public function setStatus(\CWM\BroadWorksConnector\Ocip\Models\DNValidationStatus $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatus()
    {
        $this->status = null;
        return $this;
    }

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

