<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobileManagerGetResponse
 *
 * Response to the SystemBroadWorksMobileManagerGetRequest
 *
 * @see SystemBroadWorksMobileManagerGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:2574","type":"sequence"}]
 */
class SystemBroadWorksMobileManagerGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scfApiNetAddress1
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2574
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $scfApiNetAddress1 = null;

    /**
     * @ElementName scfApiNetAddress2
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2574
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $scfApiNetAddress2 = null;

    /**
     * @ElementName userName
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2574
     * @MinLength 1
     * @MaxLength 32
     * @var string|null
     */
    protected $userName = null;

    /**
     * @ElementName emailFromAddress
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2574
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $emailFromAddress = null;

    /**
     * @ElementName scfIMSOnly
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2574
     * @var bool|null
     */
    protected $scfIMSOnly = null;

    /**
     * @ElementName signalingIPAddress
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2574
     * @MinLength 1
     * @MaxLength 39
     * @var string|null
     */
    protected $signalingIPAddress = null;

    /**
     * @ElementName signalingPort
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2574
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $signalingPort = null;

    /**
     * Getter for scfApiNetAddress1
     *
     * @return string
     */
    public function getScfApiNetAddress1()
    {
        return $this->scfApiNetAddress1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scfApiNetAddress1;
    }

    /**
     * Setter for scfApiNetAddress1
     *
     * @param string $scfApiNetAddress1
     * @return $this
     */
    public function setScfApiNetAddress1($scfApiNetAddress1)
    {
        $this->scfApiNetAddress1 = $scfApiNetAddress1;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScfApiNetAddress1()
    {
        $this->scfApiNetAddress1 = null;
        return $this;
    }

    /**
     * Getter for scfApiNetAddress2
     *
     * @return string
     */
    public function getScfApiNetAddress2()
    {
        return $this->scfApiNetAddress2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scfApiNetAddress2;
    }

    /**
     * Setter for scfApiNetAddress2
     *
     * @param string $scfApiNetAddress2
     * @return $this
     */
    public function setScfApiNetAddress2($scfApiNetAddress2)
    {
        $this->scfApiNetAddress2 = $scfApiNetAddress2;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScfApiNetAddress2()
    {
        $this->scfApiNetAddress2 = null;
        return $this;
    }

    /**
     * Getter for userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userName;
    }

    /**
     * Setter for userName
     *
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserName()
    {
        $this->userName = null;
        return $this;
    }

    /**
     * Getter for emailFromAddress
     *
     * @return string
     */
    public function getEmailFromAddress()
    {
        return $this->emailFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emailFromAddress;
    }

    /**
     * Setter for emailFromAddress
     *
     * @param string $emailFromAddress
     * @return $this
     */
    public function setEmailFromAddress($emailFromAddress)
    {
        $this->emailFromAddress = $emailFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmailFromAddress()
    {
        $this->emailFromAddress = null;
        return $this;
    }

    /**
     * Getter for scfIMSOnly
     *
     * @return bool
     */
    public function getScfIMSOnly()
    {
        return $this->scfIMSOnly instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scfIMSOnly;
    }

    /**
     * Setter for scfIMSOnly
     *
     * @param bool $scfIMSOnly
     * @return $this
     */
    public function setScfIMSOnly($scfIMSOnly)
    {
        $this->scfIMSOnly = $scfIMSOnly;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScfIMSOnly()
    {
        $this->scfIMSOnly = null;
        return $this;
    }

    /**
     * Getter for signalingIPAddress
     *
     * @return string
     */
    public function getSignalingIPAddress()
    {
        return $this->signalingIPAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->signalingIPAddress;
    }

    /**
     * Setter for signalingIPAddress
     *
     * @param string $signalingIPAddress
     * @return $this
     */
    public function setSignalingIPAddress($signalingIPAddress)
    {
        $this->signalingIPAddress = $signalingIPAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSignalingIPAddress()
    {
        $this->signalingIPAddress = null;
        return $this;
    }

    /**
     * Getter for signalingPort
     *
     * @return int
     */
    public function getSignalingPort()
    {
        return $this->signalingPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->signalingPort;
    }

    /**
     * Setter for signalingPort
     *
     * @param int $signalingPort
     * @return $this
     */
    public function setSignalingPort($signalingPort)
    {
        $this->signalingPort = $signalingPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSignalingPort()
    {
        $this->signalingPort = null;
        return $this;
    }


}

