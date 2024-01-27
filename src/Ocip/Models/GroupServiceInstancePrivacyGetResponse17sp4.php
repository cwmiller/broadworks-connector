<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceInstancePrivacyGetResponse17sp4
 *
 * Response to GroupServiceInstancePrivacyGetRequest17sp4.
 *
 * @see GroupServiceInstancePrivacyGetRequest17sp4
 * @Groups [{"id":"f0850ccc76fd27f9c07cb7218b2c1f84:61","type":"sequence"}]
 */
class GroupServiceInstancePrivacyGetResponse17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableDirectoryPrivacy
     * @Type bool
     * @Group f0850ccc76fd27f9c07cb7218b2c1f84:61
     * @var bool|null
     */
    protected $enableDirectoryPrivacy = null;

    /**
     * @ElementName enableAutoAttendantExtensionDialingPrivacy
     * @Type bool
     * @Group f0850ccc76fd27f9c07cb7218b2c1f84:61
     * @var bool|null
     */
    protected $enableAutoAttendantExtensionDialingPrivacy = null;

    /**
     * @ElementName enableAutoAttendantNameDialingPrivacy
     * @Type bool
     * @Group f0850ccc76fd27f9c07cb7218b2c1f84:61
     * @var bool|null
     */
    protected $enableAutoAttendantNameDialingPrivacy = null;

    /**
     * Getter for enableDirectoryPrivacy
     *
     * @return bool
     */
    public function getEnableDirectoryPrivacy()
    {
        return $this->enableDirectoryPrivacy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDirectoryPrivacy;
    }

    /**
     * Setter for enableDirectoryPrivacy
     *
     * @param bool $enableDirectoryPrivacy
     * @return $this
     */
    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy)
    {
        $this->enableDirectoryPrivacy = $enableDirectoryPrivacy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDirectoryPrivacy()
    {
        $this->enableDirectoryPrivacy = null;
        return $this;
    }

    /**
     * Getter for enableAutoAttendantExtensionDialingPrivacy
     *
     * @return bool
     */
    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return $this->enableAutoAttendantExtensionDialingPrivacy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutoAttendantExtensionDialingPrivacy;
    }

    /**
     * Setter for enableAutoAttendantExtensionDialingPrivacy
     *
     * @param bool $enableAutoAttendantExtensionDialingPrivacy
     * @return $this
     */
    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy)
    {
        $this->enableAutoAttendantExtensionDialingPrivacy = $enableAutoAttendantExtensionDialingPrivacy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutoAttendantExtensionDialingPrivacy()
    {
        $this->enableAutoAttendantExtensionDialingPrivacy = null;
        return $this;
    }

    /**
     * Getter for enableAutoAttendantNameDialingPrivacy
     *
     * @return bool
     */
    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return $this->enableAutoAttendantNameDialingPrivacy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutoAttendantNameDialingPrivacy;
    }

    /**
     * Setter for enableAutoAttendantNameDialingPrivacy
     *
     * @param bool $enableAutoAttendantNameDialingPrivacy
     * @return $this
     */
    public function setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy)
    {
        $this->enableAutoAttendantNameDialingPrivacy = $enableAutoAttendantNameDialingPrivacy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutoAttendantNameDialingPrivacy()
    {
        $this->enableAutoAttendantNameDialingPrivacy = null;
        return $this;
    }
}

