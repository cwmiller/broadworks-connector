<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationResponse
 *
 * AuthenticationRequest/Response is 1st stage of the 2 stage OCI login process.
 *
 * @see AuthenticationRequest
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:3877","type":"sequence"}]
 */
class AuthenticationResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:3877
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName nonce
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:3877
     * @var string|null
     */
    private $nonce = null;

    /**
     * @ElementName passwordAlgorithm
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DigitalSignatureAlgorithm
     * @Group de4d76f01f337fe4694212ec9f771753:3877
     * @var \CWM\BroadWorksConnector\Ocip\Models\DigitalSignatureAlgorithm|null
     */
    private $passwordAlgorithm = null;

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
     * Getter for nonce
     *
     * @return string
     */
    public function getNonce()
    {
        return $this->nonce instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nonce;
    }

    /**
     * Setter for nonce
     *
     * @param string $nonce
     * @return $this
     */
    public function setNonce($nonce)
    {
        $this->nonce = $nonce;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNonce()
    {
        $this->nonce = null;
        return $this;
    }

    /**
     * Getter for passwordAlgorithm
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DigitalSignatureAlgorithm
     */
    public function getPasswordAlgorithm()
    {
        return $this->passwordAlgorithm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passwordAlgorithm;
    }

    /**
     * Setter for passwordAlgorithm
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DigitalSignatureAlgorithm $passwordAlgorithm
     * @return $this
     */
    public function setPasswordAlgorithm(\CWM\BroadWorksConnector\Ocip\Models\DigitalSignatureAlgorithm $passwordAlgorithm)
    {
        $this->passwordAlgorithm = $passwordAlgorithm;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPasswordAlgorithm()
    {
        $this->passwordAlgorithm = null;
        return $this;
    }


}

