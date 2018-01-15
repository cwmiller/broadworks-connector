<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIntegratedIMPGeneratePasswordRequest
 *
 * Generate a new IMP password for the user. The new generated password is
 * synchronized to the service Messaging Server.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserIntegratedIMPGeneratePasswordRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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


}

