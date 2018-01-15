<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetDefaultResponse
 *
 * Response to the GroupGetDefaultRequest. All values are default values for a
 * group's profile.
 */
class GroupGetDefaultResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultDomain
     * @var string|null
     */
    private $defaultDomain = null;

    /**
     * @ElementName userLimit
     * @var int|null
     */
    private $userLimit = null;

    /**
     * @ElementName timeZone
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName timeZoneDisplayName
     * @var string|null
     */
    private $timeZoneDisplayName = null;

    /**
     * Getter for defaultDomain
     *
     * @ElementName defaultDomain
     * @return string|null
     */
    public function getDefaultDomain()
    {
        return $this->defaultDomain;
    }

    /**
     * Setter for defaultDomain
     *
     * @ElementName defaultDomain
     * @param string|null $defaultDomain
     * @return $this
     */
    public function setDefaultDomain($defaultDomain)
    {
        $this->defaultDomain = $defaultDomain;
        return $this;
    }

    /**
     * Getter for userLimit
     *
     * @ElementName userLimit
     * @return int|null
     */
    public function getUserLimit()
    {
        return $this->userLimit;
    }

    /**
     * Setter for userLimit
     *
     * @ElementName userLimit
     * @param int|null $userLimit
     * @return $this
     */
    public function setUserLimit($userLimit)
    {
        $this->userLimit = $userLimit;
        return $this;
    }

    /**
     * Getter for timeZone
     *
     * @ElementName timeZone
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @ElementName timeZone
     * @param string|null $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * Getter for timeZoneDisplayName
     *
     * @ElementName timeZoneDisplayName
     * @return string|null
     */
    public function getTimeZoneDisplayName()
    {
        return $this->timeZoneDisplayName;
    }

    /**
     * Setter for timeZoneDisplayName
     *
     * @ElementName timeZoneDisplayName
     * @param string|null $timeZoneDisplayName
     * @return $this
     */
    public function setTimeZoneDisplayName($timeZoneDisplayName)
    {
        $this->timeZoneDisplayName = $timeZoneDisplayName;
        return $this;
    }


}

