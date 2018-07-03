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
 */
class GroupServiceInstancePrivacyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableDirectoryPrivacy
     * @var bool|null
     */
    private $enableDirectoryPrivacy = null;

    /**
     * @ElementName enableAutoAttendantExtensionDialingPrivacy
     * @var bool|null
     */
    private $enableAutoAttendantExtensionDialingPrivacy = null;

    /**
     * Getter for enableDirectoryPrivacy
     *
     * @ElementName enableDirectoryPrivacy
     * @return bool|null
     */
    public function getEnableDirectoryPrivacy()
    {
        return $this->enableDirectoryPrivacy;
    }

    /**
     * Setter for enableDirectoryPrivacy
     *
     * @ElementName enableDirectoryPrivacy
     * @param bool|null $enableDirectoryPrivacy
     * @return $this
     */
    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy)
    {
        $this->enableDirectoryPrivacy = $enableDirectoryPrivacy;
        return $this;
    }

    /**
     * Getter for enableAutoAttendantExtensionDialingPrivacy
     *
     * @ElementName enableAutoAttendantExtensionDialingPrivacy
     * @return bool|null
     */
    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return $this->enableAutoAttendantExtensionDialingPrivacy;
    }

    /**
     * Setter for enableAutoAttendantExtensionDialingPrivacy
     *
     * @ElementName enableAutoAttendantExtensionDialingPrivacy
     * @param bool|null $enableAutoAttendantExtensionDialingPrivacy
     * @return $this
     */
    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy)
    {
        $this->enableAutoAttendantExtensionDialingPrivacy = $enableAutoAttendantExtensionDialingPrivacy;
        return $this;
    }


}

