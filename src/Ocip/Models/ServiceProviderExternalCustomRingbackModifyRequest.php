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
 */
class ServiceProviderExternalCustomRingbackModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName prefixDigits
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $prefixDigits = null;

    /**
     * @ElementName serverNetAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serverNetAddress = null;

    /**
     * @ElementName serverPort
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serverPort = null;

    /**
     * @ElementName timeoutSeconds
     * @var int|null
     */
    private $timeoutSeconds = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for prefixDigits
     *
     * @ElementName prefixDigits
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPrefixDigits()
    {
        return $this->prefixDigits;
    }

    /**
     * Setter for prefixDigits
     *
     * @ElementName prefixDigits
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $prefixDigits
     * @return $this
     */
    public function setPrefixDigits($prefixDigits)
    {
        $this->prefixDigits = $prefixDigits;
        return $this;
    }

    /**
     * Getter for serverNetAddress
     *
     * @ElementName serverNetAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getServerNetAddress()
    {
        return $this->serverNetAddress;
    }

    /**
     * Setter for serverNetAddress
     *
     * @ElementName serverNetAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $serverNetAddress
     * @return $this
     */
    public function setServerNetAddress($serverNetAddress)
    {
        $this->serverNetAddress = $serverNetAddress;
        return $this;
    }

    /**
     * Getter for serverPort
     *
     * @ElementName serverPort
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getServerPort()
    {
        return $this->serverPort;
    }

    /**
     * Setter for serverPort
     *
     * @ElementName serverPort
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $serverPort
     * @return $this
     */
    public function setServerPort($serverPort)
    {
        $this->serverPort = $serverPort;
        return $this;
    }

    /**
     * Getter for timeoutSeconds
     *
     * @ElementName timeoutSeconds
     * @return int|null
     */
    public function getTimeoutSeconds()
    {
        return $this->timeoutSeconds;
    }

    /**
     * Setter for timeoutSeconds
     *
     * @ElementName timeoutSeconds
     * @param int|null $timeoutSeconds
     * @return $this
     */
    public function setTimeoutSeconds($timeoutSeconds)
    {
        $this->timeoutSeconds = $timeoutSeconds;
        return $this;
    }


}

