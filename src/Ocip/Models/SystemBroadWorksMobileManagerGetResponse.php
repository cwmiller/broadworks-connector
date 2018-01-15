<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobileManagerGetResponse
 *
 * Response to the SystemBroadWorksMobileManagerGetRequest
 */
class SystemBroadWorksMobileManagerGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scfApiNetAddress1
     * @var string|null
     */
    private $scfApiNetAddress1 = null;

    /**
     * @ElementName scfApiNetAddress2
     * @var string|null
     */
    private $scfApiNetAddress2 = null;

    /**
     * @ElementName userName
     * @var string|null
     */
    private $userName = null;

    /**
     * @ElementName emailFromAddress
     * @var string|null
     */
    private $emailFromAddress = null;

    /**
     * @ElementName scfIMSOnly
     * @var bool|null
     */
    private $scfIMSOnly = null;

    /**
     * @ElementName signalingIPAddress
     * @var string|null
     */
    private $signalingIPAddress = null;

    /**
     * @ElementName signalingPort
     * @var int|null
     */
    private $signalingPort = null;

    /**
     * Getter for scfApiNetAddress1
     *
     * @ElementName scfApiNetAddress1
     * @return string|null
     */
    public function getScfApiNetAddress1()
    {
        return $this->scfApiNetAddress1;
    }

    /**
     * Setter for scfApiNetAddress1
     *
     * @ElementName scfApiNetAddress1
     * @param string|null $scfApiNetAddress1
     * @return $this
     */
    public function setScfApiNetAddress1($scfApiNetAddress1)
    {
        $this->scfApiNetAddress1 = $scfApiNetAddress1;
        return $this;
    }

    /**
     * Getter for scfApiNetAddress2
     *
     * @ElementName scfApiNetAddress2
     * @return string|null
     */
    public function getScfApiNetAddress2()
    {
        return $this->scfApiNetAddress2;
    }

    /**
     * Setter for scfApiNetAddress2
     *
     * @ElementName scfApiNetAddress2
     * @param string|null $scfApiNetAddress2
     * @return $this
     */
    public function setScfApiNetAddress2($scfApiNetAddress2)
    {
        $this->scfApiNetAddress2 = $scfApiNetAddress2;
        return $this;
    }

    /**
     * Getter for userName
     *
     * @ElementName userName
     * @return string|null
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Setter for userName
     *
     * @ElementName userName
     * @param string|null $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * Getter for emailFromAddress
     *
     * @ElementName emailFromAddress
     * @return string|null
     */
    public function getEmailFromAddress()
    {
        return $this->emailFromAddress;
    }

    /**
     * Setter for emailFromAddress
     *
     * @ElementName emailFromAddress
     * @param string|null $emailFromAddress
     * @return $this
     */
    public function setEmailFromAddress($emailFromAddress)
    {
        $this->emailFromAddress = $emailFromAddress;
        return $this;
    }

    /**
     * Getter for scfIMSOnly
     *
     * @ElementName scfIMSOnly
     * @return bool|null
     */
    public function getScfIMSOnly()
    {
        return $this->scfIMSOnly;
    }

    /**
     * Setter for scfIMSOnly
     *
     * @ElementName scfIMSOnly
     * @param bool|null $scfIMSOnly
     * @return $this
     */
    public function setScfIMSOnly($scfIMSOnly)
    {
        $this->scfIMSOnly = $scfIMSOnly;
        return $this;
    }

    /**
     * Getter for signalingIPAddress
     *
     * @ElementName signalingIPAddress
     * @return string|null
     */
    public function getSignalingIPAddress()
    {
        return $this->signalingIPAddress;
    }

    /**
     * Setter for signalingIPAddress
     *
     * @ElementName signalingIPAddress
     * @param string|null $signalingIPAddress
     * @return $this
     */
    public function setSignalingIPAddress($signalingIPAddress)
    {
        $this->signalingIPAddress = $signalingIPAddress;
        return $this;
    }

    /**
     * Getter for signalingPort
     *
     * @ElementName signalingPort
     * @return int|null
     */
    public function getSignalingPort()
    {
        return $this->signalingPort;
    }

    /**
     * Setter for signalingPort
     *
     * @ElementName signalingPort
     * @param int|null $signalingPort
     * @return $this
     */
    public function setSignalingPort($signalingPort)
    {
        $this->signalingPort = $signalingPort;
        return $this;
    }


}

