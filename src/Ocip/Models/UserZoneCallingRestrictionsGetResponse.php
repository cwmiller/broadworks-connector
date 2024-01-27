<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserZoneCallingRestrictionsGetResponse
 *
 * Gets the home zone for a user
 *         Response to a UserZoneCallingRestrictionsGetRequest
 *
 * @see UserZoneCallingRestrictionsGetRequest
 * @Groups [{"id":"1d57523802a1435faa76c4035da1e4dc:116","type":"sequence"}]
 */
class UserZoneCallingRestrictionsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName homeZoneName
     * @Type string
     * @Optional
     * @Group 1d57523802a1435faa76c4035da1e4dc:116
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $homeZoneName = null;

    /**
     * Getter for homeZoneName
     *
     * @return string
     */
    public function getHomeZoneName()
    {
        return $this->homeZoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneName;
    }

    /**
     * Setter for homeZoneName
     *
     * @param string $homeZoneName
     * @return $this
     */
    public function setHomeZoneName($homeZoneName)
    {
        $this->homeZoneName = $homeZoneName;
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

