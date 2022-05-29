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
 * @Groups [{"id":"b87b6355d5858fdbeb8c1eb05dc1651a:190","type":"sequence"}]
 */
class UserPrivacyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:190
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName enableDirectoryPrivacy
     * @Type bool
     * @Optional
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:190
     * @var bool|null
     */
    protected $enableDirectoryPrivacy = null;

    /**
     * @ElementName enableAutoAttendantExtensionDialingPrivacy
     * @Type bool
     * @Optional
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:190
     * @var bool|null
     */
    protected $enableAutoAttendantExtensionDialingPrivacy = null;

    /**
     * @ElementName enableAutoAttendantNameDialingPrivacy
     * @Type bool
     * @Optional
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:190
     * @var bool|null
     */
    protected $enableAutoAttendantNameDialingPrivacy = null;

    /**
     * @ElementName enablePhoneStatusPrivacy
     * @Type bool
     * @Optional
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:190
     * @var bool|null
     */
    protected $enablePhoneStatusPrivacy = null;

    /**
     * @ElementName permittedMonitorUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:190
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $permittedMonitorUserIdList = null;

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
    public function setPermittedMonitorUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $permittedMonitorUserIdList = null)
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

