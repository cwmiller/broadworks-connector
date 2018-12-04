<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserZoneCallingRestrictionsModifyRequest
 *
 * Modify the home zone for a user
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"717a9f842e0bacab397cbe717881a5e7:132","type":"sequence"}]
 */
class UserZoneCallingRestrictionsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 717a9f842e0bacab397cbe717881a5e7:132
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName homeZoneName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 717a9f842e0bacab397cbe717881a5e7:132
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $homeZoneName = null;

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
     * Getter for homeZoneName
     *
     * @return string|null
     */
    public function getHomeZoneName()
    {
        return $this->homeZoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneName;
    }

    /**
     * Setter for homeZoneName
     *
     * @param string|null $homeZoneName
     * @return $this
     */
    public function setHomeZoneName($homeZoneName)
    {
        if ($homeZoneName === null) {
            $this->homeZoneName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->homeZoneName = $homeZoneName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHomeZoneName()
    {
        $this->homeZoneName = null;
        return $this;
    }


}

