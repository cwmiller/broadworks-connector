<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerAdminAlternateIdAddRequest
 *
 * Request to add an alternate Id to a reseller admin.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:116","type":"sequence"}]
 */
class ResellerAdminAlternateIdAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:116
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName alternateUserId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:116
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $alternateUserId = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:116
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
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
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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

