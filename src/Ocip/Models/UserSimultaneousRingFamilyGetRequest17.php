<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyGetRequest17
 *
 * Get the user's simultaneous ring family service setting.
 *         The response is either a UserSimultaneousRingFamilyGetResponse17 or an ErrorResponse.
 *
 * @see UserSimultaneousRingFamilyGetResponse17
 * @see ErrorResponse
 * @Groups [{"id":"27a6a93978dd9aaafbf443049ed3277a:120","type":"sequence"}]
 */
class UserSimultaneousRingFamilyGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 27a6a93978dd9aaafbf443049ed3277a:120
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

