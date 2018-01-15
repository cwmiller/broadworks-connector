<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSecurityClassificationModifyRequest
 *
 * Modify a user's Security Classification configuration
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSecurityClassificationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName securityClassification
     * @var string|null
     */
    private $securityClassification = null;

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
     * Getter for securityClassification
     *
     * @ElementName securityClassification
     * @return string|null
     */
    public function getSecurityClassification()
    {
        return $this->securityClassification;
    }

    /**
     * Setter for securityClassification
     *
     * @ElementName securityClassification
     * @param string|null $securityClassification
     * @return $this
     */
    public function setSecurityClassification($securityClassification)
    {
        $this->securityClassification = $securityClassification;
        return $this;
    }


}

