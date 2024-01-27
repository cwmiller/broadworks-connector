<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerAdminAlternateIdDeleteRequest
 *
 * Request to delete an alternate admin user id of a reseller admin.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:134","type":"sequence"}]
 */
class ResellerAdminAlternateIdDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:134
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName alternateUserId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:134
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $alternateUserId = null;

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
}

