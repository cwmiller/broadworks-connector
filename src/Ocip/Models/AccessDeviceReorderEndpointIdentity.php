<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceReorderEndpointIdentity
 *
 * Access device end point identity in the context of a reorder command.
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *           privateIdentity
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:526","type":"sequence"}]
 */
class AccessDeviceReorderEndpointIdentity
{
    /**
     * @ElementName linePort
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:526
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

    /**
     * @ElementName privateIdentity
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:526
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $privateIdentity = null;

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
     * Getter for privateIdentity
     *
     * @return string
     */
    public function getPrivateIdentity()
    {
        return $this->privateIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->privateIdentity;
    }

    /**
     * Setter for privateIdentity
     *
     * @param string $privateIdentity
     * @return $this
     */
    public function setPrivateIdentity($privateIdentity)
    {
        $this->privateIdentity = $privateIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrivateIdentity()
    {
        $this->privateIdentity = null;
        return $this;
    }
}

