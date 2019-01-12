<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderExternalCustomRingbackModifyRequest
 *
 * Modify the service provider level data associated with External Custom Ringback.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"a8df43dca23d99d8ab44c0082aadfbe0:80","type":"sequence"}]
 */
class ServiceProviderExternalCustomRingbackModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group a8df43dca23d99d8ab44c0082aadfbe0:80
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName prefixDigits
     * @Type string
     * @Nillable
     * @Optional
     * @Group a8df43dca23d99d8ab44c0082aadfbe0:80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $prefixDigits = null;

    /**
     * @ElementName serverNetAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group a8df43dca23d99d8ab44c0082aadfbe0:80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serverNetAddress = null;

    /**
     * @ElementName serverPort
     * @Type int
     * @Nillable
     * @Optional
     * @Group a8df43dca23d99d8ab44c0082aadfbe0:80
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serverPort = null;

    /**
     * @ElementName timeoutSeconds
     * @Type int
     * @Optional
     * @Group a8df43dca23d99d8ab44c0082aadfbe0:80
     * @var int|null
     */
    private $timeoutSeconds = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for prefixDigits
     *
     * @return string|null
     */
    public function getPrefixDigits()
    {
        return $this->prefixDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefixDigits;
    }

    /**
     * Setter for prefixDigits
     *
     * @param string|null $prefixDigits
     * @return $this
     */
    public function setPrefixDigits($prefixDigits)
    {
        if ($prefixDigits === null) {
            $this->prefixDigits = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->prefixDigits = $prefixDigits;
        }
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
     * @return string|null
     */
    public function getServerNetAddress()
    {
        return $this->serverNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serverNetAddress;
    }

    /**
     * Setter for serverNetAddress
     *
     * @param string|null $serverNetAddress
     * @return $this
     */
    public function setServerNetAddress($serverNetAddress)
    {
        if ($serverNetAddress === null) {
            $this->serverNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serverNetAddress = $serverNetAddress;
        }
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
     * @return int|null
     */
    public function getServerPort()
    {
        return $this->serverPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serverPort;
    }

    /**
     * Setter for serverPort
     *
     * @param int|null $serverPort
     * @return $this
     */
    public function setServerPort($serverPort)
    {
        if ($serverPort === null) {
            $this->serverPort = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serverPort = $serverPort;
        }
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

