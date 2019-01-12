<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyIMPGetResponse
 *
 * Response to the SystemThirdPartyIMPGetRequest.
 *         The response contains the system Third-Party IMP service attributes.
 *         
 *         Replaced by SystemThirdPartyIMPGetResponse19.
 *
 * @see SystemThirdPartyIMPGetRequest
 * @see SystemThirdPartyIMPGetResponse19
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:26070","type":"sequence"}]
 */
class SystemThirdPartyIMPGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceNetAddress
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26070
     * @var string|null
     */
    private $serviceNetAddress = null;

    /**
     * @ElementName servicePort
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26070
     * @var int|null
     */
    private $servicePort = null;

    /**
     * Getter for serviceNetAddress
     *
     * @return string
     */
    public function getServiceNetAddress()
    {
        return $this->serviceNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceNetAddress;
    }

    /**
     * Setter for serviceNetAddress
     *
     * @param string $serviceNetAddress
     * @return $this
     */
    public function setServiceNetAddress($serviceNetAddress)
    {
        $this->serviceNetAddress = $serviceNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceNetAddress()
    {
        $this->serviceNetAddress = null;
        return $this;
    }

    /**
     * Getter for servicePort
     *
     * @return int
     */
    public function getServicePort()
    {
        return $this->servicePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePort;
    }

    /**
     * Setter for servicePort
     *
     * @param int $servicePort
     * @return $this
     */
    public function setServicePort($servicePort)
    {
        $this->servicePort = $servicePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePort()
    {
        $this->servicePort = null;
        return $this;
    }


}

