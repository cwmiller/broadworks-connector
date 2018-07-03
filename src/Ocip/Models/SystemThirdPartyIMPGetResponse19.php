<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyIMPGetResponse19
 *
 * Response to the SystemThirdPartyIMPGetRequest19.
 *         The response contains the system Third-Party IMP service attributes.
 *
 * @see SystemThirdPartyIMPGetRequest19
 */
class SystemThirdPartyIMPGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName boshURL
     * @var string|null
     */
    private $boshURL = null;

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

    /**
     * Getter for boshURL
     *
     * @ElementName boshURL
     * @return string|null
     */
    public function getBoshURL()
    {
        return $this->boshURL;
    }

    /**
     * Setter for boshURL
     *
     * @ElementName boshURL
     * @param string|null $boshURL
     * @return $this
     */
    public function setBoshURL($boshURL)
    {
        $this->boshURL = $boshURL;
        return $this;
    }


}

