<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSMDIMessageDeskAddServerRequest
 *
 * Request to add a SMDI Server for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"aa3a240fa755015613cfb9259eccafef:224","type":"sequence"}]
 */
class UserSMDIMessageDeskAddServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group aa3a240fa755015613cfb9259eccafef:224
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group aa3a240fa755015613cfb9259eccafef:224
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Group aa3a240fa755015613cfb9259eccafef:224
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $netAddress = null;

    /**
     * @ElementName port
     * @Type int
     * @Group aa3a240fa755015613cfb9259eccafef:224
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $port = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
        return $this;
    }

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
     * @return int
     */
    public function getPort()
    {
        return $this->port instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->port;
    }

    /**
     * Setter for port
     *
     * @param int $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
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
}

