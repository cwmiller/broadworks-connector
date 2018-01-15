<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetPolicyResponse14
 *
 * Response to ServiceProviderAdminGetPolicyRequest14.
 *         Contains the policy settings for the service provider administrator.
 *         The networkPolicyAccess is returned only for the enterprise
 * administrator.
 */
class ServiceProviderAdminGetPolicyResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileAccess
     * @var string|null
     */
    private $profileAccess = null;

    /**
     * @ElementName groupAccess
     * @var string|null
     */
    private $groupAccess = null;

    /**
     * @ElementName userAccess
     * @var string|null
     */
    private $userAccess = null;

    /**
     * @ElementName adminAccess
     * @var string|null
     */
    private $adminAccess = null;

    /**
     * @ElementName departmentAccess
     * @var string|null
     */
    private $departmentAccess = null;

    /**
     * @ElementName accessDeviceAccess
     * @var string|null
     */
    private $accessDeviceAccess = null;

    /**
     * @ElementName phoneNumberExtensionAccess
     * @var string|null
     */
    private $phoneNumberExtensionAccess = null;

    /**
     * @ElementName serviceAccess
     * @var string|null
     */
    private $serviceAccess = null;

    /**
     * @ElementName servicePackAccess
     * @var string|null
     */
    private $servicePackAccess = null;

    /**
     * @ElementName webBrandingAccess
     * @var string|null
     */
    private $webBrandingAccess = null;

    /**
     * @ElementName networkPolicyAccess
     * @var string|null
     */
    private $networkPolicyAccess = null;

    /**
     * Getter for profileAccess
     *
     * @ElementName profileAccess
     * @return string|null
     */
    public function getProfileAccess()
    {
        return $this->profileAccess;
    }

    /**
     * Setter for profileAccess
     *
     * @ElementName profileAccess
     * @param string|null $profileAccess
     * @return $this
     */
    public function setProfileAccess($profileAccess)
    {
        $this->profileAccess = $profileAccess;
        return $this;
    }

    /**
     * Getter for groupAccess
     *
     * @ElementName groupAccess
     * @return string|null
     */
    public function getGroupAccess()
    {
        return $this->groupAccess;
    }

    /**
     * Setter for groupAccess
     *
     * @ElementName groupAccess
     * @param string|null $groupAccess
     * @return $this
     */
    public function setGroupAccess($groupAccess)
    {
        $this->groupAccess = $groupAccess;
        return $this;
    }

    /**
     * Getter for userAccess
     *
     * @ElementName userAccess
     * @return string|null
     */
    public function getUserAccess()
    {
        return $this->userAccess;
    }

    /**
     * Setter for userAccess
     *
     * @ElementName userAccess
     * @param string|null $userAccess
     * @return $this
     */
    public function setUserAccess($userAccess)
    {
        $this->userAccess = $userAccess;
        return $this;
    }

    /**
     * Getter for adminAccess
     *
     * @ElementName adminAccess
     * @return string|null
     */
    public function getAdminAccess()
    {
        return $this->adminAccess;
    }

    /**
     * Setter for adminAccess
     *
     * @ElementName adminAccess
     * @param string|null $adminAccess
     * @return $this
     */
    public function setAdminAccess($adminAccess)
    {
        $this->adminAccess = $adminAccess;
        return $this;
    }

    /**
     * Getter for departmentAccess
     *
     * @ElementName departmentAccess
     * @return string|null
     */
    public function getDepartmentAccess()
    {
        return $this->departmentAccess;
    }

    /**
     * Setter for departmentAccess
     *
     * @ElementName departmentAccess
     * @param string|null $departmentAccess
     * @return $this
     */
    public function setDepartmentAccess($departmentAccess)
    {
        $this->departmentAccess = $departmentAccess;
        return $this;
    }

    /**
     * Getter for accessDeviceAccess
     *
     * @ElementName accessDeviceAccess
     * @return string|null
     */
    public function getAccessDeviceAccess()
    {
        return $this->accessDeviceAccess;
    }

    /**
     * Setter for accessDeviceAccess
     *
     * @ElementName accessDeviceAccess
     * @param string|null $accessDeviceAccess
     * @return $this
     */
    public function setAccessDeviceAccess($accessDeviceAccess)
    {
        $this->accessDeviceAccess = $accessDeviceAccess;
        return $this;
    }

    /**
     * Getter for phoneNumberExtensionAccess
     *
     * @ElementName phoneNumberExtensionAccess
     * @return string|null
     */
    public function getPhoneNumberExtensionAccess()
    {
        return $this->phoneNumberExtensionAccess;
    }

    /**
     * Setter for phoneNumberExtensionAccess
     *
     * @ElementName phoneNumberExtensionAccess
     * @param string|null $phoneNumberExtensionAccess
     * @return $this
     */
    public function setPhoneNumberExtensionAccess($phoneNumberExtensionAccess)
    {
        $this->phoneNumberExtensionAccess = $phoneNumberExtensionAccess;
        return $this;
    }

    /**
     * Getter for serviceAccess
     *
     * @ElementName serviceAccess
     * @return string|null
     */
    public function getServiceAccess()
    {
        return $this->serviceAccess;
    }

    /**
     * Setter for serviceAccess
     *
     * @ElementName serviceAccess
     * @param string|null $serviceAccess
     * @return $this
     */
    public function setServiceAccess($serviceAccess)
    {
        $this->serviceAccess = $serviceAccess;
        return $this;
    }

    /**
     * Getter for servicePackAccess
     *
     * @ElementName servicePackAccess
     * @return string|null
     */
    public function getServicePackAccess()
    {
        return $this->servicePackAccess;
    }

    /**
     * Setter for servicePackAccess
     *
     * @ElementName servicePackAccess
     * @param string|null $servicePackAccess
     * @return $this
     */
    public function setServicePackAccess($servicePackAccess)
    {
        $this->servicePackAccess = $servicePackAccess;
        return $this;
    }

    /**
     * Getter for webBrandingAccess
     *
     * @ElementName webBrandingAccess
     * @return string|null
     */
    public function getWebBrandingAccess()
    {
        return $this->webBrandingAccess;
    }

    /**
     * Setter for webBrandingAccess
     *
     * @ElementName webBrandingAccess
     * @param string|null $webBrandingAccess
     * @return $this
     */
    public function setWebBrandingAccess($webBrandingAccess)
    {
        $this->webBrandingAccess = $webBrandingAccess;
        return $this;
    }

    /**
     * Getter for networkPolicyAccess
     *
     * @ElementName networkPolicyAccess
     * @return string|null
     */
    public function getNetworkPolicyAccess()
    {
        return $this->networkPolicyAccess;
    }

    /**
     * Setter for networkPolicyAccess
     *
     * @ElementName networkPolicyAccess
     * @param string|null $networkPolicyAccess
     * @return $this
     */
    public function setNetworkPolicyAccess($networkPolicyAccess)
    {
        $this->networkPolicyAccess = $networkPolicyAccess;
        return $this;
    }


}

