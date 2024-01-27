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
 * @Groups [{"id":"1d57523802a1435faa76c4035da1e4dc:132","type":"sequence"}]
 */
class UserZoneCallingRestrictionsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 1d57523802a1435faa76c4035da1e4dc:132
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName homeZoneName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1d57523802a1435faa76c4035da1e4dc:132
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $homeZoneName = null;

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
    public function setHomeZoneName($homeZoneName = null)
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

