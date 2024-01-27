<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringProfileGetRequest17sp3
 *
 * Get an existing Communication Barring Profile.
 *         The response is either a ServiceProviderCommunicationBarringProfileGetResponse17sp3
 *         or an ErrorResponse.
 *         
 *         Replaced By : ServiceProviderCommunicationBarringProfileGetRequest19sp1V2 in AS data mode
 *
 * @see ServiceProviderCommunicationBarringProfileGetResponse17sp3
 * @see ErrorResponse
 * @see ServiceProviderCommunicationBarringProfileGetRequest19sp1V2
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:6485","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringProfileGetRequest17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6485
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6485
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

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
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }
}

