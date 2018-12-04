<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIntegratedIMPGetRequest
 *
 * Get the Integrated IMP specific service attribute for the user.
 *         The response is either UserIntegratedIMPGetResponse or ErrorResponse.
 *
 * @see UserIntegratedIMPGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"8351e8f51540f77c264b2f9bdf7fada4:315","type":"sequence"}]
 */
class UserIntegratedIMPGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 8351e8f51540f77c264b2f9bdf7fada4:315
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

