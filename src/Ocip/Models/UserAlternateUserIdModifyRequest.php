<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAlternateUserIdModifyRequest
 *
 * Request to modify an alternate user id of a user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserAlternateUserIdModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName alternateUserId
     * @var string|null
     */
    private $alternateUserId = null;

    /**
     * @ElementName newAlternateUserId
     * @var string|null
     */
    private $newAlternateUserId = null;

    /**
     * @ElementName description
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

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
     * Getter for alternateUserId
     *
     * @ElementName alternateUserId
     * @return string|null
     */
    public function getAlternateUserId()
    {
        return $this->alternateUserId;
    }

    /**
     * Setter for alternateUserId
     *
     * @ElementName alternateUserId
     * @param string|null $alternateUserId
     * @return $this
     */
    public function setAlternateUserId($alternateUserId)
    {
        $this->alternateUserId = $alternateUserId;
        return $this;
    }

    /**
     * Getter for newAlternateUserId
     *
     * @ElementName newAlternateUserId
     * @return string|null
     */
    public function getNewAlternateUserId()
    {
        return $this->newAlternateUserId;
    }

    /**
     * Setter for newAlternateUserId
     *
     * @ElementName newAlternateUserId
     * @param string|null $newAlternateUserId
     * @return $this
     */
    public function setNewAlternateUserId($newAlternateUserId)
    {
        $this->newAlternateUserId = $newAlternateUserId;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

