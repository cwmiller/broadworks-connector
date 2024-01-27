<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderSessionAdmissionControlWhiteListGetResponse
 *
 * Response to the ServiceProviderSessionAdmissionControlWhiteListGetRequest.
 *         The response contains the White List information.
 *
 * @see ServiceProviderSessionAdmissionControlWhiteListGetRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:6778","type":"sequence"}]
 */
class ServiceProviderSessionAdmissionControlWhiteListGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName matchDigitPattern
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6778
     * @MinLength 1
     * @MaxLength 160
     * @var string[]
     */
    protected $matchDigitPattern = [
        
    ];

    /**
     * @ElementName enableWhiteList
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:6778
     * @var bool|null
     */
    protected $enableWhiteList = null;

    /**
     * Getter for matchDigitPattern
     *
     * @return string[]
     */
    public function getMatchDigitPattern()
    {
        return $this->matchDigitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchDigitPattern;
    }

    /**
     * Setter for matchDigitPattern
     *
     * @param string[] $matchDigitPattern
     * @return $this
     */
    public function setMatchDigitPattern(array $matchDigitPattern)
    {
        $this->matchDigitPattern = $matchDigitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchDigitPattern()
    {
        $this->matchDigitPattern = null;
        return $this;
    }

    /**
     * Adder for matchDigitPattern
     *
     * @param string $matchDigitPattern
     * @return $this
     */
    public function addMatchDigitPattern(string $matchDigitPattern)
    {
        $this->matchDigitPattern[] = $matchDigitPattern;
        return $this;
    }

    /**
     * Getter for enableWhiteList
     *
     * @return bool
     */
    public function getEnableWhiteList()
    {
        return $this->enableWhiteList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableWhiteList;
    }

    /**
     * Setter for enableWhiteList
     *
     * @param bool $enableWhiteList
     * @return $this
     */
    public function setEnableWhiteList($enableWhiteList)
    {
        $this->enableWhiteList = $enableWhiteList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableWhiteList()
    {
        $this->enableWhiteList = null;
        return $this;
    }
}

