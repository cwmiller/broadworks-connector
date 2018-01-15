<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceInstancePrivacyModifyRequest
 *
 * Modify the data associated with Privacy for a service instance.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupServiceInstancePrivacyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

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
     * @ElementName enableAutoAttendantNameDialingPrivacy
     * @var bool|null
     */
    private $enableAutoAttendantNameDialingPrivacy = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

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

    /**
     * Getter for enableAutoAttendantNameDialingPrivacy
     *
     * @ElementName enableAutoAttendantNameDialingPrivacy
     * @return bool|null
     */
    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return $this->enableAutoAttendantNameDialingPrivacy;
    }

    /**
     * Setter for enableAutoAttendantNameDialingPrivacy
     *
     * @ElementName enableAutoAttendantNameDialingPrivacy
     * @param bool|null $enableAutoAttendantNameDialingPrivacy
     * @return $this
     */
    public function setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy)
    {
        $this->enableAutoAttendantNameDialingPrivacy = $enableAutoAttendantNameDialingPrivacy;
        return $this;
    }


}

