<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingPartyCategoryGetRequest16
 *
 * Request the user level data associated with Calling Party Category.
 *         The response is either a UserCallingPartyCategoryGetResponse16 or an
 *         ErrorResponse.
 *
 * @see UserCallingPartyCategoryGetResponse16
 * @see ErrorResponse
 * @Groups [{"id":"89aa8c9a341a3cccb2453b1ee467bf94:186","type":"sequence"}]
 */
class UserCallingPartyCategoryGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 89aa8c9a341a3cccb2453b1ee467bf94:186
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

