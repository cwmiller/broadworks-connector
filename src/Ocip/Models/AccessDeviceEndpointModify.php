<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceEndpointModify
 *
 * Access device end point used in the context of modify.
 *         Port numbers are only used by devices with static line ordering.
 *         The following element is only used in AS data mode and ignored in XS data mode:
 *           pathHeader
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:73","type":"sequence"}]
 */
class AccessDeviceEndpointModify
{

    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Group c0d21ef9ba207c335d8347e5172fce1d:73
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    private $accessDevice = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:73
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName contact
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:73
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $contact = null;

    /**
     * @ElementName pathHeader
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:73
     * @var string|null
     */
    private $pathHeader = null;

    /**
     * @ElementName portNumber
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:73
     * @var int|null
     */
    private $portNumber = null;

    /**
     * Getter for accessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice
     * @return $this
     */
    public function setAccessDevice(\CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice)
    {
        $this->accessDevice = $accessDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDevice()
    {
        $this->accessDevice = null;
        return $this;
    }

    /**
     * Getter for linePort
     *
     * @return string
     */
    public function getLinePort()
    {
        return $this->linePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @param string $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePort()
    {
        $this->linePort = null;
        return $this;
    }

    /**
     * Getter for contact
     *
     * @return string|null
     */
    public function getContact()
    {
        return $this->contact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contact;
    }

    /**
     * Setter for contact
     *
     * @param string|null $contact
     * @return $this
     */
    public function setContact($contact)
    {
        if ($contact === null) {
            $this->contact = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->contact = $contact;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContact()
    {
        $this->contact = null;
        return $this;
    }

    /**
     * Getter for pathHeader
     *
     * @return string
     */
    public function getPathHeader()
    {
        return $this->pathHeader instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pathHeader;
    }

    /**
     * Setter for pathHeader
     *
     * @param string $pathHeader
     * @return $this
     */
    public function setPathHeader($pathHeader)
    {
        $this->pathHeader = $pathHeader;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPathHeader()
    {
        $this->pathHeader = null;
        return $this;
    }

    /**
     * Getter for portNumber
     *
     * @return int
     */
    public function getPortNumber()
    {
        return $this->portNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->portNumber;
    }

    /**
     * Setter for portNumber
     *
     * @param int $portNumber
     * @return $this
     */
    public function setPortNumber($portNumber)
    {
        $this->portNumber = $portNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPortNumber()
    {
        $this->portNumber = null;
        return $this;
    }


}

