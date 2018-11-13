<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetPolicyResponse14sp1
 *
 * Response to GroupAdminGetPolicyRequest14sp1.
 *         Contains the policy settings for the group administrator.
 *
 * @see GroupAdminGetPolicyRequest14sp1
 */
class GroupAdminGetPolicyResponse14sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess|null
     */
    private $profileAccess = null;

    /**
     * @ElementName userAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess|null
     */
    private $userAccess = null;

    /**
     * @ElementName adminAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess|null
     */
    private $adminAccess = null;

    /**
     * @ElementName departmentAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess|null
     */
    private $departmentAccess = null;

    /**
     * @ElementName accessDeviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess|null
     */
    private $accessDeviceAccess = null;

    /**
     * @ElementName enhancedServiceInstanceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess|null
     */
    private $enhancedServiceInstanceAccess = null;

    /**
     * @ElementName featureAccessCodeAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess|null
     */
    private $featureAccessCodeAccess = null;

    /**
     * @ElementName phoneNumberExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess|null
     */
    private $phoneNumberExtensionAccess = null;

    /**
     * @ElementName serviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess|null
     */
    private $serviceAccess = null;

    /**
     * @ElementName trunkGroupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess|null
     */
    private $trunkGroupAccess = null;

    /**
     * Getter for profileAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess
     */
    public function getProfileAccess()
    {
        return $this->profileAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileAccess;
    }

    /**
     * Setter for profileAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess $profileAccess
     * @return $this
     */
    public function setProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess $profileAccess)
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
     * Getter for userAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess
     */
    public function getUserAccess()
    {
        return $this->userAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userAccess;
    }

    /**
     * Setter for userAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess $userAccess
     * @return $this
     */
    public function setUserAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess $userAccess)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess
     */
    public function getAdminAccess()
    {
        return $this->adminAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->adminAccess;
    }

    /**
     * Setter for adminAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess $adminAccess
     * @return $this
     */
    public function setAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess $adminAccess)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess
     */
    public function getDepartmentAccess()
    {
        return $this->departmentAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentAccess;
    }

    /**
     * Setter for departmentAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess $departmentAccess
     * @return $this
     */
    public function setDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess $departmentAccess)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess
     */
    public function getAccessDeviceAccess()
    {
        return $this->accessDeviceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceAccess;
    }

    /**
     * Setter for accessDeviceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess $accessDeviceAccess
     * @return $this
     */
    public function setAccessDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess $accessDeviceAccess)
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
     * Getter for enhancedServiceInstanceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess
     */
    public function getEnhancedServiceInstanceAccess()
    {
        return $this->enhancedServiceInstanceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enhancedServiceInstanceAccess;
    }

    /**
     * Setter for enhancedServiceInstanceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess $enhancedServiceInstanceAccess
     * @return $this
     */
    public function setEnhancedServiceInstanceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess $enhancedServiceInstanceAccess)
    {
        $this->enhancedServiceInstanceAccess = $enhancedServiceInstanceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnhancedServiceInstanceAccess()
    {
        $this->enhancedServiceInstanceAccess = null;
        return $this;
    }

    /**
     * Getter for featureAccessCodeAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess
     */
    public function getFeatureAccessCodeAccess()
    {
        return $this->featureAccessCodeAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->featureAccessCodeAccess;
    }

    /**
     * Setter for featureAccessCodeAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess $featureAccessCodeAccess
     * @return $this
     */
    public function setFeatureAccessCodeAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess $featureAccessCodeAccess)
    {
        $this->featureAccessCodeAccess = $featureAccessCodeAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFeatureAccessCodeAccess()
    {
        $this->featureAccessCodeAccess = null;
        return $this;
    }

    /**
     * Getter for phoneNumberExtensionAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess
     */
    public function getPhoneNumberExtensionAccess()
    {
        return $this->phoneNumberExtensionAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumberExtensionAccess;
    }

    /**
     * Setter for phoneNumberExtensionAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess
     * @return $this
     */
    public function setPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess
     */
    public function getServiceAccess()
    {
        return $this->serviceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceAccess;
    }

    /**
     * Setter for serviceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess $serviceAccess
     * @return $this
     */
    public function setServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess $serviceAccess)
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
     * Getter for trunkGroupAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess
     */
    public function getTrunkGroupAccess()
    {
        return $this->trunkGroupAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupAccess;
    }

    /**
     * Setter for trunkGroupAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess $trunkGroupAccess
     * @return $this
     */
    public function setTrunkGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess $trunkGroupAccess)
    {
        $this->trunkGroupAccess = $trunkGroupAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupAccess()
    {
        $this->trunkGroupAccess = null;
        return $this;
    }


}

