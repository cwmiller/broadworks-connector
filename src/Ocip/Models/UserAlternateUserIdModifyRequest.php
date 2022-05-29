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
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:478","type":"sequence"}]
 */
class UserAlternateUserIdModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:478
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName alternateUserId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:478
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $alternateUserId = null;

    /**
     * @ElementName newAlternateUserId
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:478
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $newAlternateUserId = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:478
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $description = null;

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
     * Getter for alternateUserId
     *
     * @return string
     */
    public function getAlternateUserId()
    {
        return $this->alternateUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateUserId;
    }

    /**
     * Setter for alternateUserId
     *
     * @param string $alternateUserId
     * @return $this
     */
    public function setAlternateUserId($alternateUserId)
    {
        $this->alternateUserId = $alternateUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateUserId()
    {
        $this->alternateUserId = null;
        return $this;
    }

    /**
     * Getter for newAlternateUserId
     *
     * @return string
     */
    public function getNewAlternateUserId()
    {
        return $this->newAlternateUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newAlternateUserId;
    }

    /**
     * Setter for newAlternateUserId
     *
     * @param string $newAlternateUserId
     * @return $this
     */
    public function setNewAlternateUserId($newAlternateUserId)
    {
        $this->newAlternateUserId = $newAlternateUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewAlternateUserId()
    {
        $this->newAlternateUserId = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }


}

