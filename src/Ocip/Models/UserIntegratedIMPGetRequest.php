<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIntegratedIMPGetRequest
 *
 * Get the Integrated IMP specific service attribute for the user.
 *         The response is either UserIMPGetResponse or ErrorResponse.
 *         
 *         Replaced by: UserIntegratedIMPGetRequest21sp1
 *
 * @see UserIMPGetResponse
 * @see ErrorResponse
 * @see UserIntegratedIMPGetRequest21sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:13764","type":"sequence"}]
 */
class UserIntegratedIMPGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:13764
     * @MinLength 1
     * @MaxLength 161
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

