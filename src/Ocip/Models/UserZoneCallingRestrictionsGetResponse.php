<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserZoneCallingRestrictionsGetResponse
 *
 * Gets the home zone for a user
 *         Response to a UserZoneCallingRestrictionsGetRequest
 */
class UserZoneCallingRestrictionsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName homeZoneName
     * @var string|null
     */
    private $homeZoneName = null;

    /**
     * Getter for homeZoneName
     *
     * @ElementName homeZoneName
     * @return string|null
     */
    public function getHomeZoneName()
    {
        return $this->homeZoneName;
    }

    /**
     * Setter for homeZoneName
     *
     * @ElementName homeZoneName
     * @param string|null $homeZoneName
     * @return $this
     */
    public function setHomeZoneName($homeZoneName)
    {
        $this->homeZoneName = $homeZoneName;
        return $this;
    }


}

