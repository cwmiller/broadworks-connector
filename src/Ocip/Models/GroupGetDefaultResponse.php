<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetDefaultResponse
 *
 * Response to the GroupGetDefaultRequest. All values are default values for a group's profile.
 *
 * @see GroupGetDefaultRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5801","type":"sequence"}]
 */
class GroupGetDefaultResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName defaultDomain
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5801
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultDomain = null;

    /**
     * @ElementName userLimit
     * @Type int
     * @Group 4b0e7857796c636464362260a2f8e5ee:5801
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $userLimit = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5801
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $timeZone = null;

    /**
     * @ElementName timeZoneDisplayName
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5801
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $timeZoneDisplayName = null;

    /**
     * Getter for defaultDomain
     *
     * @return string
     */
    public function getDefaultDomain()
    {
        return $this->defaultDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultDomain;
    }

    /**
     * Setter for defaultDomain
     *
     * @param string $defaultDomain
     * @return $this
     */
    public function setDefaultDomain($defaultDomain)
    {
        $this->defaultDomain = $defaultDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultDomain()
    {
        $this->defaultDomain = null;
        return $this;
    }

    /**
     * Getter for userLimit
     *
     * @return int
     */
    public function getUserLimit()
    {
        return $this->userLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userLimit;
    }

    /**
     * Setter for userLimit
     *
     * @param int $userLimit
     * @return $this
     */
    public function setUserLimit($userLimit)
    {
        $this->userLimit = $userLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserLimit()
    {
        $this->userLimit = null;
        return $this;
    }

    /**
     * Getter for timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @param string $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZone()
    {
        $this->timeZone = null;
        return $this;
    }

    /**
     * Getter for timeZoneDisplayName
     *
     * @return string
     */
    public function getTimeZoneDisplayName()
    {
        return $this->timeZoneDisplayName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZoneDisplayName;
    }

    /**
     * Setter for timeZoneDisplayName
     *
     * @param string $timeZoneDisplayName
     * @return $this
     */
    public function setTimeZoneDisplayName($timeZoneDisplayName)
    {
        $this->timeZoneDisplayName = $timeZoneDisplayName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZoneDisplayName()
    {
        $this->timeZoneDisplayName = null;
        return $this;
    }
}

