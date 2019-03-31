<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringAuthorizationCodeGetResponse
 *
 * Response to GroupCommunicationBarringAuthorizationCodeGetRequest.
 *
 * @see GroupCommunicationBarringAuthorizationCodeGetRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:2441","type":"sequence"}]
 */
class GroupCommunicationBarringAuthorizationCodeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2441
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2441
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $networkClassOfService = null;

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

