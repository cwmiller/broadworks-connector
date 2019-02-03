<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPolicyGetResponse
 *
 * Response to GroupPolicyGetRequest.
 *                 Contains the policy settings for the group.
 *
 * @see GroupPolicyGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:1947","type":"sequence"}]
 */
class GroupPolicyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callingPlanAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1947
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess|null
     */
    private $callingPlanAccess = null;

    /**
     * @ElementName extensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1947
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess|null
     */
    private $extensionAccess = null;

    /**
     * @ElementName ldapIntegrationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1947
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess|null
     */
    private $ldapIntegrationAccess = null;

    /**
     * @ElementName voiceMessagingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1947
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess|null
     */
    private $voiceMessagingAccess = null;

    /**
     * @ElementName departmentAdminUserAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1947
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess|null
     */
    private $departmentAdminUserAccess = null;

    /**
     * @ElementName userAuthenticationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1947
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess|null
     */
    private $userAuthenticationAccess = null;

    /**
     * @ElementName userGroupDirectoryAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1947
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess|null
     */
    private $userGroupDirectoryAccess = null;

    /**
     * @ElementName userProfileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1947
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess|null
     */
    private $userProfileAccess = null;

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


}

