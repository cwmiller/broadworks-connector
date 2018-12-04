<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkSynchingServerModifyRequest
 *
 * Request to modify a Network Server in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           becomePreferred
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *           order
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:11214","type":"sequence"}]
 */
class SystemNetworkSynchingServerModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName netAddress
     * @Type string
     * @Group 610f84d3e188f0477c3ae1a82ee036da:11214
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName port
     * @Type int
     * @Nillable
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:11214
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $port = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:11214
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName becomePreferred
     * @Type bool
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:11214
     * @var bool|null
     */
    private $becomePreferred = null;

    /**
     * @ElementName order
     * @Type int
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:11214
     * @var int|null
     */
    private $order = null;

    /**
     * Getter for netAddress
     *
     * @return string
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddress()
    {
        $this->netAddress = null;
        return $this;
    }

    /**
     * Getter for port
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->port instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->port;
    }

    /**
     * Setter for port
     *
     * @param int|null $port
     * @return $this
     */
    public function setPort($port)
    {
        if ($port === null) {
            $this->port = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->port = $port;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPort()
    {
        $this->port = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
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
     * Getter for becomePreferred
     *
     * @return bool
     */
    public function getBecomePreferred()
    {
        return $this->becomePreferred instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->becomePreferred;
    }

    /**
     * Setter for becomePreferred
     *
     * @param bool $becomePreferred
     * @return $this
     */
    public function setBecomePreferred($becomePreferred)
    {
        $this->becomePreferred = $becomePreferred;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBecomePreferred()
    {
        $this->becomePreferred = null;
        return $this;
    }

    /**
     * Getter for order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->order;
    }

    /**
     * Setter for order
     *
     * @param int $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrder()
    {
        $this->order = null;
        return $this;
    }


}

