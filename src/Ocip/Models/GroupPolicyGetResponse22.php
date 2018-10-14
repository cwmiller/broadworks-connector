<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPolicyGetResponse22
 *
 * Response to GroupPolicyGetRequest22.
 *           Contains the policy settings for the group.
 *
 * @see GroupPolicyGetRequest22
 */
class GroupPolicyGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callingPlanAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess|null
     */
    private $callingPlanAccess = null;

    /**
     * @ElementName extensionAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess|null
     */
    private $extensionAccess = null;

    /**
     * @ElementName voiceMessagingAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess|null
     */
    private $voiceMessagingAccess = null;

    /**
     * @ElementName departmentAdminUserAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess|null
     */
    private $departmentAdminUserAccess = null;

    /**
     * @ElementName departmentAdminTrunkGroupAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess|null
     */
    private $departmentAdminTrunkGroupAccess = null;

    /**
     * @ElementName departmentAdminPhoneNumberExtensionAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess|null
     */
    private $departmentAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName departmentAdminCallingLineIdNumberAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess|null
     */
    private $departmentAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName userAuthenticationAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess|null
     */
    private $userAuthenticationAccess = null;

    /**
     * @ElementName userGroupDirectoryAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess|null
     */
    private $userGroupDirectoryAccess = null;

    /**
     * @ElementName userProfileAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess|null
     */
    private $userProfileAccess = null;

    /**
     * @ElementName userEnhancedCallLogAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess|null
     */
    private $userEnhancedCallLogAccess = null;

    /**
     * @ElementName userAutoAttendantNameDialingAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserAutoAttendantNameDialingAccess|null
     */
    private $userAutoAttendantNameDialingAccess = null;

    /**
     * Getter for callingPlanAccess
     *
     * @ElementName callingPlanAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess|null
     */
    public function getCallingPlanAccess()
    {
        return $this->callingPlanAccess;
    }

    /**
     * Setter for callingPlanAccess
     *
     * @ElementName callingPlanAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess|null $callingPlanAccess
     * @return $this
     */
    public function setCallingPlanAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess $callingPlanAccess)
    {
        $this->callingPlanAccess = $callingPlanAccess;
        return $this;
    }

    /**
     * Getter for extensionAccess
     *
     * @ElementName extensionAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess|null
     */
    public function getExtensionAccess()
    {
        return $this->extensionAccess;
    }

    /**
     * Setter for extensionAccess
     *
     * @ElementName extensionAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess|null $extensionAccess
     * @return $this
     */
    public function setExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess $extensionAccess)
    {
        $this->extensionAccess = $extensionAccess;
        return $this;
    }

    /**
     * Getter for voiceMessagingAccess
     *
     * @ElementName voiceMessagingAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess|null
     */
    public function getVoiceMessagingAccess()
    {
        return $this->voiceMessagingAccess;
    }

    /**
     * Setter for voiceMessagingAccess
     *
     * @ElementName voiceMessagingAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess|null $voiceMessagingAccess
     * @return $this
     */
    public function setVoiceMessagingAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess $voiceMessagingAccess)
    {
        $this->voiceMessagingAccess = $voiceMessagingAccess;
        return $this;
    }

    /**
     * Getter for departmentAdminUserAccess
     *
     * @ElementName departmentAdminUserAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess|null
     */
    public function getDepartmentAdminUserAccess()
    {
        return $this->departmentAdminUserAccess;
    }

    /**
     * Setter for departmentAdminUserAccess
     *
     * @ElementName departmentAdminUserAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess|null $departmentAdminUserAccess
     * @return $this
     */
    public function setDepartmentAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess $departmentAdminUserAccess)
    {
        $this->departmentAdminUserAccess = $departmentAdminUserAccess;
        return $this;
    }

    /**
     * Getter for departmentAdminTrunkGroupAccess
     *
     * @ElementName departmentAdminTrunkGroupAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess|null
     */
    public function getDepartmentAdminTrunkGroupAccess()
    {
        return $this->departmentAdminTrunkGroupAccess;
    }

    /**
     * Setter for departmentAdminTrunkGroupAccess
     *
     * @ElementName departmentAdminTrunkGroupAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess|null $departmentAdminTrunkGroupAccess
     * @return $this
     */
    public function setDepartmentAdminTrunkGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess $departmentAdminTrunkGroupAccess)
    {
        $this->departmentAdminTrunkGroupAccess = $departmentAdminTrunkGroupAccess;
        return $this;
    }

    /**
     * Getter for departmentAdminPhoneNumberExtensionAccess
     *
     * @ElementName departmentAdminPhoneNumberExtensionAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess|null
     */
    public function getDepartmentAdminPhoneNumberExtensionAccess()
    {
        return $this->departmentAdminPhoneNumberExtensionAccess;
    }

    /**
     * Setter for departmentAdminPhoneNumberExtensionAccess
     *
     * @ElementName departmentAdminPhoneNumberExtensionAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess|null $departmentAdminPhoneNumberExtensionAccess
     * @return $this
     */
    public function setDepartmentAdminPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess $departmentAdminPhoneNumberExtensionAccess)
    {
        $this->departmentAdminPhoneNumberExtensionAccess = $departmentAdminPhoneNumberExtensionAccess;
        return $this;
    }

    /**
     * Getter for departmentAdminCallingLineIdNumberAccess
     *
     * @ElementName departmentAdminCallingLineIdNumberAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess|null
     */
    public function getDepartmentAdminCallingLineIdNumberAccess()
    {
        return $this->departmentAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for departmentAdminCallingLineIdNumberAccess
     *
     * @ElementName departmentAdminCallingLineIdNumberAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess|null $departmentAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setDepartmentAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess $departmentAdminCallingLineIdNumberAccess)
    {
        $this->departmentAdminCallingLineIdNumberAccess = $departmentAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * Getter for userAuthenticationAccess
     *
     * @ElementName userAuthenticationAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess|null
     */
    public function getUserAuthenticationAccess()
    {
        return $this->userAuthenticationAccess;
    }

    /**
     * Setter for userAuthenticationAccess
     *
     * @ElementName userAuthenticationAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess|null $userAuthenticationAccess
     * @return $this
     */
    public function setUserAuthenticationAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess $userAuthenticationAccess)
    {
        $this->userAuthenticationAccess = $userAuthenticationAccess;
        return $this;
    }

    /**
     * Getter for userGroupDirectoryAccess
     *
     * @ElementName userGroupDirectoryAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess|null
     */
    public function getUserGroupDirectoryAccess()
    {
        return $this->userGroupDirectoryAccess;
    }

    /**
     * Setter for userGroupDirectoryAccess
     *
     * @ElementName userGroupDirectoryAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess|null $userGroupDirectoryAccess
     * @return $this
     */
    public function setUserGroupDirectoryAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess $userGroupDirectoryAccess)
    {
        $this->userGroupDirectoryAccess = $userGroupDirectoryAccess;
        return $this;
    }

    /**
     * Getter for userProfileAccess
     *
     * @ElementName userProfileAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess|null
     */
    public function getUserProfileAccess()
    {
        return $this->userProfileAccess;
    }

    /**
     * Setter for userProfileAccess
     *
     * @ElementName userProfileAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess|null $userProfileAccess
     * @return $this
     */
    public function setUserProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess $userProfileAccess)
    {
        $this->userProfileAccess = $userProfileAccess;
        return $this;
    }

    /**
     * Getter for userEnhancedCallLogAccess
     *
     * @ElementName userEnhancedCallLogAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess|null
     */
    public function getUserEnhancedCallLogAccess()
    {
        return $this->userEnhancedCallLogAccess;
    }

    /**
     * Setter for userEnhancedCallLogAccess
     *
     * @ElementName userEnhancedCallLogAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess|null $userEnhancedCallLogAccess
     * @return $this
     */
    public function setUserEnhancedCallLogAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess $userEnhancedCallLogAccess)
    {
        $this->userEnhancedCallLogAccess = $userEnhancedCallLogAccess;
        return $this;
    }

    /**
     * Getter for userAutoAttendantNameDialingAccess
     *
     * @ElementName userAutoAttendantNameDialingAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserAutoAttendantNameDialingAccess|null
     */
    public function getUserAutoAttendantNameDialingAccess()
    {
        return $this->userAutoAttendantNameDialingAccess;
    }

    /**
     * Setter for userAutoAttendantNameDialingAccess
     *
     * @ElementName userAutoAttendantNameDialingAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserAutoAttendantNameDialingAccess|null $userAutoAttendantNameDialingAccess
     * @return $this
     */
    public function setUserAutoAttendantNameDialingAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserAutoAttendantNameDialingAccess $userAutoAttendantNameDialingAccess)
    {
        $this->userAutoAttendantNameDialingAccess = $userAutoAttendantNameDialingAccess;
        return $this;
    }


}

