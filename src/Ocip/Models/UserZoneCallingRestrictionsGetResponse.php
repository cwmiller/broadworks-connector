<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserZoneCallingRestrictionsGetResponse
 *
 * Gets the home zone for a user
 *         Response to a UserZoneCallingRestrictionsGetRequest
 *
 * @see UserZoneCallingRestrictionsGetRequest
 */
class UserZoneCallingRestrictionsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName homeZoneName
     * @Type string
     * @var string|null
     */
    private $homeZoneName = null;

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

