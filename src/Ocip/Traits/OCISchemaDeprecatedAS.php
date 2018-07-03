<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\AuthenticationRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyRequest18;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyResponse18;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetResponse;
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
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddInstanceRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingGetPolicyRequest21sp2;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingGetPolicyResponse21sp2;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupModifyRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupAddInstanceRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetInstanceRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetInstanceResponse19;
use CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupGetRequest16sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupGetResponse16sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupModifyRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldAddInstanceRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldAddInstanceRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceResponse19;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceResponse21;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldModifyInstanceRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldModifyInstanceRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceGetAssignedUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceGetAssignedUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupPasswordRulesGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupPasswordRulesGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolicyModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetInstanceRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetInstanceResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupShInterfaceGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupShInterfaceGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceResponse;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetPolicyRequest18;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetPolicyResponse18;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetRequest14;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetResponse14;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCallProcessingGetPolicyRequest21sp2;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileAddRequest17sp3;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetRequest17sp3;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetResponse17sp3;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetResponse17sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPasswordRulesGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPasswordRulesGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\SystemAccessDeviceGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAccessDeviceGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallProcessingGetPolicyRequest21sp2;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallProcessingGetPolicyResponse21sp2;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileAddRequest17sp3;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileGetRequest17sp3;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileGetResponse17sp3;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileGetRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileGetResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsGetRequest17sp4;
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
use CWM\BroadWorksConnector\Ocip\Models\SystemMigratedUsersGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemMigratedUsersGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemNetworkClassOfServiceGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\SystemNetworkClassOfServiceGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\SystemNumberActivationGetRequest18sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemNumberActivationGetResponse18sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemOCICallControlApplicationAddRequest17;
use CWM\BroadWorksConnector\Ocip\Models\SystemPasswordRulesGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\SystemPasswordRulesGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultRequest18;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultResponse18;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultRequest20;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultResponse20;
use CWM\BroadWorksConnector\Ocip\Models\SystemPolicyModifyDefaultRequest14;
use CWM\BroadWorksConnector\Ocip\Models\SystemProvisioningValidationGetRequest14sp2;
use CWM\BroadWorksConnector\Ocip\Models\SystemProvisioningValidationGetResponse14sp2;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMPPGetRequest14sp5;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMPPGetResponse14sp5;
use CWM\BroadWorksConnector\Ocip\Models\SystemTimeZoneGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTimeZoneGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest16sp2;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetResponse16sp2;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserAlternateNumbersGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\UserAlternateNumbersGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetSelectiveCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetSelectiveCriteriaResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetCriteriaResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetCriteriaResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallPoliciesGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\UserCallPoliciesGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingGetPolicyRequest21sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingGetPolicyResponse21sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest21sp1V2;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserFeatureAccessCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserFeatureAccessCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserHotelingGuestModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserGetRequest16sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserGetResponse16sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserModifyRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserModifyRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetCriteriaResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertGetCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertGetCriteriaResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserRouteListGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserRouteListGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaRequest16sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaResponse16sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetRequest16sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetResponse16sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetPublicIdDataRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetPublicIdDataResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetUserIdDataRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetUserIdDataResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetGreetingRequest18;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetGreetingResponse18;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaDeprecatedAS
{

    /**
     * @param AuthenticationRequest $request
     * @return
     */
    public function authenticationRequest(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceGetUserListRequest $request
     * @return GroupAccessDeviceGetUserListResponse|ErrorResponse
     */
    public function groupAccessDeviceGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdminGetPolicyRequest18 $request
     * @return GroupAdminGetPolicyResponse18|ErrorResponse
     */
    public function groupAdminGetPolicyRequest18(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdminGetPolicyRequest19sp1 $request
     * @return GroupAdminGetPolicyResponse19sp1|ErrorResponse
     */
    public function groupAdminGetPolicyRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdminGetRequest $request
     * @return GroupAdminGetResponse|ErrorResponse
     */
    public function groupAdminGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantAddInstanceRequest19 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantAddInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantAddInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantGetInstanceRequest19 $request
     * @return GroupAutoAttendantGetInstanceResponse19|ErrorResponse
     */
    public function groupAutoAttendantGetInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantGetInstanceRequest19sp1 $request
     * @return GroupAutoAttendantGetInstanceResponse19sp1|ErrorResponse
     */
    public function groupAutoAttendantGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantModifyInstanceRequest17sp1 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantModifyInstanceRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantModifyInstanceRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantSubmenuAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuGetRequest $request
     * @return GroupAutoAttendantSubmenuGetResponse|ErrorResponse
     */
    public function groupAutoAttendantSubmenuGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantSubmenuModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksAnywhereGetInstanceRequest17 $request
     * @return GroupBroadWorksAnywhereGetInstanceResponse17|ErrorResponse
     */
    public function groupBroadWorksAnywhereGetInstanceRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereGetInstanceRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterAddInstanceRequest19 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterAddInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterGetInstanceRequest19sp1 $request
     * @return GroupCallCenterGetInstanceResponse19sp1|ErrorResponse
     */
    public function groupCallCenterGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterModifyInstanceRequest19 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCenterModifyInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterModifyInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallProcessingGetPolicyRequest21sp2 $request
     * @return GroupCallProcessingGetPolicyResponse21sp2
     */
    public function groupCallProcessingGetPolicyRequest21sp2(\CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingGetPolicyRequest21sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommunicationBarringAuthorizationCodeAddListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCommunicationBarringAuthorizationCodeAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommunicationBarringAuthorizationCodeGetListRequest $request
     * @return GroupCommunicationBarringAuthorizationCodeGetListResponse
     */
    public function groupCommunicationBarringAuthorizationCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCustomRingbackGroupGetRequest16 $request
     * @return GroupCustomRingbackGroupGetResponse16|ErrorResponse
     */
    public function groupCustomRingbackGroupGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCustomRingbackGroupModifyRequest16 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCustomRingbackGroupModifyRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupModifyRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFeatureAccessCodeGetRequest $request
     * @return GroupFeatureAccessCodeGetResponse|ErrorResponse
     */
    public function groupFeatureAccessCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFeatureAccessCodeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupFeatureAccessCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupAddInstanceRequest19 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupHuntGroupAddInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupAddInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupGetInstanceRequest19 $request
     * @return GroupHuntGroupGetInstanceResponse19|ErrorResponse
     */
    public function groupHuntGroupGetInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupInterceptGroupGetRequest16sp1 $request
     * @return GroupInterceptGroupGetResponse16sp1|ErrorResponse
     */
    public function groupInterceptGroupGetRequest16sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupGetRequest16sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupInterceptGroupModifyRequest16 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupInterceptGroupModifyRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupModifyRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldAddInstanceRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupMusicOnHoldAddInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldAddInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldAddInstanceRequest21 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupMusicOnHoldAddInstanceRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldAddInstanceRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldGetInstanceRequest19 $request
     * @return GroupMusicOnHoldGetInstanceResponse19|ErrorResponse
     */
    public function groupMusicOnHoldGetInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldGetInstanceRequest20 $request
     * @return GroupMusicOnHoldGetInstanceResponse20|ErrorResponse
     */
    public function groupMusicOnHoldGetInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldGetInstanceRequest21 $request
     * @return GroupMusicOnHoldGetInstanceResponse21|ErrorResponse
     */
    public function groupMusicOnHoldGetInstanceRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldModifyInstanceRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupMusicOnHoldModifyInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldModifyInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldModifyInstanceRequest21 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupMusicOnHoldModifyInstanceRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldModifyInstanceRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNetworkClassOfServiceAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupNetworkClassOfServiceAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNetworkClassOfServiceGetAssignedUserListRequest $request
     * @return GroupNetworkClassOfServiceGetAssignedUserListResponse
     */
    public function groupNetworkClassOfServiceGetAssignedUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceGetAssignedUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNetworkClassOfServiceUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupNetworkClassOfServiceUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPasswordRulesGetRequest16 $request
     * @return GroupPasswordRulesGetResponse16|ErrorResponse
     */
    public function groupPasswordRulesGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupPasswordRulesGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPolicyGetRequest17 $request
     * @return GroupPolicyGetResponse17|ErrorResponse
     */
    public function groupPolicyGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPolicyGetRequest20 $request
     * @return GroupPolicyGetResponse20|ErrorResponse
     */
    public function groupPolicyGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPolicyModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupPolicyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPolicyModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPreAlertingAnnouncementGetRequest $request
     * @return GroupPreAlertingAnnouncementGetResponse|ErrorResponse
     */
    public function groupPreAlertingAnnouncementGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPreAlertingAnnouncementModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupPreAlertingAnnouncementModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPreAlertingAnnouncementModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointAddInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointGetInstanceRequest19sp1 $request
     * @return GroupRoutePointGetInstanceResponse19sp1|ErrorResponse
     */
    public function groupRoutePointGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointModifyInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupShInterfaceGetUserListRequest $request
     * @return GroupShInterfaceGetUserListResponse|ErrorResponse
     */
    public function groupShInterfaceGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupShInterfaceGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16 $request
     * @return GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16|ErrorResponse
     */
    public function groupVoiceMessagingGroupGetVoicePortalBrandingRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupGetVoicePortalRequest17sp4 $request
     * @return GroupVoiceMessagingGroupGetVoicePortalResponse17sp4|ErrorResponse
     */
    public function groupVoiceMessagingGroupGetVoicePortalRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupGetVoicePortalRequest19sp1 $request
     * @return GroupVoiceMessagingGroupGetVoicePortalResponse19sp1|ErrorResponse
     */
    public function groupVoiceMessagingGroupGetVoicePortalRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupVoiceMessagingGroupModifyVoicePortalBrandingRequest16(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceXmlGetInstanceRequest $request
     * @return GroupVoiceXmlGetInstanceResponse|ErrorResponse
     */
    public function groupVoiceXmlGetInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param LoginRequest14sp4 $request
     * @return
     */
    public function loginRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\LoginRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAccessDeviceGetUserListRequest $request
     * @return ServiceProviderAccessDeviceGetUserListResponse|ErrorResponse
     */
    public function serviceProviderAccessDeviceGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAccessDeviceGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdminGetPolicyRequest18 $request
     * @return ServiceProviderAdminGetPolicyResponse18|ErrorResponse
     */
    public function serviceProviderAdminGetPolicyRequest18(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetPolicyRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdminGetRequest14 $request
     * @return ServiceProviderAdminGetResponse14|ErrorResponse
     */
    public function serviceProviderAdminGetRequest14(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGetRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCallProcessingGetPolicyRequest21sp2 $request
     * @return
     */
    public function serviceProviderCallProcessingGetPolicyRequest21sp2(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCallProcessingGetPolicyRequest21sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileAddRequest17sp3 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderCommunicationBarringProfileAddRequest17sp3(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileAddRequest17sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileGetRequest17sp3 $request
     * @return ServiceProviderCommunicationBarringProfileGetResponse17sp3
     */
    public function serviceProviderCommunicationBarringProfileGetRequest17sp3(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetRequest17sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderCommunicationBarringProfileGetRequest19sp1 $request
     * @return ServiceProviderCommunicationBarringProfileGetResponse19sp1
     */
    public function serviceProviderCommunicationBarringProfileGetRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringProfileGetRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderFeatureAccessCodeGetListRequest $request
     * @return ServiceProviderFeatureAccessCodeGetListResponse|ErrorResponse
     */
    public function serviceProviderFeatureAccessCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderFeatureAccessCodeModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderFeatureAccessCodeModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderFeatureAccessCodeModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderGetRequest17sp1 $request
     * @return ServiceProviderGetResponse17sp1|ErrorResponse
     */
    public function serviceProviderGetRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderIntegratedIMPGetRequest $request
     * @return ServiceProviderIntegratedIMPGetResponse|ErrorResponse
     */
    public function serviceProviderIntegratedIMPGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNetworkClassOfServiceAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderNetworkClassOfServiceAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderNetworkClassOfServiceUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderNetworkClassOfServiceUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderNetworkClassOfServiceUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderPasswordRulesGetRequest16 $request
     * @return ServiceProviderPasswordRulesGetResponse16|ErrorResponse
     */
    public function serviceProviderPasswordRulesGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPasswordRulesGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderServicePackMigrationTaskAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskGetListRequest $request
     * @return ServiceProviderServicePackMigrationTaskGetListResponse
     */
    public function serviceProviderServicePackMigrationTaskGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderServicePackMigrationTaskGetRequest14sp4 $request
     * @return ServiceProviderServicePackMigrationTaskGetResponse14sp4
     */
    public function serviceProviderServicePackMigrationTaskGetRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderServicePackMigrationTaskGetRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAccessDeviceGetUserListRequest $request
     * @return SystemAccessDeviceGetUserListResponse|ErrorResponse
     */
    public function systemAccessDeviceGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAccessDeviceGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallProcessingGetPolicyRequest21sp2 $request
     * @return SystemCallProcessingGetPolicyResponse21sp2
     */
    public function systemCallProcessingGetPolicyRequest21sp2(\CWM\BroadWorksConnector\Ocip\Models\SystemCallProcessingGetPolicyRequest21sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCommunicationBarringGetRequest $request
     * @return SystemCommunicationBarringGetResponse|ErrorResponse
     */
    public function systemCommunicationBarringGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCommunicationBarringProfileAddRequest17sp3 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemCommunicationBarringProfileAddRequest17sp3(\CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileAddRequest17sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCommunicationBarringProfileGetRequest17sp3 $request
     * @return SystemCommunicationBarringProfileGetResponse17sp3
     */
    public function systemCommunicationBarringProfileGetRequest17sp3(\CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileGetRequest17sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCommunicationBarringProfileGetRequest19sp1 $request
     * @return SystemCommunicationBarringProfileGetResponse19sp1
     */
    public function systemCommunicationBarringProfileGetRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringProfileGetRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemEnhancedCallLogsGetRequest17sp4 $request
     * @return
     */
    public function systemEnhancedCallLogsGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemFeatureAccessCodeGetListRequest $request
     * @return SystemFeatureAccessCodeGetListResponse|ErrorResponse
     */
    public function systemFeatureAccessCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemFeatureAccessCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemFeatureAccessCodeModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemFeatureAccessCodeModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemFeatureAccessCodeModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemHuntGroupGetRequest17 $request
     * @return SystemHuntGroupGetResponse
     */
    public function systemHuntGroupGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\SystemHuntGroupGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemHuntGroupModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemHuntGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemHuntGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemIntegratedIMPGetRequest19 $request
     * @return SystemIntegratedIMPGetResponse19|ErrorResponse
     */
    public function systemIntegratedIMPGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemLicensingGetSystemLicenseListRequest $request
     * @return SystemLicensingGetSystemLicenseListResponse|ErrorResponse
     */
    public function systemLicensingGetSystemLicenseListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemLicensingGetSystemLicenseListRequest19sp1 $request
     * @return SystemLicensingGetSystemLicenseListResponse21|ErrorResponse
     */
    public function systemLicensingGetSystemLicenseListRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemLicensingGetSystemLicenseListRequest21 $request
     * @return SystemLicensingGetSystemLicenseListResponse21|ErrorResponse
     */
    public function systemLicensingGetSystemLicenseListRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemLicensingGetSystemLicenseListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMigratedUsersGetListRequest $request
     * @return SystemMigratedUsersGetListResponse|ErrorResponse
     */
    public function systemMigratedUsersGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemMigratedUsersGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemNetworkClassOfServiceGetRequest17 $request
     * @return SystemNetworkClassOfServiceGetResponse17
     */
    public function systemNetworkClassOfServiceGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\SystemNetworkClassOfServiceGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemNumberActivationGetRequest18sp1 $request
     * @return SystemNumberActivationGetResponse18sp1|ErrorResponse
     */
    public function systemNumberActivationGetRequest18sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemNumberActivationGetRequest18sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemOCICallControlApplicationAddRequest17 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemOCICallControlApplicationAddRequest17(\CWM\BroadWorksConnector\Ocip\Models\SystemOCICallControlApplicationAddRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPasswordRulesGetRequest16 $request
     * @return SystemPasswordRulesGetResponse16|ErrorResponse
     */
    public function systemPasswordRulesGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\SystemPasswordRulesGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPolicyGetDefaultRequest18 $request
     * @return SystemPolicyGetDefaultResponse18|ErrorResponse
     */
    public function systemPolicyGetDefaultRequest18(\CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPolicyGetDefaultRequest19sp1 $request
     * @return SystemPolicyGetDefaultResponse19sp1|ErrorResponse
     */
    public function systemPolicyGetDefaultRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPolicyGetDefaultRequest20 $request
     * @return SystemPolicyGetDefaultResponse20|ErrorResponse
     */
    public function systemPolicyGetDefaultRequest20(\CWM\BroadWorksConnector\Ocip\Models\SystemPolicyGetDefaultRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPolicyModifyDefaultRequest14 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemPolicyModifyDefaultRequest14(\CWM\BroadWorksConnector\Ocip\Models\SystemPolicyModifyDefaultRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemProvisioningValidationGetRequest14sp2 $request
     * @return SystemProvisioningValidationGetResponse14sp2|ErrorResponse
     */
    public function systemProvisioningValidationGetRequest14sp2(\CWM\BroadWorksConnector\Ocip\Models\SystemProvisioningValidationGetRequest14sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSMPPGetRequest14sp5 $request
     * @return SystemSMPPGetResponse14sp5|ErrorResponse
     */
    public function systemSMPPGetRequest14sp5(\CWM\BroadWorksConnector\Ocip\Models\SystemSMPPGetRequest14sp5 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTimeZoneGetListRequest $request
     * @return SystemTimeZoneGetListResponse|ErrorResponse
     */
    public function systemTimeZoneGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTimeZoneGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemTreatmentMappingCallBlockingServiceAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemTreatmentMappingCallBlockingServiceDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceGetListRequest $request
     * @return SystemTreatmentMappingCallBlockingServiceGetListResponse
     */
    public function systemTreatmentMappingCallBlockingServiceGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTreatmentMappingCallBlockingServiceModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemTreatmentMappingCallBlockingServiceModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTreatmentMappingCallBlockingServiceModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupGetRequest16sp2 $request
     * @return SystemVoiceMessagingGroupGetResponse16sp2|ErrorResponse
     */
    public function systemVoiceMessagingGroupGetRequest16sp2(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest16sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupGetRequest21 $request
     * @return SystemVoiceMessagingGroupGetResponse21|ErrorResponse
     */
    public function systemVoiceMessagingGroupGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupGetRequest22 $request
     * @return
     */
    public function systemVoiceMessagingGroupGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAlternateNumbersGetRequest17 $request
     * @return UserAlternateNumbersGetResponse17|ErrorResponse
     */
    public function userAlternateNumbersGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserAlternateNumbersGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereGetSelectiveCriteriaRequest16 $request
     * @return UserBroadWorksAnywhereGetSelectiveCriteriaResponse16|ErrorResponse
     */
    public function userBroadWorksAnywhereGetSelectiveCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetSelectiveCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingSelectiveGetCriteriaRequest16 $request
     * @return UserCallForwardingSelectiveGetCriteriaResponse16|ErrorResponse
     */
    public function userCallForwardingSelectiveGetCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyGetCriteriaRequest16 $request
     * @return UserCallNotifyGetCriteriaResponse16|ErrorResponse
     */
    public function userCallNotifyGetCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallPoliciesGetRequest17 $request
     * @return UserCallPoliciesGetResponse17
     */
    public function userCallPoliciesGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserCallPoliciesGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallProcessingGetPolicyRequest21sp2 $request
     * @return UserCallProcessingGetPolicyResponse21sp2
     */
    public function userCallProcessingGetPolicyRequest21sp2(\CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingGetPolicyRequest21sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserEnhancedCallLogsGetListRequest21 $request
     * @return UserEnhancedCallLogsGetListResponse21|ErrorResponse
     */
    public function userEnhancedCallLogsGetListRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserEnhancedCallLogsGetListRequest21sp1 $request
     * @return UserEnhancedCallLogsGetListResponse21sp1|ErrorResponse
     */
    public function userEnhancedCallLogsGetListRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserEnhancedCallLogsGetListRequest21sp1V2 $request
     * @return UserEnhancedCallLogsGetListResponse21sp1|ErrorResponse
     */
    public function userEnhancedCallLogsGetListRequest21sp1V2(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest21sp1V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserFeatureAccessCodeGetListRequest $request
     * @return UserFeatureAccessCodeGetListResponse|ErrorResponse
     */
    public function userFeatureAccessCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserFeatureAccessCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserHotelingGuestModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userHotelingGuestModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserHotelingGuestModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserInterceptUserGetRequest16sp1 $request
     * @return UserInterceptUserGetResponse16sp1|ErrorResponse
     */
    public function userInterceptUserGetRequest16sp1(\CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserGetRequest16sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserInterceptUserModifyRequest16 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userInterceptUserModifyRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserModifyRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMusicOnHoldUserGetRequest16 $request
     * @return UserMusicOnHoldUserGetResponse16|ErrorResponse
     */
    public function userMusicOnHoldUserGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMusicOnHoldUserModifyRequest16 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userMusicOnHoldUserModifyRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserModifyRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreAlertingAnnouncementGetCriteriaRequest $request
     * @return UserPreAlertingAnnouncementGetCriteriaResponse|ErrorResponse
     */
    public function userPreAlertingAnnouncementGetCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreAlertingAnnouncementGetRequest $request
     * @return UserPreAlertingAnnouncementGetResponse|ErrorResponse
     */
    public function userPreAlertingAnnouncementGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreAlertingAnnouncementModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPreAlertingAnnouncementModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPreAlertingAnnouncementModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPriorityAlertGetCriteriaRequest16 $request
     * @return UserPriorityAlertGetCriteriaResponse16|ErrorResponse
     */
    public function userPriorityAlertGetCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertGetCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserRouteListGetRequest $request
     * @return UserRouteListGetResponse|ErrorResponse
     */
    public function userRouteListGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserRouteListGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallAcceptanceGetCriteriaRequest16 $request
     * @return UserSelectiveCallAcceptanceGetCriteriaResponse16|ErrorResponse
     */
    public function userSelectiveCallAcceptanceGetCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallRejectionGetCriteriaRequest16sp1 $request
     * @return UserSelectiveCallRejectionGetCriteriaResponse16sp1|ErrorResponse
     */
    public function userSelectiveCallRejectionGetCriteriaRequest16sp1(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaRequest16sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSharedCallAppearanceGetRequest16sp2 $request
     * @return UserSharedCallAppearanceGetResponse16sp2|ErrorResponse
     */
    public function userSharedCallAppearanceGetRequest16sp2(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetRequest16sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserShInterfaceGetPublicIdDataRequest $request
     * @return UserShInterfaceGetPublicIdDataResponse|ErrorResponse
     */
    public function userShInterfaceGetPublicIdDataRequest(\CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetPublicIdDataRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserShInterfaceGetUserIdDataRequest $request
     * @return UserShInterfaceGetUserIdDataResponse|ErrorResponse
     */
    public function userShInterfaceGetUserIdDataRequest(\CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetUserIdDataRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetGreetingRequest18 $request
     * @return UserVoiceMessagingUserGetGreetingResponse18|ErrorResponse
     */
    public function userVoiceMessagingUserGetGreetingRequest18(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetGreetingRequest18 $request)
    {
        return $this->call($request);
    }


}

