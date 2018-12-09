<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerificationResponse22
 *
 * AuthenticationVerificationRequest/Response is sent when a Web user logs in. The data elements returned in the response
 *           should be cached if needed later during the user session.
 *           The element deploymentInstance is returned in the response when is request is a normal login.
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
 * @see AuthenticationVerificationResponse22V2
 * @Groups [{"id":"bd46fc427b2b0dc182dcd53cf03e95b4:127","type":"sequence"}]
 */
class AuthenticationVerificationResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName passwordExpiresDays
     * @Type int
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $passwordExpiresDays = null;

    /**
     * @ElementName isAccountDisabled
     * @Type bool
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var bool|null
     */
    private $isAccountDisabled = null;

    /**
     * @ElementName loginType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LoginType
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\LoginType|null
     */
    private $loginType = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName userDomain
     * @Type string
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var string|null
     */
    private $userDomain = null;

    /**
     * @ElementName inactivityTimerMinutes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $inactivityTimerMinutes = null;

    /**
     * @ElementName isReadOnlyAdmin
     * @Type bool
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var bool|null
     */
    private $isReadOnlyAdmin = null;

    /**
     * @ElementName isIMSMode
     * @Type bool
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var bool|null
     */
    private $isIMSMode = null;

    /**
     * @ElementName deploymentMode
     * @Type string
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var string|null
     */
    private $deploymentMode = null;

    /**
     * @ElementName deploymentInstance
     * @Type string
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var string|null
     */
    private $deploymentInstance = null;

    /**
     * @ElementName serviceProviderAdminType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType|null
     */
    private $serviceProviderAdminType = null;

    /**
     * @ElementName locale
     * @Type string
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var string|null
     */
    private $locale = null;

    /**
     * @ElementName encoding
     * @Type string
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var string|null
     */
    private $encoding = null;

    /**
     * @ElementName isEnterprise
     * @Type bool
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var bool|null
     */
    private $isEnterprise = null;

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName groupExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupExtensionAccess = null;

    /**
     * @ElementName groupDeptAdminUserAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupDeptAdminUserAccess = null;

    /**
     * @ElementName groupDeptAdminTrunkGroupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupDeptAdminTrunkGroupAccess = null;

    /**
     * @ElementName groupDeptAdminPhoneNumberExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupDeptAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName groupDeptAdminCallingLineIdNumberAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupDeptAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName groupUserAuthAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupUserAuthAccess = null;

    /**
     * @ElementName groupUserProfileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupUserProfileAccess = null;

    /**
     * @ElementName groupUserEnhancedCallLogsAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupUserEnhancedCallLogsAccess = null;

    /**
     * @ElementName groupVoiceMessagingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupVoiceMessagingAccess = null;

    /**
     * @ElementName groupCallingPlanAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupCallingPlanAccess = null;

    /**
     * @ElementName groupUserGroupDirectoryAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupUserGroupDirectoryAccess = null;

    /**
     * @ElementName groupUserAutoAttendantNameDialingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupUserAutoAttendantNameDialingAccess = null;

    /**
     * @ElementName groupAdminGroupProfileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminGroupProfileAccess = null;

    /**
     * @ElementName groupAdminUserAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminUserAccess = null;

    /**
     * @ElementName groupAdminAdminAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminAdminAccess = null;

    /**
     * @ElementName groupAdminDepartmentAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminDepartmentAccess = null;

    /**
     * @ElementName groupAdminDeviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminDeviceAccess = null;

    /**
     * @ElementName groupAdminNumberAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminNumberAccess = null;

    /**
     * @ElementName groupAdminCallingLineIdNumberAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName groupAdminServiceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminServiceAccess = null;

    /**
     * @ElementName groupAdminFtrAccessCodeAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminFtrAccessCodeAccess = null;

    /**
     * @ElementName groupAdminEnhancedServiceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminEnhancedServiceAccess = null;

    /**
     * @ElementName groupAdminTrunkGroupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminTrunkGroupAccess = null;

    /**
     * @ElementName groupAdminVerifyTranslationAndRoutingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminVerifyTranslationAndRoutingAccess = null;

    /**
     * @ElementName groupAdminSessionAdmissionControlAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminSessionAdmissionControlAccess = null;

    /**
     * @ElementName groupAdminOfficeZoneAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminOfficeZoneAccess = null;

    /**
     * @ElementName groupAdminNumberActivationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminNumberActivationAccess = null;

    /**
     * @ElementName groupAdminDialableCallerIDAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminDialableCallerIDAccess = null;

    /**
     * @ElementName groupAdminCommunicationBarringUserProfileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $groupAdminCommunicationBarringUserProfileAccess = null;

    /**
     * @ElementName svcProvAdminProfileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminProfileAccess = null;

    /**
     * @ElementName svcProvAdminGroupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminGroupAccess = null;

    /**
     * @ElementName svcProvAdminUserAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminUserAccess = null;

    /**
     * @ElementName svcProvAdminAdminAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminAdminAccess = null;

    /**
     * @ElementName svcProvAdminDepartmentAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminDepartmentAccess = null;

    /**
     * @ElementName svcProvAdminDeviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminDeviceAccess = null;

    /**
     * @ElementName svcProvAdminNumberAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminNumberAccess = null;

    /**
     * @ElementName svcProvAdminCallingLineIdNumberAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName svcProvAdminServicePackAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminServicePackAccess = null;

    /**
     * @ElementName svcProvAdminServiceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminServiceAccess = null;

    /**
     * @ElementName svcProvAdminSessionAdmissionControlAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminSessionAdmissionControlAccess = null;

    /**
     * @ElementName svcProvAdminWebBrandingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminWebBrandingAccess = null;

    /**
     * @ElementName svcProvAdminOfficeZoneAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminOfficeZoneAccess = null;

    /**
     * @ElementName svcProvAdminNetworkPolicyAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminNetworkPolicyAccess = null;

    /**
     * @ElementName svcProvAdminCommunicationBarringAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminCommunicationBarringAccess = null;

    /**
     * @ElementName svcProvAdminVerifyTranslationAndRoutingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminVerifyTranslationAndRoutingAccess = null;

    /**
     * @ElementName enterpriseAdminNumberActivationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $enterpriseAdminNumberActivationAccess = null;

    /**
     * @ElementName svcProvAdminDialableCallerIDAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess|null
     */
    private $svcProvAdminDialableCallerIDAccess = null;

    /**
     * @ElementName activatedFeatureId
     * @Type string
     * @Array
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var string[]
     */
    private $activatedFeatureId = array(
        
    );

    /**
     * @ElementName visibleClientApplication
     * @Type string
     * @Array
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var string[]
     */
    private $visibleClientApplication = array(
        
    );

    /**
     * @ElementName eclUsingDbs
     * @Type bool
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var bool|null
     */
    private $eclUsingDbs = null;

    /**
     * @ElementName personalizedNameMaxAudioFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $personalizedNameMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName answerConfimationMaxAudioFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $answerConfimationMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName voiceMessageGreetingMaxAudioFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $voiceMessageGreetingMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName voiceMessageGreetingMaxVideoFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $voiceMessageGreetingMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName autoAttendantGreetingMaxAudioFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $autoAttendantGreetingMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName autoAttendantGreetingMaxVideoFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $autoAttendantGreetingMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName musicOnHoldMaxAudioFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $musicOnHoldMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName videoOnHoldMaxVideoFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $videoOnHoldMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName ringbackMaxAudioFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $ringbackMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName ringbackMaxVideoFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $ringbackMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName interceptMaxAudioFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $interceptMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName interceptMaxVideoFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $interceptMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName callCenterMaxAudioFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $callCenterMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName callCenterMaxVideoFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $callCenterMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName preAlertingMaxAudioFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $preAlertingMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName preAlertingMaxVideoFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $preAlertingMaxVideoFileSizeKilobytes = null;

    /**
     * @ElementName conferenceGreetingMaxAudioFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $conferenceGreetingMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName securityClassificationAnncMaxAudioFileSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $securityClassificationAnncMaxAudioFileSizeKilobytes = null;

    /**
     * @ElementName announcementRepositoryAudioFileMaxSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $announcementRepositoryAudioFileMaxSizeKilobytes = null;

    /**
     * @ElementName announcementRepositoryVideoFileMaxSizeKilobytes
     * @Type int
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:127
     * @var int|null
     */
    private $announcementRepositoryVideoFileMaxSizeKilobytes = null;

    /**
     * Getter for passwordExpiresDays
     *
     * @return int
     */
    public function getPasswordExpiresDays()
    {
        return $this->passwordExpiresDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passwordExpiresDays;
    }

    /**
     * Setter for passwordExpiresDays
     *
     * @param int $passwordExpiresDays
     * @return $this
     */
    public function setPasswordExpiresDays($passwordExpiresDays)
    {
        $this->passwordExpiresDays = $passwordExpiresDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPasswordExpiresDays()
    {
        $this->passwordExpiresDays = null;
        return $this;
    }

    /**
     * Getter for isAccountDisabled
     *
     * @return bool
     */
    public function getIsAccountDisabled()
    {
        return $this->isAccountDisabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isAccountDisabled;
    }

    /**
     * Setter for isAccountDisabled
     *
     * @param bool $isAccountDisabled
     * @return $this
     */
    public function setIsAccountDisabled($isAccountDisabled)
    {
        $this->isAccountDisabled = $isAccountDisabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsAccountDisabled()
    {
        $this->isAccountDisabled = null;
        return $this;
    }

    /**
     * Getter for loginType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LoginType
     */
    public function getLoginType()
    {
        return $this->loginType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->loginType;
    }

    /**
     * Setter for loginType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LoginType $loginType
     * @return $this
     */
    public function setLoginType(\CWM\BroadWorksConnector\Ocip\Models\LoginType $loginType)
    {
        $this->loginType = $loginType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLoginType()
    {
        $this->loginType = null;
        return $this;
    }

    /**
     * Getter for firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFirstName()
    {
        $this->firstName = null;
        return $this;
    }

    /**
     * Getter for lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastName()
    {
        $this->lastName = null;
        return $this;
    }

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for userDomain
     *
     * @return string
     */
    public function getUserDomain()
    {
        return $this->userDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userDomain;
    }

    /**
     * Setter for userDomain
     *
     * @param string $userDomain
     * @return $this
     */
    public function setUserDomain($userDomain)
    {
        $this->userDomain = $userDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserDomain()
    {
        $this->userDomain = null;
        return $this;
    }

    /**
     * Getter for inactivityTimerMinutes
     *
     * @return int
     */
    public function getInactivityTimerMinutes()
    {
        return $this->inactivityTimerMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->inactivityTimerMinutes;
    }

    /**
     * Setter for inactivityTimerMinutes
     *
     * @param int $inactivityTimerMinutes
     * @return $this
     */
    public function setInactivityTimerMinutes($inactivityTimerMinutes)
    {
        $this->inactivityTimerMinutes = $inactivityTimerMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInactivityTimerMinutes()
    {
        $this->inactivityTimerMinutes = null;
        return $this;
    }

    /**
     * Getter for isReadOnlyAdmin
     *
     * @return bool
     */
    public function getIsReadOnlyAdmin()
    {
        return $this->isReadOnlyAdmin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isReadOnlyAdmin;
    }

    /**
     * Setter for isReadOnlyAdmin
     *
     * @param bool $isReadOnlyAdmin
     * @return $this
     */
    public function setIsReadOnlyAdmin($isReadOnlyAdmin)
    {
        $this->isReadOnlyAdmin = $isReadOnlyAdmin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsReadOnlyAdmin()
    {
        $this->isReadOnlyAdmin = null;
        return $this;
    }

    /**
     * Getter for isIMSMode
     *
     * @return bool
     */
    public function getIsIMSMode()
    {
        return $this->isIMSMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isIMSMode;
    }

    /**
     * Setter for isIMSMode
     *
     * @param bool $isIMSMode
     * @return $this
     */
    public function setIsIMSMode($isIMSMode)
    {
        $this->isIMSMode = $isIMSMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsIMSMode()
    {
        $this->isIMSMode = null;
        return $this;
    }

    /**
     * Getter for deploymentMode
     *
     * @return string
     */
    public function getDeploymentMode()
    {
        return $this->deploymentMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deploymentMode;
    }

    /**
     * Setter for deploymentMode
     *
     * @param string $deploymentMode
     * @return $this
     */
    public function setDeploymentMode($deploymentMode)
    {
        $this->deploymentMode = $deploymentMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeploymentMode()
    {
        $this->deploymentMode = null;
        return $this;
    }

    /**
     * Getter for deploymentInstance
     *
     * @return string
     */
    public function getDeploymentInstance()
    {
        return $this->deploymentInstance instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deploymentInstance;
    }

    /**
     * Setter for deploymentInstance
     *
     * @param string $deploymentInstance
     * @return $this
     */
    public function setDeploymentInstance($deploymentInstance)
    {
        $this->deploymentInstance = $deploymentInstance;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeploymentInstance()
    {
        $this->deploymentInstance = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType
     */
    public function getServiceProviderAdminType()
    {
        return $this->serviceProviderAdminType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminType;
    }

    /**
     * Setter for serviceProviderAdminType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType $serviceProviderAdminType
     * @return $this
     */
    public function setServiceProviderAdminType(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType $serviceProviderAdminType)
    {
        $this->serviceProviderAdminType = $serviceProviderAdminType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminType()
    {
        $this->serviceProviderAdminType = null;
        return $this;
    }

    /**
     * Getter for locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locale;
    }

    /**
     * Setter for locale
     *
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocale()
    {
        $this->locale = null;
        return $this;
    }

    /**
     * Getter for encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->encoding;
    }

    /**
     * Setter for encoding
     *
     * @param string $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEncoding()
    {
        $this->encoding = null;
        return $this;
    }

    /**
     * Getter for isEnterprise
     *
     * @return bool
     */
    public function getIsEnterprise()
    {
        return $this->isEnterprise instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isEnterprise;
    }

    /**
     * Setter for isEnterprise
     *
     * @param bool $isEnterprise
     * @return $this
     */
    public function setIsEnterprise($isEnterprise)
    {
        $this->isEnterprise = $isEnterprise;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsEnterprise()
    {
        $this->isEnterprise = null;
        return $this;
    }

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for groupExtensionAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupExtensionAccess()
    {
        return $this->groupExtensionAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupExtensionAccess;
    }

    /**
     * Setter for groupExtensionAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupExtensionAccess
     * @return $this
     */
    public function setGroupExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupExtensionAccess)
    {
        $this->groupExtensionAccess = $groupExtensionAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupExtensionAccess()
    {
        $this->groupExtensionAccess = null;
        return $this;
    }

    /**
     * Getter for groupDeptAdminUserAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupDeptAdminUserAccess()
    {
        return $this->groupDeptAdminUserAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDeptAdminUserAccess;
    }

    /**
     * Setter for groupDeptAdminUserAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupDeptAdminUserAccess
     * @return $this
     */
    public function setGroupDeptAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupDeptAdminUserAccess)
    {
        $this->groupDeptAdminUserAccess = $groupDeptAdminUserAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDeptAdminUserAccess()
    {
        $this->groupDeptAdminUserAccess = null;
        return $this;
    }

    /**
     * Getter for groupDeptAdminTrunkGroupAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupDeptAdminTrunkGroupAccess()
    {
        return $this->groupDeptAdminTrunkGroupAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDeptAdminTrunkGroupAccess;
    }

    /**
     * Setter for groupDeptAdminTrunkGroupAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupDeptAdminTrunkGroupAccess
     * @return $this
     */
    public function setGroupDeptAdminTrunkGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupDeptAdminTrunkGroupAccess)
    {
        $this->groupDeptAdminTrunkGroupAccess = $groupDeptAdminTrunkGroupAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDeptAdminTrunkGroupAccess()
    {
        $this->groupDeptAdminTrunkGroupAccess = null;
        return $this;
    }

    /**
     * Getter for groupDeptAdminPhoneNumberExtensionAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupDeptAdminPhoneNumberExtensionAccess()
    {
        return $this->groupDeptAdminPhoneNumberExtensionAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDeptAdminPhoneNumberExtensionAccess;
    }

    /**
     * Setter for groupDeptAdminPhoneNumberExtensionAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupDeptAdminPhoneNumberExtensionAccess
     * @return $this
     */
    public function setGroupDeptAdminPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupDeptAdminPhoneNumberExtensionAccess)
    {
        $this->groupDeptAdminPhoneNumberExtensionAccess = $groupDeptAdminPhoneNumberExtensionAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDeptAdminPhoneNumberExtensionAccess()
    {
        $this->groupDeptAdminPhoneNumberExtensionAccess = null;
        return $this;
    }

    /**
     * Getter for groupDeptAdminCallingLineIdNumberAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupDeptAdminCallingLineIdNumberAccess()
    {
        return $this->groupDeptAdminCallingLineIdNumberAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDeptAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for groupDeptAdminCallingLineIdNumberAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupDeptAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setGroupDeptAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupDeptAdminCallingLineIdNumberAccess)
    {
        $this->groupDeptAdminCallingLineIdNumberAccess = $groupDeptAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDeptAdminCallingLineIdNumberAccess()
    {
        $this->groupDeptAdminCallingLineIdNumberAccess = null;
        return $this;
    }

    /**
     * Getter for groupUserAuthAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupUserAuthAccess()
    {
        return $this->groupUserAuthAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupUserAuthAccess;
    }

    /**
     * Setter for groupUserAuthAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserAuthAccess
     * @return $this
     */
    public function setGroupUserAuthAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserAuthAccess)
    {
        $this->groupUserAuthAccess = $groupUserAuthAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupUserAuthAccess()
    {
        $this->groupUserAuthAccess = null;
        return $this;
    }

    /**
     * Getter for groupUserProfileAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupUserProfileAccess()
    {
        return $this->groupUserProfileAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupUserProfileAccess;
    }

    /**
     * Setter for groupUserProfileAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserProfileAccess
     * @return $this
     */
    public function setGroupUserProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserProfileAccess)
    {
        $this->groupUserProfileAccess = $groupUserProfileAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupUserProfileAccess()
    {
        $this->groupUserProfileAccess = null;
        return $this;
    }

    /**
     * Getter for groupUserEnhancedCallLogsAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupUserEnhancedCallLogsAccess()
    {
        return $this->groupUserEnhancedCallLogsAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupUserEnhancedCallLogsAccess;
    }

    /**
     * Setter for groupUserEnhancedCallLogsAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserEnhancedCallLogsAccess
     * @return $this
     */
    public function setGroupUserEnhancedCallLogsAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserEnhancedCallLogsAccess)
    {
        $this->groupUserEnhancedCallLogsAccess = $groupUserEnhancedCallLogsAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupUserEnhancedCallLogsAccess()
    {
        $this->groupUserEnhancedCallLogsAccess = null;
        return $this;
    }

    /**
     * Getter for groupVoiceMessagingAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupVoiceMessagingAccess()
    {
        return $this->groupVoiceMessagingAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupVoiceMessagingAccess;
    }

    /**
     * Setter for groupVoiceMessagingAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupVoiceMessagingAccess
     * @return $this
     */
    public function setGroupVoiceMessagingAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupVoiceMessagingAccess)
    {
        $this->groupVoiceMessagingAccess = $groupVoiceMessagingAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupVoiceMessagingAccess()
    {
        $this->groupVoiceMessagingAccess = null;
        return $this;
    }

    /**
     * Getter for groupCallingPlanAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupCallingPlanAccess()
    {
        return $this->groupCallingPlanAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupCallingPlanAccess;
    }

    /**
     * Setter for groupCallingPlanAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupCallingPlanAccess
     * @return $this
     */
    public function setGroupCallingPlanAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupCallingPlanAccess)
    {
        $this->groupCallingPlanAccess = $groupCallingPlanAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupCallingPlanAccess()
    {
        $this->groupCallingPlanAccess = null;
        return $this;
    }

    /**
     * Getter for groupUserGroupDirectoryAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupUserGroupDirectoryAccess()
    {
        return $this->groupUserGroupDirectoryAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupUserGroupDirectoryAccess;
    }

    /**
     * Setter for groupUserGroupDirectoryAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserGroupDirectoryAccess
     * @return $this
     */
    public function setGroupUserGroupDirectoryAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserGroupDirectoryAccess)
    {
        $this->groupUserGroupDirectoryAccess = $groupUserGroupDirectoryAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupUserGroupDirectoryAccess()
    {
        $this->groupUserGroupDirectoryAccess = null;
        return $this;
    }

    /**
     * Getter for groupUserAutoAttendantNameDialingAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupUserAutoAttendantNameDialingAccess()
    {
        return $this->groupUserAutoAttendantNameDialingAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupUserAutoAttendantNameDialingAccess;
    }

    /**
     * Setter for groupUserAutoAttendantNameDialingAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserAutoAttendantNameDialingAccess
     * @return $this
     */
    public function setGroupUserAutoAttendantNameDialingAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupUserAutoAttendantNameDialingAccess)
    {
        $this->groupUserAutoAttendantNameDialingAccess = $groupUserAutoAttendantNameDialingAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupUserAutoAttendantNameDialingAccess()
    {
        $this->groupUserAutoAttendantNameDialingAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminGroupProfileAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminGroupProfileAccess()
    {
        return $this->groupAdminGroupProfileAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminGroupProfileAccess;
    }

    /**
     * Setter for groupAdminGroupProfileAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminGroupProfileAccess
     * @return $this
     */
    public function setGroupAdminGroupProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminGroupProfileAccess)
    {
        $this->groupAdminGroupProfileAccess = $groupAdminGroupProfileAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminGroupProfileAccess()
    {
        $this->groupAdminGroupProfileAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminUserAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminUserAccess()
    {
        return $this->groupAdminUserAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminUserAccess;
    }

    /**
     * Setter for groupAdminUserAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminUserAccess
     * @return $this
     */
    public function setGroupAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminUserAccess)
    {
        $this->groupAdminUserAccess = $groupAdminUserAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminUserAccess()
    {
        $this->groupAdminUserAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminAdminAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminAdminAccess()
    {
        return $this->groupAdminAdminAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminAdminAccess;
    }

    /**
     * Setter for groupAdminAdminAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminAdminAccess
     * @return $this
     */
    public function setGroupAdminAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminAdminAccess)
    {
        $this->groupAdminAdminAccess = $groupAdminAdminAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminAdminAccess()
    {
        $this->groupAdminAdminAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminDepartmentAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminDepartmentAccess()
    {
        return $this->groupAdminDepartmentAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminDepartmentAccess;
    }

    /**
     * Setter for groupAdminDepartmentAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminDepartmentAccess
     * @return $this
     */
    public function setGroupAdminDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminDepartmentAccess)
    {
        $this->groupAdminDepartmentAccess = $groupAdminDepartmentAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminDepartmentAccess()
    {
        $this->groupAdminDepartmentAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminDeviceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminDeviceAccess()
    {
        return $this->groupAdminDeviceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminDeviceAccess;
    }

    /**
     * Setter for groupAdminDeviceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminDeviceAccess
     * @return $this
     */
    public function setGroupAdminDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminDeviceAccess)
    {
        $this->groupAdminDeviceAccess = $groupAdminDeviceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminDeviceAccess()
    {
        $this->groupAdminDeviceAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminNumberAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminNumberAccess()
    {
        return $this->groupAdminNumberAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminNumberAccess;
    }

    /**
     * Setter for groupAdminNumberAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminNumberAccess
     * @return $this
     */
    public function setGroupAdminNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminNumberAccess)
    {
        $this->groupAdminNumberAccess = $groupAdminNumberAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminNumberAccess()
    {
        $this->groupAdminNumberAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminCallingLineIdNumberAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminCallingLineIdNumberAccess()
    {
        return $this->groupAdminCallingLineIdNumberAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for groupAdminCallingLineIdNumberAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setGroupAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminCallingLineIdNumberAccess)
    {
        $this->groupAdminCallingLineIdNumberAccess = $groupAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminCallingLineIdNumberAccess()
    {
        $this->groupAdminCallingLineIdNumberAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminServiceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminServiceAccess()
    {
        return $this->groupAdminServiceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminServiceAccess;
    }

    /**
     * Setter for groupAdminServiceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminServiceAccess
     * @return $this
     */
    public function setGroupAdminServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminServiceAccess)
    {
        $this->groupAdminServiceAccess = $groupAdminServiceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminServiceAccess()
    {
        $this->groupAdminServiceAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminFtrAccessCodeAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminFtrAccessCodeAccess()
    {
        return $this->groupAdminFtrAccessCodeAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminFtrAccessCodeAccess;
    }

    /**
     * Setter for groupAdminFtrAccessCodeAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminFtrAccessCodeAccess
     * @return $this
     */
    public function setGroupAdminFtrAccessCodeAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminFtrAccessCodeAccess)
    {
        $this->groupAdminFtrAccessCodeAccess = $groupAdminFtrAccessCodeAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminFtrAccessCodeAccess()
    {
        $this->groupAdminFtrAccessCodeAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminEnhancedServiceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminEnhancedServiceAccess()
    {
        return $this->groupAdminEnhancedServiceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminEnhancedServiceAccess;
    }

    /**
     * Setter for groupAdminEnhancedServiceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminEnhancedServiceAccess
     * @return $this
     */
    public function setGroupAdminEnhancedServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminEnhancedServiceAccess)
    {
        $this->groupAdminEnhancedServiceAccess = $groupAdminEnhancedServiceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminEnhancedServiceAccess()
    {
        $this->groupAdminEnhancedServiceAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminTrunkGroupAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminTrunkGroupAccess()
    {
        return $this->groupAdminTrunkGroupAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminTrunkGroupAccess;
    }

    /**
     * Setter for groupAdminTrunkGroupAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminTrunkGroupAccess
     * @return $this
     */
    public function setGroupAdminTrunkGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminTrunkGroupAccess)
    {
        $this->groupAdminTrunkGroupAccess = $groupAdminTrunkGroupAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminTrunkGroupAccess()
    {
        $this->groupAdminTrunkGroupAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminVerifyTranslationAndRoutingAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminVerifyTranslationAndRoutingAccess()
    {
        return $this->groupAdminVerifyTranslationAndRoutingAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminVerifyTranslationAndRoutingAccess;
    }

    /**
     * Setter for groupAdminVerifyTranslationAndRoutingAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminVerifyTranslationAndRoutingAccess
     * @return $this
     */
    public function setGroupAdminVerifyTranslationAndRoutingAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminVerifyTranslationAndRoutingAccess)
    {
        $this->groupAdminVerifyTranslationAndRoutingAccess = $groupAdminVerifyTranslationAndRoutingAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminVerifyTranslationAndRoutingAccess()
    {
        $this->groupAdminVerifyTranslationAndRoutingAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminSessionAdmissionControlAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminSessionAdmissionControlAccess()
    {
        return $this->groupAdminSessionAdmissionControlAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminSessionAdmissionControlAccess;
    }

    /**
     * Setter for groupAdminSessionAdmissionControlAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminSessionAdmissionControlAccess
     * @return $this
     */
    public function setGroupAdminSessionAdmissionControlAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminSessionAdmissionControlAccess)
    {
        $this->groupAdminSessionAdmissionControlAccess = $groupAdminSessionAdmissionControlAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminSessionAdmissionControlAccess()
    {
        $this->groupAdminSessionAdmissionControlAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminOfficeZoneAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminOfficeZoneAccess()
    {
        return $this->groupAdminOfficeZoneAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminOfficeZoneAccess;
    }

    /**
     * Setter for groupAdminOfficeZoneAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminOfficeZoneAccess
     * @return $this
     */
    public function setGroupAdminOfficeZoneAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminOfficeZoneAccess)
    {
        $this->groupAdminOfficeZoneAccess = $groupAdminOfficeZoneAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminOfficeZoneAccess()
    {
        $this->groupAdminOfficeZoneAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminNumberActivationAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminNumberActivationAccess()
    {
        return $this->groupAdminNumberActivationAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminNumberActivationAccess;
    }

    /**
     * Setter for groupAdminNumberActivationAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminNumberActivationAccess
     * @return $this
     */
    public function setGroupAdminNumberActivationAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminNumberActivationAccess)
    {
        $this->groupAdminNumberActivationAccess = $groupAdminNumberActivationAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminNumberActivationAccess()
    {
        $this->groupAdminNumberActivationAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminDialableCallerIDAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminDialableCallerIDAccess()
    {
        return $this->groupAdminDialableCallerIDAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminDialableCallerIDAccess;
    }

    /**
     * Setter for groupAdminDialableCallerIDAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminDialableCallerIDAccess
     * @return $this
     */
    public function setGroupAdminDialableCallerIDAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminDialableCallerIDAccess)
    {
        $this->groupAdminDialableCallerIDAccess = $groupAdminDialableCallerIDAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminDialableCallerIDAccess()
    {
        $this->groupAdminDialableCallerIDAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminCommunicationBarringUserProfileAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getGroupAdminCommunicationBarringUserProfileAccess()
    {
        return $this->groupAdminCommunicationBarringUserProfileAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminCommunicationBarringUserProfileAccess;
    }

    /**
     * Setter for groupAdminCommunicationBarringUserProfileAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminCommunicationBarringUserProfileAccess
     * @return $this
     */
    public function setGroupAdminCommunicationBarringUserProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $groupAdminCommunicationBarringUserProfileAccess)
    {
        $this->groupAdminCommunicationBarringUserProfileAccess = $groupAdminCommunicationBarringUserProfileAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminCommunicationBarringUserProfileAccess()
    {
        $this->groupAdminCommunicationBarringUserProfileAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminProfileAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminProfileAccess()
    {
        return $this->svcProvAdminProfileAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminProfileAccess;
    }

    /**
     * Setter for svcProvAdminProfileAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminProfileAccess
     * @return $this
     */
    public function setSvcProvAdminProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminProfileAccess)
    {
        $this->svcProvAdminProfileAccess = $svcProvAdminProfileAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminProfileAccess()
    {
        $this->svcProvAdminProfileAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminGroupAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminGroupAccess()
    {
        return $this->svcProvAdminGroupAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminGroupAccess;
    }

    /**
     * Setter for svcProvAdminGroupAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminGroupAccess
     * @return $this
     */
    public function setSvcProvAdminGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminGroupAccess)
    {
        $this->svcProvAdminGroupAccess = $svcProvAdminGroupAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminGroupAccess()
    {
        $this->svcProvAdminGroupAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminUserAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminUserAccess()
    {
        return $this->svcProvAdminUserAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminUserAccess;
    }

    /**
     * Setter for svcProvAdminUserAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminUserAccess
     * @return $this
     */
    public function setSvcProvAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminUserAccess)
    {
        $this->svcProvAdminUserAccess = $svcProvAdminUserAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminUserAccess()
    {
        $this->svcProvAdminUserAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminAdminAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminAdminAccess()
    {
        return $this->svcProvAdminAdminAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminAdminAccess;
    }

    /**
     * Setter for svcProvAdminAdminAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminAdminAccess
     * @return $this
     */
    public function setSvcProvAdminAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminAdminAccess)
    {
        $this->svcProvAdminAdminAccess = $svcProvAdminAdminAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminAdminAccess()
    {
        $this->svcProvAdminAdminAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminDepartmentAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminDepartmentAccess()
    {
        return $this->svcProvAdminDepartmentAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminDepartmentAccess;
    }

    /**
     * Setter for svcProvAdminDepartmentAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminDepartmentAccess
     * @return $this
     */
    public function setSvcProvAdminDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminDepartmentAccess)
    {
        $this->svcProvAdminDepartmentAccess = $svcProvAdminDepartmentAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminDepartmentAccess()
    {
        $this->svcProvAdminDepartmentAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminDeviceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminDeviceAccess()
    {
        return $this->svcProvAdminDeviceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminDeviceAccess;
    }

    /**
     * Setter for svcProvAdminDeviceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminDeviceAccess
     * @return $this
     */
    public function setSvcProvAdminDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminDeviceAccess)
    {
        $this->svcProvAdminDeviceAccess = $svcProvAdminDeviceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminDeviceAccess()
    {
        $this->svcProvAdminDeviceAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminNumberAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminNumberAccess()
    {
        return $this->svcProvAdminNumberAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminNumberAccess;
    }

    /**
     * Setter for svcProvAdminNumberAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminNumberAccess
     * @return $this
     */
    public function setSvcProvAdminNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminNumberAccess)
    {
        $this->svcProvAdminNumberAccess = $svcProvAdminNumberAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminNumberAccess()
    {
        $this->svcProvAdminNumberAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminCallingLineIdNumberAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminCallingLineIdNumberAccess()
    {
        return $this->svcProvAdminCallingLineIdNumberAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for svcProvAdminCallingLineIdNumberAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setSvcProvAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminCallingLineIdNumberAccess)
    {
        $this->svcProvAdminCallingLineIdNumberAccess = $svcProvAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminCallingLineIdNumberAccess()
    {
        $this->svcProvAdminCallingLineIdNumberAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminServicePackAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminServicePackAccess()
    {
        return $this->svcProvAdminServicePackAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminServicePackAccess;
    }

    /**
     * Setter for svcProvAdminServicePackAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminServicePackAccess
     * @return $this
     */
    public function setSvcProvAdminServicePackAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminServicePackAccess)
    {
        $this->svcProvAdminServicePackAccess = $svcProvAdminServicePackAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminServicePackAccess()
    {
        $this->svcProvAdminServicePackAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminServiceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminServiceAccess()
    {
        return $this->svcProvAdminServiceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminServiceAccess;
    }

    /**
     * Setter for svcProvAdminServiceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminServiceAccess
     * @return $this
     */
    public function setSvcProvAdminServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminServiceAccess)
    {
        $this->svcProvAdminServiceAccess = $svcProvAdminServiceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminServiceAccess()
    {
        $this->svcProvAdminServiceAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminSessionAdmissionControlAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminSessionAdmissionControlAccess()
    {
        return $this->svcProvAdminSessionAdmissionControlAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminSessionAdmissionControlAccess;
    }

    /**
     * Setter for svcProvAdminSessionAdmissionControlAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminSessionAdmissionControlAccess
     * @return $this
     */
    public function setSvcProvAdminSessionAdmissionControlAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminSessionAdmissionControlAccess)
    {
        $this->svcProvAdminSessionAdmissionControlAccess = $svcProvAdminSessionAdmissionControlAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminSessionAdmissionControlAccess()
    {
        $this->svcProvAdminSessionAdmissionControlAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminWebBrandingAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminWebBrandingAccess()
    {
        return $this->svcProvAdminWebBrandingAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminWebBrandingAccess;
    }

    /**
     * Setter for svcProvAdminWebBrandingAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminWebBrandingAccess
     * @return $this
     */
    public function setSvcProvAdminWebBrandingAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminWebBrandingAccess)
    {
        $this->svcProvAdminWebBrandingAccess = $svcProvAdminWebBrandingAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminWebBrandingAccess()
    {
        $this->svcProvAdminWebBrandingAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminOfficeZoneAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminOfficeZoneAccess()
    {
        return $this->svcProvAdminOfficeZoneAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminOfficeZoneAccess;
    }

    /**
     * Setter for svcProvAdminOfficeZoneAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminOfficeZoneAccess
     * @return $this
     */
    public function setSvcProvAdminOfficeZoneAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminOfficeZoneAccess)
    {
        $this->svcProvAdminOfficeZoneAccess = $svcProvAdminOfficeZoneAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminOfficeZoneAccess()
    {
        $this->svcProvAdminOfficeZoneAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminNetworkPolicyAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminNetworkPolicyAccess()
    {
        return $this->svcProvAdminNetworkPolicyAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminNetworkPolicyAccess;
    }

    /**
     * Setter for svcProvAdminNetworkPolicyAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminNetworkPolicyAccess
     * @return $this
     */
    public function setSvcProvAdminNetworkPolicyAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminNetworkPolicyAccess)
    {
        $this->svcProvAdminNetworkPolicyAccess = $svcProvAdminNetworkPolicyAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminNetworkPolicyAccess()
    {
        $this->svcProvAdminNetworkPolicyAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminCommunicationBarringAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminCommunicationBarringAccess()
    {
        return $this->svcProvAdminCommunicationBarringAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminCommunicationBarringAccess;
    }

    /**
     * Setter for svcProvAdminCommunicationBarringAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminCommunicationBarringAccess
     * @return $this
     */
    public function setSvcProvAdminCommunicationBarringAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminCommunicationBarringAccess)
    {
        $this->svcProvAdminCommunicationBarringAccess = $svcProvAdminCommunicationBarringAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminCommunicationBarringAccess()
    {
        $this->svcProvAdminCommunicationBarringAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminVerifyTranslationAndRoutingAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminVerifyTranslationAndRoutingAccess()
    {
        return $this->svcProvAdminVerifyTranslationAndRoutingAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminVerifyTranslationAndRoutingAccess;
    }

    /**
     * Setter for svcProvAdminVerifyTranslationAndRoutingAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminVerifyTranslationAndRoutingAccess
     * @return $this
     */
    public function setSvcProvAdminVerifyTranslationAndRoutingAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminVerifyTranslationAndRoutingAccess)
    {
        $this->svcProvAdminVerifyTranslationAndRoutingAccess = $svcProvAdminVerifyTranslationAndRoutingAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminVerifyTranslationAndRoutingAccess()
    {
        $this->svcProvAdminVerifyTranslationAndRoutingAccess = null;
        return $this;
    }

    /**
     * Getter for enterpriseAdminNumberActivationAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getEnterpriseAdminNumberActivationAccess()
    {
        return $this->enterpriseAdminNumberActivationAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseAdminNumberActivationAccess;
    }

    /**
     * Setter for enterpriseAdminNumberActivationAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $enterpriseAdminNumberActivationAccess
     * @return $this
     */
    public function setEnterpriseAdminNumberActivationAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $enterpriseAdminNumberActivationAccess)
    {
        $this->enterpriseAdminNumberActivationAccess = $enterpriseAdminNumberActivationAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseAdminNumberActivationAccess()
    {
        $this->enterpriseAdminNumberActivationAccess = null;
        return $this;
    }

    /**
     * Getter for svcProvAdminDialableCallerIDAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess
     */
    public function getSvcProvAdminDialableCallerIDAccess()
    {
        return $this->svcProvAdminDialableCallerIDAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProvAdminDialableCallerIDAccess;
    }

    /**
     * Setter for svcProvAdminDialableCallerIDAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminDialableCallerIDAccess
     * @return $this
     */
    public function setSvcProvAdminDialableCallerIDAccess(\CWM\BroadWorksConnector\Ocip\Models\PolicyAccess $svcProvAdminDialableCallerIDAccess)
    {
        $this->svcProvAdminDialableCallerIDAccess = $svcProvAdminDialableCallerIDAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProvAdminDialableCallerIDAccess()
    {
        $this->svcProvAdminDialableCallerIDAccess = null;
        return $this;
    }

    /**
     * Getter for activatedFeatureId
     *
     * @return string[]
     */
    public function getActivatedFeatureId()
    {
        return $this->activatedFeatureId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activatedFeatureId;
    }

    /**
     * Setter for activatedFeatureId
     *
     * @param string[] $activatedFeatureId
     * @return $this
     */
    public function setActivatedFeatureId(array $activatedFeatureId)
    {
        $this->activatedFeatureId = $activatedFeatureId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivatedFeatureId()
    {
        $this->activatedFeatureId = null;
        return $this;
    }

    /**
     * Adder for activatedFeatureId
     *
     * @param string $activatedFeatureId
     * @return $this
     */
    public function addActivatedFeatureId(string $activatedFeatureId)
    {
        $this->activatedFeatureId[] = $activatedFeatureId;
        return $this;
    }

    /**
     * Getter for visibleClientApplication
     *
     * @return string[]
     */
    public function getVisibleClientApplication()
    {
        return $this->visibleClientApplication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->visibleClientApplication;
    }

    /**
     * Setter for visibleClientApplication
     *
     * @param string[] $visibleClientApplication
     * @return $this
     */
    public function setVisibleClientApplication(array $visibleClientApplication)
    {
        $this->visibleClientApplication = $visibleClientApplication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVisibleClientApplication()
    {
        $this->visibleClientApplication = null;
        return $this;
    }

    /**
     * Adder for visibleClientApplication
     *
     * @param string $visibleClientApplication
     * @return $this
     */
    public function addVisibleClientApplication(string $visibleClientApplication)
    {
        $this->visibleClientApplication[] = $visibleClientApplication;
        return $this;
    }

    /**
     * Getter for eclUsingDbs
     *
     * @return bool
     */
    public function getEclUsingDbs()
    {
        return $this->eclUsingDbs instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eclUsingDbs;
    }

    /**
     * Setter for eclUsingDbs
     *
     * @param bool $eclUsingDbs
     * @return $this
     */
    public function setEclUsingDbs($eclUsingDbs)
    {
        $this->eclUsingDbs = $eclUsingDbs;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEclUsingDbs()
    {
        $this->eclUsingDbs = null;
        return $this;
    }

    /**
     * Getter for personalizedNameMaxAudioFileSizeKilobytes
     *
     * @return int
     */
    public function getPersonalizedNameMaxAudioFileSizeKilobytes()
    {
        return $this->personalizedNameMaxAudioFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedNameMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for personalizedNameMaxAudioFileSizeKilobytes
     *
     * @param int $personalizedNameMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setPersonalizedNameMaxAudioFileSizeKilobytes($personalizedNameMaxAudioFileSizeKilobytes)
    {
        $this->personalizedNameMaxAudioFileSizeKilobytes = $personalizedNameMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalizedNameMaxAudioFileSizeKilobytes()
    {
        $this->personalizedNameMaxAudioFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for answerConfimationMaxAudioFileSizeKilobytes
     *
     * @return int
     */
    public function getAnswerConfimationMaxAudioFileSizeKilobytes()
    {
        return $this->answerConfimationMaxAudioFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->answerConfimationMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for answerConfimationMaxAudioFileSizeKilobytes
     *
     * @param int $answerConfimationMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setAnswerConfimationMaxAudioFileSizeKilobytes($answerConfimationMaxAudioFileSizeKilobytes)
    {
        $this->answerConfimationMaxAudioFileSizeKilobytes = $answerConfimationMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnswerConfimationMaxAudioFileSizeKilobytes()
    {
        $this->answerConfimationMaxAudioFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for voiceMessageGreetingMaxAudioFileSizeKilobytes
     *
     * @return int
     */
    public function getVoiceMessageGreetingMaxAudioFileSizeKilobytes()
    {
        return $this->voiceMessageGreetingMaxAudioFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessageGreetingMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for voiceMessageGreetingMaxAudioFileSizeKilobytes
     *
     * @param int $voiceMessageGreetingMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setVoiceMessageGreetingMaxAudioFileSizeKilobytes($voiceMessageGreetingMaxAudioFileSizeKilobytes)
    {
        $this->voiceMessageGreetingMaxAudioFileSizeKilobytes = $voiceMessageGreetingMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessageGreetingMaxAudioFileSizeKilobytes()
    {
        $this->voiceMessageGreetingMaxAudioFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for voiceMessageGreetingMaxVideoFileSizeKilobytes
     *
     * @return int
     */
    public function getVoiceMessageGreetingMaxVideoFileSizeKilobytes()
    {
        return $this->voiceMessageGreetingMaxVideoFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessageGreetingMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for voiceMessageGreetingMaxVideoFileSizeKilobytes
     *
     * @param int $voiceMessageGreetingMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setVoiceMessageGreetingMaxVideoFileSizeKilobytes($voiceMessageGreetingMaxVideoFileSizeKilobytes)
    {
        $this->voiceMessageGreetingMaxVideoFileSizeKilobytes = $voiceMessageGreetingMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessageGreetingMaxVideoFileSizeKilobytes()
    {
        $this->voiceMessageGreetingMaxVideoFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for autoAttendantGreetingMaxAudioFileSizeKilobytes
     *
     * @return int
     */
    public function getAutoAttendantGreetingMaxAudioFileSizeKilobytes()
    {
        return $this->autoAttendantGreetingMaxAudioFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->autoAttendantGreetingMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for autoAttendantGreetingMaxAudioFileSizeKilobytes
     *
     * @param int $autoAttendantGreetingMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setAutoAttendantGreetingMaxAudioFileSizeKilobytes($autoAttendantGreetingMaxAudioFileSizeKilobytes)
    {
        $this->autoAttendantGreetingMaxAudioFileSizeKilobytes = $autoAttendantGreetingMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAutoAttendantGreetingMaxAudioFileSizeKilobytes()
    {
        $this->autoAttendantGreetingMaxAudioFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for autoAttendantGreetingMaxVideoFileSizeKilobytes
     *
     * @return int
     */
    public function getAutoAttendantGreetingMaxVideoFileSizeKilobytes()
    {
        return $this->autoAttendantGreetingMaxVideoFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->autoAttendantGreetingMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for autoAttendantGreetingMaxVideoFileSizeKilobytes
     *
     * @param int $autoAttendantGreetingMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setAutoAttendantGreetingMaxVideoFileSizeKilobytes($autoAttendantGreetingMaxVideoFileSizeKilobytes)
    {
        $this->autoAttendantGreetingMaxVideoFileSizeKilobytes = $autoAttendantGreetingMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAutoAttendantGreetingMaxVideoFileSizeKilobytes()
    {
        $this->autoAttendantGreetingMaxVideoFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for musicOnHoldMaxAudioFileSizeKilobytes
     *
     * @return int
     */
    public function getMusicOnHoldMaxAudioFileSizeKilobytes()
    {
        return $this->musicOnHoldMaxAudioFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->musicOnHoldMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for musicOnHoldMaxAudioFileSizeKilobytes
     *
     * @param int $musicOnHoldMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setMusicOnHoldMaxAudioFileSizeKilobytes($musicOnHoldMaxAudioFileSizeKilobytes)
    {
        $this->musicOnHoldMaxAudioFileSizeKilobytes = $musicOnHoldMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMusicOnHoldMaxAudioFileSizeKilobytes()
    {
        $this->musicOnHoldMaxAudioFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for videoOnHoldMaxVideoFileSizeKilobytes
     *
     * @return int
     */
    public function getVideoOnHoldMaxVideoFileSizeKilobytes()
    {
        return $this->videoOnHoldMaxVideoFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoOnHoldMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for videoOnHoldMaxVideoFileSizeKilobytes
     *
     * @param int $videoOnHoldMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setVideoOnHoldMaxVideoFileSizeKilobytes($videoOnHoldMaxVideoFileSizeKilobytes)
    {
        $this->videoOnHoldMaxVideoFileSizeKilobytes = $videoOnHoldMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoOnHoldMaxVideoFileSizeKilobytes()
    {
        $this->videoOnHoldMaxVideoFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for ringbackMaxAudioFileSizeKilobytes
     *
     * @return int
     */
    public function getRingbackMaxAudioFileSizeKilobytes()
    {
        return $this->ringbackMaxAudioFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ringbackMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for ringbackMaxAudioFileSizeKilobytes
     *
     * @param int $ringbackMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setRingbackMaxAudioFileSizeKilobytes($ringbackMaxAudioFileSizeKilobytes)
    {
        $this->ringbackMaxAudioFileSizeKilobytes = $ringbackMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRingbackMaxAudioFileSizeKilobytes()
    {
        $this->ringbackMaxAudioFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for ringbackMaxVideoFileSizeKilobytes
     *
     * @return int
     */
    public function getRingbackMaxVideoFileSizeKilobytes()
    {
        return $this->ringbackMaxVideoFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ringbackMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for ringbackMaxVideoFileSizeKilobytes
     *
     * @param int $ringbackMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setRingbackMaxVideoFileSizeKilobytes($ringbackMaxVideoFileSizeKilobytes)
    {
        $this->ringbackMaxVideoFileSizeKilobytes = $ringbackMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRingbackMaxVideoFileSizeKilobytes()
    {
        $this->ringbackMaxVideoFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for interceptMaxAudioFileSizeKilobytes
     *
     * @return int
     */
    public function getInterceptMaxAudioFileSizeKilobytes()
    {
        return $this->interceptMaxAudioFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interceptMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for interceptMaxAudioFileSizeKilobytes
     *
     * @param int $interceptMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setInterceptMaxAudioFileSizeKilobytes($interceptMaxAudioFileSizeKilobytes)
    {
        $this->interceptMaxAudioFileSizeKilobytes = $interceptMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInterceptMaxAudioFileSizeKilobytes()
    {
        $this->interceptMaxAudioFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for interceptMaxVideoFileSizeKilobytes
     *
     * @return int
     */
    public function getInterceptMaxVideoFileSizeKilobytes()
    {
        return $this->interceptMaxVideoFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interceptMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for interceptMaxVideoFileSizeKilobytes
     *
     * @param int $interceptMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setInterceptMaxVideoFileSizeKilobytes($interceptMaxVideoFileSizeKilobytes)
    {
        $this->interceptMaxVideoFileSizeKilobytes = $interceptMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInterceptMaxVideoFileSizeKilobytes()
    {
        $this->interceptMaxVideoFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for callCenterMaxAudioFileSizeKilobytes
     *
     * @return int
     */
    public function getCallCenterMaxAudioFileSizeKilobytes()
    {
        return $this->callCenterMaxAudioFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCenterMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for callCenterMaxAudioFileSizeKilobytes
     *
     * @param int $callCenterMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setCallCenterMaxAudioFileSizeKilobytes($callCenterMaxAudioFileSizeKilobytes)
    {
        $this->callCenterMaxAudioFileSizeKilobytes = $callCenterMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCenterMaxAudioFileSizeKilobytes()
    {
        $this->callCenterMaxAudioFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for callCenterMaxVideoFileSizeKilobytes
     *
     * @return int
     */
    public function getCallCenterMaxVideoFileSizeKilobytes()
    {
        return $this->callCenterMaxVideoFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCenterMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for callCenterMaxVideoFileSizeKilobytes
     *
     * @param int $callCenterMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setCallCenterMaxVideoFileSizeKilobytes($callCenterMaxVideoFileSizeKilobytes)
    {
        $this->callCenterMaxVideoFileSizeKilobytes = $callCenterMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCenterMaxVideoFileSizeKilobytes()
    {
        $this->callCenterMaxVideoFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for preAlertingMaxAudioFileSizeKilobytes
     *
     * @return int
     */
    public function getPreAlertingMaxAudioFileSizeKilobytes()
    {
        return $this->preAlertingMaxAudioFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preAlertingMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for preAlertingMaxAudioFileSizeKilobytes
     *
     * @param int $preAlertingMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setPreAlertingMaxAudioFileSizeKilobytes($preAlertingMaxAudioFileSizeKilobytes)
    {
        $this->preAlertingMaxAudioFileSizeKilobytes = $preAlertingMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreAlertingMaxAudioFileSizeKilobytes()
    {
        $this->preAlertingMaxAudioFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for preAlertingMaxVideoFileSizeKilobytes
     *
     * @return int
     */
    public function getPreAlertingMaxVideoFileSizeKilobytes()
    {
        return $this->preAlertingMaxVideoFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preAlertingMaxVideoFileSizeKilobytes;
    }

    /**
     * Setter for preAlertingMaxVideoFileSizeKilobytes
     *
     * @param int $preAlertingMaxVideoFileSizeKilobytes
     * @return $this
     */
    public function setPreAlertingMaxVideoFileSizeKilobytes($preAlertingMaxVideoFileSizeKilobytes)
    {
        $this->preAlertingMaxVideoFileSizeKilobytes = $preAlertingMaxVideoFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreAlertingMaxVideoFileSizeKilobytes()
    {
        $this->preAlertingMaxVideoFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for conferenceGreetingMaxAudioFileSizeKilobytes
     *
     * @return int
     */
    public function getConferenceGreetingMaxAudioFileSizeKilobytes()
    {
        return $this->conferenceGreetingMaxAudioFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceGreetingMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for conferenceGreetingMaxAudioFileSizeKilobytes
     *
     * @param int $conferenceGreetingMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setConferenceGreetingMaxAudioFileSizeKilobytes($conferenceGreetingMaxAudioFileSizeKilobytes)
    {
        $this->conferenceGreetingMaxAudioFileSizeKilobytes = $conferenceGreetingMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceGreetingMaxAudioFileSizeKilobytes()
    {
        $this->conferenceGreetingMaxAudioFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for securityClassificationAnncMaxAudioFileSizeKilobytes
     *
     * @return int
     */
    public function getSecurityClassificationAnncMaxAudioFileSizeKilobytes()
    {
        return $this->securityClassificationAnncMaxAudioFileSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->securityClassificationAnncMaxAudioFileSizeKilobytes;
    }

    /**
     * Setter for securityClassificationAnncMaxAudioFileSizeKilobytes
     *
     * @param int $securityClassificationAnncMaxAudioFileSizeKilobytes
     * @return $this
     */
    public function setSecurityClassificationAnncMaxAudioFileSizeKilobytes($securityClassificationAnncMaxAudioFileSizeKilobytes)
    {
        $this->securityClassificationAnncMaxAudioFileSizeKilobytes = $securityClassificationAnncMaxAudioFileSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityClassificationAnncMaxAudioFileSizeKilobytes()
    {
        $this->securityClassificationAnncMaxAudioFileSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for announcementRepositoryAudioFileMaxSizeKilobytes
     *
     * @return int
     */
    public function getAnnouncementRepositoryAudioFileMaxSizeKilobytes()
    {
        return $this->announcementRepositoryAudioFileMaxSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementRepositoryAudioFileMaxSizeKilobytes;
    }

    /**
     * Setter for announcementRepositoryAudioFileMaxSizeKilobytes
     *
     * @param int $announcementRepositoryAudioFileMaxSizeKilobytes
     * @return $this
     */
    public function setAnnouncementRepositoryAudioFileMaxSizeKilobytes($announcementRepositoryAudioFileMaxSizeKilobytes)
    {
        $this->announcementRepositoryAudioFileMaxSizeKilobytes = $announcementRepositoryAudioFileMaxSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementRepositoryAudioFileMaxSizeKilobytes()
    {
        $this->announcementRepositoryAudioFileMaxSizeKilobytes = null;
        return $this;
    }

    /**
     * Getter for announcementRepositoryVideoFileMaxSizeKilobytes
     *
     * @return int
     */
    public function getAnnouncementRepositoryVideoFileMaxSizeKilobytes()
    {
        return $this->announcementRepositoryVideoFileMaxSizeKilobytes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementRepositoryVideoFileMaxSizeKilobytes;
    }

    /**
     * Setter for announcementRepositoryVideoFileMaxSizeKilobytes
     *
     * @param int $announcementRepositoryVideoFileMaxSizeKilobytes
     * @return $this
     */
    public function setAnnouncementRepositoryVideoFileMaxSizeKilobytes($announcementRepositoryVideoFileMaxSizeKilobytes)
    {
        $this->announcementRepositoryVideoFileMaxSizeKilobytes = $announcementRepositoryVideoFileMaxSizeKilobytes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementRepositoryVideoFileMaxSizeKilobytes()
    {
        $this->announcementRepositoryVideoFileMaxSizeKilobytes = null;
        return $this;
    }


}

