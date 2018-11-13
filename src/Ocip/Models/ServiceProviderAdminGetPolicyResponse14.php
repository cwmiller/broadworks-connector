<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetPolicyResponse14
 *
 * Response to ServiceProviderAdminGetPolicyRequest14.
 *         Contains the policy settings for the service provider administrator.
 *         The networkPolicyAccess is returned only for the enterprise
 * administrator.
 *
 * @see ServiceProviderAdminGetPolicyRequest14
 */
class ServiceProviderAdminGetPolicyResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess|null
     */
    private $profileAccess = null;

    /**
     * @ElementName groupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess|null
     */
    private $groupAccess = null;

    /**
     * @ElementName userAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess|null
     */
    private $userAccess = null;

    /**
     * @ElementName adminAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess|null
     */
    private $adminAccess = null;

    /**
     * @ElementName departmentAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess|null
     */
    private $departmentAccess = null;

    /**
     * @ElementName accessDeviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess|null
     */
    private $accessDeviceAccess = null;

    /**
     * @ElementName phoneNumberExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess|null
     */
    private $phoneNumberExtensionAccess = null;

    /**
     * @ElementName serviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess|null
     */
    private $serviceAccess = null;

    /**
     * @ElementName servicePackAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess|null
     */
    private $servicePackAccess = null;

    /**
     * @ElementName webBrandingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess|null
     */
    private $webBrandingAccess = null;

    /**
     * @ElementName networkPolicyAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess|null
     */
    private $networkPolicyAccess = null;

    /**
     * Getter for profileAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess
     */
    public function getProfileAccess()
    {
        return $this->profileAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileAccess;
    }

    /**
     * Setter for profileAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess $profileAccess
     * @return $this
     */
    public function setProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess $profileAccess)
    {
        $this->profileAccess = $profileAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileAccess()
    {
        $this->profileAccess = null;
        return $this;
    }

    /**
     * Getter for groupAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess
     */
    public function getGroupAccess()
    {
        return $this->groupAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAccess;
    }

    /**
     * Setter for groupAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess $groupAccess
     * @return $this
     */
    public function setGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess $groupAccess)
    {
        $this->groupAccess = $groupAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAccess()
    {
        $this->groupAccess = null;
        return $this;
    }

    /**
     * Getter for userAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess
     */
    public function getUserAccess()
    {
        return $this->userAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userAccess;
    }

    /**
     * Setter for userAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess $userAccess
     * @return $this
     */
    public function setUserAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess $userAccess)
    {
        $this->userAccess = $userAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserAccess()
    {
        $this->userAccess = null;
        return $this;
    }

    /**
     * Getter for adminAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess
     */
    public function getAdminAccess()
    {
        return $this->adminAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->adminAccess;
    }

    /**
     * Setter for adminAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess $adminAccess
     * @return $this
     */
    public function setAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess $adminAccess)
    {
        $this->adminAccess = $adminAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdminAccess()
    {
        $this->adminAccess = null;
        return $this;
    }

    /**
     * Getter for departmentAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess
     */
    public function getDepartmentAccess()
    {
        return $this->departmentAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentAccess;
    }

    /**
     * Setter for departmentAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess $departmentAccess
     * @return $this
     */
    public function setDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess $departmentAccess)
    {
        $this->departmentAccess = $departmentAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentAccess()
    {
        $this->departmentAccess = null;
        return $this;
    }

    /**
     * Getter for accessDeviceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess
     */
    public function getAccessDeviceAccess()
    {
        return $this->accessDeviceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceAccess;
    }

    /**
     * Setter for accessDeviceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess $accessDeviceAccess
     * @return $this
     */
    public function setAccessDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess $accessDeviceAccess)
    {
        $this->accessDeviceAccess = $accessDeviceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceAccess()
    {
        $this->accessDeviceAccess = null;
        return $this;
    }

    /**
     * Getter for phoneNumberExtensionAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess
     */
    public function getPhoneNumberExtensionAccess()
    {
        return $this->phoneNumberExtensionAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumberExtensionAccess;
    }

    /**
     * Setter for phoneNumberExtensionAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess
     * @return $this
     */
    public function setPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess)
    {
        $this->phoneNumberExtensionAccess = $phoneNumberExtensionAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumberExtensionAccess()
    {
        $this->phoneNumberExtensionAccess = null;
        return $this;
    }

    /**
     * Getter for serviceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess
     */
    public function getServiceAccess()
    {
        return $this->serviceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceAccess;
    }

    /**
     * Setter for serviceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess $serviceAccess
     * @return $this
     */
    public function setServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess $serviceAccess)
    {
        $this->serviceAccess = $serviceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceAccess()
    {
        $this->serviceAccess = null;
        return $this;
    }

    /**
     * Getter for servicePackAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess
     */
    public function getServicePackAccess()
    {
        return $this->servicePackAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackAccess;
    }

    /**
     * Setter for servicePackAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess $servicePackAccess
     * @return $this
     */
    public function setServicePackAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess $servicePackAccess)
    {
        $this->servicePackAccess = $servicePackAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackAccess()
    {
        $this->servicePackAccess = null;
        return $this;
    }

    /**
     * Getter for webBrandingAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess
     */
    public function getWebBrandingAccess()
    {
        return $this->webBrandingAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webBrandingAccess;
    }

    /**
     * Setter for webBrandingAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess $webBrandingAccess
     * @return $this
     */
    public function setWebBrandingAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess $webBrandingAccess)
    {
        $this->webBrandingAccess = $webBrandingAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWebBrandingAccess()
    {
        $this->webBrandingAccess = null;
        return $this;
    }

    /**
     * Getter for networkPolicyAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess
     */
    public function getNetworkPolicyAccess()
    {
        return $this->networkPolicyAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkPolicyAccess;
    }

    /**
     * Setter for networkPolicyAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess $networkPolicyAccess
     * @return $this
     */
    public function setNetworkPolicyAccess(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess $networkPolicyAccess)
    {
        $this->networkPolicyAccess = $networkPolicyAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkPolicyAccess()
    {
        $this->networkPolicyAccess = null;
        return $this;
    }


}

