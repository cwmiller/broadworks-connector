<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPolicyGetDefaultResponse17sp1
 *
 * Response to SystemPolicyGetDefaultRequest17sp1.
 *         Contains the default policy settings for the system.
 *         The following elements are only used in XS data mode:
 *      serviceProviderAdminCommunicationBarringAccess
 *
 * @see SystemPolicyGetDefaultRequest17sp1
 */
class SystemPolicyGetDefaultResponse17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupCallingPlanAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess|null
     */
    private $groupCallingPlanAccess = null;

    /**
     * @ElementName groupExtensionAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess|null
     */
    private $groupExtensionAccess = null;

    /**
     * @ElementName groupLDAPIntegrationAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess|null
     */
    private $groupLDAPIntegrationAccess = null;

    /**
     * @ElementName groupVoiceMessagingAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess|null
     */
    private $groupVoiceMessagingAccess = null;

    /**
     * @ElementName groupDepartmentAdminUserAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess|null
     */
    private $groupDepartmentAdminUserAccess = null;

    /**
     * @ElementName groupDepartmentAdminTrunkGroupAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess|null
     */
    private $groupDepartmentAdminTrunkGroupAccess = null;

    /**
     * @ElementName groupDepartmentAdminPhoneNumberExtensionAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess|null
     */
    private $groupDepartmentAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName groupDepartmentAdminCallingLineIdNumberAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess|null
     */
    private $groupDepartmentAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName groupUserAuthenticationAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess|null
     */
    private $groupUserAuthenticationAccess = null;

    /**
     * @ElementName groupUserGroupDirectoryAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess|null
     */
    private $groupUserGroupDirectoryAccess = null;

    /**
     * @ElementName groupUserProfileAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess|null
     */
    private $groupUserProfileAccess = null;

    /**
     * @ElementName groupUserEnhancedCallLogsAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess|null
     */
    private $groupUserEnhancedCallLogsAccess = null;

    /**
     * @ElementName groupAdminProfileAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess|null
     */
    private $groupAdminProfileAccess = null;

    /**
     * @ElementName groupAdminUserAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess|null
     */
    private $groupAdminUserAccess = null;

    /**
     * @ElementName groupAdminAdminAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess|null
     */
    private $groupAdminAdminAccess = null;

    /**
     * @ElementName groupAdminDepartmentAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess|null
     */
    private $groupAdminDepartmentAccess = null;

    /**
     * @ElementName groupAdminAccessDeviceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess|null
     */
    private $groupAdminAccessDeviceAccess = null;

    /**
     * @ElementName groupAdminEnhancedServiceInstanceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess|null
     */
    private $groupAdminEnhancedServiceInstanceAccess = null;

    /**
     * @ElementName groupAdminFeatureAccessCodeAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess|null
     */
    private $groupAdminFeatureAccessCodeAccess = null;

    /**
     * @ElementName groupAdminPhoneNumberExtensionAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess|null
     */
    private $groupAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName groupAdminCallingLineIdNumberAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess|null
     */
    private $groupAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName groupAdminServiceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess|null
     */
    private $groupAdminServiceAccess = null;

    /**
     * @ElementName groupAdminTrunkGroupAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess|null
     */
    private $groupAdminTrunkGroupAccess = null;

    /**
     * @ElementName groupAdminSessionAdmissionControlAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess|null
     */
    private $groupAdminSessionAdmissionControlAccess = null;

    /**
     * @ElementName groupAdminOfficeZoneAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess|null
     */
    private $groupAdminOfficeZoneAccess = null;

    /**
     * @ElementName serviceProviderAdminProfileAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess|null
     */
    private $serviceProviderAdminProfileAccess = null;

    /**
     * @ElementName serviceProviderAdminGroupAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess|null
     */
    private $serviceProviderAdminGroupAccess = null;

    /**
     * @ElementName serviceProviderAdminUserAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess|null
     */
    private $serviceProviderAdminUserAccess = null;

    /**
     * @ElementName serviceProviderAdminAdminAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess|null
     */
    private $serviceProviderAdminAdminAccess = null;

    /**
     * @ElementName serviceProviderAdminDepartmentAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess|null
     */
    private $serviceProviderAdminDepartmentAccess = null;

    /**
     * @ElementName serviceProviderAdminAccessDeviceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess|null
     */
    private $serviceProviderAdminAccessDeviceAccess = null;

    /**
     * @ElementName serviceProviderAdminPhoneNumberExtensionAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess|null
     */
    private $serviceProviderAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName serviceProviderAdminCallingLineIdNumberAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess|null
     */
    private $serviceProviderAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName serviceProviderAdminServiceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess|null
     */
    private $serviceProviderAdminServiceAccess = null;

    /**
     * @ElementName serviceProviderAdminServicePackAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess|null
     */
    private $serviceProviderAdminServicePackAccess = null;

    /**
     * @ElementName serviceProviderAdminSessionAdmissionControlAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess|null
     */
    private $serviceProviderAdminSessionAdmissionControlAccess = null;

    /**
     * @ElementName serviceProviderAdminWebBrandingAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess|null
     */
    private $serviceProviderAdminWebBrandingAccess = null;

    /**
     * @ElementName serviceProviderAdminOfficeZoneAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess|null
     */
    private $serviceProviderAdminOfficeZoneAccess = null;

    /**
     * @ElementName serviceProviderAdminCommunicationBarringAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess|null
     */
    private $serviceProviderAdminCommunicationBarringAccess = null;

    /**
     * @ElementName enterpriseAdminNetworkPolicyAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess|null
     */
    private $enterpriseAdminNetworkPolicyAccess = null;

    /**
     * Getter for groupCallingPlanAccess
     *
     * @ElementName groupCallingPlanAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess|null
     */
    public function getGroupCallingPlanAccess()
    {
        return $this->groupCallingPlanAccess;
    }

    /**
     * Setter for groupCallingPlanAccess
     *
     * @ElementName groupCallingPlanAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess|null $groupCallingPlanAccess
     * @return $this
     */
    public function setGroupCallingPlanAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess $groupCallingPlanAccess)
    {
        $this->groupCallingPlanAccess = $groupCallingPlanAccess;
        return $this;
    }

    /**
     * Getter for groupExtensionAccess
     *
     * @ElementName groupExtensionAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess|null
     */
    public function getGroupExtensionAccess()
    {
        return $this->groupExtensionAccess;
    }

    /**
     * Setter for groupExtensionAccess
     *
     * @ElementName groupExtensionAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess|null $groupExtensionAccess
     * @return $this
     */
    public function setGroupExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess $groupExtensionAccess)
    {
        $this->groupExtensionAccess = $groupExtensionAccess;
        return $this;
    }

    /**
     * Getter for groupLDAPIntegrationAccess
     *
     * @ElementName groupLDAPIntegrationAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess|null
     */
    public function getGroupLDAPIntegrationAccess()
    {
        return $this->groupLDAPIntegrationAccess;
    }

    /**
     * Setter for groupLDAPIntegrationAccess
     *
     * @ElementName groupLDAPIntegrationAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess|null $groupLDAPIntegrationAccess
     * @return $this
     */
    public function setGroupLDAPIntegrationAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess $groupLDAPIntegrationAccess)
    {
        $this->groupLDAPIntegrationAccess = $groupLDAPIntegrationAccess;
        return $this;
    }

    /**
     * Getter for groupVoiceMessagingAccess
     *
     * @ElementName groupVoiceMessagingAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess|null
     */
    public function getGroupVoiceMessagingAccess()
    {
        return $this->groupVoiceMessagingAccess;
    }

    /**
     * Setter for groupVoiceMessagingAccess
     *
     * @ElementName groupVoiceMessagingAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess|null $groupVoiceMessagingAccess
     * @return $this
     */
    public function setGroupVoiceMessagingAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess $groupVoiceMessagingAccess)
    {
        $this->groupVoiceMessagingAccess = $groupVoiceMessagingAccess;
        return $this;
    }

    /**
     * Getter for groupDepartmentAdminUserAccess
     *
     * @ElementName groupDepartmentAdminUserAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess|null
     */
    public function getGroupDepartmentAdminUserAccess()
    {
        return $this->groupDepartmentAdminUserAccess;
    }

    /**
     * Setter for groupDepartmentAdminUserAccess
     *
     * @ElementName groupDepartmentAdminUserAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess|null $groupDepartmentAdminUserAccess
     * @return $this
     */
    public function setGroupDepartmentAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess $groupDepartmentAdminUserAccess)
    {
        $this->groupDepartmentAdminUserAccess = $groupDepartmentAdminUserAccess;
        return $this;
    }

    /**
     * Getter for groupDepartmentAdminTrunkGroupAccess
     *
     * @ElementName groupDepartmentAdminTrunkGroupAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess|null
     */
    public function getGroupDepartmentAdminTrunkGroupAccess()
    {
        return $this->groupDepartmentAdminTrunkGroupAccess;
    }

    /**
     * Setter for groupDepartmentAdminTrunkGroupAccess
     *
     * @ElementName groupDepartmentAdminTrunkGroupAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess|null $groupDepartmentAdminTrunkGroupAccess
     * @return $this
     */
    public function setGroupDepartmentAdminTrunkGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess $groupDepartmentAdminTrunkGroupAccess)
    {
        $this->groupDepartmentAdminTrunkGroupAccess = $groupDepartmentAdminTrunkGroupAccess;
        return $this;
    }

    /**
     * Getter for groupDepartmentAdminPhoneNumberExtensionAccess
     *
     * @ElementName groupDepartmentAdminPhoneNumberExtensionAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess|null
     */
    public function getGroupDepartmentAdminPhoneNumberExtensionAccess()
    {
        return $this->groupDepartmentAdminPhoneNumberExtensionAccess;
    }

    /**
     * Setter for groupDepartmentAdminPhoneNumberExtensionAccess
     *
     * @ElementName groupDepartmentAdminPhoneNumberExtensionAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess|null $groupDepartmentAdminPhoneNumberExtensionAccess
     * @return $this
     */
    public function setGroupDepartmentAdminPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess $groupDepartmentAdminPhoneNumberExtensionAccess)
    {
        $this->groupDepartmentAdminPhoneNumberExtensionAccess = $groupDepartmentAdminPhoneNumberExtensionAccess;
        return $this;
    }

    /**
     * Getter for groupDepartmentAdminCallingLineIdNumberAccess
     *
     * @ElementName groupDepartmentAdminCallingLineIdNumberAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess|null
     */
    public function getGroupDepartmentAdminCallingLineIdNumberAccess()
    {
        return $this->groupDepartmentAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for groupDepartmentAdminCallingLineIdNumberAccess
     *
     * @ElementName groupDepartmentAdminCallingLineIdNumberAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess|null $groupDepartmentAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setGroupDepartmentAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess $groupDepartmentAdminCallingLineIdNumberAccess)
    {
        $this->groupDepartmentAdminCallingLineIdNumberAccess = $groupDepartmentAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * Getter for groupUserAuthenticationAccess
     *
     * @ElementName groupUserAuthenticationAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess|null
     */
    public function getGroupUserAuthenticationAccess()
    {
        return $this->groupUserAuthenticationAccess;
    }

    /**
     * Setter for groupUserAuthenticationAccess
     *
     * @ElementName groupUserAuthenticationAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess|null $groupUserAuthenticationAccess
     * @return $this
     */
    public function setGroupUserAuthenticationAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess $groupUserAuthenticationAccess)
    {
        $this->groupUserAuthenticationAccess = $groupUserAuthenticationAccess;
        return $this;
    }

    /**
     * Getter for groupUserGroupDirectoryAccess
     *
     * @ElementName groupUserGroupDirectoryAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess|null
     */
    public function getGroupUserGroupDirectoryAccess()
    {
        return $this->groupUserGroupDirectoryAccess;
    }

    /**
     * Setter for groupUserGroupDirectoryAccess
     *
     * @ElementName groupUserGroupDirectoryAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess|null $groupUserGroupDirectoryAccess
     * @return $this
     */
    public function setGroupUserGroupDirectoryAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess $groupUserGroupDirectoryAccess)
    {
        $this->groupUserGroupDirectoryAccess = $groupUserGroupDirectoryAccess;
        return $this;
    }

    /**
     * Getter for groupUserProfileAccess
     *
     * @ElementName groupUserProfileAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess|null
     */
    public function getGroupUserProfileAccess()
    {
        return $this->groupUserProfileAccess;
    }

    /**
     * Setter for groupUserProfileAccess
     *
     * @ElementName groupUserProfileAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess|null $groupUserProfileAccess
     * @return $this
     */
    public function setGroupUserProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess $groupUserProfileAccess)
    {
        $this->groupUserProfileAccess = $groupUserProfileAccess;
        return $this;
    }

    /**
     * Getter for groupUserEnhancedCallLogsAccess
     *
     * @ElementName groupUserEnhancedCallLogsAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess|null
     */
    public function getGroupUserEnhancedCallLogsAccess()
    {
        return $this->groupUserEnhancedCallLogsAccess;
    }

    /**
     * Setter for groupUserEnhancedCallLogsAccess
     *
     * @ElementName groupUserEnhancedCallLogsAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess|null $groupUserEnhancedCallLogsAccess
     * @return $this
     */
    public function setGroupUserEnhancedCallLogsAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess $groupUserEnhancedCallLogsAccess)
    {
        $this->groupUserEnhancedCallLogsAccess = $groupUserEnhancedCallLogsAccess;
        return $this;
    }

    /**
     * Getter for groupAdminProfileAccess
     *
     * @ElementName groupAdminProfileAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess|null
     */
    public function getGroupAdminProfileAccess()
    {
        return $this->groupAdminProfileAccess;
    }

    /**
     * Setter for groupAdminProfileAccess
     *
     * @ElementName groupAdminProfileAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess|null $groupAdminProfileAccess
     * @return $this
     */
    public function setGroupAdminProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess $groupAdminProfileAccess)
    {
        $this->groupAdminProfileAccess = $groupAdminProfileAccess;
        return $this;
    }

    /**
     * Getter for groupAdminUserAccess
     *
     * @ElementName groupAdminUserAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess|null
     */
    public function getGroupAdminUserAccess()
    {
        return $this->groupAdminUserAccess;
    }

    /**
     * Setter for groupAdminUserAccess
     *
     * @ElementName groupAdminUserAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess|null $groupAdminUserAccess
     * @return $this
     */
    public function setGroupAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess $groupAdminUserAccess)
    {
        $this->groupAdminUserAccess = $groupAdminUserAccess;
        return $this;
    }

    /**
     * Getter for groupAdminAdminAccess
     *
     * @ElementName groupAdminAdminAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess|null
     */
    public function getGroupAdminAdminAccess()
    {
        return $this->groupAdminAdminAccess;
    }

    /**
     * Setter for groupAdminAdminAccess
     *
     * @ElementName groupAdminAdminAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess|null $groupAdminAdminAccess
     * @return $this
     */
    public function setGroupAdminAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess $groupAdminAdminAccess)
    {
        $this->groupAdminAdminAccess = $groupAdminAdminAccess;
        return $this;
    }

    /**
     * Getter for groupAdminDepartmentAccess
     *
     * @ElementName groupAdminDepartmentAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess|null
     */
    public function getGroupAdminDepartmentAccess()
    {
        return $this->groupAdminDepartmentAccess;
    }

    /**
     * Setter for groupAdminDepartmentAccess
     *
     * @ElementName groupAdminDepartmentAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess|null $groupAdminDepartmentAccess
     * @return $this
     */
    public function setGroupAdminDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess $groupAdminDepartmentAccess)
    {
        $this->groupAdminDepartmentAccess = $groupAdminDepartmentAccess;
        return $this;
    }

    /**
     * Getter for groupAdminAccessDeviceAccess
     *
     * @ElementName groupAdminAccessDeviceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess|null
     */
    public function getGroupAdminAccessDeviceAccess()
    {
        return $this->groupAdminAccessDeviceAccess;
    }

    /**
     * Setter for groupAdminAccessDeviceAccess
     *
     * @ElementName groupAdminAccessDeviceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess|null $groupAdminAccessDeviceAccess
     * @return $this
     */
    public function setGroupAdminAccessDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess $groupAdminAccessDeviceAccess)
    {
        $this->groupAdminAccessDeviceAccess = $groupAdminAccessDeviceAccess;
        return $this;
    }

    /**
     * Getter for groupAdminEnhancedServiceInstanceAccess
     *
     * @ElementName groupAdminEnhancedServiceInstanceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess|null
     */
    public function getGroupAdminEnhancedServiceInstanceAccess()
    {
        return $this->groupAdminEnhancedServiceInstanceAccess;
    }

    /**
     * Setter for groupAdminEnhancedServiceInstanceAccess
     *
     * @ElementName groupAdminEnhancedServiceInstanceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess|null $groupAdminEnhancedServiceInstanceAccess
     * @return $this
     */
    public function setGroupAdminEnhancedServiceInstanceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess $groupAdminEnhancedServiceInstanceAccess)
    {
        $this->groupAdminEnhancedServiceInstanceAccess = $groupAdminEnhancedServiceInstanceAccess;
        return $this;
    }

    /**
     * Getter for groupAdminFeatureAccessCodeAccess
     *
     * @ElementName groupAdminFeatureAccessCodeAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess|null
     */
    public function getGroupAdminFeatureAccessCodeAccess()
    {
        return $this->groupAdminFeatureAccessCodeAccess;
    }

    /**
     * Setter for groupAdminFeatureAccessCodeAccess
     *
     * @ElementName groupAdminFeatureAccessCodeAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess|null $groupAdminFeatureAccessCodeAccess
     * @return $this
     */
    public function setGroupAdminFeatureAccessCodeAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess $groupAdminFeatureAccessCodeAccess)
    {
        $this->groupAdminFeatureAccessCodeAccess = $groupAdminFeatureAccessCodeAccess;
        return $this;
    }

    /**
     * Getter for groupAdminPhoneNumberExtensionAccess
     *
     * @ElementName groupAdminPhoneNumberExtensionAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess|null
     */
    public function getGroupAdminPhoneNumberExtensionAccess()
    {
        return $this->groupAdminPhoneNumberExtensionAccess;
    }

    /**
     * Setter for groupAdminPhoneNumberExtensionAccess
     *
     * @ElementName groupAdminPhoneNumberExtensionAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess|null $groupAdminPhoneNumberExtensionAccess
     * @return $this
     */
    public function setGroupAdminPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess $groupAdminPhoneNumberExtensionAccess)
    {
        $this->groupAdminPhoneNumberExtensionAccess = $groupAdminPhoneNumberExtensionAccess;
        return $this;
    }

    /**
     * Getter for groupAdminCallingLineIdNumberAccess
     *
     * @ElementName groupAdminCallingLineIdNumberAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess|null
     */
    public function getGroupAdminCallingLineIdNumberAccess()
    {
        return $this->groupAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for groupAdminCallingLineIdNumberAccess
     *
     * @ElementName groupAdminCallingLineIdNumberAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess|null $groupAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setGroupAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess $groupAdminCallingLineIdNumberAccess)
    {
        $this->groupAdminCallingLineIdNumberAccess = $groupAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * Getter for groupAdminServiceAccess
     *
     * @ElementName groupAdminServiceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess|null
     */
    public function getGroupAdminServiceAccess()
    {
        return $this->groupAdminServiceAccess;
    }

    /**
     * Setter for groupAdminServiceAccess
     *
     * @ElementName groupAdminServiceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess|null $groupAdminServiceAccess
     * @return $this
     */
    public function setGroupAdminServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess $groupAdminServiceAccess)
    {
        $this->groupAdminServiceAccess = $groupAdminServiceAccess;
        return $this;
    }

    /**
     * Getter for groupAdminTrunkGroupAccess
     *
     * @ElementName groupAdminTrunkGroupAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess|null
     */
    public function getGroupAdminTrunkGroupAccess()
    {
        return $this->groupAdminTrunkGroupAccess;
    }

    /**
     * Setter for groupAdminTrunkGroupAccess
     *
     * @ElementName groupAdminTrunkGroupAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess|null $groupAdminTrunkGroupAccess
     * @return $this
     */
    public function setGroupAdminTrunkGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess $groupAdminTrunkGroupAccess)
    {
        $this->groupAdminTrunkGroupAccess = $groupAdminTrunkGroupAccess;
        return $this;
    }

    /**
     * Getter for groupAdminSessionAdmissionControlAccess
     *
     * @ElementName groupAdminSessionAdmissionControlAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess|null
     */
    public function getGroupAdminSessionAdmissionControlAccess()
    {
        return $this->groupAdminSessionAdmissionControlAccess;
    }

    /**
     * Setter for groupAdminSessionAdmissionControlAccess
     *
     * @ElementName groupAdminSessionAdmissionControlAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess|null $groupAdminSessionAdmissionControlAccess
     * @return $this
     */
    public function setGroupAdminSessionAdmissionControlAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess $groupAdminSessionAdmissionControlAccess)
    {
        $this->groupAdminSessionAdmissionControlAccess = $groupAdminSessionAdmissionControlAccess;
        return $this;
    }

    /**
     * Getter for groupAdminOfficeZoneAccess
     *
     * @ElementName groupAdminOfficeZoneAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess|null
     */
    public function getGroupAdminOfficeZoneAccess()
    {
        return $this->groupAdminOfficeZoneAccess;
    }

    /**
     * Setter for groupAdminOfficeZoneAccess
     *
     * @ElementName groupAdminOfficeZoneAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess|null $groupAdminOfficeZoneAccess
     * @return $this
     */
    public function setGroupAdminOfficeZoneAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess $groupAdminOfficeZoneAccess)
    {
        $this->groupAdminOfficeZoneAccess = $groupAdminOfficeZoneAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminProfileAccess
     *
     * @ElementName serviceProviderAdminProfileAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess|null
     */
    public function getServiceProviderAdminProfileAccess()
    {
        return $this->serviceProviderAdminProfileAccess;
    }

    /**
     * Setter for serviceProviderAdminProfileAccess
     *
     * @ElementName serviceProviderAdminProfileAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess|null $serviceProviderAdminProfileAccess
     * @return $this
     */
    public function setServiceProviderAdminProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess $serviceProviderAdminProfileAccess)
    {
        $this->serviceProviderAdminProfileAccess = $serviceProviderAdminProfileAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminGroupAccess
     *
     * @ElementName serviceProviderAdminGroupAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess|null
     */
    public function getServiceProviderAdminGroupAccess()
    {
        return $this->serviceProviderAdminGroupAccess;
    }

    /**
     * Setter for serviceProviderAdminGroupAccess
     *
     * @ElementName serviceProviderAdminGroupAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess|null $serviceProviderAdminGroupAccess
     * @return $this
     */
    public function setServiceProviderAdminGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess $serviceProviderAdminGroupAccess)
    {
        $this->serviceProviderAdminGroupAccess = $serviceProviderAdminGroupAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminUserAccess
     *
     * @ElementName serviceProviderAdminUserAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess|null
     */
    public function getServiceProviderAdminUserAccess()
    {
        return $this->serviceProviderAdminUserAccess;
    }

    /**
     * Setter for serviceProviderAdminUserAccess
     *
     * @ElementName serviceProviderAdminUserAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess|null $serviceProviderAdminUserAccess
     * @return $this
     */
    public function setServiceProviderAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess $serviceProviderAdminUserAccess)
    {
        $this->serviceProviderAdminUserAccess = $serviceProviderAdminUserAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminAdminAccess
     *
     * @ElementName serviceProviderAdminAdminAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess|null
     */
    public function getServiceProviderAdminAdminAccess()
    {
        return $this->serviceProviderAdminAdminAccess;
    }

    /**
     * Setter for serviceProviderAdminAdminAccess
     *
     * @ElementName serviceProviderAdminAdminAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess|null $serviceProviderAdminAdminAccess
     * @return $this
     */
    public function setServiceProviderAdminAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess $serviceProviderAdminAdminAccess)
    {
        $this->serviceProviderAdminAdminAccess = $serviceProviderAdminAdminAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminDepartmentAccess
     *
     * @ElementName serviceProviderAdminDepartmentAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess|null
     */
    public function getServiceProviderAdminDepartmentAccess()
    {
        return $this->serviceProviderAdminDepartmentAccess;
    }

    /**
     * Setter for serviceProviderAdminDepartmentAccess
     *
     * @ElementName serviceProviderAdminDepartmentAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess|null $serviceProviderAdminDepartmentAccess
     * @return $this
     */
    public function setServiceProviderAdminDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess $serviceProviderAdminDepartmentAccess)
    {
        $this->serviceProviderAdminDepartmentAccess = $serviceProviderAdminDepartmentAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminAccessDeviceAccess
     *
     * @ElementName serviceProviderAdminAccessDeviceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess|null
     */
    public function getServiceProviderAdminAccessDeviceAccess()
    {
        return $this->serviceProviderAdminAccessDeviceAccess;
    }

    /**
     * Setter for serviceProviderAdminAccessDeviceAccess
     *
     * @ElementName serviceProviderAdminAccessDeviceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess|null $serviceProviderAdminAccessDeviceAccess
     * @return $this
     */
    public function setServiceProviderAdminAccessDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess $serviceProviderAdminAccessDeviceAccess)
    {
        $this->serviceProviderAdminAccessDeviceAccess = $serviceProviderAdminAccessDeviceAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminPhoneNumberExtensionAccess
     *
     * @ElementName serviceProviderAdminPhoneNumberExtensionAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess|null
     */
    public function getServiceProviderAdminPhoneNumberExtensionAccess()
    {
        return $this->serviceProviderAdminPhoneNumberExtensionAccess;
    }

    /**
     * Setter for serviceProviderAdminPhoneNumberExtensionAccess
     *
     * @ElementName serviceProviderAdminPhoneNumberExtensionAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess|null $serviceProviderAdminPhoneNumberExtensionAccess
     * @return $this
     */
    public function setServiceProviderAdminPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess $serviceProviderAdminPhoneNumberExtensionAccess)
    {
        $this->serviceProviderAdminPhoneNumberExtensionAccess = $serviceProviderAdminPhoneNumberExtensionAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminCallingLineIdNumberAccess
     *
     * @ElementName serviceProviderAdminCallingLineIdNumberAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess|null
     */
    public function getServiceProviderAdminCallingLineIdNumberAccess()
    {
        return $this->serviceProviderAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for serviceProviderAdminCallingLineIdNumberAccess
     *
     * @ElementName serviceProviderAdminCallingLineIdNumberAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess|null $serviceProviderAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setServiceProviderAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess $serviceProviderAdminCallingLineIdNumberAccess)
    {
        $this->serviceProviderAdminCallingLineIdNumberAccess = $serviceProviderAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminServiceAccess
     *
     * @ElementName serviceProviderAdminServiceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess|null
     */
    public function getServiceProviderAdminServiceAccess()
    {
        return $this->serviceProviderAdminServiceAccess;
    }

    /**
     * Setter for serviceProviderAdminServiceAccess
     *
     * @ElementName serviceProviderAdminServiceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess|null $serviceProviderAdminServiceAccess
     * @return $this
     */
    public function setServiceProviderAdminServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess $serviceProviderAdminServiceAccess)
    {
        $this->serviceProviderAdminServiceAccess = $serviceProviderAdminServiceAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminServicePackAccess
     *
     * @ElementName serviceProviderAdminServicePackAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess|null
     */
    public function getServiceProviderAdminServicePackAccess()
    {
        return $this->serviceProviderAdminServicePackAccess;
    }

    /**
     * Setter for serviceProviderAdminServicePackAccess
     *
     * @ElementName serviceProviderAdminServicePackAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess|null $serviceProviderAdminServicePackAccess
     * @return $this
     */
    public function setServiceProviderAdminServicePackAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess $serviceProviderAdminServicePackAccess)
    {
        $this->serviceProviderAdminServicePackAccess = $serviceProviderAdminServicePackAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminSessionAdmissionControlAccess
     *
     * @ElementName serviceProviderAdminSessionAdmissionControlAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess|null
     */
    public function getServiceProviderAdminSessionAdmissionControlAccess()
    {
        return $this->serviceProviderAdminSessionAdmissionControlAccess;
    }

    /**
     * Setter for serviceProviderAdminSessionAdmissionControlAccess
     *
     * @ElementName serviceProviderAdminSessionAdmissionControlAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess|null $serviceProviderAdminSessionAdmissionControlAccess
     * @return $this
     */
    public function setServiceProviderAdminSessionAdmissionControlAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess $serviceProviderAdminSessionAdmissionControlAccess)
    {
        $this->serviceProviderAdminSessionAdmissionControlAccess = $serviceProviderAdminSessionAdmissionControlAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminWebBrandingAccess
     *
     * @ElementName serviceProviderAdminWebBrandingAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess|null
     */
    public function getServiceProviderAdminWebBrandingAccess()
    {
        return $this->serviceProviderAdminWebBrandingAccess;
    }

    /**
     * Setter for serviceProviderAdminWebBrandingAccess
     *
     * @ElementName serviceProviderAdminWebBrandingAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess|null $serviceProviderAdminWebBrandingAccess
     * @return $this
     */
    public function setServiceProviderAdminWebBrandingAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess $serviceProviderAdminWebBrandingAccess)
    {
        $this->serviceProviderAdminWebBrandingAccess = $serviceProviderAdminWebBrandingAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminOfficeZoneAccess
     *
     * @ElementName serviceProviderAdminOfficeZoneAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess|null
     */
    public function getServiceProviderAdminOfficeZoneAccess()
    {
        return $this->serviceProviderAdminOfficeZoneAccess;
    }

    /**
     * Setter for serviceProviderAdminOfficeZoneAccess
     *
     * @ElementName serviceProviderAdminOfficeZoneAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess|null $serviceProviderAdminOfficeZoneAccess
     * @return $this
     */
    public function setServiceProviderAdminOfficeZoneAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess $serviceProviderAdminOfficeZoneAccess)
    {
        $this->serviceProviderAdminOfficeZoneAccess = $serviceProviderAdminOfficeZoneAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminCommunicationBarringAccess
     *
     * @ElementName serviceProviderAdminCommunicationBarringAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess|null
     */
    public function getServiceProviderAdminCommunicationBarringAccess()
    {
        return $this->serviceProviderAdminCommunicationBarringAccess;
    }

    /**
     * Setter for serviceProviderAdminCommunicationBarringAccess
     *
     * @ElementName serviceProviderAdminCommunicationBarringAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess|null $serviceProviderAdminCommunicationBarringAccess
     * @return $this
     */
    public function setServiceProviderAdminCommunicationBarringAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess $serviceProviderAdminCommunicationBarringAccess)
    {
        $this->serviceProviderAdminCommunicationBarringAccess = $serviceProviderAdminCommunicationBarringAccess;
        return $this;
    }

    /**
     * Getter for enterpriseAdminNetworkPolicyAccess
     *
     * @ElementName enterpriseAdminNetworkPolicyAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess|null
     */
    public function getEnterpriseAdminNetworkPolicyAccess()
    {
        return $this->enterpriseAdminNetworkPolicyAccess;
    }

    /**
     * Setter for enterpriseAdminNetworkPolicyAccess
     *
     * @ElementName enterpriseAdminNetworkPolicyAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess|null $enterpriseAdminNetworkPolicyAccess
     * @return $this
     */
    public function setEnterpriseAdminNetworkPolicyAccess(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess $enterpriseAdminNetworkPolicyAccess)
    {
        $this->enterpriseAdminNetworkPolicyAccess = $enterpriseAdminNetworkPolicyAccess;
        return $this;
    }


}

