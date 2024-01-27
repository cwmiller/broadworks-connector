<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceInstancePrivacyGetResponse
 *
 * Response to GroupServiceInstancePrivacyGetRequest.
 *         Replaced by: GroupServiceInstancePrivacyGetResponse17sp4
 *
 * @see GroupServiceInstancePrivacyGetRequest
 * @see GroupServiceInstancePrivacyGetResponse17sp4
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:13075","type":"sequence"}]
 */
class GroupServiceInstancePrivacyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableDirectoryPrivacy
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:13075
     * @var bool|null
     */
    protected $enableDirectoryPrivacy = null;

    /**
     * @ElementName enableAutoAttendantExtensionDialingPrivacy
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:13075
     * @var bool|null
     */
    protected $enableAutoAttendantExtensionDialingPrivacy = null;

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
}

