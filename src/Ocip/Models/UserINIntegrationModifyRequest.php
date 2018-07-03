<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserINIntegrationModifyRequest
 *
 * Request to modify the user level IN Integration service attributes
 *         Response is either SuccessResponse or ErrorResponse
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserINIntegrationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName originatingServiceKey
     * @var int|null
     */
    private $originatingServiceKey = null;

    /**
     * @ElementName terminatingServiceKey
     * @var int|null
     */
    private $terminatingServiceKey = null;

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
     * Getter for originatingServiceKey
     *
     * @ElementName originatingServiceKey
     * @return int|null
     */
    public function getOriginatingServiceKey()
    {
        return $this->originatingServiceKey;
    }

    /**
     * Setter for originatingServiceKey
     *
     * @ElementName originatingServiceKey
     * @param int|null $originatingServiceKey
     * @return $this
     */
    public function setOriginatingServiceKey($originatingServiceKey)
    {
        $this->originatingServiceKey = $originatingServiceKey;
        return $this;
    }

    /**
     * Getter for terminatingServiceKey
     *
     * @ElementName terminatingServiceKey
     * @return int|null
     */
    public function getTerminatingServiceKey()
    {
        return $this->terminatingServiceKey;
    }

    /**
     * Setter for terminatingServiceKey
     *
     * @ElementName terminatingServiceKey
     * @param int|null $terminatingServiceKey
     * @return $this
     */
    public function setTerminatingServiceKey($terminatingServiceKey)
    {
        $this->terminatingServiceKey = $terminatingServiceKey;
        return $this;
    }


}

