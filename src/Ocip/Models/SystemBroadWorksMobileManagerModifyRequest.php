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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:2596","type":"sequence"}]
 */
class SystemBroadWorksMobileManagerModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName scfApiNetAddress1
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2596
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $scfApiNetAddress1 = null;

    /**
     * @ElementName scfApiNetAddress2
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2596
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $scfApiNetAddress2 = null;

    /**
     * @ElementName userName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2596
     * @MinLength 1
     * @MaxLength 32
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $userName = null;

    /**
     * @ElementName password
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2596
     * @MinLength 1
     * @MaxLength 128
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $password = null;

    /**
     * @ElementName emailFromAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2596
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $emailFromAddress = null;

    /**
     * @ElementName scfIMSOnly
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2596
     * @var bool|null
     */
    protected $scfIMSOnly = null;

    /**
     * @ElementName signalingIPAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2596
     * @MinLength 1
     * @MaxLength 39
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $signalingIPAddress = null;

    /**
     * @ElementName signalingPort
     * @Type int
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2596
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $signalingPort = null;

    /**
     * Getter for scfApiNetAddress1
     *
     * @return string|null
     */
    public function getScfApiNetAddress1()
    {
        return $this->scfApiNetAddress1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scfApiNetAddress1;
    }

    /**
     * Setter for scfApiNetAddress1
     *
     * @param string|null $scfApiNetAddress1
     * @return $this
     */
    public function setScfApiNetAddress1($scfApiNetAddress1 = null)
    {
        if ($scfApiNetAddress1 === null) {
            $this->scfApiNetAddress1 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->scfApiNetAddress1 = $scfApiNetAddress1;
        }
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
     * @return string|null
     */
    public function getScfApiNetAddress2()
    {
        return $this->scfApiNetAddress2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scfApiNetAddress2;
    }

    /**
     * Setter for scfApiNetAddress2
     *
     * @param string|null $scfApiNetAddress2
     * @return $this
     */
    public function setScfApiNetAddress2($scfApiNetAddress2 = null)
    {
        if ($scfApiNetAddress2 === null) {
            $this->scfApiNetAddress2 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->scfApiNetAddress2 = $scfApiNetAddress2;
        }
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
     * @return string|null
     */
    public function getUserName()
    {
        return $this->userName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userName;
    }

    /**
     * Setter for userName
     *
     * @param string|null $userName
     * @return $this
     */
    public function setUserName($userName = null)
    {
        if ($userName === null) {
            $this->userName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->userName = $userName;
        }
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
     * Getter for password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->password;
    }

    /**
     * Setter for password
     *
     * @param string|null $password
     * @return $this
     */
    public function setPassword($password = null)
    {
        if ($password === null) {
            $this->password = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->password = $password;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPassword()
    {
        $this->password = null;
        return $this;
    }

    /**
     * Getter for emailFromAddress
     *
     * @return string|null
     */
    public function getEmailFromAddress()
    {
        return $this->emailFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emailFromAddress;
    }

    /**
     * Setter for emailFromAddress
     *
     * @param string|null $emailFromAddress
     * @return $this
     */
    public function setEmailFromAddress($emailFromAddress = null)
    {
        if ($emailFromAddress === null) {
            $this->emailFromAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->emailFromAddress = $emailFromAddress;
        }
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
     * @return string|null
     */
    public function getSignalingIPAddress()
    {
        return $this->signalingIPAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->signalingIPAddress;
    }

    /**
     * Setter for signalingIPAddress
     *
     * @param string|null $signalingIPAddress
     * @return $this
     */
    public function setSignalingIPAddress($signalingIPAddress = null)
    {
        if ($signalingIPAddress === null) {
            $this->signalingIPAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->signalingIPAddress = $signalingIPAddress;
        }
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
     * @return int|null
     */
    public function getSignalingPort()
    {
        return $this->signalingPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->signalingPort;
    }

    /**
     * Setter for signalingPort
     *
     * @param int|null $signalingPort
     * @return $this
     */
    public function setSignalingPort($signalingPort = null)
    {
        if ($signalingPort === null) {
            $this->signalingPort = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->signalingPort = $signalingPort;
        }
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

