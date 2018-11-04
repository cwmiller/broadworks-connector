<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobileManagerModifyRequest
 *
 * Modify the BroadWorks Mobile Manager service system settings.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemBroadWorksMobileManagerModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName scfApiNetAddress1
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $scfApiNetAddress1 = null;

    /**
     * @ElementName scfApiNetAddress2
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $scfApiNetAddress2 = null;

    /**
     * @ElementName userName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $userName = null;

    /**
     * @ElementName password
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $password = null;

    /**
     * @ElementName emailFromAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $emailFromAddress = null;

    /**
     * @ElementName scfIMSOnly
     * @var bool|null
     */
    private $scfIMSOnly = null;

    /**
     * @ElementName signalingIPAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $signalingIPAddress = null;

    /**
     * @ElementName signalingPort
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $signalingPort = null;

    /**
     * Getter for scfApiNetAddress1
     *
     * @ElementName scfApiNetAddress1
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getScfApiNetAddress1()
    {
        return $this->scfApiNetAddress1;
    }

    /**
     * Setter for scfApiNetAddress1
     *
     * @ElementName scfApiNetAddress1
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $scfApiNetAddress1
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getScfApiNetAddress2()
    {
        return $this->scfApiNetAddress2;
    }

    /**
     * Setter for scfApiNetAddress2
     *
     * @ElementName scfApiNetAddress2
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $scfApiNetAddress2
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Setter for userName
     *
     * @ElementName userName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * Getter for password
     *
     * @ElementName password
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Setter for password
     *
     * @ElementName password
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Getter for emailFromAddress
     *
     * @ElementName emailFromAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getEmailFromAddress()
    {
        return $this->emailFromAddress;
    }

    /**
     * Setter for emailFromAddress
     *
     * @ElementName emailFromAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $emailFromAddress
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSignalingIPAddress()
    {
        return $this->signalingIPAddress;
    }

    /**
     * Setter for signalingIPAddress
     *
     * @ElementName signalingIPAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $signalingIPAddress
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSignalingPort()
    {
        return $this->signalingPort;
    }

    /**
     * Setter for signalingPort
     *
     * @ElementName signalingPort
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $signalingPort
     * @return $this
     */
    public function setSignalingPort($signalingPort)
    {
        $this->signalingPort = $signalingPort;
        return $this;
    }


}

