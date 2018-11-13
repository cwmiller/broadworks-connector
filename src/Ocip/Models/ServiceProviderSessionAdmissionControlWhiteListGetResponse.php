<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderSessionAdmissionControlWhiteListGetResponse
 *
 * Response to the ServiceProviderSessionAdmissionControlWhiteListGetRequest.
 *         The response contains the White List information.
 *
 * @see ServiceProviderSessionAdmissionControlWhiteListGetRequest
 */
class ServiceProviderSessionAdmissionControlWhiteListGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName matchDigitPattern
     * @Type string
     * @Array
     * @var string[]
     */
    private $matchDigitPattern = array(
        
    );

    /**
     * @ElementName enableWhiteList
     * @Type bool
     * @var bool|null
     */
    private $enableWhiteList = null;

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

