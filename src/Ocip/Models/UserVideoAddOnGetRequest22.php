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
 * @Groups [{"id":"a7ae3767516578250f020b627d8fe972:74","type":"sequence"}]
 */
class UserVideoAddOnGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group a7ae3767516578250f020b627d8fe972:74
     * @var string|null
     */
    private $userId = null;

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

