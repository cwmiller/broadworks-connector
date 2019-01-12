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
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:1207","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringProfileGetRequest17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:1207
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:1207
     * @var string|null
     */
    private $name = null;

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

