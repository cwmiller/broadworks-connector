<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetPolicyResponse16sp1
 *
 * Response to GroupAdminGetPolicyRequest16sp1.
 *         Contains the policy settings for the group administrator.
 *         Replaced by: GroupAdminGetPolicyRequest17
 */
class GroupAdminGetPolicyResponse16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileAccess
     * @var string|null
     */
    private $profileAccess = null;

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
     * @ElementName enhancedServiceInstanceAccess
     * @var string|null
     */
    private $enhancedServiceInstanceAccess = null;

    /**
     * @ElementName featureAccessCodeAccess
     * @var string|null
     */
    private $featureAccessCodeAccess = null;

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
     * @ElementName trunkGroupAccess
     * @var string|null
     */
    private $trunkGroupAccess = null;

    /**
     * @ElementName sessionAdmissionControlAccess
     * @var string|null
     */
    private $sessionAdmissionControlAccess = null;

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
     * Getter for enhancedServiceInstanceAccess
     *
     * @ElementName enhancedServiceInstanceAccess
     * @return string|null
     */
    public function getEnhancedServiceInstanceAccess()
    {
        return $this->enhancedServiceInstanceAccess;
    }

    /**
     * Setter for enhancedServiceInstanceAccess
     *
     * @ElementName enhancedServiceInstanceAccess
     * @param string|null $enhancedServiceInstanceAccess
     * @return $this
     */
    public function setEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess)
    {
        $this->enhancedServiceInstanceAccess = $enhancedServiceInstanceAccess;
        return $this;
    }

    /**
     * Getter for featureAccessCodeAccess
     *
     * @ElementName featureAccessCodeAccess
     * @return string|null
     */
    public function getFeatureAccessCodeAccess()
    {
        return $this->featureAccessCodeAccess;
    }

    /**
     * Setter for featureAccessCodeAccess
     *
     * @ElementName featureAccessCodeAccess
     * @param string|null $featureAccessCodeAccess
     * @return $this
     */
    public function setFeatureAccessCodeAccess($featureAccessCodeAccess)
    {
        $this->featureAccessCodeAccess = $featureAccessCodeAccess;
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
     * Getter for trunkGroupAccess
     *
     * @ElementName trunkGroupAccess
     * @return string|null
     */
    public function getTrunkGroupAccess()
    {
        return $this->trunkGroupAccess;
    }

    /**
     * Setter for trunkGroupAccess
     *
     * @ElementName trunkGroupAccess
     * @param string|null $trunkGroupAccess
     * @return $this
     */
    public function setTrunkGroupAccess($trunkGroupAccess)
    {
        $this->trunkGroupAccess = $trunkGroupAccess;
        return $this;
    }

    /**
     * Getter for sessionAdmissionControlAccess
     *
     * @ElementName sessionAdmissionControlAccess
     * @return string|null
     */
    public function getSessionAdmissionControlAccess()
    {
        return $this->sessionAdmissionControlAccess;
    }

    /**
     * Setter for sessionAdmissionControlAccess
     *
     * @ElementName sessionAdmissionControlAccess
     * @param string|null $sessionAdmissionControlAccess
     * @return $this
     */
    public function setSessionAdmissionControlAccess($sessionAdmissionControlAccess)
    {
        $this->sessionAdmissionControlAccess = $sessionAdmissionControlAccess;
        return $this;
    }


}

