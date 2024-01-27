<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVideoAddOnGetRequest22
 *
 * Get the user's Video Add-On service setting.
 *         The response is either a UserVideoAddOnGetResponse22 or an ErrorResponse.
 *
 * @see UserVideoAddOnGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"b5d2e7958e32dd9b5dece82d23577a17:41","type":"sequence"}]
 */
class UserVideoAddOnGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group b5d2e7958e32dd9b5dece82d23577a17:41
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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
}

