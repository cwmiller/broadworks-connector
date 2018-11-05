<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrivacyModifyRequest
 *
 * Modify the user level data associated with Privacy.
 *         This command is supported for regular users only.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserPrivacyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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
     * @ElementName enablePhoneStatusPrivacy
     * @var bool|null
     */
    private $enablePhoneStatusPrivacy = null;

    /**
     * @ElementName permittedMonitorUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $permittedMonitorUserIdList = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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

    /**
     * Getter for enablePhoneStatusPrivacy
     *
     * @ElementName enablePhoneStatusPrivacy
     * @return bool|null
     */
    public function getEnablePhoneStatusPrivacy()
    {
        return $this->enablePhoneStatusPrivacy;
    }

    /**
     * Setter for enablePhoneStatusPrivacy
     *
     * @ElementName enablePhoneStatusPrivacy
     * @param bool|null $enablePhoneStatusPrivacy
     * @return $this
     */
    public function setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy)
    {
        $this->enablePhoneStatusPrivacy = $enablePhoneStatusPrivacy;
        return $this;
    }

    /**
     * Getter for permittedMonitorUserIdList
     *
     * @ElementName permittedMonitorUserIdList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPermittedMonitorUserIdList()
    {
        return $this->permittedMonitorUserIdList;
    }

    /**
     * Setter for permittedMonitorUserIdList
     *
     * @ElementName permittedMonitorUserIdList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil $permittedMonitorUserIdList
     * @return $this
     */
    public function setPermittedMonitorUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $permittedMonitorUserIdList)
    {
        $this->permittedMonitorUserIdList = $permittedMonitorUserIdList;
        return $this;
    }


}

