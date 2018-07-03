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
     * @var string[]
     */
    private $matchDigitPattern = array(
        
    );

    /**
     * @ElementName enableWhiteList
     * @var bool|null
     */
    private $enableWhiteList = null;

    /**
     * Getter for matchDigitPattern
     *
     * @ElementName matchDigitPattern
     * @return string[]
     */
    public function getMatchDigitPattern()
    {
        return $this->matchDigitPattern;
    }

    /**
     * Setter for matchDigitPattern
     *
     * @ElementName matchDigitPattern
     * @param string[] $matchDigitPattern
     * @return $this
     */
    public function setMatchDigitPattern($matchDigitPattern)
    {
        $this->matchDigitPattern = $matchDigitPattern;
        return $this;
    }

    /**
     * Adder for matchDigitPattern
     *
     * @ElementName matchDigitPattern
     * @param string $matchDigitPattern
     * @return $this
     */
    public function addMatchDigitPattern($matchDigitPattern)
    {
        $this->matchDigitPattern []= $matchDigitPattern;
        return $this;
    }

    /**
     * Getter for enableWhiteList
     *
     * @ElementName enableWhiteList
     * @return bool|null
     */
    public function getEnableWhiteList()
    {
        return $this->enableWhiteList;
    }

    /**
     * Setter for enableWhiteList
     *
     * @ElementName enableWhiteList
     * @param bool|null $enableWhiteList
     * @return $this
     */
    public function setEnableWhiteList($enableWhiteList)
    {
        $this->enableWhiteList = $enableWhiteList;
        return $this;
    }


}

