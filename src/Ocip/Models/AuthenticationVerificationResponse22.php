<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerificationResponse22
 *
 * AuthenticationVerificationRequest/Response is sent when a Web user logs in. The
 * data elements returned in the response
 *           should be cached if needed later during the user session.
 *           The element deploymentInstance is returned in the response when is
 * request is a normal login.
 *           The following elements are only used in AS data mode:
 *              groupAdminDialableCallerIDAccess
 *              svcProvAdminDialableCallerIDAccess
 *              svcProvAdminVerifyTranslationAndRoutingAccess
 *              groupAdminVerifyTranslationAndRoutingAccess
 *              groupAdminCommunicationBarringUserProfileAccess
 *           The following elements are only used in XS data mode:
 *              svcProvAdminCommunicationBarringAccess
 *              
 *           Replaced by AuthenticationVerificationResponse22V2 in AS data mode.
 *
 * @see AuthenticationVerificationRequest
 * @see AuthenticationVerificationResponse22
 */
class AuthenticationVerificationResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName passwordExpiresDays
     * @var int|null
     */
    private $passwordExpiresDays = null;

    /**
     * @ElementName isAccountDisabled
     * @var bool|null
     */
    private $isAccountDisabled = null;

    /**
     * @ElementName loginType
     * @var \CWM\BroadWorksConnector\Ocip\Models\LoginType|null
     */
    private $loginType = null;

    /**
     * @ElementName firstName
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName lastName
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName userDomain
     * @var string|null
     */
    private $userDomain = null;

    /**
     * @ElementName inactivityTimerMinutes
     * @var int|null
     */
    private $inactivityTimerMinutes = null;

    /**
     * @ElementName isReadOnlyAdmin
     * @var bool|null
     */
    private $isReadOnlyAdmin = null;

    /**
     * @ElementName isIMSMode
     * @var bool|null
     */
    private $isIMSMode = null;

    /**
     * @ElementName deploymentMode
     * @var string|null
     */
    private $deploymentMode = null;

    /**
     * @ElementName deploymentInstance
     * @var string|null
     */
    private $deploymentInstance = null;

    /**
     * @ElementName serviceProviderAdminType
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType|null
     */
    private $serviceProviderAdminType = null;

    /**
     * @ElementName locale
     * @var string|null
     */
    private $locale = null;

    /**
     * @ElementName encoding
     * @var string|null
     */
    private $encoding = null;

    /**
     * @ElementName isEnterprise
     * @var bool|null
     */
    private $isEnterprise = null;

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName groupExtensionAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupExtensionAccess = null;

    /**
     * @ElementName groupDeptAdminUserAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupDeptAdminUserAccess = null;

    /**
     * @ElementName groupDeptAdminTrunkGroupAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupDeptAdminTrunkGroupAccess = null;

    /**
     * @ElementName groupDeptAdminPhoneNumberExtensionAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupDeptAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName groupDeptAdminCallingLineIdNumberAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupDeptAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName groupUserAuthAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupUserAuthAccess = null;

    /**
     * @ElementName groupUserProfileAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupUserProfileAccess = null;

    /**
     * @ElementName groupUserEnhancedCallLogsAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupUserEnhancedCallLogsAccess = null;

    /**
     * @ElementName groupVoiceMessagingAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupVoiceMessagingAccess = null;

    /**
     * @ElementName groupCallingPlanAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupCallingPlanAccess = null;

    /**
     * @ElementName groupUserGroupDirectoryAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupUserGroupDirectoryAccess = null;

    /**
     * @ElementName groupUserAutoAttendantNameDialingAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupUserAutoAttendantNameDialingAccess = null;

    /**
     * @ElementName groupAdminGroupProfileAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminGroupProfileAccess = null;

    /**
     * @ElementName groupAdminUserAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminUserAccess = null;

    /**
     * @ElementName groupAdminAdminAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminAdminAccess = null;

    /**
     * @ElementName groupAdminDepartmentAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminDepartmentAccess = null;

    /**
     * @ElementName groupAdminDeviceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminDeviceAccess = null;

    /**
     * @ElementName groupAdminNumberAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminNumberAccess = null;

    /**
     * @ElementName groupAdminCallingLineIdNumberAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName groupAdminServiceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminServiceAccess = null;

    /**
     * @ElementName groupAdminFtrAccessCodeAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminFtrAccessCodeAccess = null;

    /**
     * @ElementName groupAdminEnhancedServiceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminEnhancedServiceAccess = null;

    /**
     * @ElementName groupAdminTrunkGroupAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminTrunkGroupAccess = null;

    /**
     * @ElementName groupAdminVerifyTranslationAndRoutingAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminVerifyTranslationAndRoutingAccess = null;

    /**
     * @ElementName groupAdminSessionAdmissionControlAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminSessionAdmissionControlAccess = null;

    /**
     * @ElementName groupAdminOfficeZoneAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminOfficeZoneAccess = null;

    /**
     * @ElementName groupAdminNumberActivationAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminNumberActivationAccess = null;

    /**
     * @ElementName groupAdminDialableCallerIDAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminDialableCallerIDAccess = null;

    /**
     * @ElementName groupAdminCommunicationBarringUserProfileAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminCommunicationBarringUserProfileAccess = null;

    /**
     * @ElementName svcProvAdminProfileAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminProfileAccess = null;

    /**
     * @ElementName svcProvAdminGroupAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminGroupAccess = null;

    /**
     * @ElementName svcProvAdminUserAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminUserAccess = null;

    /**
     * @ElementName svcProvAdminAdminAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminAdminAccess = null;

    /**
     * @ElementName svcProvAdminDepartmentAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminDepartmentAccess = null;

    /**
     * @ElementName svcProvAdminDeviceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminDeviceAccess = null;

    /**
     * @ElementName svcProvAdminNumberAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminNumberAccess = null;

    /**
     * @ElementName svcProvAdminCallingLineIdNumberAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName svcProvAdminServicePackAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminServicePackAccess = null;

    /**
     * @ElementName svcProvAdminServiceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminServiceAccess = null;

    /**
     * @ElementName svcProvAdminSessionAdmissionControlAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminSessionAdmissionControlAccess = null;

    /**
     * @ElementName svcProvAdminWebBrandingAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminWebBrandingAccess = null;

    /**
     * @ElementName svcProvAdminOfficeZoneAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminOfficeZoneAccess = null;

    /**
     * @ElementName svcProvAdminNetworkPolicyAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminNetworkPolicyAccess = null;

    /**
     * @ElementName svcProvAdminCommunicationBarringAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminCommunicationBarringAccess = null;

    /**
     * @ElementName svcProvAdminVerifyTranslationAndRoutingAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminVerifyTranslationAndRoutingAccess = null;

    /**
     * @ElementName enterpriseAdminNumberActivationAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $enterpriseAdminNumberActivationAccess = null;

    /**
     * @ElementName svcProvAdminDialableCallerIDAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminDialableCallerIDAccess = null;

    /**
     * @ElementName activatedFeatureId
     * @var string[]
     */
    private $activatedFeatureId = array(
        
    );

    /**
     * @ElementName visibleClientApplication
     * @var string[]
     */
    private $visibleClientApplication = array(
        
    );

    /**
     * @ElementName eclUsingDbs
     * @var bool|null
     */
    private $eclUsingDbs = null;

    /**
     * @ElementName personalizedNameMaxAudioFileSizeKilobytes
     * @var int|null
     */
    private $personalizedNameMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName answerConfimationMaxAudioFileSizeKilobytes
     * @var int|null
     */
    private $answerConfimationMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName voiceMessageGreetingMaxAudioFileSizeKilobytes
     * @var int|null
     */
    private $voiceMessageGreetingMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName voiceMessageGreetingMaxVideoFileSizeKilobytes
     * @var int|null
     */
    private $voiceMessageGreetingMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName autoAttendantGreetingMaxAudioFileSizeKilobytes
     * @var int|null
     */
    private $autoAttendantGreetingMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName autoAttendantGreetingMaxVideoFileSizeKilobytes
     * @var int|null
     */
    private $autoAttendantGreetingMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName musicOnHoldMaxAudioFileSizeKilobytes
     * @var int|null
     */
    private $musicOnHoldMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName videoOnHoldMaxVideoFileSizeKilobytes
     * @var int|null
     */
    private $videoOnHoldMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName ringbackMaxAudioFileSizeKilobytes
     * @var int|null
     */
    private $ringbackMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName ringbackMaxVideoFileSizeKilobytes
     * @var int|null
     */
    private $ringbackMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName interceptMaxAudioFileSizeKilobytes
     * @var int|null
     */
    private $interceptMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName interceptMaxVideoFileSizeKilobytes
     * @var int|null
     */
    private $interceptMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName callCenterMaxAudioFileSizeKilobytes
     * @var int|null
     */
    private $callCenterMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName callCenterMaxVideoFileSizeKilobytes
     * @var int|null
     */
    private $callCenterMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName preAlertingMaxAudioFileSizeKilobytes
     * @var int|null
     */
    private $preAlertingMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName preAlertingMaxVideoFileSizeKilobytes
     * @var int|null
     */
    private $preAlertingMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName conferenceGreetingMaxAudioFileSizeKilobytes
     * @var int|null
     */
    private $conferenceGreetingMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName securityClassificationAnncMaxAudioFileSizeKilobytes
     * @var int|null
     */
    private $securityClassificationAnncMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName announcementRepositoryAudioFileMaxSizeKilobytes
     * @var int|null
     */
    private $announcementRepositoryAudioFileMaxSizeKilobytes = null;

    /**
     * @ElementName announcementRepositoryVideoFileMaxSizeKilobytes
     * @var int|null
     */
    private $announcementRepositoryVideoFileMaxSizeKilobytes = null;

    /**
     * Getter for passwordExpiresDays
     *
     * @ElementName passwordExpiresDays
     * @return int|null
     */
    public function getPasswordExpiresDays()
    {
        return $this->passwordExpiresDays;
    }

    /**
     * Setter for passwordExpiresDays
     *
     * @ElementName passwordExpiresDays
     * @param int|null $passwordExpiresDays
     * @return $this
     */
    public function setPasswordExpiresDays($passwordExpiresDays)
    {
        $this->passwordExpiresDays = $passwordExpiresDays;
        return $this;
    }

    /**
     * Getter for isAccountDisabled
     *
     * @ElementName isAccountDisabled
     * @return bool|null
     */
    public function getIsAccountDisabled()
    {
        return $this->isAccountDisabled;
    }

    /**
     * Setter for isAccountDisabled
     *
     * @ElementName isAccountDisabled
     * @param bool|null $isAccountDisabled
     * @return $this
     */
    public function setIsAccountDisabled($isAccountDisabled)
    {
        $this->isAccountDisabled = $isAccountDisabled;
        return $this;
    }

    /**
     * Getter for loginType
     *
     * @ElementName loginType
     * @return \CWM\BroadWorksConnector\Ocip\Models\LoginType|null
     */
    public function getLoginType()
    {
        return $this->loginType;
    }

    /**
     * Setter for loginType
     *
     * @ElementName loginType
     * @param \CWM\BroadWorksConnector\Ocip\Models\LoginType|null $loginType
     * @return $this
     */
    public function setLoginType(\CWM\BroadWorksConnector\Ocip\Models\LoginType $loginType)
    {
        $this->loginType = $loginType;
        return $this;
    }

    /**
     * Getter for firstName
     *
     * @ElementName firstName
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @ElementName firstName
     * @param string|null $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Getter for lastName
     *
     * @ElementName lastName
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @ElementName lastName
     * @param string|null $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for userDomain
     *
     * @ElementName userDomain
     * @return string|null
     */
    public function getUserDomain()
    {
        return $this->userDomain;
    }

    /**
     * Setter for userDomain
     *
     * @ElementName userDomain
     * @param string|null $userDomain
     * @return $this
     */
    public function setUserDomain($userDomain)
    {
        $this->userDomain = $userDomain;
        return $this;
    }

    /**
     * Getter for inactivityTimerMinutes
     *
     * @ElementName inactivityTimerMinutes
     * @return int|null
     */
    public function getInactivityTimerMinutes()
    {
        return $this->inactivityTimerMinutes;
    }

    /**
     * Setter for inactivityTimerMinutes
     *
     * @ElementName inactivityTimerMinutes
     * @param int|null $inactivityTimerMinutes
     * @return $this
     */
    public function setInactivityTimerMinutes($inactivityTimerMinutes)
    {
        $this->inactivityTimerMinutes = $inactivityTimerMinutes;
        return $this;
    }

    /**
     * Getter for isReadOnlyAdmin
     *
     * @ElementName isReadOnlyAdmin
     * @return bool|null
     */
    public function getIsReadOnlyAdmin()
    {
        return $this->isReadOnlyAdmin;
    }

    /**
     * Setter for isReadOnlyAdmin
     *
     * @ElementName isReadOnlyAdmin
     * @param bool|null $isReadOnlyAdmin
     * @return $this
     */
    public function setIsReadOnlyAdmin($isReadOnlyAdmin)
    {
        $this->isReadOnlyAdmin = $isReadOnlyAdmin;
        return $this;
    }

    /**
     * Getter for isIMSMode
     *
     * @ElementName isIMSMode
     * @return bool|null
     */
    public function getIsIMSMode()
    {
        return $this->isIMSMode;
    }

    /**
     * Setter for isIMSMode
     *
     * @ElementName isIMSMode
     * @param bool|null $isIMSMode
     * @return $this
     */
    public function setIsIMSMode($isIMSMode)
    {
        $this->isIMSMode = $isIMSMode;
        return $this;
    }

    /**
     * Getter for deploymentMode
     *
     * @ElementName deploymentMode
     * @return string|null
     */
    public function getDeploymentMode()
    {
        return $this->deploymentMode;
    }

    /**
     * Setter for deploymentMode
     *
     * @ElementName deploymentMode
     * @param string|null $deploymentMode
     * @return $this
     */
    public function setDeploymentMode($deploymentMode)
    {
        $this->deploymentMode = $deploymentMode;
        return $this;
    }

    /**
     * Getter for deploymentInstance
     *
     * @ElementName deploymentInstance
     * @return string|null
     */
    public function getDeploymentInstance()
    {
        return $this->deploymentInstance;
    }

    /**
     * Setter for deploymentInstance
     *
     * @ElementName deploymentInstance
     * @param string|null $deploymentInstance
     * @return $this
     */
    public function setDeploymentInstance($deploymentInstance)
    {
        $this->deploymentInstance = $deploymentInstance;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminType
     *
     * @ElementName serviceProviderAdminType
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType|null
     */
    public function getServiceProviderAdminType()
    {
        return $this->serviceProviderAdminType;
    }

    /**
     * Setter for serviceProviderAdminType
     *
     * @ElementName serviceProviderAdminType
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType|null $serviceProviderAdminType
     * @return $this
     */
    public function setServiceProviderAdminType(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType $serviceProviderAdminType)
    {
        $this->serviceProviderAdminType = $serviceProviderAdminType;
        return $this;
    }

    /**
     * Getter for locale
     *
     * @ElementName locale
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Setter for locale
     *
     * @ElementName locale
     * @param string|null $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * Getter for encoding
     *
     * @ElementName encoding
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Setter for encoding
     *
     * @ElementName encoding
     * @param string|null $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * Getter for isEnterprise
     *
     * @ElementName isEnterprise
     * @return bool|null
     */
    public function getIsEnterprise()
    {
        return $this->isEnterprise;
    }

    /**
     * Setter for isEnterprise
     *
     * @ElementName isEnterprise
     * @param bool|null $isEnterprise
     * @return $this
     */
    public function setIsEnterprise($isEnterprise)
    {
        $this->isEnterprise = $isEnterprise;
        return $this;
    }

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for groupExtensionAccess
     *
     * @ElementName groupExtensionAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupExtensionAccess()
    {
        return $this->groupExtensionAccess;
    }

    /**
     * Setter for groupExtensionAccess
     *
     * @ElementName groupExtensionAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupExtensionAccess
     * @return $this
     */
    public function setGroupExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupExtensionAccess)
    {
        $this->groupExtensionAccess = $groupExtensionAccess;
        return $this;
    }

    /**
     * Getter for groupDeptAdminUserAccess
     *
     * @ElementName groupDeptAdminUserAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupDeptAdminUserAccess()
    {
        return $this->groupDeptAdminUserAccess;
    }

    /**
     * Setter for groupDeptAdminUserAccess
     *
     * @ElementName groupDeptAdminUserAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupDeptAdminUserAccess
     * @return $this
     */
    public function setGroupDeptAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupDeptAdminUserAccess)
    {
        $this->groupDeptAdminUserAccess = $groupDeptAdminUserAccess;
        return $this;
    }

    /**
     * Getter for groupDeptAdminTrunkGroupAccess
     *
     * @ElementName groupDeptAdminTrunkGroupAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupDeptAdminTrunkGroupAccess()
    {
        return $this->groupDeptAdminTrunkGroupAccess;
    }

    /**
     * Setter for groupDeptAdminTrunkGroupAccess
     *
     * @ElementName groupDeptAdminTrunkGroupAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupDeptAdminTrunkGroupAccess
     * @return $this
     */
    public function setGroupDeptAdminTrunkGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupDeptAdminTrunkGroupAccess)
    {
        $this->groupDeptAdminTrunkGroupAccess = $groupDeptAdminTrunkGroupAccess;
        return $this;
    }

    /**
     * Getter for groupDeptAdminPhoneNumberExtensionAccess
     *
     * @ElementName groupDeptAdminPhoneNumberExtensionAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupDeptAdminPhoneNumberExtensionAccess()
    {
        return $this->groupDeptAdminPhoneNumberExtensionAccess;
    }

    /**
     * Setter for groupDeptAdminPhoneNumberExtensionAccess
     *
     * @ElementName groupDeptAdminPhoneNumberExtensionAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupDeptAdminPhoneNumberExtensionAccess
     * @return $this
     */
    public function setGroupDeptAdminPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupDeptAdminPhoneNumberExtensionAccess)
    {
        $this->groupDeptAdminPhoneNumberExtensionAccess = $groupDeptAdminPhoneNumberExtensionAccess;
        return $this;
    }

    /**
     * Getter for groupDeptAdminCallingLineIdNumberAccess
     *
     * @ElementName groupDeptAdminCallingLineIdNumberAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupDeptAdminCallingLineIdNumberAccess()
    {
        return $this->groupDeptAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for groupDeptAdminCallingLineIdNumberAccess
     *
     * @ElementName groupDeptAdminCallingLineIdNumberAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupDeptAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setGroupDeptAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupDeptAdminCallingLineIdNumberAccess)
    {
        $this->groupDeptAdminCallingLineIdNumberAccess = $groupDeptAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * Getter for groupUserAuthAccess
     *
     * @ElementName groupUserAuthAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupUserAuthAccess()
    {
        return $this->groupUserAuthAccess;
    }

    /**
     * Setter for groupUserAuthAccess
     *
     * @ElementName groupUserAuthAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupUserAuthAccess
     * @return $this
     */
    public function setGroupUserAuthAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserAuthAccess)
    {
        $this->groupUserAuthAccess = $groupUserAuthAccess;
        return $this;
    }

    /**
     * Getter for groupUserProfileAccess
     *
     * @ElementName groupUserProfileAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupUserProfileAccess()
    {
        return $this->groupUserProfileAccess;
    }

    /**
     * Setter for groupUserProfileAccess
     *
     * @ElementName groupUserProfileAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupUserProfileAccess
     * @return $this
     */
    public function setGroupUserProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserProfileAccess)
    {
        $this->groupUserProfileAccess = $groupUserProfileAccess;
        return $this;
    }

    /**
     * Getter for groupUserEnhancedCallLogsAccess
     *
     * @ElementName groupUserEnhancedCallLogsAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupUserEnhancedCallLogsAccess()
    {
        return $this->groupUserEnhancedCallLogsAccess;
    }

    /**
     * Setter for groupUserEnhancedCallLogsAccess
     *
     * @ElementName groupUserEnhancedCallLogsAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupUserEnhancedCallLogsAccess
     * @return $this
     */
    public function setGroupUserEnhancedCallLogsAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserEnhancedCallLogsAccess)
    {
        $this->groupUserEnhancedCallLogsAccess = $groupUserEnhancedCallLogsAccess;
        return $this;
    }

    /**
     * Getter for groupVoiceMessagingAccess
     *
     * @ElementName groupVoiceMessagingAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupVoiceMessagingAccess()
    {
        return $this->groupVoiceMessagingAccess;
    }

    /**
     * Setter for groupVoiceMessagingAccess
     *
     * @ElementName groupVoiceMessagingAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupVoiceMessagingAccess
     * @return $this
     */
    public function setGroupVoiceMessagingAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupVoiceMessagingAccess)
    {
        $this->groupVoiceMessagingAccess = $groupVoiceMessagingAccess;
        return $this;
    }

    /**
     * Getter for groupCallingPlanAccess
     *
     * @ElementName groupCallingPlanAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupCallingPlanAccess()
    {
        return $this->groupCallingPlanAccess;
    }

    /**
     * Setter for groupCallingPlanAccess
     *
     * @ElementName groupCallingPlanAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupCallingPlanAccess
     * @return $this
     */
    public function setGroupCallingPlanAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupCallingPlanAccess)
    {
        $this->groupCallingPlanAccess = $groupCallingPlanAccess;
        return $this;
    }

    /**
     * Getter for groupUserGroupDirectoryAccess
     *
     * @ElementName groupUserGroupDirectoryAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupUserGroupDirectoryAccess()
    {
        return $this->groupUserGroupDirectoryAccess;
    }

    /**
     * Setter for groupUserGroupDirectoryAccess
     *
     * @ElementName groupUserGroupDirectoryAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupUserGroupDirectoryAccess
     * @return $this
     */
    public function setGroupUserGroupDirectoryAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserGroupDirectoryAccess)
    {
        $this->groupUserGroupDirectoryAccess = $groupUserGroupDirectoryAccess;
        return $this;
    }

    /**
     * Getter for groupUserAutoAttendantNameDialingAccess
     *
     * @ElementName groupUserAutoAttendantNameDialingAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupUserAutoAttendantNameDialingAccess()
    {
        return $this->groupUserAutoAttendantNameDialingAccess;
    }

    /**
     * Setter for groupUserAutoAttendantNameDialingAccess
     *
     * @ElementName groupUserAutoAttendantNameDialingAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupUserAutoAttendantNameDialingAccess
     * @return $this
     */
    public function setGroupUserAutoAttendantNameDialingAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserAutoAttendantNameDialingAccess)
    {
        $this->groupUserAutoAttendantNameDialingAccess = $groupUserAutoAttendantNameDialingAccess;
        return $this;
    }

    /**
     * Getter for groupAdminGroupProfileAccess
     *
     * @ElementName groupAdminGroupProfileAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminGroupProfileAccess()
    {
        return $this->groupAdminGroupProfileAccess;
    }

    /**
     * Setter for groupAdminGroupProfileAccess
     *
     * @ElementName groupAdminGroupProfileAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminGroupProfileAccess
     * @return $this
     */
    public function setGroupAdminGroupProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminGroupProfileAccess)
    {
        $this->groupAdminGroupProfileAccess = $groupAdminGroupProfileAccess;
        return $this;
    }

    /**
     * Getter for groupAdminUserAccess
     *
     * @ElementName groupAdminUserAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminUserAccess()
    {
        return $this->groupAdminUserAccess;
    }

    /**
     * Setter for groupAdminUserAccess
     *
     * @ElementName groupAdminUserAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminUserAccess
     * @return $this
     */
    public function setGroupAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminUserAccess)
    {
        $this->groupAdminUserAccess = $groupAdminUserAccess;
        return $this;
    }

    /**
     * Getter for groupAdminAdminAccess
     *
     * @ElementName groupAdminAdminAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminAdminAccess()
    {
        return $this->groupAdminAdminAccess;
    }

    /**
     * Setter for groupAdminAdminAccess
     *
     * @ElementName groupAdminAdminAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminAdminAccess
     * @return $this
     */
    public function setGroupAdminAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminAdminAccess)
    {
        $this->groupAdminAdminAccess = $groupAdminAdminAccess;
        return $this;
    }

    /**
     * Getter for groupAdminDepartmentAccess
     *
     * @ElementName groupAdminDepartmentAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminDepartmentAccess()
    {
        return $this->groupAdminDepartmentAccess;
    }

    /**
     * Setter for groupAdminDepartmentAccess
     *
     * @ElementName groupAdminDepartmentAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminDepartmentAccess
     * @return $this
     */
    public function setGroupAdminDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminDepartmentAccess)
    {
        $this->groupAdminDepartmentAccess = $groupAdminDepartmentAccess;
        return $this;
    }

    /**
     * Getter for groupAdminDeviceAccess
     *
     * @ElementName groupAdminDeviceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminDeviceAccess()
    {
        return $this->groupAdminDeviceAccess;
    }

    /**
     * Setter for groupAdminDeviceAccess
     *
     * @ElementName groupAdminDeviceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminDeviceAccess
     * @return $this
     */
    public function setGroupAdminDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminDeviceAccess)
    {
        $this->groupAdminDeviceAccess = $groupAdminDeviceAccess;
        return $this;
    }

    /**
     * Getter for groupAdminNumberAccess
     *
     * @ElementName groupAdminNumberAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminNumberAccess()
    {
        return $this->groupAdminNumberAccess;
    }

    /**
     * Setter for groupAdminNumberAccess
     *
     * @ElementName groupAdminNumberAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminNumberAccess
     * @return $this
     */
    public function setGroupAdminNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminNumberAccess)
    {
        $this->groupAdminNumberAccess = $groupAdminNumberAccess;
        return $this;
    }

    /**
     * Getter for groupAdminCallingLineIdNumberAccess
     *
     * @ElementName groupAdminCallingLineIdNumberAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminCallingLineIdNumberAccess()
    {
        return $this->groupAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for groupAdminCallingLineIdNumberAccess
     *
     * @ElementName groupAdminCallingLineIdNumberAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setGroupAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminCallingLineIdNumberAccess)
    {
        $this->groupAdminCallingLineIdNumberAccess = $groupAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * Getter for groupAdminServiceAccess
     *
     * @ElementName groupAdminServiceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminServiceAccess()
    {
        return $this->groupAdminServiceAccess;
    }

    /**
     * Setter for groupAdminServiceAccess
     *
     * @ElementName groupAdminServiceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminServiceAccess
     * @return $this
     */
    public function setGroupAdminServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminServiceAccess)
    {
        $this->groupAdminServiceAccess = $groupAdminServiceAccess;
        return $this;
    }

    /**
     * Getter for groupAdminFtrAccessCodeAccess
     *
     * @ElementName groupAdminFtrAccessCodeAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminFtrAccessCodeAccess()
    {
        return $this->groupAdminFtrAccessCodeAccess;
    }

    /**
     * Setter for groupAdminFtrAccessCodeAccess
     *
     * @ElementName groupAdminFtrAccessCodeAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminFtrAccessCodeAccess
     * @return $this
     */
    public function setGroupAdminFtrAccessCodeAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminFtrAccessCodeAccess)
    {
        $this->groupAdminFtrAccessCodeAccess = $groupAdminFtrAccessCodeAccess;
        return $this;
    }

    /**
     * Getter for groupAdminEnhancedServiceAccess
     *
     * @ElementName groupAdminEnhancedServiceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminEnhancedServiceAccess()
    {
        return $this->groupAdminEnhancedServiceAccess;
    }

    /**
     * Setter for groupAdminEnhancedServiceAccess
     *
     * @ElementName groupAdminEnhancedServiceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminEnhancedServiceAccess
     * @return $this
     */
    public function setGroupAdminEnhancedServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminEnhancedServiceAccess)
    {
        $this->groupAdminEnhancedServiceAccess = $groupAdminEnhancedServiceAccess;
        return $this;
    }

    /**
     * Getter for groupAdminTrunkGroupAccess
     *
     * @ElementName groupAdminTrunkGroupAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminTrunkGroupAccess()
    {
        return $this->groupAdminTrunkGroupAccess;
    }

    /**
     * Setter for groupAdminTrunkGroupAccess
     *
     * @ElementName groupAdminTrunkGroupAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminTrunkGroupAccess
     * @return $this
     */
    public function setGroupAdminTrunkGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminTrunkGroupAccess)
    {
        $this->groupAdminTrunkGroupAccess = $groupAdminTrunkGroupAccess;
        return $this;
    }

    /**
     * Getter for groupAdminVerifyTranslationAndRoutingAccess
     *
     * @ElementName groupAdminVerifyTranslationAndRoutingAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminVerifyTranslationAndRoutingAccess()
    {
        return $this->groupAdminVerifyTranslationAndRoutingAccess;
    }

    /**
     * Setter for groupAdminVerifyTranslationAndRoutingAccess
     *
     * @ElementName groupAdminVerifyTranslationAndRoutingAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminVerifyTranslationAndRoutingAccess
     * @return $this
     */
    public function setGroupAdminVerifyTranslationAndRoutingAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminVerifyTranslationAndRoutingAccess)
    {
        $this->groupAdminVerifyTranslationAndRoutingAccess = $groupAdminVerifyTranslationAndRoutingAccess;
        return $this;
    }

    /**
     * Getter for groupAdminSessionAdmissionControlAccess
     *
     * @ElementName groupAdminSessionAdmissionControlAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminSessionAdmissionControlAccess()
    {
        return $this->groupAdminSessionAdmissionControlAccess;
    }

    /**
     * Setter for groupAdminSessionAdmissionControlAccess
     *
     * @ElementName groupAdminSessionAdmissionControlAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminSessionAdmissionControlAccess
     * @return $this
     */
    public function setGroupAdminSessionAdmissionControlAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminSessionAdmissionControlAccess)
    {
        $this->groupAdminSessionAdmissionControlAccess = $groupAdminSessionAdmissionControlAccess;
        return $this;
    }

    /**
     * Getter for groupAdminOfficeZoneAccess
     *
     * @ElementName groupAdminOfficeZoneAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminOfficeZoneAccess()
    {
        return $this->groupAdminOfficeZoneAccess;
    }

    /**
     * Setter for groupAdminOfficeZoneAccess
     *
     * @ElementName groupAdminOfficeZoneAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminOfficeZoneAccess
     * @return $this
     */
    public function setGroupAdminOfficeZoneAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminOfficeZoneAccess)
    {
        $this->groupAdminOfficeZoneAccess = $groupAdminOfficeZoneAccess;
        return $this;
    }

    /**
     * Getter for groupAdminNumberActivationAccess
     *
     * @ElementName groupAdminNumberActivationAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminNumberActivationAccess()
    {
        return $this->groupAdminNumberActivationAccess;
    }

    /**
     * Setter for groupAdminNumberActivationAccess
     *
     * @ElementName groupAdminNumberActivationAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminNumberActivationAccess
     * @return $this
     */
    public function setGroupAdminNumberActivationAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminNumberActivationAccess)
    {
        $this->groupAdminNumberActivationAccess = $groupAdminNumberActivationAccess;
        return $this;
    }

    /**
     * Getter for groupAdminDialableCallerIDAccess
     *
     * @ElementName groupAdminDialableCallerIDAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminDialableCallerIDAccess()
    {
        return $this->groupAdminDialableCallerIDAccess;
    }

    /**
     * Setter for groupAdminDialableCallerIDAccess
     *
     * @ElementName groupAdminDialableCallerIDAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminDialableCallerIDAccess
     * @return $this
     */
    public function setGroupAdminDialableCallerIDAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminDialableCallerIDAccess)
    {
        $this->groupAdminDialableCallerIDAccess = $groupAdminDialableCallerIDAccess;
        return $this;
    }

    /**
     * Getter for groupAdminCommunicationBarringUserProfileAccess
     *
     * @ElementName groupAdminCommunicationBarringUserProfileAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getGroupAdminCommunicationBarringUserProfileAccess()
    {
        return $this->groupAdminCommunicationBarringUserProfileAccess;
    }

    /**
     * Setter for groupAdminCommunicationBarringUserProfileAccess
     *
     * @ElementName groupAdminCommunicationBarringUserProfileAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $groupAdminCommunicationBarringUserProfileAccess
     * @return $this
     */
    public function setGroupAdminCommunicationBarringUserProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminCommunicationBarringUserProfileAccess)
    {
        $this->groupAdminCommunicationBarringUserProfileAccess = $groupAdminCommunicationBarringUserProfileAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminProfileAccess
     *
     * @ElementName svcProvAdminProfileAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminProfileAccess()
    {
        return $this->svcProvAdminProfileAccess;
    }

    /**
     * Setter for svcProvAdminProfileAccess
     *
     * @ElementName svcProvAdminProfileAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminProfileAccess
     * @return $this
     */
    public function setSvcProvAdminProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminProfileAccess)
    {
        $this->svcProvAdminProfileAccess = $svcProvAdminProfileAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminGroupAccess
     *
     * @ElementName svcProvAdminGroupAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminGroupAccess()
    {
        return $this->svcProvAdminGroupAccess;
    }

    /**
     * Setter for svcProvAdminGroupAccess
     *
     * @ElementName svcProvAdminGroupAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminGroupAccess
     * @return $this
     */
    public function setSvcProvAdminGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminGroupAccess)
    {
        $this->svcProvAdminGroupAccess = $svcProvAdminGroupAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminUserAccess
     *
     * @ElementName svcProvAdminUserAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminUserAccess()
    {
        return $this->svcProvAdminUserAccess;
    }

    /**
     * Setter for svcProvAdminUserAccess
     *
     * @ElementName svcProvAdminUserAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminUserAccess
     * @return $this
     */
    public function setSvcProvAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminUserAccess)
    {
        $this->svcProvAdminUserAccess = $svcProvAdminUserAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminAdminAccess
     *
     * @ElementName svcProvAdminAdminAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminAdminAccess()
    {
        return $this->svcProvAdminAdminAccess;
    }

    /**
     * Setter for svcProvAdminAdminAccess
     *
     * @ElementName svcProvAdminAdminAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminAdminAccess
     * @return $this
     */
    public function setSvcProvAdminAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminAdminAccess)
    {
        $this->svcProvAdminAdminAccess = $svcProvAdminAdminAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminDepartmentAccess
     *
     * @ElementName svcProvAdminDepartmentAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminDepartmentAccess()
    {
        return $this->svcProvAdminDepartmentAccess;
    }

    /**
     * Setter for svcProvAdminDepartmentAccess
     *
     * @ElementName svcProvAdminDepartmentAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminDepartmentAccess
     * @return $this
     */
    public function setSvcProvAdminDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminDepartmentAccess)
    {
        $this->svcProvAdminDepartmentAccess = $svcProvAdminDepartmentAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminDeviceAccess
     *
     * @ElementName svcProvAdminDeviceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminDeviceAccess()
    {
        return $this->svcProvAdminDeviceAccess;
    }

    /**
     * Setter for svcProvAdminDeviceAccess
     *
     * @ElementName svcProvAdminDeviceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminDeviceAccess
     * @return $this
     */
    public function setSvcProvAdminDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminDeviceAccess)
    {
        $this->svcProvAdminDeviceAccess = $svcProvAdminDeviceAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminNumberAccess
     *
     * @ElementName svcProvAdminNumberAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminNumberAccess()
    {
        return $this->svcProvAdminNumberAccess;
    }

    /**
     * Setter for svcProvAdminNumberAccess
     *
     * @ElementName svcProvAdminNumberAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminNumberAccess
     * @return $this
     */
    public function setSvcProvAdminNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminNumberAccess)
    {
        $this->svcProvAdminNumberAccess = $svcProvAdminNumberAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminCallingLineIdNumberAccess
     *
     * @ElementName svcProvAdminCallingLineIdNumberAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminCallingLineIdNumberAccess()
    {
        return $this->svcProvAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for svcProvAdminCallingLineIdNumberAccess
     *
     * @ElementName svcProvAdminCallingLineIdNumberAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setSvcProvAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminCallingLineIdNumberAccess)
    {
        $this->svcProvAdminCallingLineIdNumberAccess = $svcProvAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminServicePackAccess
     *
     * @ElementName svcProvAdminServicePackAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminServicePackAccess()
    {
        return $this->svcProvAdminServicePackAccess;
    }

    /**
     * Setter for svcProvAdminServicePackAccess
     *
     * @ElementName svcProvAdminServicePackAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminServicePackAccess
     * @return $this
     */
    public function setSvcProvAdminServicePackAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminServicePackAccess)
    {
        $this->svcProvAdminServicePackAccess = $svcProvAdminServicePackAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminServiceAccess
     *
     * @ElementName svcProvAdminServiceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminServiceAccess()
    {
        return $this->svcProvAdminServiceAccess;
    }

    /**
     * Setter for svcProvAdminServiceAccess
     *
     * @ElementName svcProvAdminServiceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminServiceAccess
     * @return $this
     */
    public function setSvcProvAdminServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminServiceAccess)
    {
        $this->svcProvAdminServiceAccess = $svcProvAdminServiceAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminSessionAdmissionControlAccess
     *
     * @ElementName svcProvAdminSessionAdmissionControlAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminSessionAdmissionControlAccess()
    {
        return $this->svcProvAdminSessionAdmissionControlAccess;
    }

    /**
     * Setter for svcProvAdminSessionAdmissionControlAccess
     *
     * @ElementName svcProvAdminSessionAdmissionControlAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminSessionAdmissionControlAccess
     * @return $this
     */
    public function setSvcProvAdminSessionAdmissionControlAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminSessionAdmissionControlAccess)
    {
        $this->svcProvAdminSessionAdmissionControlAccess = $svcProvAdminSessionAdmissionControlAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminWebBrandingAccess
     *
     * @ElementName svcProvAdminWebBrandingAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminWebBrandingAccess()
    {
        return $this->svcProvAdminWebBrandingAccess;
    }

    /**
     * Setter for svcProvAdminWebBrandingAccess
     *
     * @ElementName svcProvAdminWebBrandingAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminWebBrandingAccess
     * @return $this
     */
    public function setSvcProvAdminWebBrandingAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminWebBrandingAccess)
    {
        $this->svcProvAdminWebBrandingAccess = $svcProvAdminWebBrandingAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminOfficeZoneAccess
     *
     * @ElementName svcProvAdminOfficeZoneAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminOfficeZoneAccess()
    {
        return $this->svcProvAdminOfficeZoneAccess;
    }

    /**
     * Setter for svcProvAdminOfficeZoneAccess
     *
     * @ElementName svcProvAdminOfficeZoneAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminOfficeZoneAccess
     * @return $this
     */
    public function setSvcProvAdminOfficeZoneAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminOfficeZoneAccess)
    {
        $this->svcProvAdminOfficeZoneAccess = $svcProvAdminOfficeZoneAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminNetworkPolicyAccess
     *
     * @ElementName svcProvAdminNetworkPolicyAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminNetworkPolicyAccess()
    {
        return $this->svcProvAdminNetworkPolicyAccess;
    }

    /**
     * Setter for svcProvAdminNetworkPolicyAccess
     *
     * @ElementName svcProvAdminNetworkPolicyAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminNetworkPolicyAccess
     * @return $this
     */
    public function setSvcProvAdminNetworkPolicyAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminNetworkPolicyAccess)
    {
        $this->svcProvAdminNetworkPolicyAccess = $svcProvAdminNetworkPolicyAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminCommunicationBarringAccess
     *
     * @ElementName svcProvAdminCommunicationBarringAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminCommunicationBarringAccess()
    {
        return $this->svcProvAdminCommunicationBarringAccess;
    }

    /**
     * Setter for svcProvAdminCommunicationBarringAccess
     *
     * @ElementName svcProvAdminCommunicationBarringAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminCommunicationBarringAccess
     * @return $this
     */
    public function setSvcProvAdminCommunicationBarringAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminCommunicationBarringAccess)
    {
        $this->svcProvAdminCommunicationBarringAccess = $svcProvAdminCommunicationBarringAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminVerifyTranslationAndRoutingAccess
     *
     * @ElementName svcProvAdminVerifyTranslationAndRoutingAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminVerifyTranslationAndRoutingAccess()
    {
        return $this->svcProvAdminVerifyTranslationAndRoutingAccess;
    }

    /**
     * Setter for svcProvAdminVerifyTranslationAndRoutingAccess
     *
     * @ElementName svcProvAdminVerifyTranslationAndRoutingAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminVerifyTranslationAndRoutingAccess
     * @return $this
     */
    public function setSvcProvAdminVerifyTranslationAndRoutingAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminVerifyTranslationAndRoutingAccess)
    {
        $this->svcProvAdminVerifyTranslationAndRoutingAccess = $svcProvAdminVerifyTranslationAndRoutingAccess;
        return $this;
    }

    /**
     * Getter for enterpriseAdminNumberActivationAccess
     *
     * @ElementName enterpriseAdminNumberActivationAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getEnterpriseAdminNumberActivationAccess()
    {
        return $this->enterpriseAdminNumberActivationAccess;
    }

    /**
     * Setter for enterpriseAdminNumberActivationAccess
     *
     * @ElementName enterpriseAdminNumberActivationAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $enterpriseAdminNumberActivationAccess
     * @return $this
     */
    public function setEnterpriseAdminNumberActivationAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $enterpriseAdminNumberActivationAccess)
    {
        $this->enterpriseAdminNumberActivationAccess = $enterpriseAdminNumberActivationAccess;
        return $this;
    }

    /**
     * Getter for svcProvAdminDialableCallerIDAccess
     *
     * @ElementName svcProvAdminDialableCallerIDAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    public function getSvcProvAdminDialableCallerIDAccess()
    {
        return $this->svcProvAdminDialableCallerIDAccess;
    }

    /**
     * Setter for svcProvAdminDialableCallerIDAccess
     *
     * @ElementName svcProvAdminDialableCallerIDAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null $svcProvAdminDialableCallerIDAccess
     * @return $this
     */
    public function setSvcProvAdminDialableCallerIDAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminDialableCallerIDAccess)
    {
        $this->svcProvAdminDialableCallerIDAccess = $svcProvAdminDialableCallerIDAccess;
        return $this;
    }

    /**
     * Getter for activatedFeatureId
     *
     * @ElementName activatedFeatureId
     * @return string[]
     */
    public function getActivatedFeatureId()
    {
        return $this->activatedFeatureId;
    }

    /**
     * Setter for activatedFeatureId
     *
     * @ElementName activatedFeatureId
     * @param string[] $activatedFeatureId
     * @return $this
     */
    public function setActivatedFeatureId(array $activatedFeatureId)
    {
        $this->activatedFeatureId = $activatedFeatureId;
        return $this;
    }

    /**
     * Adder for activatedFeatureId
     *
     * @ElementName activatedFeatureId
     * @param string $activatedFeatureId
     * @return $this
     */
    public function addActivatedFeatureId(string $activatedFeatureId)
    {
        $this->activatedFeatureId []= $activatedFeatureId;
        return $this;
    }

    /**
     * Getter for visibleClientApplication
     *
     * @ElementName visibleClientApplication
     * @return string[]
     */
    public function getVisibleClientApplication()
    {
        return $this->visibleClientApplication;
    }

    /**
     * Setter for visibleClientApplication
     *
     * @ElementName visibleClientApplication
     * @param string[] $visibleClientApplication
     * @return $this
     */
    public function setVisibleClientApplication(array $visibleClientApplication)
    {
        $this->visibleClientApplication = $visibleClientApplication;
        return $this;
    }

    /**
     * Adder for visibleClientApplication
     *
     * @ElementName visibleClientApplication
     * @param string $visibleClientApplication
     * @return $this
     */
    public function addVisibleClientApplication(string $visibleClientApplication)
    {
        $this->visibleClientApplication []= $visibleClientApplication;
        return $this;
    }

    /**
     * Getter for eclUsingDbs
     *
     * @ElementName eclUsingDbs
     * @return bool|null
     */
    public function getEclUsingDbs()
    {
        return $this->eclUsingDbs;
    }

    /**
     * Setter for eclUsingDbs
     *
     * @ElementName eclUsingDbs
     * @param bool|null $eclUsingDbs
     * @return $this
     */
    public function setEclUsingDbs($eclUsingDbs)
    {
        $this->eclUsingDbs = $eclUsingDbs;
        return $this;
    }

    /**
     * Getter for personalizedNameMaxAudioFileSizeKilobytes
     *
     * @ElementName personalizedNameMaxAudioFileSizeKilobytes
     * @return int|null
     */
    public function getPersonalizedNameMaxAudioFileSizeKilobytes()
    {
        return $this->personalizedNameMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for personalizedNameMaxAudioFileSizeKilobytes
     *
     * @ElementName personalizedNameMaxAudioFileSizeKilobytes
     * @param int|null $personalizedNameMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setPersonalizedNameMaxAudioFileSizeKilobytes($personalizedNameMaxAudioFileSizeKilobytes)
    {
        $this->personalizedNameMaxAudioFileSizeKilobytes = $personalizedNameMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for answerConfimationMaxAudioFileSizeKilobytes
     *
     * @ElementName answerConfimationMaxAudioFileSizeKilobytes
     * @return int|null
     */
    public function getAnswerConfimationMaxAudioFileSizeKilobytes()
    {
        return $this->answerConfimationMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for answerConfimationMaxAudioFileSizeKilobytes
     *
     * @ElementName answerConfimationMaxAudioFileSizeKilobytes
     * @param int|null $answerConfimationMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setAnswerConfimationMaxAudioFileSizeKilobytes($answerConfimationMaxAudioFileSizeKilobytes)
    {
        $this->answerConfimationMaxAudioFileSizeKilobytes = $answerConfimationMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for voiceMessageGreetingMaxAudioFileSizeKilobytes
     *
     * @ElementName voiceMessageGreetingMaxAudioFileSizeKilobytes
     * @return int|null
     */
    public function getVoiceMessageGreetingMaxAudioFileSizeKilobytes()
    {
        return $this->voiceMessageGreetingMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for voiceMessageGreetingMaxAudioFileSizeKilobytes
     *
     * @ElementName voiceMessageGreetingMaxAudioFileSizeKilobytes
     * @param int|null $voiceMessageGreetingMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setVoiceMessageGreetingMaxAudioFileSizeKilobytes($voiceMessageGreetingMaxAudioFileSizeKilobytes)
    {
        $this->voiceMessageGreetingMaxAudioFileSizeKilobytes = $voiceMessageGreetingMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for voiceMessageGreetingMaxVideoFileSizeKilobytes
     *
     * @ElementName voiceMessageGreetingMaxVideoFileSizeKilobytes
     * @return int|null
     */
    public function getVoiceMessageGreetingMaxVideoFileSizeKilobytes()
    {
        return $this->voiceMessageGreetingMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for voiceMessageGreetingMaxVideoFileSizeKilobytes
     *
     * @ElementName voiceMessageGreetingMaxVideoFileSizeKilobytes
     * @param int|null $voiceMessageGreetingMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setVoiceMessageGreetingMaxVideoFileSizeKilobytes($voiceMessageGreetingMaxVideoFileSizeKilobytes)
    {
        $this->voiceMessageGreetingMaxVideoFileSizeKilobytes = $voiceMessageGreetingMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for autoAttendantGreetingMaxAudioFileSizeKilobytes
     *
     * @ElementName autoAttendantGreetingMaxAudioFileSizeKilobytes
     * @return int|null
     */
    public function getAutoAttendantGreetingMaxAudioFileSizeKilobytes()
    {
        return $this->autoAttendantGreetingMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for autoAttendantGreetingMaxAudioFileSizeKilobytes
     *
     * @ElementName autoAttendantGreetingMaxAudioFileSizeKilobytes
     * @param int|null $autoAttendantGreetingMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setAutoAttendantGreetingMaxAudioFileSizeKilobytes($autoAttendantGreetingMaxAudioFileSizeKilobytes)
    {
        $this->autoAttendantGreetingMaxAudioFileSizeKilobytes = $autoAttendantGreetingMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for autoAttendantGreetingMaxVideoFileSizeKilobytes
     *
     * @ElementName autoAttendantGreetingMaxVideoFileSizeKilobytes
     * @return int|null
     */
    public function getAutoAttendantGreetingMaxVideoFileSizeKilobytes()
    {
        return $this->autoAttendantGreetingMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for autoAttendantGreetingMaxVideoFileSizeKilobytes
     *
     * @ElementName autoAttendantGreetingMaxVideoFileSizeKilobytes
     * @param int|null $autoAttendantGreetingMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setAutoAttendantGreetingMaxVideoFileSizeKilobytes($autoAttendantGreetingMaxVideoFileSizeKilobytes)
    {
        $this->autoAttendantGreetingMaxVideoFileSizeKilobytes = $autoAttendantGreetingMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for musicOnHoldMaxAudioFileSizeKilobytes
     *
     * @ElementName musicOnHoldMaxAudioFileSizeKilobytes
     * @return int|null
     */
    public function getMusicOnHoldMaxAudioFileSizeKilobytes()
    {
        return $this->musicOnHoldMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for musicOnHoldMaxAudioFileSizeKilobytes
     *
     * @ElementName musicOnHoldMaxAudioFileSizeKilobytes
     * @param int|null $musicOnHoldMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setMusicOnHoldMaxAudioFileSizeKilobytes($musicOnHoldMaxAudioFileSizeKilobytes)
    {
        $this->musicOnHoldMaxAudioFileSizeKilobytes = $musicOnHoldMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for videoOnHoldMaxVideoFileSizeKilobytes
     *
     * @ElementName videoOnHoldMaxVideoFileSizeKilobytes
     * @return int|null
     */
    public function getVideoOnHoldMaxVideoFileSizeKilobytes()
    {
        return $this->videoOnHoldMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for videoOnHoldMaxVideoFileSizeKilobytes
     *
     * @ElementName videoOnHoldMaxVideoFileSizeKilobytes
     * @param int|null $videoOnHoldMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setVideoOnHoldMaxVideoFileSizeKilobytes($videoOnHoldMaxVideoFileSizeKilobytes)
    {
        $this->videoOnHoldMaxVideoFileSizeKilobytes = $videoOnHoldMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for ringbackMaxAudioFileSizeKilobytes
     *
     * @ElementName ringbackMaxAudioFileSizeKilobytes
     * @return int|null
     */
    public function getRingbackMaxAudioFileSizeKilobytes()
    {
        return $this->ringbackMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for ringbackMaxAudioFileSizeKilobytes
     *
     * @ElementName ringbackMaxAudioFileSizeKilobytes
     * @param int|null $ringbackMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setRingbackMaxAudioFileSizeKilobytes($ringbackMaxAudioFileSizeKilobytes)
    {
        $this->ringbackMaxAudioFileSizeKilobytes = $ringbackMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for ringbackMaxVideoFileSizeKilobytes
     *
     * @ElementName ringbackMaxVideoFileSizeKilobytes
     * @return int|null
     */
    public function getRingbackMaxVideoFileSizeKilobytes()
    {
        return $this->ringbackMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for ringbackMaxVideoFileSizeKilobytes
     *
     * @ElementName ringbackMaxVideoFileSizeKilobytes
     * @param int|null $ringbackMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setRingbackMaxVideoFileSizeKilobytes($ringbackMaxVideoFileSizeKilobytes)
    {
        $this->ringbackMaxVideoFileSizeKilobytes = $ringbackMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for interceptMaxAudioFileSizeKilobytes
     *
     * @ElementName interceptMaxAudioFileSizeKilobytes
     * @return int|null
     */
    public function getInterceptMaxAudioFileSizeKilobytes()
    {
        return $this->interceptMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for interceptMaxAudioFileSizeKilobytes
     *
     * @ElementName interceptMaxAudioFileSizeKilobytes
     * @param int|null $interceptMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setInterceptMaxAudioFileSizeKilobytes($interceptMaxAudioFileSizeKilobytes)
    {
        $this->interceptMaxAudioFileSizeKilobytes = $interceptMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for interceptMaxVideoFileSizeKilobytes
     *
     * @ElementName interceptMaxVideoFileSizeKilobytes
     * @return int|null
     */
    public function getInterceptMaxVideoFileSizeKilobytes()
    {
        return $this->interceptMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for interceptMaxVideoFileSizeKilobytes
     *
     * @ElementName interceptMaxVideoFileSizeKilobytes
     * @param int|null $interceptMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setInterceptMaxVideoFileSizeKilobytes($interceptMaxVideoFileSizeKilobytes)
    {
        $this->interceptMaxVideoFileSizeKilobytes = $interceptMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for callCenterMaxAudioFileSizeKilobytes
     *
     * @ElementName callCenterMaxAudioFileSizeKilobytes
     * @return int|null
     */
    public function getCallCenterMaxAudioFileSizeKilobytes()
    {
        return $this->callCenterMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for callCenterMaxAudioFileSizeKilobytes
     *
     * @ElementName callCenterMaxAudioFileSizeKilobytes
     * @param int|null $callCenterMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setCallCenterMaxAudioFileSizeKilobytes($callCenterMaxAudioFileSizeKilobytes)
    {
        $this->callCenterMaxAudioFileSizeKilobytes = $callCenterMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for callCenterMaxVideoFileSizeKilobytes
     *
     * @ElementName callCenterMaxVideoFileSizeKilobytes
     * @return int|null
     */
    public function getCallCenterMaxVideoFileSizeKilobytes()
    {
        return $this->callCenterMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for callCenterMaxVideoFileSizeKilobytes
     *
     * @ElementName callCenterMaxVideoFileSizeKilobytes
     * @param int|null $callCenterMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setCallCenterMaxVideoFileSizeKilobytes($callCenterMaxVideoFileSizeKilobytes)
    {
        $this->callCenterMaxVideoFileSizeKilobytes = $callCenterMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for preAlertingMaxAudioFileSizeKilobytes
     *
     * @ElementName preAlertingMaxAudioFileSizeKilobytes
     * @return int|null
     */
    public function getPreAlertingMaxAudioFileSizeKilobytes()
    {
        return $this->preAlertingMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for preAlertingMaxAudioFileSizeKilobytes
     *
     * @ElementName preAlertingMaxAudioFileSizeKilobytes
     * @param int|null $preAlertingMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setPreAlertingMaxAudioFileSizeKilobytes($preAlertingMaxAudioFileSizeKilobytes)
    {
        $this->preAlertingMaxAudioFileSizeKilobytes = $preAlertingMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for preAlertingMaxVideoFileSizeKilobytes
     *
     * @ElementName preAlertingMaxVideoFileSizeKilobytes
     * @return int|null
     */
    public function getPreAlertingMaxVideoFileSizeKilobytes()
    {
        return $this->preAlertingMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for preAlertingMaxVideoFileSizeKilobytes
     *
     * @ElementName preAlertingMaxVideoFileSizeKilobytes
     * @param int|null $preAlertingMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setPreAlertingMaxVideoFileSizeKilobytes($preAlertingMaxVideoFileSizeKilobytes)
    {
        $this->preAlertingMaxVideoFileSizeKilobytes = $preAlertingMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for conferenceGreetingMaxAudioFileSizeKilobytes
     *
     * @ElementName conferenceGreetingMaxAudioFileSizeKilobytes
     * @return int|null
     */
    public function getConferenceGreetingMaxAudioFileSizeKilobytes()
    {
        return $this->conferenceGreetingMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for conferenceGreetingMaxAudioFileSizeKilobytes
     *
     * @ElementName conferenceGreetingMaxAudioFileSizeKilobytes
     * @param int|null $conferenceGreetingMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setConferenceGreetingMaxAudioFileSizeKilobytes($conferenceGreetingMaxAudioFileSizeKilobytes)
    {
        $this->conferenceGreetingMaxAudioFileSizeKilobytes = $conferenceGreetingMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for securityClassificationAnncMaxAudioFileSizeKilobytes
     *
     * @ElementName securityClassificationAnncMaxAudioFileSizeKilobytes
     * @return int|null
     */
    public function getSecurityClassificationAnncMaxAudioFileSizeKilobytes()
    {
        return $this->securityClassificationAnncMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for securityClassificationAnncMaxAudioFileSizeKilobytes
     *
     * @ElementName securityClassificationAnncMaxAudioFileSizeKilobytes
     * @param int|null $securityClassificationAnncMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setSecurityClassificationAnncMaxAudioFileSizeKilobytes($securityClassificationAnncMaxAudioFileSizeKilobytes)
    {
        $this->securityClassificationAnncMaxAudioFileSizeKilobytes = $securityClassificationAnncMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * Getter for announcementRepositoryAudioFileMaxSizeKilobytes
     *
     * @ElementName announcementRepositoryAudioFileMaxSizeKilobytes
     * @return int|null
     */
    public function getAnnouncementRepositoryAudioFileMaxSizeKilobytes()
    {
        return $this->announcementRepositoryAudioFileMaxSizeKilobytes;
    }

    /**
     * Setter for announcementRepositoryAudioFileMaxSizeKilobytes
     *
     * @ElementName announcementRepositoryAudioFileMaxSizeKilobytes
     * @param int|null $announcementRepositoryAudioFileMaxSizeKilobytes
     * @return $this
     */
    public function setAnnouncementRepositoryAudioFileMaxSizeKilobytes($announcementRepositoryAudioFileMaxSizeKilobytes)
    {
        $this->announcementRepositoryAudioFileMaxSizeKilobytes = $announcementRepositoryAudioFileMaxSizeKilobytes;
        return $this;
    }

    /**
     * Getter for announcementRepositoryVideoFileMaxSizeKilobytes
     *
     * @ElementName announcementRepositoryVideoFileMaxSizeKilobytes
     * @return int|null
     */
    public function getAnnouncementRepositoryVideoFileMaxSizeKilobytes()
    {
        return $this->announcementRepositoryVideoFileMaxSizeKilobytes;
    }

    /**
     * Setter for announcementRepositoryVideoFileMaxSizeKilobytes
     *
     * @ElementName announcementRepositoryVideoFileMaxSizeKilobytes
     * @param int|null $announcementRepositoryVideoFileMaxSizeKilobytes
     * @return $this
     */
    public function setAnnouncementRepositoryVideoFileMaxSizeKilobytes($announcementRepositoryVideoFileMaxSizeKilobytes)
    {
        $this->announcementRepositoryVideoFileMaxSizeKilobytes = $announcementRepositoryVideoFileMaxSizeKilobytes;
        return $this;
    }


}

