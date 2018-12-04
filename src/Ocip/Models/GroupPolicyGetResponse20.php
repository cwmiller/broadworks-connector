<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPolicyGetResponse20
 *
 * Response to GroupPolicyGetRequest20.
 *           Contains the policy settings for the group.
 *           
 *           Replaced by: GroupPolicyGetResponse22 in AS data mode
 *
 * @see GroupPolicyGetRequest20
 * @see GroupPolicyGetResponse22
 * @Groups [{"id":"499b56264fbe226bfef3c338c8d4750d:1768","type":"sequence"}]
 */
class GroupPolicyGetResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callingPlanAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess
     * @Group 499b56264fbe226bfef3c338c8d4750d:1768
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess|null
     */
    private $callingPlanAccess = null;

    /**
     * @ElementName extensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess
     * @Group 499b56264fbe226bfef3c338c8d4750d:1768
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess|null
     */
    private $extensionAccess = null;

    /**
     * @ElementName ldapIntegrationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess
     * @Group 499b56264fbe226bfef3c338c8d4750d:1768
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess|null
     */
    private $ldapIntegrationAccess = null;

    /**
     * @ElementName voiceMessagingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess
     * @Group 499b56264fbe226bfef3c338c8d4750d:1768
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess|null
     */
    private $voiceMessagingAccess = null;

    /**
     * @ElementName departmentAdminUserAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess
     * @Group 499b56264fbe226bfef3c338c8d4750d:1768
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess|null
     */
    private $departmentAdminUserAccess = null;

    /**
     * @ElementName departmentAdminTrunkGroupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess
     * @Group 499b56264fbe226bfef3c338c8d4750d:1768
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess|null
     */
    private $departmentAdminTrunkGroupAccess = null;

    /**
     * @ElementName departmentAdminPhoneNumberExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess
     * @Group 499b56264fbe226bfef3c338c8d4750d:1768
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess|null
     */
    private $departmentAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName departmentAdminCallingLineIdNumberAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess
     * @Group 499b56264fbe226bfef3c338c8d4750d:1768
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess|null
     */
    private $departmentAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName userAuthenticationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess
     * @Group 499b56264fbe226bfef3c338c8d4750d:1768
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess|null
     */
    private $userAuthenticationAccess = null;

    /**
     * @ElementName userGroupDirectoryAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess
     * @Group 499b56264fbe226bfef3c338c8d4750d:1768
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess|null
     */
    private $userGroupDirectoryAccess = null;

    /**
     * @ElementName userProfileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess
     * @Group 499b56264fbe226bfef3c338c8d4750d:1768
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess|null
     */
    private $userProfileAccess = null;

    /**
     * @ElementName userEnhancedCallLogAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess
     * @Group 499b56264fbe226bfef3c338c8d4750d:1768
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess|null
     */
    private $userEnhancedCallLogAccess = null;

    /**
     * @ElementName userAutoAttendantNameDialingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserAutoAttendantNameDialingAccess
     * @Group 499b56264fbe226bfef3c338c8d4750d:1768
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserAutoAttendantNameDialingAccess|null
     */
    private $userAutoAttendantNameDialingAccess = null;

    /**
     * Getter for callingPlanAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess
     */
    public function getCallingPlanAccess()
    {
        return $this->callingPlanAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingPlanAccess;
    }

    /**
     * Setter for callingPlanAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess $callingPlanAccess
     * @return $this
     */
    public function setCallingPlanAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess $callingPlanAccess)
    {
        $this->callingPlanAccess = $callingPlanAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingPlanAccess()
    {
        $this->callingPlanAccess = null;
        return $this;
    }

    /**
     * Getter for extensionAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess
     */
    public function getExtensionAccess()
    {
        return $this->extensionAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extensionAccess;
    }

    /**
     * Setter for extensionAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess $extensionAccess
     * @return $this
     */
    public function setExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess $extensionAccess)
    {
        $this->extensionAccess = $extensionAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtensionAccess()
    {
        $this->extensionAccess = null;
        return $this;
    }

    /**
     * Getter for ldapIntegrationAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess
     */
    public function getLdapIntegrationAccess()
    {
        return $this->ldapIntegrationAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ldapIntegrationAccess;
    }

    /**
     * Setter for ldapIntegrationAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess $ldapIntegrationAccess
     * @return $this
     */
    public function setLdapIntegrationAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess $ldapIntegrationAccess)
    {
        $this->ldapIntegrationAccess = $ldapIntegrationAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLdapIntegrationAccess()
    {
        $this->ldapIntegrationAccess = null;
        return $this;
    }

    /**
     * Getter for voiceMessagingAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess
     */
    public function getVoiceMessagingAccess()
    {
        return $this->voiceMessagingAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingAccess;
    }

    /**
     * Setter for voiceMessagingAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess $voiceMessagingAccess
     * @return $this
     */
    public function setVoiceMessagingAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess $voiceMessagingAccess)
    {
        $this->voiceMessagingAccess = $voiceMessagingAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingAccess()
    {
        $this->voiceMessagingAccess = null;
        return $this;
    }

    /**
     * Getter for departmentAdminUserAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess
     */
    public function getDepartmentAdminUserAccess()
    {
        return $this->departmentAdminUserAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentAdminUserAccess;
    }

    /**
     * Setter for departmentAdminUserAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess $departmentAdminUserAccess
     * @return $this
     */
    public function setDepartmentAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess $departmentAdminUserAccess)
    {
        $this->departmentAdminUserAccess = $departmentAdminUserAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentAdminUserAccess()
    {
        $this->departmentAdminUserAccess = null;
        return $this;
    }

    /**
     * Getter for departmentAdminTrunkGroupAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess
     */
    public function getDepartmentAdminTrunkGroupAccess()
    {
        return $this->departmentAdminTrunkGroupAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentAdminTrunkGroupAccess;
    }

    /**
     * Setter for departmentAdminTrunkGroupAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess $departmentAdminTrunkGroupAccess
     * @return $this
     */
    public function setDepartmentAdminTrunkGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess $departmentAdminTrunkGroupAccess)
    {
        $this->departmentAdminTrunkGroupAccess = $departmentAdminTrunkGroupAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentAdminTrunkGroupAccess()
    {
        $this->departmentAdminTrunkGroupAccess = null;
        return $this;
    }

    /**
     * Getter for departmentAdminPhoneNumberExtensionAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess
     */
    public function getDepartmentAdminPhoneNumberExtensionAccess()
    {
        return $this->departmentAdminPhoneNumberExtensionAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentAdminPhoneNumberExtensionAccess;
    }

    /**
     * Setter for departmentAdminPhoneNumberExtensionAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess $departmentAdminPhoneNumberExtensionAccess
     * @return $this
     */
    public function setDepartmentAdminPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess $departmentAdminPhoneNumberExtensionAccess)
    {
        $this->departmentAdminPhoneNumberExtensionAccess = $departmentAdminPhoneNumberExtensionAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentAdminPhoneNumberExtensionAccess()
    {
        $this->departmentAdminPhoneNumberExtensionAccess = null;
        return $this;
    }

    /**
     * Getter for departmentAdminCallingLineIdNumberAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess
     */
    public function getDepartmentAdminCallingLineIdNumberAccess()
    {
        return $this->departmentAdminCallingLineIdNumberAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for departmentAdminCallingLineIdNumberAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess $departmentAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setDepartmentAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess $departmentAdminCallingLineIdNumberAccess)
    {
        $this->departmentAdminCallingLineIdNumberAccess = $departmentAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentAdminCallingLineIdNumberAccess()
    {
        $this->departmentAdminCallingLineIdNumberAccess = null;
        return $this;
    }

    /**
     * Getter for userAuthenticationAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess
     */
    public function getUserAuthenticationAccess()
    {
        return $this->userAuthenticationAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userAuthenticationAccess;
    }

    /**
     * Setter for userAuthenticationAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess $userAuthenticationAccess
     * @return $this
     */
    public function setUserAuthenticationAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess $userAuthenticationAccess)
    {
        $this->userAuthenticationAccess = $userAuthenticationAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserAuthenticationAccess()
    {
        $this->userAuthenticationAccess = null;
        return $this;
    }

    /**
     * Getter for userGroupDirectoryAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess
     */
    public function getUserGroupDirectoryAccess()
    {
        return $this->userGroupDirectoryAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userGroupDirectoryAccess;
    }

    /**
     * Setter for userGroupDirectoryAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess $userGroupDirectoryAccess
     * @return $this
     */
    public function setUserGroupDirectoryAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess $userGroupDirectoryAccess)
    {
        $this->userGroupDirectoryAccess = $userGroupDirectoryAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserGroupDirectoryAccess()
    {
        $this->userGroupDirectoryAccess = null;
        return $this;
    }

    /**
     * Getter for userProfileAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess
     */
    public function getUserProfileAccess()
    {
        return $this->userProfileAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userProfileAccess;
    }

    /**
     * Setter for userProfileAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess $userProfileAccess
     * @return $this
     */
    public function setUserProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess $userProfileAccess)
    {
        $this->userProfileAccess = $userProfileAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserProfileAccess()
    {
        $this->userProfileAccess = null;
        return $this;
    }

    /**
     * Getter for userEnhancedCallLogAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess
     */
    public function getUserEnhancedCallLogAccess()
    {
        return $this->userEnhancedCallLogAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userEnhancedCallLogAccess;
    }

    /**
     * Setter for userEnhancedCallLogAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess $userEnhancedCallLogAccess
     * @return $this
     */
    public function setUserEnhancedCallLogAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess $userEnhancedCallLogAccess)
    {
        $this->userEnhancedCallLogAccess = $userEnhancedCallLogAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserEnhancedCallLogAccess()
    {
        $this->userEnhancedCallLogAccess = null;
        return $this;
    }

    /**
     * Getter for userAutoAttendantNameDialingAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserAutoAttendantNameDialingAccess
     */
    public function getUserAutoAttendantNameDialingAccess()
    {
        return $this->userAutoAttendantNameDialingAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userAutoAttendantNameDialingAccess;
    }

    /**
     * Setter for userAutoAttendantNameDialingAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserAutoAttendantNameDialingAccess $userAutoAttendantNameDialingAccess
     * @return $this
     */
    public function setUserAutoAttendantNameDialingAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserAutoAttendantNameDialingAccess $userAutoAttendantNameDialingAccess)
    {
        $this->userAutoAttendantNameDialingAccess = $userAutoAttendantNameDialingAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserAutoAttendantNameDialingAccess()
    {
        $this->userAutoAttendantNameDialingAccess = null;
        return $this;
    }


}

