<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyRequest18;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyResponse18;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantAddInstanceRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceResponse19;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantModifyInstanceRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereGetInstanceRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereGetInstanceResponse17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupModifyRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupAddInstanceRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetInstanceRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetInstanceResponse19;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceResponse19;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolicyModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetPolicyRequest18;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetPolicyResponse18;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileAddRequest17sp3;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetRequest17sp3;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetResponse17sp3;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileAddRequest17sp3;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileGetRequest17sp3;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileGetResponse17sp3;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileGetRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileGetResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemNetworkClassOfServiceGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\SystemNetworkClassOfServiceGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultRequest18;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultResponse18;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultRequest20;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultResponse20;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyModifyDefaultRequest14;
use CWM\BroadWorksConnector\Ocip\Models\SystemTimeZoneGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTimeZoneGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest16sp2;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetResponse16sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserCallPoliciesGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\UserCallPoliciesGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\UserFeatureAccessCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserFeatureAccessCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserModifyRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetGreetingRequest18;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetGreetingResponse18;
use CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldAddInstanceRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldModifyInstanceRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceGetAssignedUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceGetAssignedUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupPhoneDirectoryGetListRequest18;
use CWM\BroadWorksConnector\Ocip\Models\GroupPhoneDirectoryGetListResponse18;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\SystemFeatureAccessCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemFeatureAccessCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemFeatureAccessCodeModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemHuntGroupGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\SystemHuntGroupGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemHuntGroupModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPGetRequest19;
use CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPGetResponse19;
use CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListResponse21;
use CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemNumberActivationGetRequest18sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemNumberActivationGetResponse18sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMPPGetRequest14sp5;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMPPGetResponse14sp5;
use CWM\BroadWorksConnector\Ocip\Models\UserAlternateNumbersGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\UserAlternateNumbersGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetSelectiveCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetSelectiveCriteriaResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetCriteriaResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetCriteriaResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserHotelingGuestModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetCriteriaResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertGetCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertGetCriteriaResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserRouteListGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserRouteListGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaRequest16sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaResponse16sp1;
use CWM\BroadWorksConnector\Ocip\Models\AuthenticationRequest;
use CWM\BroadWorksConnector\Ocip\Models\AuthenticationResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterprisePhoneDirectoryGetListRequest18;
use CWM\BroadWorksConnector\Ocip\Models\EnterprisePhoneDirectoryGetListResponse18;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAnnouncementRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAnnouncementResponse19;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAnnouncementRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAnnouncementResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyAnnouncementRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowModifyRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingGetPolicyRequest21sp2;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingGetPolicyResponse21sp2;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingGetPolicyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingGetPolicyResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupIntegratedIMPGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupIntegratedIMPGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupGetRequest16sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupGetResponse16sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupModifyRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldAddInstanceRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceResponse21;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldModifyInstanceRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupPasswordRulesGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupPasswordRulesGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetInstanceRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetInstanceResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupShInterfaceGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupShInterfaceGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\LoginResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\LoginResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest22;
use CWM\BroadWorksConnector\Ocip\Models\LoginResponse22;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\LoginResponse22V2;
use CWM\BroadWorksConnector\Ocip\Models\ResellerIntegratedIMPGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerIntegratedIMPGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetRequest14;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetResponse14;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCallProcessingGetPolicyRequest21sp2;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCallProcessingGetPolicyResponse21sp2;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCallProcessingGetPolicyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCallProcessingGetPolicyResponse22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPasswordRulesGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPasswordRulesGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\SystemAccessDeviceGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAccessDeviceGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallProcessingGetPolicyRequest21sp2;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallProcessingGetPolicyResponse21sp2;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallProcessingGetPolicyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallProcessingGetPolicyResponse22;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallProcessingGetPolicyRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallProcessingGetPolicyResponse22V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementTagSetGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementTagSetGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListRequest19;
use CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse19;
use CWM\BroadWorksConnector\Ocip\Models\SystemDomainGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemDomainGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemOCICallControlApplicationAddRequest17;
use CWM\BroadWorksConnector\Ocip\Models\SystemPasswordRulesGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\SystemPasswordRulesGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\SystemProvisioningValidationGetRequest14sp2;
use CWM\BroadWorksConnector\Ocip\Models\SystemProvisioningValidationGetResponse14sp2;
use CWM\BroadWorksConnector\Ocip\Models\SystemSessionAuditGetRequest17sp3;
use CWM\BroadWorksConnector\Ocip\Models\SystemSessionAuditGetResponse17sp3;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMPPGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMPPGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceAddRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceAddRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceDeleteRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceDeleteRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceGetListRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceGetListResponse22;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceModifyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceModifyRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\UserAddRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetAvailablePortalListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetAvailablePortalListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingGetPolicyRequest21sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingGetPolicyResponse21sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingGetPolicyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingGetPolicyResponse22;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest21sp1V2;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1V2;
use CWM\BroadWorksConnector\Ocip\Models\UserGetRequest22V4;
use CWM\BroadWorksConnector\Ocip\Models\UserGetResponse22V4;
use CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserGetRequest16sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserGetResponse16sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserModifyRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest21;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetRequest16sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetResponse16sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetPublicIdDataRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetPublicIdDataResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetUserIdDataRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetUserIdDataResponse;

trait OCISchemaDeprecatedAS
{

    /**
     * @param GroupAdminGetPolicyRequest18 $request
     * @return GroupAdminGetPolicyResponse18
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAdminGetPolicyRequest18(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdminGetPolicyRequest19sp1 $request
     * @return GroupAdminGetPolicyResponse19sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAdminGetPolicyRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantAddInstanceRequest19 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantAddInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantAddInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantGetInstanceRequest19 $request
     * @return GroupAutoAttendantGetInstanceResponse19
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantGetInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantGetInstanceRequest19sp1 $request
     * @return GroupAutoAttendantGetInstanceResponse19sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantModifyInstanceRequest17sp1 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantModifyInstanceRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantModifyInstanceRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantSubmenuAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuGetRequest $request
     * @return GroupAutoAttendantSubmenuGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantSubmenuGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantSubmenuModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksAnywhereGetInstanceRequest17 $request
     * @return GroupBroadWorksAnywhereGetInstanceResponse17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupBroadWorksAnywhereGetInstanceRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereGetInstanceRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCustomRingbackGroupGetRequest16 $request
     * @return GroupCustomRingbackGroupGetResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCustomRingbackGroupGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCustomRingbackGroupModifyRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCustomRingbackGroupModifyRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupModifyRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupAddInstanceRequest19 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupHuntGroupAddInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupAddInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupGetInstanceRequest19 $request
     * @return GroupHuntGroupGetInstanceResponse19
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupHuntGroupGetInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldGetInstanceRequest19 $request
     * @return GroupMusicOnHoldGetInstanceResponse19
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMusicOnHoldGetInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPolicyGetRequest17 $request
     * @return GroupPolicyGetResponse17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupPolicyGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPolicyGetRequest20 $request
     * @return GroupPolicyGetResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupPolicyGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPolicyModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupPolicyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPolicyModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPreAlertingAnnouncementGetRequest $request
     * @return GroupPreAlertingAnnouncementGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupPreAlertingAnnouncementGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPreAlertingAnnouncementModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupPreAlertingAnnouncementModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16 $request
     * @return GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupVoiceMessagingGroupGetVoicePortalBrandingRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupGetVoicePortalRequest17sp4 $request
     * @return GroupVoiceMessagingGroupGetVoicePortalResponse17sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupVoiceMessagingGroupGetVoicePortalRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupVoiceMessagingGroupModifyVoicePortalBrandingRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceXmlGetInstanceRequest $request
     * @return GroupVoiceXmlGetInstanceResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupVoiceXmlGetInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdminGetPolicyRequest18 $request
     * @return ServiceProviderAdminGetPolicyResponse18
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderAdminGetPolicyRequest18(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetPolicyRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileAddRequest17sp3 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderCommunicationBarringProfileAddRequest17sp3(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileAddRequest17sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileGetRequest17sp3 $request
     * @return ServiceProviderCommunicationBarringProfileGetResponse17sp3
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderCommunicationBarringProfileGetRequest17sp3(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetRequest17sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileGetRequest19sp1 $request
     * @return ServiceProviderCommunicationBarringProfileGetResponse19sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderCommunicationBarringProfileGetRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderFeatureAccessCodeGetListRequest $request
     * @return ServiceProviderFeatureAccessCodeGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderFeatureAccessCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderFeatureAccessCodeModifyListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderFeatureAccessCodeModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCommunicationBarringProfileAddRequest17sp3 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCommunicationBarringProfileAddRequest17sp3(\CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileAddRequest17sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCommunicationBarringProfileGetRequest17sp3 $request
     * @return SystemCommunicationBarringProfileGetResponse17sp3
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCommunicationBarringProfileGetRequest17sp3(\CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileGetRequest17sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCommunicationBarringProfileGetRequest19sp1 $request
     * @return SystemCommunicationBarringProfileGetResponse19sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCommunicationBarringProfileGetRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileGetRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemConfigurableFileSystemGetRequest $request
     * @return SystemConfigurableFileSystemGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemConfigurableFileSystemGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemNetworkClassOfServiceGetRequest17 $request
     * @return SystemNetworkClassOfServiceGetResponse17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemNetworkClassOfServiceGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\SystemNetworkClassOfServiceGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPolicyGetDefaultRequest18 $request
     * @return SystemPolicyGetDefaultResponse18
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPolicyGetDefaultRequest18(\CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPolicyGetDefaultRequest19sp1 $request
     * @return SystemPolicyGetDefaultResponse19sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPolicyGetDefaultRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPolicyGetDefaultRequest20 $request
     * @return SystemPolicyGetDefaultResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPolicyGetDefaultRequest20(\CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPolicyModifyDefaultRequest14 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPolicyModifyDefaultRequest14(\CWM\BroadWorksConnector\Ocip\Models\SystemPolicyModifyDefaultRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTimeZoneGetListRequest $request
     * @return SystemTimeZoneGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTimeZoneGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTimeZoneGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupGetRequest16sp2 $request
     * @return SystemVoiceMessagingGroupGetResponse16sp2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemVoiceMessagingGroupGetRequest16sp2(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest16sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallPoliciesGetRequest17 $request
     * @return UserCallPoliciesGetResponse17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallPoliciesGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserCallPoliciesGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserFeatureAccessCodeGetListRequest $request
     * @return UserFeatureAccessCodeGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userFeatureAccessCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserFeatureAccessCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMusicOnHoldUserGetRequest16 $request
     * @return UserMusicOnHoldUserGetResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMusicOnHoldUserGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMusicOnHoldUserModifyRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMusicOnHoldUserModifyRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserModifyRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreAlertingAnnouncementGetRequest $request
     * @return UserPreAlertingAnnouncementGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPreAlertingAnnouncementGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreAlertingAnnouncementModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPreAlertingAnnouncementModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetGreetingRequest18 $request
     * @return UserVoiceMessagingUserGetGreetingResponse18
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserGetGreetingRequest18(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetGreetingRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFeatureAccessCodeGetRequest $request
     * @return GroupFeatureAccessCodeGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFeatureAccessCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFeatureAccessCodeModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFeatureAccessCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldAddInstanceRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMusicOnHoldAddInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldAddInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldGetInstanceRequest20 $request
     * @return GroupMusicOnHoldGetInstanceResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMusicOnHoldGetInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldModifyInstanceRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMusicOnHoldModifyInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldModifyInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNetworkClassOfServiceAssignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupNetworkClassOfServiceAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNetworkClassOfServiceGetAssignedUserListRequest $request
     * @return GroupNetworkClassOfServiceGetAssignedUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupNetworkClassOfServiceGetAssignedUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceGetAssignedUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNetworkClassOfServiceUnassignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupNetworkClassOfServiceUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPhoneDirectoryGetListRequest18 $request
     * @return GroupPhoneDirectoryGetListResponse18
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupPhoneDirectoryGetListRequest18(\CWM\BroadWorksConnector\Ocip\Models\GroupPhoneDirectoryGetListRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderIntegratedIMPGetRequest $request
     * @return ServiceProviderIntegratedIMPGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderIntegratedIMPGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNetworkClassOfServiceAssignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderNetworkClassOfServiceAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNetworkClassOfServiceUnassignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderNetworkClassOfServiceUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderServicePackMigrationTaskAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskGetListRequest $request
     * @return ServiceProviderServicePackMigrationTaskGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderServicePackMigrationTaskGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskGetRequest14sp4 $request
     * @return ServiceProviderServicePackMigrationTaskGetResponse14sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderServicePackMigrationTaskGetRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemEnhancedCallLogsGetRequest17sp4 $request
     * @return SystemEnhancedCallLogsGetResponse17sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemEnhancedCallLogsGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemFeatureAccessCodeGetListRequest $request
     * @return SystemFeatureAccessCodeGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemFeatureAccessCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemFeatureAccessCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemFeatureAccessCodeModifyListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemFeatureAccessCodeModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemFeatureAccessCodeModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemHuntGroupGetRequest17 $request
     * @return SystemHuntGroupGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemHuntGroupGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\SystemHuntGroupGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemHuntGroupModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemHuntGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemHuntGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemIntegratedIMPGetRequest19 $request
     * @return SystemIntegratedIMPGetResponse19
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemIntegratedIMPGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemLicensingGetSystemLicenseListRequest $request
     * @return SystemLicensingGetSystemLicenseListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemLicensingGetSystemLicenseListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemLicensingGetSystemLicenseListRequest19sp1 $request
     * @return SystemLicensingGetSystemLicenseListResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemLicensingGetSystemLicenseListRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemLicensingGetSystemLicenseListRequest21 $request
     * @return SystemLicensingGetSystemLicenseListResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemLicensingGetSystemLicenseListRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemLicensingGetSystemLicenseListRequest21sp1 $request
     * @return SystemLicensingGetSystemLicenseListResponse21sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemLicensingGetSystemLicenseListRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemNumberActivationGetRequest18sp1 $request
     * @return SystemNumberActivationGetResponse18sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemNumberActivationGetRequest18sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemNumberActivationGetRequest18sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSMPPGetRequest14sp5 $request
     * @return SystemSMPPGetResponse14sp5
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemSMPPGetRequest14sp5(\CWM\BroadWorksConnector\Ocip\Models\SystemSMPPGetRequest14sp5 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAlternateNumbersGetRequest17 $request
     * @return UserAlternateNumbersGetResponse17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userAlternateNumbersGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserAlternateNumbersGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereGetSelectiveCriteriaRequest16 $request
     * @return UserBroadWorksAnywhereGetSelectiveCriteriaResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereGetSelectiveCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetSelectiveCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingSelectiveGetCriteriaRequest16 $request
     * @return UserCallForwardingSelectiveGetCriteriaResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallForwardingSelectiveGetCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyGetCriteriaRequest16 $request
     * @return UserCallNotifyGetCriteriaResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallNotifyGetCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserHotelingGuestModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userHotelingGuestModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserHotelingGuestModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreAlertingAnnouncementGetCriteriaRequest $request
     * @return UserPreAlertingAnnouncementGetCriteriaResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPreAlertingAnnouncementGetCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPriorityAlertGetCriteriaRequest16 $request
     * @return UserPriorityAlertGetCriteriaResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPriorityAlertGetCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertGetCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserRouteListGetRequest $request
     * @return UserRouteListGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userRouteListGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserRouteListGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallAcceptanceGetCriteriaRequest16 $request
     * @return UserSelectiveCallAcceptanceGetCriteriaResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallAcceptanceGetCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallRejectionGetCriteriaRequest16sp1 $request
     * @return UserSelectiveCallRejectionGetCriteriaResponse16sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallRejectionGetCriteriaRequest16sp1(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaRequest16sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param AuthenticationRequest $request
     * @return AuthenticationResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function authenticationRequest(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterprisePhoneDirectoryGetListRequest18 $request
     * @return EnterprisePhoneDirectoryGetListResponse18
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterprisePhoneDirectoryGetListRequest18(\CWM\BroadWorksConnector\Ocip\Models\EnterprisePhoneDirectoryGetListRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceGetUserListRequest $request
     * @return GroupAccessDeviceGetUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAccessDeviceGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdminGetRequest $request
     * @return GroupAdminGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAdminGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetAnnouncementRequest19 $request
     * @return GroupCallCenterGetAnnouncementResponse19
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetAnnouncementRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAnnouncementRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetAnnouncementRequest20 $request
     * @return GroupCallCenterGetAnnouncementResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterGetAnnouncementRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetAnnouncementRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyAnnouncementRequest17 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterModifyAnnouncementRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyAnnouncementRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterOverflowGetRequest17 $request
     * @return GroupCallCenterOverflowGetResponse17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterOverflowGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterOverflowModifyRequest17 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterOverflowModifyRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterOverflowModifyRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallProcessingGetPolicyRequest21sp2 $request
     * @return GroupCallProcessingGetPolicyResponse21sp2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallProcessingGetPolicyRequest21sp2(\CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingGetPolicyRequest21sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallProcessingGetPolicyRequest22 $request
     * @return GroupCallProcessingGetPolicyResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallProcessingGetPolicyRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingGetPolicyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommunicationBarringAuthorizationCodeAddListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCommunicationBarringAuthorizationCodeAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommunicationBarringAuthorizationCodeGetListRequest $request
     * @return GroupCommunicationBarringAuthorizationCodeGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCommunicationBarringAuthorizationCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGetRequest22 $request
     * @return GroupGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupIntegratedIMPGetRequest $request
     * @return GroupIntegratedIMPGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupIntegratedIMPGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupIntegratedIMPGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupInterceptGroupGetRequest16sp1 $request
     * @return GroupInterceptGroupGetResponse16sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupInterceptGroupGetRequest16sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupGetRequest16sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupInterceptGroupModifyRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupInterceptGroupModifyRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupModifyRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldAddInstanceRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMusicOnHoldAddInstanceRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldAddInstanceRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldGetInstanceRequest21 $request
     * @return GroupMusicOnHoldGetInstanceResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMusicOnHoldGetInstanceRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldGetInstanceRequest22 $request
     * @return GroupMusicOnHoldGetInstanceResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMusicOnHoldGetInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldModifyInstanceRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMusicOnHoldModifyInstanceRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldModifyInstanceRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPasswordRulesGetRequest16 $request
     * @return GroupPasswordRulesGetResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupPasswordRulesGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupPasswordRulesGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointAddInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupRoutePointAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointGetInstanceRequest19sp1 $request
     * @return GroupRoutePointGetInstanceResponse19sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupRoutePointGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupRoutePointModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupShInterfaceGetUserListRequest $request
     * @return GroupShInterfaceGetUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupShInterfaceGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupShInterfaceGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupGetVoicePortalRequest19sp1 $request
     * @return GroupVoiceMessagingGroupGetVoicePortalResponse19sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupVoiceMessagingGroupGetVoicePortalRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceXmlGetInstanceRequest19sp1 $request
     * @return GroupVoiceXmlGetInstanceResponse19sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupVoiceXmlGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param LoginRequest14sp4 $request
     * @return LoginResponse14sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function loginRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\LoginRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param LoginRequest21sp1 $request
     * @return LoginResponse21sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function loginRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\LoginRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param LoginRequest22 $request
     * @return LoginResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function loginRequest22(\CWM\BroadWorksConnector\Ocip\Models\LoginRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param LoginRequest22V2 $request
     * @return LoginResponse22V2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function loginRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\LoginRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerIntegratedIMPGetRequest $request
     * @return ResellerIntegratedIMPGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerIntegratedIMPGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerIntegratedIMPGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceGetUserListRequest $request
     * @return ServiceProviderAccessDeviceGetUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderAccessDeviceGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdminGetRequest14 $request
     * @return ServiceProviderAdminGetResponse14
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderAdminGetRequest14(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCallProcessingGetPolicyRequest21sp2 $request
     * @return ServiceProviderCallProcessingGetPolicyResponse21sp2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderCallProcessingGetPolicyRequest21sp2(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCallProcessingGetPolicyRequest21sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCallProcessingGetPolicyRequest22 $request
     * @return ServiceProviderCallProcessingGetPolicyResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderCallProcessingGetPolicyRequest22(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCallProcessingGetPolicyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderIntegratedIMPGetRequest21 $request
     * @return ServiceProviderIntegratedIMPGetResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderIntegratedIMPGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderIntegratedIMPGetRequest21sp1 $request
     * @return ServiceProviderIntegratedIMPGetResponse21sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderIntegratedIMPGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderPasswordRulesGetRequest16 $request
     * @return ServiceProviderPasswordRulesGetResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderPasswordRulesGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPasswordRulesGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAccessDeviceGetUserListRequest $request
     * @return SystemAccessDeviceGetUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemAccessDeviceGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAccessDeviceGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallProcessingGetPolicyRequest21sp2 $request
     * @return SystemCallProcessingGetPolicyResponse21sp2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallProcessingGetPolicyRequest21sp2(\CWM\BroadWorksConnector\Ocip\Models\SystemCallProcessingGetPolicyRequest21sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallProcessingGetPolicyRequest22 $request
     * @return SystemCallProcessingGetPolicyResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallProcessingGetPolicyRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemCallProcessingGetPolicyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallProcessingGetPolicyRequest22V2 $request
     * @return SystemCallProcessingGetPolicyResponse22V2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallProcessingGetPolicyRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\SystemCallProcessingGetPolicyRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCommunicationBarringGetRequest $request
     * @return SystemCommunicationBarringGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCommunicationBarringGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemDeviceManagementTagSetGetListRequest $request
     * @return SystemDeviceManagementTagSetGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemDeviceManagementTagSetGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementTagSetGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemDeviceTypeGetAvailableListRequest19 $request
     * @return SystemDeviceTypeGetAvailableListResponse19
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemDeviceTypeGetAvailableListRequest19(\CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemDomainGetListRequest $request
     * @return SystemDomainGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemDomainGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemDomainGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemOCICallControlApplicationAddRequest17 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemOCICallControlApplicationAddRequest17(\CWM\BroadWorksConnector\Ocip\Models\SystemOCICallControlApplicationAddRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPasswordRulesGetRequest16 $request
     * @return SystemPasswordRulesGetResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPasswordRulesGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\SystemPasswordRulesGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemProvisioningValidationGetRequest14sp2 $request
     * @return SystemProvisioningValidationGetResponse14sp2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemProvisioningValidationGetRequest14sp2(\CWM\BroadWorksConnector\Ocip\Models\SystemProvisioningValidationGetRequest14sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSessionAuditGetRequest17sp3 $request
     * @return SystemSessionAuditGetResponse17sp3
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemSessionAuditGetRequest17sp3(\CWM\BroadWorksConnector\Ocip\Models\SystemSessionAuditGetRequest17sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSMPPGetRequest21 $request
     * @return SystemSMPPGetResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemSMPPGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemSMPPGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTreatmentMappingCallBlockingServiceAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceAddRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTreatmentMappingCallBlockingServiceAddRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceAddRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceAddRequest22V2 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTreatmentMappingCallBlockingServiceAddRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceAddRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTreatmentMappingCallBlockingServiceDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceDeleteRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTreatmentMappingCallBlockingServiceDeleteRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceDeleteRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceDeleteRequest22V2 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTreatmentMappingCallBlockingServiceDeleteRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceDeleteRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceGetListRequest $request
     * @return SystemTreatmentMappingCallBlockingServiceGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTreatmentMappingCallBlockingServiceGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceGetListRequest22 $request
     * @return SystemTreatmentMappingCallBlockingServiceGetListResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTreatmentMappingCallBlockingServiceGetListRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceGetListRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTreatmentMappingCallBlockingServiceModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceModifyRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTreatmentMappingCallBlockingServiceModifyRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceModifyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceModifyRequest22V2 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTreatmentMappingCallBlockingServiceModifyRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceModifyRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupGetRequest21 $request
     * @return SystemVoiceMessagingGroupGetResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemVoiceMessagingGroupGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupGetRequest22 $request
     * @return SystemVoiceMessagingGroupGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemVoiceMessagingGroupGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAddRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userAddRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserAddRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereGetAvailablePortalListRequest $request
     * @return UserBroadWorksAnywhereGetAvailablePortalListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereGetAvailablePortalListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetAvailablePortalListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallProcessingGetPolicyRequest21sp2 $request
     * @return UserCallProcessingGetPolicyResponse21sp2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallProcessingGetPolicyRequest21sp2(\CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingGetPolicyRequest21sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallProcessingGetPolicyRequest22 $request
     * @return UserCallProcessingGetPolicyResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallProcessingGetPolicyRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingGetPolicyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserEnhancedCallLogsGetListRequest21 $request
     * @return UserEnhancedCallLogsGetListResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userEnhancedCallLogsGetListRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserEnhancedCallLogsGetListRequest21sp1 $request
     * @return UserEnhancedCallLogsGetListResponse21sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userEnhancedCallLogsGetListRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserEnhancedCallLogsGetListRequest21sp1V2 $request
     * @return UserEnhancedCallLogsGetListResponse21sp1V2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userEnhancedCallLogsGetListRequest21sp1V2(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest21sp1V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGetRequest22V4 $request
     * @return UserGetResponse22V4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userGetRequest22V4(\CWM\BroadWorksConnector\Ocip\Models\UserGetRequest22V4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserIntegratedIMPGetRequest $request
     * @return UserIntegratedIMPGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userIntegratedIMPGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserInterceptUserGetRequest16sp1 $request
     * @return UserInterceptUserGetResponse16sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userInterceptUserGetRequest16sp1(\CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserGetRequest16sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserInterceptUserModifyRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userInterceptUserModifyRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserModifyRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserModifyRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userModifyRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSharedCallAppearanceGetRequest16sp2 $request
     * @return UserSharedCallAppearanceGetResponse16sp2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSharedCallAppearanceGetRequest16sp2(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetRequest16sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserShInterfaceGetPublicIdDataRequest $request
     * @return UserShInterfaceGetPublicIdDataResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userShInterfaceGetPublicIdDataRequest(\CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetPublicIdDataRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserShInterfaceGetUserIdDataRequest $request
     * @return UserShInterfaceGetUserIdDataResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userShInterfaceGetUserIdDataRequest(\CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetUserIdDataRequest $request)
    {
        return $this->call($request);
    }


}

