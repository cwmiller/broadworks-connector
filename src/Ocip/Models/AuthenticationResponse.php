<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationResponse
 *
 * AuthenticationRequest/Response is 1st stage of the 2 stage OCI login process.
 */
class AuthenticationResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName nonce
     * @var string|null
     */
    private $nonce = null;

    /**
     * @ElementName passwordAlgorithm
     * @var string|null
     */
    private $passwordAlgorithm = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for nonce
     *
     * @ElementName nonce
     * @return string|null
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * Setter for nonce
     *
     * @ElementName nonce
     * @param string|null $nonce
     * @return $this
     */
    public function setNonce($nonce)
    {
        $this->nonce = $nonce;
        return $this;
    }

    /**
     * Getter for passwordAlgorithm
     *
     * @ElementName passwordAlgorithm
     * @return string|null
     */
    public function getPasswordAlgorithm()
    {
        return $this->passwordAlgorithm;
    }

    /**
     * Setter for passwordAlgorithm
     *
     * @ElementName passwordAlgorithm
     * @param string|null $passwordAlgorithm
     * @return $this
     */
    public function setPasswordAlgorithm($passwordAlgorithm)
    {
        $this->passwordAlgorithm = $passwordAlgorithm;
        return $this;
    }


}

