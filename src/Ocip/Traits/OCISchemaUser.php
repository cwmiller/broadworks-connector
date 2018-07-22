<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserAccessDeviceFileGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAccessDeviceFileGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAccessDeviceFileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAccessDeviceFileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAccessDeviceFileModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAccessDeviceResetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAccessDeviceTagsGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAccessDeviceTagsGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAddRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\UserAlternateUserIdAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAlternateUserIdDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAlternateUserIdGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAlternateUserIdGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAlternateUserIdModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementRepositoryGetSettingsRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAssignedServicesGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAssignedServicesGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallLogsClearRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\UserCallPoliciesGetRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserCallPoliciesGetResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserCallPoliciesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingGetPolicyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingGetPolicyResponse22;
use CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingModifyPolicyRequest14sp7;
use CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringAuthorizationCodeAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringAuthorizationCodeDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringAuthorizationCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringAuthorizationCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserConsolidatedAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserConsolidatedDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserDevicePoliciesGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserDevicePoliciesGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserDevicePoliciesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserDnGetActivationListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserDnGetActivationListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserEnterpriseCommonPhoneListGetPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserEnterpriseCommonPhoneListGetPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserFeatureAccessCodeGetListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserFeatureAccessCodeGetListResponse20;
use CWM\BroadWorksConnector\Ocip\Models\UserFeatureAccessCodeModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGetListInGroupRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGetListInGroupResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserGetListInServiceProviderRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGetListInServiceProviderResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserGetListInSystemRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGetListInSystemResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserGetRegistrationListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGetRegistrationListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserGetRequest22V3;
use CWM\BroadWorksConnector\Ocip\Models\UserGetServiceInstanceListInServiceProviderRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGetServiceInstanceListInServiceProviderResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserGetServiceInstanceListInSystemRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGetServiceInstanceListInSystemResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserGroupCommonPhoneListGetPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGroupCommonPhoneListGetPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserGroupCustomContactDirectoryGetPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGroupCustomContactDirectoryGetPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserLinePortGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\UserModifyUserIdRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserNetworkConferencingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserNetworkConferencingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOCICallControlApplicationGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOCICallControlApplicationGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOCICallControlApplicationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPasswordInfoGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPasswordInfoGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalPhoneListAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalPhoneListDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalPhoneListGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalPhoneListGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalPhoneListGetPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalPhoneListGetPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalPhoneListModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPhoneDirectoryGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPhoneDirectoryGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPhoneDirectoryGetPagedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPhoneDirectoryGetPagedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPhoneDirectoryGetPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPhoneDirectoryGetPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPhoneDirectoryGetSearchedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPhoneDirectoryGetSearchedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPortalPasscodeGetInfoRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPortalPasscodeGetInfoResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPortalPasscodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPortalPasscodeRulesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPortalPasscodeRulesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPrimaryEndpointAdvancedSettingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPrimaryEndpointAdvancedSettingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPrimaryEndpointAdvancedSettingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPushNotificationRegistrationDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPushNotificationRegistrationGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPushNotificationRegistrationGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleAddEventRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleDeleteEventListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleGetEventDetailListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleGetEventDetailListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleGetEventListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleGetEventListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleGetEventRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleGetEventResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleGetListRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleGetListResponse17sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleModifyEventRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserScheduleModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserServiceAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserServiceGetAssignmentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserServiceGetAssignmentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserServiceIsAssignedRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserServiceUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetPublicIdDataRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetPublicIdDataResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetUserIdDataRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetUserIdDataResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserShInterfacePublicIdentityRefreshTaskStartRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserTerminatingAlternateTrunkIdentityGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserTerminatingAlternateTrunkIdentityGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserTerminatingAlternateTrunkIdentityModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaUser
{

    /**
     * @param UserAccessDeviceFileGetListRequest $request
     * @return UserAccessDeviceFileGetListResponse
     * @throws ErrorResponseException
     */
    public function userAccessDeviceFileGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAccessDeviceFileGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAccessDeviceFileGetRequest $request
     * @return UserAccessDeviceFileGetResponse
     * @throws ErrorResponseException
     */
    public function userAccessDeviceFileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAccessDeviceFileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAccessDeviceFileModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userAccessDeviceFileModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAccessDeviceFileModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAccessDeviceResetRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userAccessDeviceResetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAccessDeviceResetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAccessDeviceTagsGetRequest $request
     * @return UserAccessDeviceTagsGetResponse
     * @throws ErrorResponseException
     */
    public function userAccessDeviceTagsGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAccessDeviceTagsGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAddRequest17sp4 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userAddRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\UserAddRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAlternateUserIdAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userAlternateUserIdAddRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAlternateUserIdAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAlternateUserIdDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userAlternateUserIdDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAlternateUserIdDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAlternateUserIdGetListRequest $request
     * @return UserAlternateUserIdGetListResponse
     * @throws ErrorResponseException
     */
    public function userAlternateUserIdGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAlternateUserIdGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAlternateUserIdModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userAlternateUserIdModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAlternateUserIdModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAnnouncementFileAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userAnnouncementFileAddRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAnnouncementFileDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userAnnouncementFileDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAnnouncementFileGetAvailableListRequest $request
     * @return 
     * @throws ErrorResponseException
     */
    public function userAnnouncementFileGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAnnouncementFileGetListRequest $request
     * @return UserAnnouncementFileGetListResponse
     * @throws ErrorResponseException
     */
    public function userAnnouncementFileGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAnnouncementFileGetRequest $request
     * @return UserAnnouncementFileGetResponse
     * @throws ErrorResponseException
     */
    public function userAnnouncementFileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAnnouncementFileModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userAnnouncementFileModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAnnouncementRepositoryGetSettingsRequest $request
     * @return 
     * @throws ErrorResponseException
     */
    public function userAnnouncementRepositoryGetSettingsRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementRepositoryGetSettingsRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAssignedServicesGetListRequest $request
     * @return UserAssignedServicesGetListResponse
     * @throws ErrorResponseException
     */
    public function userAssignedServicesGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAssignedServicesGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallLogsClearRequest14sp4 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userCallLogsClearRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\UserCallLogsClearRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallPoliciesGetRequest19sp1 $request
     * @return UserCallPoliciesGetResponse19sp1
     * @throws ErrorResponseException
     */
    public function userCallPoliciesGetRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\UserCallPoliciesGetRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallPoliciesModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userCallPoliciesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallPoliciesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallProcessingGetPolicyRequest22 $request
     * @return UserCallProcessingGetPolicyResponse22
     * @throws ErrorResponseException
     */
    public function userCallProcessingGetPolicyRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingGetPolicyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallProcessingModifyPolicyRequest14sp7 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userCallProcessingModifyPolicyRequest14sp7(\CWM\BroadWorksConnector\Ocip\Models\UserCallProcessingModifyPolicyRequest14sp7 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCommunicationBarringAuthorizationCodeAddListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userCommunicationBarringAuthorizationCodeAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringAuthorizationCodeAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCommunicationBarringAuthorizationCodeDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userCommunicationBarringAuthorizationCodeDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringAuthorizationCodeDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCommunicationBarringAuthorizationCodeGetListRequest $request
     * @return UserCommunicationBarringAuthorizationCodeGetListResponse
     * @throws ErrorResponseException
     */
    public function userCommunicationBarringAuthorizationCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringAuthorizationCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCommunicationBarringGetRequest $request
     * @return UserCommunicationBarringGetResponse
     * @throws ErrorResponseException
     */
    public function userCommunicationBarringGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCommunicationBarringModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userCommunicationBarringModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserConsolidatedAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userConsolidatedAddRequest(\CWM\BroadWorksConnector\Ocip\Models\UserConsolidatedAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserConsolidatedDeleteRequest $request
     * @return 
     * @throws ErrorResponseException
     */
    public function userConsolidatedDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\UserConsolidatedDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\UserDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserDevicePoliciesGetRequest21 $request
     * @return UserDevicePoliciesGetResponse21
     * @throws ErrorResponseException
     */
    public function userDevicePoliciesGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserDevicePoliciesGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserDevicePoliciesModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userDevicePoliciesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserDevicePoliciesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserDnGetActivationListRequest $request
     * @return UserDnGetActivationListResponse
     * @throws ErrorResponseException
     */
    public function userDnGetActivationListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserDnGetActivationListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserEnterpriseCommonPhoneListGetPagedSortedListRequest $request
     * @return UserEnterpriseCommonPhoneListGetPagedSortedListResponse
     * @throws ErrorResponseException
     */
    public function userEnterpriseCommonPhoneListGetPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserEnterpriseCommonPhoneListGetPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserFeatureAccessCodeGetListRequest21 $request
     * @return UserFeatureAccessCodeGetListResponse20
     * @throws ErrorResponseException
     */
    public function userFeatureAccessCodeGetListRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserFeatureAccessCodeGetListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserFeatureAccessCodeModifyListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userFeatureAccessCodeModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserFeatureAccessCodeModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGetListInGroupRequest $request
     * @return UserGetListInGroupResponse
     * @throws ErrorResponseException
     */
    public function userGetListInGroupRequest(\CWM\BroadWorksConnector\Ocip\Models\UserGetListInGroupRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGetListInServiceProviderRequest $request
     * @return UserGetListInServiceProviderResponse
     * @throws ErrorResponseException
     */
    public function userGetListInServiceProviderRequest(\CWM\BroadWorksConnector\Ocip\Models\UserGetListInServiceProviderRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGetListInSystemRequest $request
     * @return UserGetListInSystemResponse
     * @throws ErrorResponseException
     */
    public function userGetListInSystemRequest(\CWM\BroadWorksConnector\Ocip\Models\UserGetListInSystemRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGetRegistrationListRequest $request
     * @return UserGetRegistrationListResponse
     * @throws ErrorResponseException
     */
    public function userGetRegistrationListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserGetRegistrationListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGetRequest22V3 $request
     * @return 
     * @throws ErrorResponseException
     */
    public function userGetRequest22V3(\CWM\BroadWorksConnector\Ocip\Models\UserGetRequest22V3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGetServiceInstanceListInServiceProviderRequest $request
     * @return UserGetServiceInstanceListInServiceProviderResponse
     * @throws ErrorResponseException
     */
    public function userGetServiceInstanceListInServiceProviderRequest(\CWM\BroadWorksConnector\Ocip\Models\UserGetServiceInstanceListInServiceProviderRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGetServiceInstanceListInSystemRequest $request
     * @return UserGetServiceInstanceListInSystemResponse
     * @throws ErrorResponseException
     */
    public function userGetServiceInstanceListInSystemRequest(\CWM\BroadWorksConnector\Ocip\Models\UserGetServiceInstanceListInSystemRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGroupCommonPhoneListGetPagedSortedListRequest $request
     * @return UserGroupCommonPhoneListGetPagedSortedListResponse
     * @throws ErrorResponseException
     */
    public function userGroupCommonPhoneListGetPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserGroupCommonPhoneListGetPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGroupCustomContactDirectoryGetPagedSortedListRequest $request
     * @return UserGroupCustomContactDirectoryGetPagedSortedListResponse
     * @throws ErrorResponseException
     */
    public function userGroupCustomContactDirectoryGetPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserGroupCustomContactDirectoryGetPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserLinePortGetListRequest $request
     * @return 
     * @throws ErrorResponseException
     */
    public function userLinePortGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserLinePortGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserModifyRequest17sp4 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userModifyRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserModifyUserIdRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userModifyUserIdRequest(\CWM\BroadWorksConnector\Ocip\Models\UserModifyUserIdRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserNetworkConferencingGetRequest $request
     * @return UserNetworkConferencingGetResponse
     * @throws ErrorResponseException
     */
    public function userNetworkConferencingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserNetworkConferencingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOCICallControlApplicationGetListRequest $request
     * @return UserOCICallControlApplicationGetListResponse
     * @throws ErrorResponseException
     */
    public function userOCICallControlApplicationGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOCICallControlApplicationGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOCICallControlApplicationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userOCICallControlApplicationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOCICallControlApplicationModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPasswordInfoGetRequest $request
     * @return UserPasswordInfoGetResponse
     * @throws ErrorResponseException
     */
    public function userPasswordInfoGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPasswordInfoGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalPhoneListAddListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userPersonalPhoneListAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalPhoneListAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalPhoneListDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userPersonalPhoneListDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalPhoneListDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalPhoneListGetListRequest $request
     * @return UserPersonalPhoneListGetListResponse
     * @throws ErrorResponseException
     */
    public function userPersonalPhoneListGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalPhoneListGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalPhoneListGetPagedSortedListRequest $request
     * @return UserPersonalPhoneListGetPagedSortedListResponse
     * @throws ErrorResponseException
     */
    public function userPersonalPhoneListGetPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalPhoneListGetPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalPhoneListModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userPersonalPhoneListModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalPhoneListModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPhoneDirectoryGetListRequest $request
     * @return UserPhoneDirectoryGetListResponse
     * @throws ErrorResponseException
     */
    public function userPhoneDirectoryGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPhoneDirectoryGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPhoneDirectoryGetPagedListRequest $request
     * @return UserPhoneDirectoryGetPagedListResponse
     * @throws ErrorResponseException
     */
    public function userPhoneDirectoryGetPagedListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPhoneDirectoryGetPagedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPhoneDirectoryGetPagedSortedListRequest $request
     * @return UserPhoneDirectoryGetPagedSortedListResponse
     * @throws ErrorResponseException
     */
    public function userPhoneDirectoryGetPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPhoneDirectoryGetPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPhoneDirectoryGetSearchedListRequest $request
     * @return UserPhoneDirectoryGetSearchedListResponse
     * @throws ErrorResponseException
     */
    public function userPhoneDirectoryGetSearchedListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPhoneDirectoryGetSearchedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPortalPasscodeGetInfoRequest $request
     * @return UserPortalPasscodeGetInfoResponse
     * @throws ErrorResponseException
     */
    public function userPortalPasscodeGetInfoRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPortalPasscodeGetInfoRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPortalPasscodeModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userPortalPasscodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPortalPasscodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPortalPasscodeRulesGetRequest $request
     * @return UserPortalPasscodeRulesGetResponse
     * @throws ErrorResponseException
     */
    public function userPortalPasscodeRulesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPortalPasscodeRulesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPrimaryEndpointAdvancedSettingGetRequest $request
     * @return UserPrimaryEndpointAdvancedSettingGetResponse
     * @throws ErrorResponseException
     */
    public function userPrimaryEndpointAdvancedSettingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPrimaryEndpointAdvancedSettingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPrimaryEndpointAdvancedSettingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userPrimaryEndpointAdvancedSettingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPrimaryEndpointAdvancedSettingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPushNotificationRegistrationDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userPushNotificationRegistrationDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPushNotificationRegistrationDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPushNotificationRegistrationGetListRequest $request
     * @return UserPushNotificationRegistrationGetListResponse
     * @throws ErrorResponseException
     */
    public function userPushNotificationRegistrationGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPushNotificationRegistrationGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserScheduleAddEventRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userScheduleAddEventRequest(\CWM\BroadWorksConnector\Ocip\Models\UserScheduleAddEventRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserScheduleAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userScheduleAddRequest(\CWM\BroadWorksConnector\Ocip\Models\UserScheduleAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserScheduleDeleteEventListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userScheduleDeleteEventListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserScheduleDeleteEventListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserScheduleDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userScheduleDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserScheduleDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserScheduleGetEventDetailListRequest $request
     * @return UserScheduleGetEventDetailListResponse
     * @throws ErrorResponseException
     */
    public function userScheduleGetEventDetailListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserScheduleGetEventDetailListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserScheduleGetEventListRequest $request
     * @return UserScheduleGetEventListResponse
     * @throws ErrorResponseException
     */
    public function userScheduleGetEventListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserScheduleGetEventListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserScheduleGetEventRequest $request
     * @return UserScheduleGetEventResponse
     * @throws ErrorResponseException
     */
    public function userScheduleGetEventRequest(\CWM\BroadWorksConnector\Ocip\Models\UserScheduleGetEventRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserScheduleGetListRequest17sp1 $request
     * @return UserScheduleGetListResponse17sp1
     * @throws ErrorResponseException
     */
    public function userScheduleGetListRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\UserScheduleGetListRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserScheduleModifyEventRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userScheduleModifyEventRequest(\CWM\BroadWorksConnector\Ocip\Models\UserScheduleModifyEventRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserScheduleModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userScheduleModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserScheduleModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserServiceAssignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userServiceAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserServiceAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserServiceGetAssignmentListRequest $request
     * @return UserServiceGetAssignmentListResponse
     * @throws ErrorResponseException
     */
    public function userServiceGetAssignmentListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserServiceGetAssignmentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserServiceIsAssignedRequest $request
     * @return 
     * @throws ErrorResponseException
     */
    public function userServiceIsAssignedRequest(\CWM\BroadWorksConnector\Ocip\Models\UserServiceIsAssignedRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserServiceUnassignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userServiceUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserServiceUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserShInterfaceGetPublicIdDataRequest21sp1 $request
     * @return UserShInterfaceGetPublicIdDataResponse21sp1
     * @throws ErrorResponseException
     */
    public function userShInterfaceGetPublicIdDataRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetPublicIdDataRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserShInterfaceGetUserIdDataRequest21sp1 $request
     * @return UserShInterfaceGetUserIdDataResponse21sp1
     * @throws ErrorResponseException
     */
    public function userShInterfaceGetUserIdDataRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceGetUserIdDataRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserShInterfaceModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userShInterfaceModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserShInterfaceModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserShInterfacePublicIdentityRefreshTaskStartRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userShInterfacePublicIdentityRefreshTaskStartRequest(\CWM\BroadWorksConnector\Ocip\Models\UserShInterfacePublicIdentityRefreshTaskStartRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserTerminatingAlternateTrunkIdentityGetRequest $request
     * @return UserTerminatingAlternateTrunkIdentityGetResponse
     * @throws ErrorResponseException
     */
    public function userTerminatingAlternateTrunkIdentityGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserTerminatingAlternateTrunkIdentityGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserTerminatingAlternateTrunkIdentityModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userTerminatingAlternateTrunkIdentityModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserTerminatingAlternateTrunkIdentityModifyRequest $request)
    {
        return $this->call($request);
    }


}
