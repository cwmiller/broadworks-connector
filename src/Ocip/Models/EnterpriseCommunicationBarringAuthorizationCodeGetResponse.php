<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCommunicationBarringAuthorizationCodeGetResponse
 *
 * Response to EntepriseCommunicationBarringAuthorizationCodeGetRequest.
 *
 * @see EntepriseCommunicationBarringAuthorizationCodeGetRequest
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:257","type":"sequence"}]
 */
class EnterpriseCommunicationBarringAuthorizationCodeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:257
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:257
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }
}

