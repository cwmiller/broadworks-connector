<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyIMPGetResponse19
 *
 * Response to the SystemThirdPartyIMPGetRequest19.
 *         The response contains the system Third-Party IMP service attributes.
 *
 * @see SystemThirdPartyIMPGetRequest19
 * @Groups [{"id":"94766dfbb33c7fae7c6022754ea24721:53","type":"sequence"}]
 */
class SystemThirdPartyIMPGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceNetAddress
     * @Type string
     * @Optional
     * @Group 94766dfbb33c7fae7c6022754ea24721:53
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $serviceNetAddress = null;

    /**
     * @ElementName servicePort
     * @Type int
     * @Optional
     * @Group 94766dfbb33c7fae7c6022754ea24721:53
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    private $servicePort = null;

    /**
     * @ElementName boshURL
     * @Type string
     * @Optional
     * @Group 94766dfbb33c7fae7c6022754ea24721:53
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $boshURL = null;

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

    /**
     * Getter for boshURL
     *
     * @return string
     */
    public function getBoshURL()
    {
        return $this->boshURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->boshURL;
    }

    /**
     * Setter for boshURL
     *
     * @param string $boshURL
     * @return $this
     */
    public function setBoshURL($boshURL)
    {
        $this->boshURL = $boshURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBoshURL()
    {
        $this->boshURL = null;
        return $this;
    }


}

