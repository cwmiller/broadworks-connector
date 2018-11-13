<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyIMPModifyRequest
 *
 * Modify the system Third-Party IMP service attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemThirdPartyIMPModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceNetAddress
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceNetAddress = null;

    /**
     * @ElementName servicePort
     * @Type int
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $servicePort = null;

    /**
     * @ElementName boshURL
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $boshURL = null;

    /**
     * Getter for serviceNetAddress
     *
     * @return string|null
     */
    public function getServiceNetAddress()
    {
        return $this->serviceNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceNetAddress;
    }

    /**
     * Setter for serviceNetAddress
     *
     * @param string|null $serviceNetAddress
     * @return $this
     */
    public function setServiceNetAddress($serviceNetAddress)
    {
        if ($serviceNetAddress === null) {
            $this->serviceNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serviceNetAddress = $serviceNetAddress;
        }
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
     * @return int|null
     */
    public function getServicePort()
    {
        return $this->servicePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePort;
    }

    /**
     * Setter for servicePort
     *
     * @param int|null $servicePort
     * @return $this
     */
    public function setServicePort($servicePort)
    {
        if ($servicePort === null) {
            $this->servicePort = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->servicePort = $servicePort;
        }
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
     * @return string|null
     */
    public function getBoshURL()
    {
        return $this->boshURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->boshURL;
    }

    /**
     * Setter for boshURL
     *
     * @param string|null $boshURL
     * @return $this
     */
    public function setBoshURL($boshURL)
    {
        if ($boshURL === null) {
            $this->boshURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->boshURL = $boshURL;
        }
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

