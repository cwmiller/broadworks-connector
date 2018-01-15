<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDualModeVCCModifyRequest
 *
 * Request to modify the user level IN Integration service attributes
 *         Response is either UserINIntegrationGetResponse or ErrorResponse
 */
class UserDualModeVCCModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName subscriberUserName
     * @var string|null
     */
    private $subscriberUserName = null;

    /**
     * @ElementName subscriberPassword
     * @var string|null
     */
    private $subscriberPassword = null;

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
     * Getter for subscriberUserName
     *
     * @ElementName subscriberUserName
     * @return string|null
     */
    public function getSubscriberUserName()
    {
        return $this->subscriberUserName;
    }

    /**
     * Setter for subscriberUserName
     *
     * @ElementName subscriberUserName
     * @param string|null $subscriberUserName
     * @return $this
     */
    public function setSubscriberUserName($subscriberUserName)
    {
        $this->subscriberUserName = $subscriberUserName;
        return $this;
    }

    /**
     * Getter for subscriberPassword
     *
     * @ElementName subscriberPassword
     * @return string|null
     */
    public function getSubscriberPassword()
    {
        return $this->subscriberPassword;
    }

    /**
     * Setter for subscriberPassword
     *
     * @ElementName subscriberPassword
     * @param string|null $subscriberPassword
     * @return $this
     */
    public function setSubscriberPassword($subscriberPassword)
    {
        $this->subscriberPassword = $subscriberPassword;
        return $this;
    }


}

