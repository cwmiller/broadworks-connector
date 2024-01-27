<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCommunicationBarringAuthorizationCodeAddListRequest
 *
 * Add a list of Communication Barring Authorization codes to an enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:171","type":"sequence"}]
 */
class EnterpriseCommunicationBarringAuthorizationCodeAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:171
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName code
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration
     * @Array
     * @Group 405ec18fe08719ecf74e749d7e18c88f:171
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration[]
     */
    protected $code = [
        
    ];

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
     * Getter for code
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration[]
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration[] $code
     * @return $this
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCode()
    {
        $this->code = null;
        return $this;
    }

    /**
     * Adder for code
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringAuthorizationCodeConfiguration $code
     * @return $this
     */
    public function addCode($code)
    {
        $this->code[] = $code;
        return $this;
    }
}

