<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTerminatingAlternateTrunkIdentityModifyRequest
 *
 * Modify the user level data associated with Terminating Alternate Trunk Identity.
 *       The response is either a SuccessResponse or an ErrorResponse.
 */
class UserTerminatingAlternateTrunkIdentityModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName terminatingTrunkIdentity
     * @var string|null
     */
    private $terminatingTrunkIdentity = null;

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
     * Getter for terminatingTrunkIdentity
     *
     * @ElementName terminatingTrunkIdentity
     * @return string|null
     */
    public function getTerminatingTrunkIdentity()
    {
        return $this->terminatingTrunkIdentity;
    }

    /**
     * Setter for terminatingTrunkIdentity
     *
     * @ElementName terminatingTrunkIdentity
     * @param string|null $terminatingTrunkIdentity
     * @return $this
     */
    public function setTerminatingTrunkIdentity($terminatingTrunkIdentity)
    {
        $this->terminatingTrunkIdentity = $terminatingTrunkIdentity;
        return $this;
    }


}

