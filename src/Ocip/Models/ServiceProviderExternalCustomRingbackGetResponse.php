<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderExternalCustomRingbackGetResponse
 *
 * Response to ServiceProviderExternalCustomRingbackGetRequest.
 *
 * @see ServiceProviderExternalCustomRingbackGetRequest
 * @Groups [{"id":"a8df43dca23d99d8ab44c0082aadfbe0:61","type":"sequence"}]
 */
class ServiceProviderExternalCustomRingbackGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName prefixDigits
     * @Type string
     * @Optional
     * @Group a8df43dca23d99d8ab44c0082aadfbe0:61
     * @var string|null
     */
    private $prefixDigits = null;

    /**
     * @ElementName serverNetAddress
     * @Type string
     * @Optional
     * @Group a8df43dca23d99d8ab44c0082aadfbe0:61
     * @var string|null
     */
    private $serverNetAddress = null;

    /**
     * @ElementName serverPort
     * @Type int
     * @Optional
     * @Group a8df43dca23d99d8ab44c0082aadfbe0:61
     * @var int|null
     */
    private $serverPort = null;

    /**
     * @ElementName timeoutSeconds
     * @Type int
     * @Group a8df43dca23d99d8ab44c0082aadfbe0:61
     * @var int|null
     */
    private $timeoutSeconds = null;

    /**
     * Getter for prefixDigits
     *
     * @return string
     */
    public function getPrefixDigits()
    {
        return $this->prefixDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefixDigits;
    }

    /**
     * Setter for prefixDigits
     *
     * @param string $prefixDigits
     * @return $this
     */
    public function setPrefixDigits($prefixDigits)
    {
        $this->prefixDigits = $prefixDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefixDigits()
    {
        $this->prefixDigits = null;
        return $this;
    }

    /**
     * Getter for serverNetAddress
     *
     * @return string
     */
    public function getServerNetAddress()
    {
        return $this->serverNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serverNetAddress;
    }

    /**
     * Setter for serverNetAddress
     *
     * @param string $serverNetAddress
     * @return $this
     */
    public function setServerNetAddress($serverNetAddress)
    {
        $this->serverNetAddress = $serverNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServerNetAddress()
    {
        $this->serverNetAddress = null;
        return $this;
    }

    /**
     * Getter for serverPort
     *
     * @return int
     */
    public function getServerPort()
    {
        return $this->serverPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serverPort;
    }

    /**
     * Setter for serverPort
     *
     * @param int $serverPort
     * @return $this
     */
    public function setServerPort($serverPort)
    {
        $this->serverPort = $serverPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServerPort()
    {
        $this->serverPort = null;
        return $this;
    }

    /**
     * Getter for timeoutSeconds
     *
     * @return int
     */
    public function getTimeoutSeconds()
    {
        return $this->timeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeoutSeconds;
    }

    /**
     * Setter for timeoutSeconds
     *
     * @param int $timeoutSeconds
     * @return $this
     */
    public function setTimeoutSeconds($timeoutSeconds)
    {
        $this->timeoutSeconds = $timeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeoutSeconds()
    {
        $this->timeoutSeconds = null;
        return $this;
    }


}

