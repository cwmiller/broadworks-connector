<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPolicyGetDefaultResponse16sp1
 *
 * Response to SystemPolicyGetDefaultRequest16sp1.
 *         Contains the default policy settings for the system.
 */
class SystemPolicyGetDefaultResponse16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupCallingPlanAccess
     * @var string|null
     */
    private $groupCallingPlanAccess = null;

    /**
     * @ElementName groupExtensionAccess
     * @var string|null
     */
    private $groupExtensionAccess = null;

    /**
     * @ElementName groupLDAPIntegrationAccess
     * @var string|null
     */
    private $groupLDAPIntegrationAccess = null;

    /**
     * @ElementName groupVoiceMessagingAccess
     * @var string|null
     */
    private $groupVoiceMessagingAccess = null;

    /**
     * @ElementName groupDepartmentAdminUserAccess
     * @var string|null
     */
    private $groupDepartmentAdminUserAccess = null;

    /**
     * @ElementName groupDepartmentAdminTrunkGroupAccess
     * @var string|null
     */
    private $groupDepartmentAdminTrunkGroupAccess = null;

    /**
     * @ElementName groupUserAuthenticationAccess
     * @var string|null
     */
    private $groupUserAuthenticationAccess = null;

    /**
     * @ElementName groupUserGroupDirectoryAccess
     * @var string|null
     */
    private $groupUserGroupDirectoryAccess = null;

    /**
     * @ElementName groupUserProfileAccess
     * @var string|null
     */
    private $groupUserProfileAccess = null;

    /**
     * @ElementName groupUserEnhancedCallLogsAccess
     * @var string|null
     */
    private $groupUserEnhancedCallLogsAccess = null;

    /**
     * @ElementName groupAdminProfileAccess
     * @var string|null
     */
    private $groupAdminProfileAccess = null;

    /**
     * @ElementName groupAdminUserAccess
     * @var string|null
     */
    private $groupAdminUserAccess = null;

    /**
     * @ElementName groupAdminAdminAccess
     * @var string|null
     */
    private $groupAdminAdminAccess = null;

    /**
     * @ElementName groupAdminDepartmentAccess
     * @var string|null
     */
    private $groupAdminDepartmentAccess = null;

    /**
     * @ElementName groupAdminAccessDeviceAccess
     * @var string|null
     */
    private $groupAdminAccessDeviceAccess = null;

    /**
     * @ElementName groupAdminEnhancedServiceInstanceAccess
     * @var string|null
     */
    private $groupAdminEnhancedServiceInstanceAccess = null;

    /**
     * @ElementName groupAdminFeatureAccessCodeAccess
     * @var string|null
     */
    private $groupAdminFeatureAccessCodeAccess = null;

    /**
     * @ElementName groupAdminPhoneNumberExtensionAccess
     * @var string|null
     */
    private $groupAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName groupAdminServiceAccess
     * @var string|null
     */
    private $groupAdminServiceAccess = null;

    /**
     * @ElementName groupAdminTrunkGroupAccess
     * @var string|null
     */
    private $groupAdminTrunkGroupAccess = null;

    /**
     * @ElementName groupAdminSessionAdmissionControlAccess
     * @var string|null
     */
    private $groupAdminSessionAdmissionControlAccess = null;

    /**
     * @ElementName serviceProviderAdminProfileAccess
     * @var string|null
     */
    private $serviceProviderAdminProfileAccess = null;

    /**
     * @ElementName serviceProviderAdminGroupAccess
     * @var string|null
     */
    private $serviceProviderAdminGroupAccess = null;

    /**
     * @ElementName serviceProviderAdminUserAccess
     * @var string|null
     */
    private $serviceProviderAdminUserAccess = null;

    /**
     * @ElementName serviceProviderAdminAdminAccess
     * @var string|null
     */
    private $serviceProviderAdminAdminAccess = null;

    /**
     * @ElementName serviceProviderAdminDepartmentAccess
     * @var string|null
     */
    private $serviceProviderAdminDepartmentAccess = null;

    /**
     * @ElementName serviceProviderAdminAccessDeviceAccess
     * @var string|null
     */
    private $serviceProviderAdminAccessDeviceAccess = null;

    /**
     * @ElementName serviceProviderAdminPhoneNumberExtensionAccess
     * @var string|null
     */
    private $serviceProviderAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName serviceProviderAdminServiceAccess
     * @var string|null
     */
    private $serviceProviderAdminServiceAccess = null;

    /**
     * @ElementName serviceProviderAdminServicePackAccess
     * @var string|null
     */
    private $serviceProviderAdminServicePackAccess = null;

    /**
     * @ElementName serviceProviderAdminSessionAdmissionControlAccess
     * @var string|null
     */
    private $serviceProviderAdminSessionAdmissionControlAccess = null;

    /**
     * @ElementName serviceProviderAdminWebBrandingAccess
     * @var string|null
     */
    private $serviceProviderAdminWebBrandingAccess = null;

    /**
     * @ElementName enterpriseAdminNetworkPolicyAccess
     * @var string|null
     */
    private $enterpriseAdminNetworkPolicyAccess = null;

    /**
     * Getter for groupCallingPlanAccess
     *
     * @ElementName groupCallingPlanAccess
     * @return string|null
     */
    public function getGroupCallingPlanAccess()
    {
        return $this->groupCallingPlanAccess;
    }

    /**
     * Setter for groupCallingPlanAccess
     *
     * @ElementName groupCallingPlanAccess
     * @param string|null $groupCallingPlanAccess
     * @return $this
     */
    public function setGroupCallingPlanAccess($groupCallingPlanAccess)
    {
        $this->groupCallingPlanAccess = $groupCallingPlanAccess;
        return $this;
    }

    /**
     * Getter for groupExtensionAccess
     *
     * @ElementName groupExtensionAccess
     * @return string|null
     */
    public function getGroupExtensionAccess()
    {
        return $this->groupExtensionAccess;
    }

    /**
     * Setter for groupExtensionAccess
     *
     * @ElementName groupExtensionAccess
     * @param string|null $groupExtensionAccess
     * @return $this
     */
    public function setGroupExtensionAccess($groupExtensionAccess)
    {
        $this->groupExtensionAccess = $groupExtensionAccess;
        return $this;
    }

    /**
     * Getter for groupLDAPIntegrationAccess
     *
     * @ElementName groupLDAPIntegrationAccess
     * @return string|null
     */
    public function getGroupLDAPIntegrationAccess()
    {
        return $this->groupLDAPIntegrationAccess;
    }

    /**
     * Setter for groupLDAPIntegrationAccess
     *
     * @ElementName groupLDAPIntegrationAccess
     * @param string|null $groupLDAPIntegrationAccess
     * @return $this
     */
    public function setGroupLDAPIntegrationAccess($groupLDAPIntegrationAccess)
    {
        $this->groupLDAPIntegrationAccess = $groupLDAPIntegrationAccess;
        return $this;
    }

    /**
     * Getter for groupVoiceMessagingAccess
     *
     * @ElementName groupVoiceMessagingAccess
     * @return string|null
     */
    public function getGroupVoiceMessagingAccess()
    {
        return $this->groupVoiceMessagingAccess;
    }

    /**
     * Setter for groupVoiceMessagingAccess
     *
     * @ElementName groupVoiceMessagingAccess
     * @param string|null $groupVoiceMessagingAccess
     * @return $this
     */
    public function setGroupVoiceMessagingAccess($groupVoiceMessagingAccess)
    {
        $this->groupVoiceMessagingAccess = $groupVoiceMessagingAccess;
        return $this;
    }

    /**
     * Getter for groupDepartmentAdminUserAccess
     *
     * @ElementName groupDepartmentAdminUserAccess
     * @return string|null
     */
    public function getGroupDepartmentAdminUserAccess()
    {
        return $this->groupDepartmentAdminUserAccess;
    }

    /**
     * Setter for groupDepartmentAdminUserAccess
     *
     * @ElementName groupDepartmentAdminUserAccess
     * @param string|null $groupDepartmentAdminUserAccess
     * @return $this
     */
    public function setGroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess)
    {
        $this->groupDepartmentAdminUserAccess = $groupDepartmentAdminUserAccess;
        return $this;
    }

    /**
     * Getter for groupDepartmentAdminTrunkGroupAccess
     *
     * @ElementName groupDepartmentAdminTrunkGroupAccess
     * @return string|null
     */
    public function getGroupDepartmentAdminTrunkGroupAccess()
    {
        return $this->groupDepartmentAdminTrunkGroupAccess;
    }

    /**
     * Setter for groupDepartmentAdminTrunkGroupAccess
     *
     * @ElementName groupDepartmentAdminTrunkGroupAccess
     * @param string|null $groupDepartmentAdminTrunkGroupAccess
     * @return $this
     */
    public function setGroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess)
    {
        $this->groupDepartmentAdminTrunkGroupAccess = $groupDepartmentAdminTrunkGroupAccess;
        return $this;
    }

    /**
     * Getter for groupUserAuthenticationAccess
     *
     * @ElementName groupUserAuthenticationAccess
     * @return string|null
     */
    public function getGroupUserAuthenticationAccess()
    {
        return $this->groupUserAuthenticationAccess;
    }

    /**
     * Setter for groupUserAuthenticationAccess
     *
     * @ElementName groupUserAuthenticationAccess
     * @param string|null $groupUserAuthenticationAccess
     * @return $this
     */
    public function setGroupUserAuthenticationAccess($groupUserAuthenticationAccess)
    {
        $this->groupUserAuthenticationAccess = $groupUserAuthenticationAccess;
        return $this;
    }

    /**
     * Getter for groupUserGroupDirectoryAccess
     *
     * @ElementName groupUserGroupDirectoryAccess
     * @return string|null
     */
    public function getGroupUserGroupDirectoryAccess()
    {
        return $this->groupUserGroupDirectoryAccess;
    }

    /**
     * Setter for groupUserGroupDirectoryAccess
     *
     * @ElementName groupUserGroupDirectoryAccess
     * @param string|null $groupUserGroupDirectoryAccess
     * @return $this
     */
    public function setGroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess)
    {
        $this->groupUserGroupDirectoryAccess = $groupUserGroupDirectoryAccess;
        return $this;
    }

    /**
     * Getter for groupUserProfileAccess
     *
     * @ElementName groupUserProfileAccess
     * @return string|null
     */
    public function getGroupUserProfileAccess()
    {
        return $this->groupUserProfileAccess;
    }

    /**
     * Setter for groupUserProfileAccess
     *
     * @ElementName groupUserProfileAccess
     * @param string|null $groupUserProfileAccess
     * @return $this
     */
    public function setGroupUserProfileAccess($groupUserProfileAccess)
    {
        $this->groupUserProfileAccess = $groupUserProfileAccess;
        return $this;
    }

    /**
     * Getter for groupUserEnhancedCallLogsAccess
     *
     * @ElementName groupUserEnhancedCallLogsAccess
     * @return string|null
     */
    public function getGroupUserEnhancedCallLogsAccess()
    {
        return $this->groupUserEnhancedCallLogsAccess;
    }

    /**
     * Setter for groupUserEnhancedCallLogsAccess
     *
     * @ElementName groupUserEnhancedCallLogsAccess
     * @param string|null $groupUserEnhancedCallLogsAccess
     * @return $this
     */
    public function setGroupUserEnhancedCallLogsAccess($groupUserEnhancedCallLogsAccess)
    {
        $this->groupUserEnhancedCallLogsAccess = $groupUserEnhancedCallLogsAccess;
        return $this;
    }

    /**
     * Getter for groupAdminProfileAccess
     *
     * @ElementName groupAdminProfileAccess
     * @return string|null
     */
    public function getGroupAdminProfileAccess()
    {
        return $this->groupAdminProfileAccess;
    }

    /**
     * Setter for groupAdminProfileAccess
     *
     * @ElementName groupAdminProfileAccess
     * @param string|null $groupAdminProfileAccess
     * @return $this
     */
    public function setGroupAdminProfileAccess($groupAdminProfileAccess)
    {
        $this->groupAdminProfileAccess = $groupAdminProfileAccess;
        return $this;
    }

    /**
     * Getter for groupAdminUserAccess
     *
     * @ElementName groupAdminUserAccess
     * @return string|null
     */
    public function getGroupAdminUserAccess()
    {
        return $this->groupAdminUserAccess;
    }

    /**
     * Setter for groupAdminUserAccess
     *
     * @ElementName groupAdminUserAccess
     * @param string|null $groupAdminUserAccess
     * @return $this
     */
    public function setGroupAdminUserAccess($groupAdminUserAccess)
    {
        $this->groupAdminUserAccess = $groupAdminUserAccess;
        return $this;
    }

    /**
     * Getter for groupAdminAdminAccess
     *
     * @ElementName groupAdminAdminAccess
     * @return string|null
     */
    public function getGroupAdminAdminAccess()
    {
        return $this->groupAdminAdminAccess;
    }

    /**
     * Setter for groupAdminAdminAccess
     *
     * @ElementName groupAdminAdminAccess
     * @param string|null $groupAdminAdminAccess
     * @return $this
     */
    public function setGroupAdminAdminAccess($groupAdminAdminAccess)
    {
        $this->groupAdminAdminAccess = $groupAdminAdminAccess;
        return $this;
    }

    /**
     * Getter for groupAdminDepartmentAccess
     *
     * @ElementName groupAdminDepartmentAccess
     * @return string|null
     */
    public function getGroupAdminDepartmentAccess()
    {
        return $this->groupAdminDepartmentAccess;
    }

    /**
     * Setter for groupAdminDepartmentAccess
     *
     * @ElementName groupAdminDepartmentAccess
     * @param string|null $groupAdminDepartmentAccess
     * @return $this
     */
    public function setGroupAdminDepartmentAccess($groupAdminDepartmentAccess)
    {
        $this->groupAdminDepartmentAccess = $groupAdminDepartmentAccess;
        return $this;
    }

    /**
     * Getter for groupAdminAccessDeviceAccess
     *
     * @ElementName groupAdminAccessDeviceAccess
     * @return string|null
     */
    public function getGroupAdminAccessDeviceAccess()
    {
        return $this->groupAdminAccessDeviceAccess;
    }

    /**
     * Setter for groupAdminAccessDeviceAccess
     *
     * @ElementName groupAdminAccessDeviceAccess
     * @param string|null $groupAdminAccessDeviceAccess
     * @return $this
     */
    public function setGroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess)
    {
        $this->groupAdminAccessDeviceAccess = $groupAdminAccessDeviceAccess;
        return $this;
    }

    /**
     * Getter for groupAdminEnhancedServiceInstanceAccess
     *
     * @ElementName groupAdminEnhancedServiceInstanceAccess
     * @return string|null
     */
    public function getGroupAdminEnhancedServiceInstanceAccess()
    {
        return $this->groupAdminEnhancedServiceInstanceAccess;
    }

    /**
     * Setter for groupAdminEnhancedServiceInstanceAccess
     *
     * @ElementName groupAdminEnhancedServiceInstanceAccess
     * @param string|null $groupAdminEnhancedServiceInstanceAccess
     * @return $this
     */
    public function setGroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess)
    {
        $this->groupAdminEnhancedServiceInstanceAccess = $groupAdminEnhancedServiceInstanceAccess;
        return $this;
    }

    /**
     * Getter for groupAdminFeatureAccessCodeAccess
     *
     * @ElementName groupAdminFeatureAccessCodeAccess
     * @return string|null
     */
    public function getGroupAdminFeatureAccessCodeAccess()
    {
        return $this->groupAdminFeatureAccessCodeAccess;
    }

    /**
     * Setter for groupAdminFeatureAccessCodeAccess
     *
     * @ElementName groupAdminFeatureAccessCodeAccess
     * @param string|null $groupAdminFeatureAccessCodeAccess
     * @return $this
     */
    public function setGroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess)
    {
        $this->groupAdminFeatureAccessCodeAccess = $groupAdminFeatureAccessCodeAccess;
        return $this;
    }

    /**
     * Getter for groupAdminPhoneNumberExtensionAccess
     *
     * @ElementName groupAdminPhoneNumberExtensionAccess
     * @return string|null
     */
    public function getGroupAdminPhoneNumberExtensionAccess()
    {
        return $this->groupAdminPhoneNumberExtensionAccess;
    }

    /**
     * Setter for groupAdminPhoneNumberExtensionAccess
     *
     * @ElementName groupAdminPhoneNumberExtensionAccess
     * @param string|null $groupAdminPhoneNumberExtensionAccess
     * @return $this
     */
    public function setGroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess)
    {
        $this->groupAdminPhoneNumberExtensionAccess = $groupAdminPhoneNumberExtensionAccess;
        return $this;
    }

    /**
     * Getter for groupAdminServiceAccess
     *
     * @ElementName groupAdminServiceAccess
     * @return string|null
     */
    public function getGroupAdminServiceAccess()
    {
        return $this->groupAdminServiceAccess;
    }

    /**
     * Setter for groupAdminServiceAccess
     *
     * @ElementName groupAdminServiceAccess
     * @param string|null $groupAdminServiceAccess
     * @return $this
     */
    public function setGroupAdminServiceAccess($groupAdminServiceAccess)
    {
        $this->groupAdminServiceAccess = $groupAdminServiceAccess;
        return $this;
    }

    /**
     * Getter for groupAdminTrunkGroupAccess
     *
     * @ElementName groupAdminTrunkGroupAccess
     * @return string|null
     */
    public function getGroupAdminTrunkGroupAccess()
    {
        return $this->groupAdminTrunkGroupAccess;
    }

    /**
     * Setter for groupAdminTrunkGroupAccess
     *
     * @ElementName groupAdminTrunkGroupAccess
     * @param string|null $groupAdminTrunkGroupAccess
     * @return $this
     */
    public function setGroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess)
    {
        $this->groupAdminTrunkGroupAccess = $groupAdminTrunkGroupAccess;
        return $this;
    }

    /**
     * Getter for groupAdminSessionAdmissionControlAccess
     *
     * @ElementName groupAdminSessionAdmissionControlAccess
     * @return string|null
     */
    public function getGroupAdminSessionAdmissionControlAccess()
    {
        return $this->groupAdminSessionAdmissionControlAccess;
    }

    /**
     * Setter for groupAdminSessionAdmissionControlAccess
     *
     * @ElementName groupAdminSessionAdmissionControlAccess
     * @param string|null $groupAdminSessionAdmissionControlAccess
     * @return $this
     */
    public function setGroupAdminSessionAdmissionControlAccess($groupAdminSessionAdmissionControlAccess)
    {
        $this->groupAdminSessionAdmissionControlAccess = $groupAdminSessionAdmissionControlAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminProfileAccess
     *
     * @ElementName serviceProviderAdminProfileAccess
     * @return string|null
     */
    public function getServiceProviderAdminProfileAccess()
    {
        return $this->serviceProviderAdminProfileAccess;
    }

    /**
     * Setter for serviceProviderAdminProfileAccess
     *
     * @ElementName serviceProviderAdminProfileAccess
     * @param string|null $serviceProviderAdminProfileAccess
     * @return $this
     */
    public function setServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess)
    {
        $this->serviceProviderAdminProfileAccess = $serviceProviderAdminProfileAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminGroupAccess
     *
     * @ElementName serviceProviderAdminGroupAccess
     * @return string|null
     */
    public function getServiceProviderAdminGroupAccess()
    {
        return $this->serviceProviderAdminGroupAccess;
    }

    /**
     * Setter for serviceProviderAdminGroupAccess
     *
     * @ElementName serviceProviderAdminGroupAccess
     * @param string|null $serviceProviderAdminGroupAccess
     * @return $this
     */
    public function setServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess)
    {
        $this->serviceProviderAdminGroupAccess = $serviceProviderAdminGroupAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminUserAccess
     *
     * @ElementName serviceProviderAdminUserAccess
     * @return string|null
     */
    public function getServiceProviderAdminUserAccess()
    {
        return $this->serviceProviderAdminUserAccess;
    }

    /**
     * Setter for serviceProviderAdminUserAccess
     *
     * @ElementName serviceProviderAdminUserAccess
     * @param string|null $serviceProviderAdminUserAccess
     * @return $this
     */
    public function setServiceProviderAdminUserAccess($serviceProviderAdminUserAccess)
    {
        $this->serviceProviderAdminUserAccess = $serviceProviderAdminUserAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminAdminAccess
     *
     * @ElementName serviceProviderAdminAdminAccess
     * @return string|null
     */
    public function getServiceProviderAdminAdminAccess()
    {
        return $this->serviceProviderAdminAdminAccess;
    }

    /**
     * Setter for serviceProviderAdminAdminAccess
     *
     * @ElementName serviceProviderAdminAdminAccess
     * @param string|null $serviceProviderAdminAdminAccess
     * @return $this
     */
    public function setServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess)
    {
        $this->serviceProviderAdminAdminAccess = $serviceProviderAdminAdminAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminDepartmentAccess
     *
     * @ElementName serviceProviderAdminDepartmentAccess
     * @return string|null
     */
    public function getServiceProviderAdminDepartmentAccess()
    {
        return $this->serviceProviderAdminDepartmentAccess;
    }

    /**
     * Setter for serviceProviderAdminDepartmentAccess
     *
     * @ElementName serviceProviderAdminDepartmentAccess
     * @param string|null $serviceProviderAdminDepartmentAccess
     * @return $this
     */
    public function setServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess)
    {
        $this->serviceProviderAdminDepartmentAccess = $serviceProviderAdminDepartmentAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminAccessDeviceAccess
     *
     * @ElementName serviceProviderAdminAccessDeviceAccess
     * @return string|null
     */
    public function getServiceProviderAdminAccessDeviceAccess()
    {
        return $this->serviceProviderAdminAccessDeviceAccess;
    }

    /**
     * Setter for serviceProviderAdminAccessDeviceAccess
     *
     * @ElementName serviceProviderAdminAccessDeviceAccess
     * @param string|null $serviceProviderAdminAccessDeviceAccess
     * @return $this
     */
    public function setServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess)
    {
        $this->serviceProviderAdminAccessDeviceAccess = $serviceProviderAdminAccessDeviceAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminPhoneNumberExtensionAccess
     *
     * @ElementName serviceProviderAdminPhoneNumberExtensionAccess
     * @return string|null
     */
    public function getServiceProviderAdminPhoneNumberExtensionAccess()
    {
        return $this->serviceProviderAdminPhoneNumberExtensionAccess;
    }

    /**
     * Setter for serviceProviderAdminPhoneNumberExtensionAccess
     *
     * @ElementName serviceProviderAdminPhoneNumberExtensionAccess
     * @param string|null $serviceProviderAdminPhoneNumberExtensionAccess
     * @return $this
     */
    public function setServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess)
    {
        $this->serviceProviderAdminPhoneNumberExtensionAccess = $serviceProviderAdminPhoneNumberExtensionAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminServiceAccess
     *
     * @ElementName serviceProviderAdminServiceAccess
     * @return string|null
     */
    public function getServiceProviderAdminServiceAccess()
    {
        return $this->serviceProviderAdminServiceAccess;
    }

    /**
     * Setter for serviceProviderAdminServiceAccess
     *
     * @ElementName serviceProviderAdminServiceAccess
     * @param string|null $serviceProviderAdminServiceAccess
     * @return $this
     */
    public function setServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess)
    {
        $this->serviceProviderAdminServiceAccess = $serviceProviderAdminServiceAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminServicePackAccess
     *
     * @ElementName serviceProviderAdminServicePackAccess
     * @return string|null
     */
    public function getServiceProviderAdminServicePackAccess()
    {
        return $this->serviceProviderAdminServicePackAccess;
    }

    /**
     * Setter for serviceProviderAdminServicePackAccess
     *
     * @ElementName serviceProviderAdminServicePackAccess
     * @param string|null $serviceProviderAdminServicePackAccess
     * @return $this
     */
    public function setServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess)
    {
        $this->serviceProviderAdminServicePackAccess = $serviceProviderAdminServicePackAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminSessionAdmissionControlAccess
     *
     * @ElementName serviceProviderAdminSessionAdmissionControlAccess
     * @return string|null
     */
    public function getServiceProviderAdminSessionAdmissionControlAccess()
    {
        return $this->serviceProviderAdminSessionAdmissionControlAccess;
    }

    /**
     * Setter for serviceProviderAdminSessionAdmissionControlAccess
     *
     * @ElementName serviceProviderAdminSessionAdmissionControlAccess
     * @param string|null $serviceProviderAdminSessionAdmissionControlAccess
     * @return $this
     */
    public function setServiceProviderAdminSessionAdmissionControlAccess($serviceProviderAdminSessionAdmissionControlAccess)
    {
        $this->serviceProviderAdminSessionAdmissionControlAccess = $serviceProviderAdminSessionAdmissionControlAccess;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminWebBrandingAccess
     *
     * @ElementName serviceProviderAdminWebBrandingAccess
     * @return string|null
     */
    public function getServiceProviderAdminWebBrandingAccess()
    {
        return $this->serviceProviderAdminWebBrandingAccess;
    }

    /**
     * Setter for serviceProviderAdminWebBrandingAccess
     *
     * @ElementName serviceProviderAdminWebBrandingAccess
     * @param string|null $serviceProviderAdminWebBrandingAccess
     * @return $this
     */
    public function setServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess)
    {
        $this->serviceProviderAdminWebBrandingAccess = $serviceProviderAdminWebBrandingAccess;
        return $this;
    }

    /**
     * Getter for enterpriseAdminNetworkPolicyAccess
     *
     * @ElementName enterpriseAdminNetworkPolicyAccess
     * @return string|null
     */
    public function getEnterpriseAdminNetworkPolicyAccess()
    {
        return $this->enterpriseAdminNetworkPolicyAccess;
    }

    /**
     * Setter for enterpriseAdminNetworkPolicyAccess
     *
     * @ElementName enterpriseAdminNetworkPolicyAccess
     * @param string|null $enterpriseAdminNetworkPolicyAccess
     * @return $this
     */
    public function setEnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess)
    {
        $this->enterpriseAdminNetworkPolicyAccess = $enterpriseAdminNetworkPolicyAccess;
        return $this;
    }


}

