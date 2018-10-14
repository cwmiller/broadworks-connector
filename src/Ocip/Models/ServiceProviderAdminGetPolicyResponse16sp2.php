<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetPolicyResponse16sp2
 *
 * Response to ServiceProviderAdminGetPolicyRequest16sp1.
 *         Response to ServiceProviderAdminGetPolicyRequest16sp2.
 *         Contains the policy settings for the service provider administrator.
 *         The networkPolicyAccess is returned only for the enterprise
 * administrator.
 *
 * @see ServiceProviderAdminGetPolicyRequest16sp1
 * @see ServiceProviderAdminGetPolicyRequest16sp2
 */
class ServiceProviderAdminGetPolicyResponse16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess|null
     */
    private $profileAccess = null;

    /**
     * @ElementName groupAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess|null
     */
    private $groupAccess = null;

    /**
     * @ElementName userAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess|null
     */
    private $userAccess = null;

    /**
     * @ElementName adminAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess|null
     */
    private $adminAccess = null;

    /**
     * @ElementName departmentAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess|null
     */
    private $departmentAccess = null;

    /**
     * @ElementName accessDeviceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess|null
     */
    private $accessDeviceAccess = null;

    /**
     * @ElementName phoneNumberExtensionAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess|null
     */
    private $phoneNumberExtensionAccess = null;

    /**
     * @ElementName serviceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess|null
     */
    private $serviceAccess = null;

    /**
     * @ElementName servicePackAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess|null
     */
    private $servicePackAccess = null;

    /**
     * @ElementName sessionAdmissionControlAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess|null
     */
    private $sessionAdmissionControlAccess = null;

    /**
     * @ElementName webBrandingAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess|null
     */
    private $webBrandingAccess = null;

    /**
     * @ElementName networkPolicyAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess|null
     */
    private $networkPolicyAccess = null;

    /**
     * @ElementName dialableCallerIDAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess|null
     */
    private $dialableCallerIDAccess = null;

    /**
     * Getter for profileAccess
     *
     * @ElementName profileAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess|null
     */
    public function getProfileAccess()
    {
        return $this->profileAccess;
    }

    /**
     * Setter for profileAccess
     *
     * @ElementName profileAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess|null $profileAccess
     * @return $this
     */
    public function setProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess $profileAccess)
    {
        $this->profileAccess = $profileAccess;
        return $this;
    }

    /**
     * Getter for groupAccess
     *
     * @ElementName groupAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess|null
     */
    public function getGroupAccess()
    {
        return $this->groupAccess;
    }

    /**
     * Setter for groupAccess
     *
     * @ElementName groupAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess|null $groupAccess
     * @return $this
     */
    public function setGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess $groupAccess)
    {
        $this->groupAccess = $groupAccess;
        return $this;
    }

    /**
     * Getter for userAccess
     *
     * @ElementName userAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess|null
     */
    public function getUserAccess()
    {
        return $this->userAccess;
    }

    /**
     * Setter for userAccess
     *
     * @ElementName userAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess|null $userAccess
     * @return $this
     */
    public function setUserAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess $userAccess)
    {
        $this->userAccess = $userAccess;
        return $this;
    }

    /**
     * Getter for adminAccess
     *
     * @ElementName adminAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess|null
     */
    public function getAdminAccess()
    {
        return $this->adminAccess;
    }

    /**
     * Setter for adminAccess
     *
     * @ElementName adminAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess|null $adminAccess
     * @return $this
     */
    public function setAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess $adminAccess)
    {
        $this->adminAccess = $adminAccess;
        return $this;
    }

    /**
     * Getter for departmentAccess
     *
     * @ElementName departmentAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess|null
     */
    public function getDepartmentAccess()
    {
        return $this->departmentAccess;
    }

    /**
     * Setter for departmentAccess
     *
     * @ElementName departmentAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess|null $departmentAccess
     * @return $this
     */
    public function setDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess $departmentAccess)
    {
        $this->departmentAccess = $departmentAccess;
        return $this;
    }

    /**
     * Getter for accessDeviceAccess
     *
     * @ElementName accessDeviceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess|null
     */
    public function getAccessDeviceAccess()
    {
        return $this->accessDeviceAccess;
    }

    /**
     * Setter for accessDeviceAccess
     *
     * @ElementName accessDeviceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess|null $accessDeviceAccess
     * @return $this
     */
    public function setAccessDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess $accessDeviceAccess)
    {
        $this->accessDeviceAccess = $accessDeviceAccess;
        return $this;
    }

    /**
     * Getter for phoneNumberExtensionAccess
     *
     * @ElementName phoneNumberExtensionAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess|null
     */
    public function getPhoneNumberExtensionAccess()
    {
        return $this->phoneNumberExtensionAccess;
    }

    /**
     * Setter for phoneNumberExtensionAccess
     *
     * @ElementName phoneNumberExtensionAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess|null $phoneNumberExtensionAccess
     * @return $this
     */
    public function setPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess)
    {
        $this->phoneNumberExtensionAccess = $phoneNumberExtensionAccess;
        return $this;
    }

    /**
     * Getter for serviceAccess
     *
     * @ElementName serviceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess|null
     */
    public function getServiceAccess()
    {
        return $this->serviceAccess;
    }

    /**
     * Setter for serviceAccess
     *
     * @ElementName serviceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess|null $serviceAccess
     * @return $this
     */
    public function setServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess $serviceAccess)
    {
        $this->serviceAccess = $serviceAccess;
        return $this;
    }

    /**
     * Getter for servicePackAccess
     *
     * @ElementName servicePackAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess|null
     */
    public function getServicePackAccess()
    {
        return $this->servicePackAccess;
    }

    /**
     * Setter for servicePackAccess
     *
     * @ElementName servicePackAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess|null $servicePackAccess
     * @return $this
     */
    public function setServicePackAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess $servicePackAccess)
    {
        $this->servicePackAccess = $servicePackAccess;
        return $this;
    }

    /**
     * Getter for sessionAdmissionControlAccess
     *
     * @ElementName sessionAdmissionControlAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess|null
     */
    public function getSessionAdmissionControlAccess()
    {
        return $this->sessionAdmissionControlAccess;
    }

    /**
     * Setter for sessionAdmissionControlAccess
     *
     * @ElementName sessionAdmissionControlAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess|null $sessionAdmissionControlAccess
     * @return $this
     */
    public function setSessionAdmissionControlAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess $sessionAdmissionControlAccess)
    {
        $this->sessionAdmissionControlAccess = $sessionAdmissionControlAccess;
        return $this;
    }

    /**
     * Getter for webBrandingAccess
     *
     * @ElementName webBrandingAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess|null
     */
    public function getWebBrandingAccess()
    {
        return $this->webBrandingAccess;
    }

    /**
     * Setter for webBrandingAccess
     *
     * @ElementName webBrandingAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess|null $webBrandingAccess
     * @return $this
     */
    public function setWebBrandingAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess $webBrandingAccess)
    {
        $this->webBrandingAccess = $webBrandingAccess;
        return $this;
    }

    /**
     * Getter for networkPolicyAccess
     *
     * @ElementName networkPolicyAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess|null
     */
    public function getNetworkPolicyAccess()
    {
        return $this->networkPolicyAccess;
    }

    /**
     * Setter for networkPolicyAccess
     *
     * @ElementName networkPolicyAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess|null $networkPolicyAccess
     * @return $this
     */
    public function setNetworkPolicyAccess(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess $networkPolicyAccess)
    {
        $this->networkPolicyAccess = $networkPolicyAccess;
        return $this;
    }

    /**
     * Getter for dialableCallerIDAccess
     *
     * @ElementName dialableCallerIDAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess|null
     */
    public function getDialableCallerIDAccess()
    {
        return $this->dialableCallerIDAccess;
    }

    /**
     * Setter for dialableCallerIDAccess
     *
     * @ElementName dialableCallerIDAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess|null $dialableCallerIDAccess
     * @return $this
     */
    public function setDialableCallerIDAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess $dialableCallerIDAccess)
    {
        $this->dialableCallerIDAccess = $dialableCallerIDAccess;
        return $this;
    }


}

