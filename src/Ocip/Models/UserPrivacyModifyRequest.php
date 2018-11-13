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
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName enableDirectoryPrivacy
     * @Type bool
     * @var bool|null
     */
    private $enableDirectoryPrivacy = null;

    /**
     * @ElementName enableAutoAttendantExtensionDialingPrivacy
     * @Type bool
     * @var bool|null
     */
    private $enableAutoAttendantExtensionDialingPrivacy = null;

    /**
     * @ElementName enableAutoAttendantNameDialingPrivacy
     * @Type bool
     * @var bool|null
     */
    private $enableAutoAttendantNameDialingPrivacy = null;

    /**
     * @ElementName enablePhoneStatusPrivacy
     * @Type bool
     * @var bool|null
     */
    private $enablePhoneStatusPrivacy = null;

    /**
     * @ElementName permittedMonitorUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $permittedMonitorUserIdList = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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

    /**
     * Getter for enablePhoneStatusPrivacy
     *
     * @return bool
     */
    public function getEnablePhoneStatusPrivacy()
    {
        return $this->enablePhoneStatusPrivacy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enablePhoneStatusPrivacy;
    }

    /**
     * Setter for enablePhoneStatusPrivacy
     *
     * @param bool $enablePhoneStatusPrivacy
     * @return $this
     */
    public function setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy)
    {
        $this->enablePhoneStatusPrivacy = $enablePhoneStatusPrivacy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnablePhoneStatusPrivacy()
    {
        $this->enablePhoneStatusPrivacy = null;
        return $this;
    }

    /**
     * Getter for permittedMonitorUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getPermittedMonitorUserIdList()
    {
        return $this->permittedMonitorUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->permittedMonitorUserIdList;
    }

    /**
     * Setter for permittedMonitorUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $permittedMonitorUserIdList
     * @return $this
     */
    public function setPermittedMonitorUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $permittedMonitorUserIdList)
    {
        if ($permittedMonitorUserIdList === null) {
            $this->permittedMonitorUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->permittedMonitorUserIdList = $permittedMonitorUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPermittedMonitorUserIdList()
    {
        $this->permittedMonitorUserIdList = null;
        return $this;
    }


}

