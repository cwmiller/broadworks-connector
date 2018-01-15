<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyIMPGetResponse
 *
 * Response to the SystemThirdPartyIMPGetRequest.
 *         The response contains the system Third-Party IMP service attributes.
 *         
 *         Replaced by SystemThirdPartyIMPGetResponse.
 */
class SystemThirdPartyIMPGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceNetAddress
     * @var string|null
     */
    private $serviceNetAddress = null;

    /**
     * @ElementName servicePort
     * @var int|null
     */
    private $servicePort = null;

    /**
     * Getter for serviceNetAddress
     *
     * @ElementName serviceNetAddress
     * @return string|null
     */
    public function getServiceNetAddress()
    {
        return $this->serviceNetAddress;
    }

    /**
     * Setter for serviceNetAddress
     *
     * @ElementName serviceNetAddress
     * @param string|null $serviceNetAddress
     * @return $this
     */
    public function setServiceNetAddress($serviceNetAddress)
    {
        $this->serviceNetAddress = $serviceNetAddress;
        return $this;
    }

    /**
     * Getter for servicePort
     *
     * @ElementName servicePort
     * @return int|null
     */
    public function getServicePort()
    {
        return $this->servicePort;
    }

    /**
     * Setter for servicePort
     *
     * @ElementName servicePort
     * @param int|null $servicePort
     * @return $this
     */
    public function setServicePort($servicePort)
    {
        $this->servicePort = $servicePort;
        return $this;
    }


}

