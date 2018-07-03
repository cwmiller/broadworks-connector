<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceAddRequest14;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceAvailablePortGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceAvailablePortGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceCustomTagAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceCustomTagDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceCustomTagGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceCustomTagGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceCustomTagModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceFileGetListRequest14sp8;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceFileGetListResponse14sp8;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceFileGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceFileGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceFileModifyRequest14sp8;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse19;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetEnhancedConfigurationTypeListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetEnhancedConfigurationTypeListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetEnhancedConfigurationTypeRequest14;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetEnhancedConfigurationTypeResponse14;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetRequest18sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetResponse18sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetUserListRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetUserListResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceModifyRequest14;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceModifyUserRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceResetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceTagSetGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceTagSetGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceTagSetModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdministratorPasswordRulesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdministratorPasswordRulesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminModifyPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdminModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementRepositoryGetSettingsRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupApplicationServerSetGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupApplicationServerSetGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupApplicationServerSetModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerActivationRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerAddHomeZoneRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerDeleteHomeZoneListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerDeleteHomeZoneRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerGetDomainListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerGetDomainListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerGetHomeZoneListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerGetHomeZoneListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerGetHomeZoneRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerGetHomeZoneResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerModifyHomeZoneRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerSendCarrierFilesRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingGetPolicyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingGetPolicyResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingModifyPolicyRequest15sp2;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommonPhoneListAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommonPhoneListDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommonPhoneListGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommonPhoneListGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommonPhoneListModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeAddListRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeGetListRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeGetListResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringProfileGetAssignedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringProfileModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCPEConfigRebuildConfigFileRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCPEConfigRebuildDeviceConfigFileRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCPEConfigReorderDeviceLinePortsRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCPEConfigResetDeviceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCPEConfigResetDeviceTypeRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCPEConfigSetConfigFileRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryAddRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryGetAvailableUserListRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryGetAvailableUserListResponse17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryModifyRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentGetAvailableParentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentGetAvailableParentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentGetListRequest18;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentGetListResponse18;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceManagementEventGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceManagementEventGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceManagementEventGetListRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceManagementEventGetListResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceManagementInProgressAndPendingEventCancelRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeCustomTagAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeCustomTagDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeCustomTagGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeCustomTagGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeCustomTagModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeFileGetListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeFileGetListResponse21;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeFileGetRequest16sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeFileGetResponse16sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeFileModifyRequest14sp8;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeTagSetGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeTagSetGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeTagSetModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialableCallerIDCriteriaAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialableCallerIDCriteriaDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialableCallerIDCriteriaGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialableCallerIDCriteriaModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialableCallerIDGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialableCallerIDModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyAddAccessCodeRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyDeleteAccessCodeRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyGetAccessCodeListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyGetAccessCodeListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyGetAccessCodeRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyGetAccessCodeResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyModifyAccessCodeRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionGetRequest13mp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionGetResponse13;
use CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnActivateListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnDeactivateListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetActivationListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetActivationListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetAssignmentListRequest18;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetAssignmentListResponse18;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetAvailableRangesListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetAvailableRangeListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetDetailedAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetDetailedAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetSummaryListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnGetSummaryListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnListAssignDepartmentRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDnUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDomainAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDomainGetAssignedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDomainGetAssignedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDomainGetAssignedUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDomainGetAssignedUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDomainUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEndpointGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEndpointGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupExchangeIntegrationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupExchangeIntegrationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupExchangeIntegrationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupExistingUsersAssignUserServiceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupExistingUsersUnassignUserServiceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupExtensionLengthGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupExtensionLengthGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\GroupExtensionLengthModifyRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeModifyRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupFileRepositoryDeviceUserAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFileRepositoryDeviceUserDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFileRepositoryDeviceUserGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFileRepositoryDeviceUserGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFileRepositoryDeviceUserModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetDefaultRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetDefaultResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetListInServiceProviderRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetListInServiceProviderResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetListInSystemRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetListInSystemResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetUserServiceAssignedUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetUserServiceAssignedUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupIMRNAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupIMRNGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupIMRNGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupIMRNUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceAssignListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceAssignToAllUsersRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceGetAssignedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceGetAssignedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceGetAssignedUserListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceGetAssignedUserListResponse21;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceModifyDefaultRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceUnassignListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupNewUserTemplateAssignUserServiceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupNewUserTemplateUnassignUserServiceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOfficeZoneAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOfficeZoneGetAssignedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOfficeZoneGetAssignedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOfficeZoneGetAssignedUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOfficeZoneGetAssignedUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOfficeZoneUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupPasswordRulesGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupPasswordRulesGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupPasswordRulesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupPhoneDirectoryGetListRequest18;
use CWM\BroadWorksConnector\Ocip\Models\GroupPhoneDirectoryGetListResponse18;
use CWM\BroadWorksConnector\Ocip\Models\GroupPhoneDirectoryGetPagedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupPhoneDirectoryGetPagedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolicyModifyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupPortalPasscodeRulesGetRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupPortalPasscodeRulesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupPortalPasscodeRulesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointExternalSystemAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointExternalSystemGetAssignedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointExternalSystemGetAssignedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointExternalSystemGetAssignedRoutePointListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointExternalSystemGetAssignedRoutePointListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointExternalSystemUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutingProfileGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutingProfileGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutingProfileModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleAddEventRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleDeleteEventListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleGetEventDetailListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleGetEventDetailListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleGetEventListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleGetEventListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleGetEventRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleGetEventResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleGetListRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleGetListResponse17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleModifyEventRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupScheduleModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSecurityClassificationCustomizationGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSecurityClassificationCustomizationGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceGetAuthorizationListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceGetAuthorizationListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceGetAuthorizationRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceGetAuthorizationResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceGetAuthorizedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceGetAuthorizedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceIsAssignedRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceModifyAuthorizationListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupServicePhoneNumberLookupRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupServicePhoneNumberLookupResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGetAvailableDeviceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGetAvailableDeviceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupAddDeviceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupAddRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupDeleteDeviceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupGetRequest21sp1V2;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupShInterfaceGetUserListRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupShInterfaceGetUserListResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupUserCallForwardingSettingsGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupUserCallForwardingSettingsGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupUserCallingPlanSettingsGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupUserCallingPlanSettingsGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupUserCallWaitingSettingsGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupUserCallWaitingSettingsGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupUserHotelingGuestSettingsGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupUserHotelingGuestSettingsGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaGroup
{

    /**
     * @param GroupAccessDeviceAddRequest14 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAccessDeviceAddRequest14(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceAddRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceAvailablePortGetListRequest $request
     * @return GroupAccessDeviceAvailablePortGetListResponse|ErrorResponse
     */
    public function groupAccessDeviceAvailablePortGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceAvailablePortGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceCustomTagAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAccessDeviceCustomTagAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceCustomTagAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceCustomTagDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAccessDeviceCustomTagDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceCustomTagDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceCustomTagGetListRequest $request
     * @return GroupAccessDeviceCustomTagGetListResponse|ErrorResponse
     */
    public function groupAccessDeviceCustomTagGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceCustomTagGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceCustomTagModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAccessDeviceCustomTagModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceCustomTagModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAccessDeviceDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceFileGetListRequest14sp8 $request
     * @return GroupAccessDeviceFileGetListResponse14sp8|ErrorResponse
     */
    public function groupAccessDeviceFileGetListRequest14sp8(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceFileGetListRequest14sp8 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceFileGetRequest20 $request
     * @return GroupAccessDeviceFileGetResponse20|ErrorResponse
     */
    public function groupAccessDeviceFileGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceFileGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceFileModifyRequest14sp8 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAccessDeviceFileModifyRequest14sp8(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceFileModifyRequest14sp8 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceGetAvailableDetailListRequest19 $request
     * @return GroupAccessDeviceGetAvailableDetailListResponse19
     */
    public function groupAccessDeviceGetAvailableDetailListRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceGetEnhancedConfigurationTypeListRequest $request
     * @return GroupAccessDeviceGetEnhancedConfigurationTypeListResponse
     */
    public function groupAccessDeviceGetEnhancedConfigurationTypeListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetEnhancedConfigurationTypeListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceGetEnhancedConfigurationTypeRequest14 $request
     * @return GroupAccessDeviceGetEnhancedConfigurationTypeResponse14
     */
    public function groupAccessDeviceGetEnhancedConfigurationTypeRequest14(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetEnhancedConfigurationTypeRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceGetListRequest $request
     * @return GroupAccessDeviceGetListResponse|ErrorResponse
     */
    public function groupAccessDeviceGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceGetRequest18sp1 $request
     * @return GroupAccessDeviceGetResponse18sp1|ErrorResponse
     */
    public function groupAccessDeviceGetRequest18sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetRequest18sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceGetUserListRequest21sp1 $request
     * @return GroupAccessDeviceGetUserListResponse21sp1|ErrorResponse
     */
    public function groupAccessDeviceGetUserListRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetUserListRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceModifyRequest14 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAccessDeviceModifyRequest14(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceModifyRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceModifyUserRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAccessDeviceModifyUserRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceModifyUserRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceResetRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAccessDeviceResetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceResetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceTagSetGetRequest $request
     * @return GroupAccessDeviceTagSetGetResponse|ErrorResponse
     */
    public function groupAccessDeviceTagSetGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceTagSetGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccessDeviceTagSetModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAccessDeviceTagSetModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceTagSetModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdminAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAdminAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdminDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAdminDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdminGetListRequest $request
     * @return GroupAdminGetListResponse|ErrorResponse
     */
    public function groupAdminGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdminGetPolicyRequest20 $request
     * @return GroupAdminGetPolicyResponse20|ErrorResponse
     */
    public function groupAdminGetPolicyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetPolicyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdminGetRequest21sp1 $request
     * @return GroupAdminGetResponse21sp1|ErrorResponse
     */
    public function groupAdminGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdministratorPasswordRulesGetRequest $request
     * @return GroupAdministratorPasswordRulesGetResponse
     */
    public function groupAdministratorPasswordRulesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAdministratorPasswordRulesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdminModifyPolicyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAdminModifyPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminModifyPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdminModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAdminModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAnnouncementFileAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAnnouncementFileAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAnnouncementFileDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAnnouncementFileDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAnnouncementFileGetListRequest $request
     * @return GroupAnnouncementFileGetListResponse|ErrorResponse
     */
    public function groupAnnouncementFileGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAnnouncementFileGetRequest $request
     * @return GroupAnnouncementFileGetResponse|ErrorResponse
     */
    public function groupAnnouncementFileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAnnouncementFileModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAnnouncementFileModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAnnouncementRepositoryGetSettingsRequest $request
     * @return
     */
    public function groupAnnouncementRepositoryGetSettingsRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementRepositoryGetSettingsRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupApplicationServerSetGetRequest $request
     * @return GroupApplicationServerSetGetResponse|ErrorResponse
     */
    public function groupApplicationServerSetGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupApplicationServerSetGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupApplicationServerSetModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupApplicationServerSetModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupApplicationServerSetModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobileManagerActivationRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupBroadWorksMobileManagerActivationRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerActivationRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobileManagerAddHomeZoneRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupBroadWorksMobileManagerAddHomeZoneRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerAddHomeZoneRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobileManagerAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupBroadWorksMobileManagerAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobileManagerDeleteHomeZoneListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupBroadWorksMobileManagerDeleteHomeZoneListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerDeleteHomeZoneListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobileManagerDeleteHomeZoneRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupBroadWorksMobileManagerDeleteHomeZoneRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerDeleteHomeZoneRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobileManagerDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupBroadWorksMobileManagerDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobileManagerGetDomainListRequest $request
     * @return GroupBroadWorksMobileManagerGetDomainListResponse|ErrorResponse
     */
    public function groupBroadWorksMobileManagerGetDomainListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerGetDomainListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobileManagerGetHomeZoneListRequest $request
     * @return GroupBroadWorksMobileManagerGetHomeZoneListResponse|ErrorResponse
     */
    public function groupBroadWorksMobileManagerGetHomeZoneListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerGetHomeZoneListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobileManagerGetHomeZoneRequest $request
     * @return GroupBroadWorksMobileManagerGetHomeZoneResponse|ErrorResponse
     */
    public function groupBroadWorksMobileManagerGetHomeZoneRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerGetHomeZoneRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobileManagerGetRequest $request
     * @return GroupBroadWorksMobileManagerGetResponse|ErrorResponse
     */
    public function groupBroadWorksMobileManagerGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobileManagerModifyHomeZoneRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupBroadWorksMobileManagerModifyHomeZoneRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerModifyHomeZoneRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobileManagerModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupBroadWorksMobileManagerModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobileManagerSendCarrierFilesRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupBroadWorksMobileManagerSendCarrierFilesRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobileManagerSendCarrierFilesRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallProcessingGetPolicyRequest22 $request
     * @return GroupCallProcessingGetPolicyResponse22
     */
    public function groupCallProcessingGetPolicyRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingGetPolicyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallProcessingModifyPolicyRequest15sp2 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallProcessingModifyPolicyRequest15sp2(\CWM\BroadWorksConnector\Ocip\Models\GroupCallProcessingModifyPolicyRequest15sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommonPhoneListAddListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCommonPhoneListAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommonPhoneListAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommonPhoneListDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCommonPhoneListDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommonPhoneListDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommonPhoneListGetListRequest $request
     * @return GroupCommonPhoneListGetListResponse|ErrorResponse
     */
    public function groupCommonPhoneListGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommonPhoneListGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommonPhoneListModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCommonPhoneListModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommonPhoneListModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommunicationBarringAuthorizationCodeAddListRequest21sp1 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCommunicationBarringAuthorizationCodeAddListRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeAddListRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommunicationBarringAuthorizationCodeDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCommunicationBarringAuthorizationCodeDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommunicationBarringAuthorizationCodeGetListRequest21sp1 $request
     * @return GroupCommunicationBarringAuthorizationCodeGetListResponse21sp1|ErrorResponse
     */
    public function groupCommunicationBarringAuthorizationCodeGetListRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeGetListRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommunicationBarringAuthorizationCodeGetRequest $request
     * @return GroupCommunicationBarringAuthorizationCodeGetResponse|ErrorResponse
     */
    public function groupCommunicationBarringAuthorizationCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommunicationBarringAuthorizationCodeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCommunicationBarringAuthorizationCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommunicationBarringGetRequest $request
     * @return GroupCommunicationBarringGetResponse|ErrorResponse
     */
    public function groupCommunicationBarringGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommunicationBarringModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCommunicationBarringModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommunicationBarringProfileGetAssignedListRequest $request
     * @return
     */
    public function groupCommunicationBarringProfileGetAssignedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringProfileGetAssignedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCommunicationBarringProfileModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCommunicationBarringProfileModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringProfileModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCPEConfigRebuildConfigFileRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCPEConfigRebuildConfigFileRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCPEConfigRebuildConfigFileRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCPEConfigRebuildDeviceConfigFileRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCPEConfigRebuildDeviceConfigFileRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCPEConfigRebuildDeviceConfigFileRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCPEConfigReorderDeviceLinePortsRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCPEConfigReorderDeviceLinePortsRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCPEConfigReorderDeviceLinePortsRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCPEConfigResetDeviceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCPEConfigResetDeviceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCPEConfigResetDeviceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCPEConfigResetDeviceTypeRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCPEConfigResetDeviceTypeRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCPEConfigResetDeviceTypeRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCPEConfigSetConfigFileRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCPEConfigSetConfigFileRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCPEConfigSetConfigFileRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCustomContactDirectoryAddRequest17 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCustomContactDirectoryAddRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryAddRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCustomContactDirectoryDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCustomContactDirectoryDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCustomContactDirectoryGetAvailableUserListRequest17 $request
     * @return GroupCustomContactDirectoryGetAvailableUserListResponse17|ErrorResponse
     */
    public function groupCustomContactDirectoryGetAvailableUserListRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryGetAvailableUserListRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCustomContactDirectoryGetListRequest $request
     * @return GroupCustomContactDirectoryGetListResponse|ErrorResponse
     */
    public function groupCustomContactDirectoryGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCustomContactDirectoryGetRequest17 $request
     * @return GroupCustomContactDirectoryGetResponse17
     */
    public function groupCustomContactDirectoryGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCustomContactDirectoryModifyRequest17 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCustomContactDirectoryModifyRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomContactDirectoryModifyRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDepartmentAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDepartmentAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDepartmentAdminAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDepartmentAdminAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDepartmentAdminDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDepartmentAdminDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDepartmentAdminGetListRequest $request
     * @return GroupDepartmentAdminGetListResponse|ErrorResponse
     */
    public function groupDepartmentAdminGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDepartmentAdminGetRequest $request
     * @return GroupDepartmentAdminGetResponse|ErrorResponse
     */
    public function groupDepartmentAdminGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDepartmentAdminModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDepartmentAdminModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDepartmentDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDepartmentDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDepartmentGetAvailableParentListRequest $request
     * @return GroupDepartmentGetAvailableParentListResponse|ErrorResponse
     */
    public function groupDepartmentGetAvailableParentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentGetAvailableParentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDepartmentGetListRequest18 $request
     * @return GroupDepartmentGetListResponse18|ErrorResponse
     */
    public function groupDepartmentGetListRequest18(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentGetListRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDepartmentGetRequest $request
     * @return GroupDepartmentGetResponse|ErrorResponse
     */
    public function groupDepartmentGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDepartmentModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDepartmentModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeviceManagementEventGetListRequest $request
     * @return GroupDeviceManagementEventGetListResponse|ErrorResponse
     */
    public function groupDeviceManagementEventGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDeviceManagementEventGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeviceManagementEventGetListRequest22 $request
     * @return GroupDeviceManagementEventGetListResponse22|ErrorResponse
     */
    public function groupDeviceManagementEventGetListRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupDeviceManagementEventGetListRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest $request
     * @return GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupResponse|ErrorResponse
     */
    public function groupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeviceManagementInProgressAndPendingEventCancelRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDeviceManagementInProgressAndPendingEventCancelRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDeviceManagementInProgressAndPendingEventCancelRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeviceTypeCustomTagAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDeviceTypeCustomTagAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeCustomTagAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeviceTypeCustomTagDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDeviceTypeCustomTagDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeCustomTagDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeviceTypeCustomTagGetListRequest $request
     * @return GroupDeviceTypeCustomTagGetListResponse|ErrorResponse
     */
    public function groupDeviceTypeCustomTagGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeCustomTagGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeviceTypeCustomTagModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDeviceTypeCustomTagModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeCustomTagModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeviceTypeFileGetListRequest21 $request
     * @return GroupDeviceTypeFileGetListResponse21|ErrorResponse
     */
    public function groupDeviceTypeFileGetListRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeFileGetListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeviceTypeFileGetRequest16sp1 $request
     * @return GroupDeviceTypeFileGetResponse16sp1|ErrorResponse
     */
    public function groupDeviceTypeFileGetRequest16sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeFileGetRequest16sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeviceTypeFileModifyRequest14sp8 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDeviceTypeFileModifyRequest14sp8(\CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeFileModifyRequest14sp8 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeviceTypeTagSetGetRequest $request
     * @return GroupDeviceTypeTagSetGetResponse|ErrorResponse
     */
    public function groupDeviceTypeTagSetGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeTagSetGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDeviceTypeTagSetModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDeviceTypeTagSetModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDeviceTypeTagSetModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDialableCallerIDCriteriaAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDialableCallerIDCriteriaAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDialableCallerIDCriteriaAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDialableCallerIDCriteriaDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDialableCallerIDCriteriaDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDialableCallerIDCriteriaDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDialableCallerIDCriteriaGetRequest $request
     * @return
     */
    public function groupDialableCallerIDCriteriaGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDialableCallerIDCriteriaGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDialableCallerIDCriteriaModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDialableCallerIDCriteriaModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDialableCallerIDCriteriaModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDialableCallerIDGetRequest $request
     * @return
     */
    public function groupDialableCallerIDGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDialableCallerIDGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDialableCallerIDModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDialableCallerIDModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDialableCallerIDModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDialPlanPolicyAddAccessCodeRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDialPlanPolicyAddAccessCodeRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyAddAccessCodeRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDialPlanPolicyDeleteAccessCodeRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDialPlanPolicyDeleteAccessCodeRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyDeleteAccessCodeRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDialPlanPolicyGetAccessCodeListRequest $request
     * @return GroupDialPlanPolicyGetAccessCodeListResponse
     */
    public function groupDialPlanPolicyGetAccessCodeListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyGetAccessCodeListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDialPlanPolicyGetAccessCodeRequest $request
     * @return GroupDialPlanPolicyGetAccessCodeResponse|ErrorResponse
     */
    public function groupDialPlanPolicyGetAccessCodeRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyGetAccessCodeRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDialPlanPolicyGetRequest17 $request
     * @return GroupDialPlanPolicyGetResponse17|ErrorResponse
     */
    public function groupDialPlanPolicyGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDialPlanPolicyModifyAccessCodeRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDialPlanPolicyModifyAccessCodeRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyModifyAccessCodeRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDialPlanPolicyModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDialPlanPolicyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicyModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDigitCollectionGetRequest13mp4 $request
     * @return GroupDigitCollectionGetResponse13|ErrorResponse
     */
    public function groupDigitCollectionGetRequest13mp4(\CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionGetRequest13mp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDigitCollectionModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDigitCollectionModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDigitCollectionModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDnActivateListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDnActivateListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDnActivateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDnAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDnAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDnAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDnDeactivateListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDnDeactivateListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDnDeactivateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDnGetActivationListRequest $request
     * @return GroupDnGetActivationListResponse|ErrorResponse
     */
    public function groupDnGetActivationListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDnGetActivationListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDnGetAssignmentListRequest18 $request
     * @return GroupDnGetAssignmentListResponse18|ErrorResponse
     */
    public function groupDnGetAssignmentListRequest18(\CWM\BroadWorksConnector\Ocip\Models\GroupDnGetAssignmentListRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDnGetAvailableListRequest $request
     * @return GroupDnGetAvailableListResponse|ErrorResponse
     */
    public function groupDnGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDnGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDnGetAvailableRangesListRequest $request
     * @return GroupDnGetAvailableRangeListResponse|ErrorResponse
     */
    public function groupDnGetAvailableRangesListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDnGetAvailableRangesListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDnGetDetailedAvailableListRequest $request
     * @return GroupDnGetDetailedAvailableListResponse|ErrorResponse
     */
    public function groupDnGetDetailedAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDnGetDetailedAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDnGetListRequest $request
     * @return GroupDnGetListResponse|ErrorResponse
     */
    public function groupDnGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDnGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDnGetSummaryListRequest $request
     * @return GroupDnGetSummaryListResponse|ErrorResponse
     */
    public function groupDnGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDnGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDnListAssignDepartmentRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDnListAssignDepartmentRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDnListAssignDepartmentRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDnUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDnUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDnUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDomainAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDomainAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDomainAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDomainGetAssignedListRequest $request
     * @return GroupDomainGetAssignedListResponse|ErrorResponse
     */
    public function groupDomainGetAssignedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDomainGetAssignedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDomainGetAssignedUserListRequest $request
     * @return GroupDomainGetAssignedUserListResponse|ErrorResponse
     */
    public function groupDomainGetAssignedUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDomainGetAssignedUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDomainUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupDomainUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDomainUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEndpointGetListRequest $request
     * @return GroupEndpointGetListResponse|ErrorResponse
     */
    public function groupEndpointGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEndpointGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupExchangeIntegrationGetRequest $request
     * @return GroupExchangeIntegrationGetResponse|ErrorResponse
     */
    public function groupExchangeIntegrationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupExchangeIntegrationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupExchangeIntegrationModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupExchangeIntegrationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupExchangeIntegrationModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupExistingUsersAssignUserServiceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupExistingUsersAssignUserServiceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupExistingUsersAssignUserServiceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupExistingUsersUnassignUserServiceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupExistingUsersUnassignUserServiceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupExistingUsersUnassignUserServiceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupExtensionLengthGetRequest17 $request
     * @return GroupExtensionLengthGetResponse17|ErrorResponse
     */
    public function groupExtensionLengthGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupExtensionLengthGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupExtensionLengthModifyRequest17 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupExtensionLengthModifyRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupExtensionLengthModifyRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFeatureAccessCodeGetRequest21 $request
     * @return GroupFeatureAccessCodeGetResponse21
     */
    public function groupFeatureAccessCodeGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFeatureAccessCodeModifyRequest21 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupFeatureAccessCodeModifyRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeModifyRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFileRepositoryDeviceUserAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupFileRepositoryDeviceUserAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFileRepositoryDeviceUserAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFileRepositoryDeviceUserDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupFileRepositoryDeviceUserDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFileRepositoryDeviceUserDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFileRepositoryDeviceUserGetListRequest $request
     * @return GroupFileRepositoryDeviceUserGetListResponse|ErrorResponse
     */
    public function groupFileRepositoryDeviceUserGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFileRepositoryDeviceUserGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFileRepositoryDeviceUserModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupFileRepositoryDeviceUserModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFileRepositoryDeviceUserModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGetDefaultRequest $request
     * @return GroupGetDefaultResponse|ErrorResponse
     */
    public function groupGetDefaultRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGetDefaultRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGetListInServiceProviderRequest $request
     * @return GroupGetListInServiceProviderResponse|ErrorResponse
     */
    public function groupGetListInServiceProviderRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGetListInServiceProviderRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGetListInSystemRequest $request
     * @return GroupGetListInSystemResponse|ErrorResponse
     */
    public function groupGetListInSystemRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGetListInSystemRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGetRequest22V2 $request
     * @return GroupGetResponse22|ErrorResponse
     */
    public function groupGetRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\GroupGetRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGetUserServiceAssignedUserListRequest $request
     * @return GroupGetUserServiceAssignedUserListResponse|ErrorResponse
     */
    public function groupGetUserServiceAssignedUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGetUserServiceAssignedUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupIMRNAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupIMRNAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupIMRNAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupIMRNGetListRequest $request
     * @return GroupIMRNGetListResponse|ErrorResponse
     */
    public function groupIMRNGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupIMRNGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupIMRNUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupIMRNUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupIMRNUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNetworkClassOfServiceAssignListRequest21 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupNetworkClassOfServiceAssignListRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceAssignListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNetworkClassOfServiceAssignToAllUsersRequest $request
     * @return SuccessResponse
     */
    public function groupNetworkClassOfServiceAssignToAllUsersRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceAssignToAllUsersRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNetworkClassOfServiceGetAssignedListRequest $request
     * @return GroupNetworkClassOfServiceGetAssignedListResponse
     */
    public function groupNetworkClassOfServiceGetAssignedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceGetAssignedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNetworkClassOfServiceGetAssignedUserListRequest21 $request
     * @return GroupNetworkClassOfServiceGetAssignedUserListResponse21
     */
    public function groupNetworkClassOfServiceGetAssignedUserListRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceGetAssignedUserListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNetworkClassOfServiceModifyDefaultRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupNetworkClassOfServiceModifyDefaultRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceModifyDefaultRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNetworkClassOfServiceUnassignListRequest21 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupNetworkClassOfServiceUnassignListRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupNetworkClassOfServiceUnassignListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNewUserTemplateAssignUserServiceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupNewUserTemplateAssignUserServiceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupNewUserTemplateAssignUserServiceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupNewUserTemplateUnassignUserServiceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupNewUserTemplateUnassignUserServiceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupNewUserTemplateUnassignUserServiceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOfficeZoneAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOfficeZoneAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOfficeZoneAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOfficeZoneGetAssignedListRequest $request
     * @return GroupOfficeZoneGetAssignedListResponse
     */
    public function groupOfficeZoneGetAssignedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOfficeZoneGetAssignedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOfficeZoneGetAssignedUserListRequest $request
     * @return GroupOfficeZoneGetAssignedUserListResponse
     */
    public function groupOfficeZoneGetAssignedUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOfficeZoneGetAssignedUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOfficeZoneUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOfficeZoneUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOfficeZoneUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPasswordRulesGetRequest22 $request
     * @return GroupPasswordRulesGetResponse22|ErrorResponse
     */
    public function groupPasswordRulesGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupPasswordRulesGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPasswordRulesModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupPasswordRulesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPasswordRulesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPhoneDirectoryGetListRequest18 $request
     * @return GroupPhoneDirectoryGetListResponse18
     */
    public function groupPhoneDirectoryGetListRequest18(\CWM\BroadWorksConnector\Ocip\Models\GroupPhoneDirectoryGetListRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPhoneDirectoryGetPagedListRequest $request
     * @return GroupPhoneDirectoryGetPagedListResponse
     */
    public function groupPhoneDirectoryGetPagedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPhoneDirectoryGetPagedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPolicyGetRequest22 $request
     * @return GroupPolicyGetResponse22|ErrorResponse
     */
    public function groupPolicyGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupPolicyGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPolicyModifyRequest22 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupPolicyModifyRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupPolicyModifyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPortalPasscodeRulesGetRequest19 $request
     * @return GroupPortalPasscodeRulesGetResponse|ErrorResponse
     */
    public function groupPortalPasscodeRulesGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupPortalPasscodeRulesGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPortalPasscodeRulesModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupPortalPasscodeRulesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPortalPasscodeRulesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointExternalSystemAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointExternalSystemAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointExternalSystemAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointExternalSystemGetAssignedListRequest $request
     * @return GroupRoutePointExternalSystemGetAssignedListResponse|ErrorResponse
     */
    public function groupRoutePointExternalSystemGetAssignedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointExternalSystemGetAssignedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointExternalSystemGetAssignedRoutePointListRequest $request
     * @return GroupRoutePointExternalSystemGetAssignedRoutePointListResponse|ErrorResponse
     */
    public function groupRoutePointExternalSystemGetAssignedRoutePointListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointExternalSystemGetAssignedRoutePointListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointExternalSystemUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointExternalSystemUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointExternalSystemUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutingProfileGetRequest $request
     * @return GroupRoutingProfileGetResponse|ErrorResponse
     */
    public function groupRoutingProfileGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutingProfileGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutingProfileModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutingProfileModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutingProfileModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupScheduleAddEventRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupScheduleAddEventRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupScheduleAddEventRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupScheduleAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupScheduleAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupScheduleAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupScheduleDeleteEventListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupScheduleDeleteEventListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupScheduleDeleteEventListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupScheduleDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupScheduleDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupScheduleDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupScheduleGetEventDetailListRequest $request
     * @return GroupScheduleGetEventDetailListResponse|ErrorResponse
     */
    public function groupScheduleGetEventDetailListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupScheduleGetEventDetailListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupScheduleGetEventListRequest $request
     * @return GroupScheduleGetEventListResponse|ErrorResponse
     */
    public function groupScheduleGetEventListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupScheduleGetEventListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupScheduleGetEventRequest $request
     * @return GroupScheduleGetEventResponse|ErrorResponse
     */
    public function groupScheduleGetEventRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupScheduleGetEventRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupScheduleGetListRequest17sp1 $request
     * @return GroupScheduleGetListResponse17sp1|ErrorResponse
     */
    public function groupScheduleGetListRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupScheduleGetListRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupScheduleModifyEventRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupScheduleModifyEventRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupScheduleModifyEventRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupScheduleModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupScheduleModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupScheduleModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSecurityClassificationCustomizationGetAvailableListRequest $request
     * @return GroupSecurityClassificationCustomizationGetAvailableListResponse|ErrorResponse
     */
    public function groupSecurityClassificationCustomizationGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSecurityClassificationCustomizationGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupServiceAssignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupServiceAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupServiceAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupServiceGetAuthorizationListRequest $request
     * @return GroupServiceGetAuthorizationListResponse|ErrorResponse
     */
    public function groupServiceGetAuthorizationListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupServiceGetAuthorizationListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupServiceGetAuthorizationRequest $request
     * @return GroupServiceGetAuthorizationResponse|ErrorResponse
     */
    public function groupServiceGetAuthorizationRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupServiceGetAuthorizationRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupServiceGetAuthorizedListRequest $request
     * @return GroupServiceGetAuthorizedListResponse|ErrorResponse
     */
    public function groupServiceGetAuthorizedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupServiceGetAuthorizedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupServiceIsAssignedRequest $request
     * @return
     */
    public function groupServiceIsAssignedRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupServiceIsAssignedRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupServiceModifyAuthorizationListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupServiceModifyAuthorizationListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupServiceModifyAuthorizationListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupServicePhoneNumberLookupRequest $request
     * @return GroupServicePhoneNumberLookupResponse
     */
    public function groupServicePhoneNumberLookupRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupServicePhoneNumberLookupRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupServiceUnassignListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupServiceUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupServiceUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSessionAdmissionControlGetAvailableDeviceListRequest $request
     * @return GroupSessionAdmissionControlGetAvailableDeviceListResponse|ErrorResponse
     */
    public function groupSessionAdmissionControlGetAvailableDeviceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGetAvailableDeviceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSessionAdmissionControlGetRequest $request
     * @return GroupSessionAdmissionControlGetResponse|ErrorResponse
     */
    public function groupSessionAdmissionControlGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSessionAdmissionControlGroupAddDeviceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupSessionAdmissionControlGroupAddDeviceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupAddDeviceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSessionAdmissionControlGroupAddRequest19sp1 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupSessionAdmissionControlGroupAddRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupAddRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSessionAdmissionControlGroupDeleteDeviceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupSessionAdmissionControlGroupDeleteDeviceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupDeleteDeviceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSessionAdmissionControlGroupDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupSessionAdmissionControlGroupDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSessionAdmissionControlGroupGetListRequest $request
     * @return GroupSessionAdmissionControlGroupGetListResponse|ErrorResponse
     */
    public function groupSessionAdmissionControlGroupGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSessionAdmissionControlGroupGetRequest21sp1V2 $request
     * @return GroupSessionAdmissionControlGroupGetResponse21sp1|ErrorResponse
     */
    public function groupSessionAdmissionControlGroupGetRequest21sp1V2(\CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupGetRequest21sp1V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSessionAdmissionControlGroupModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupSessionAdmissionControlGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSessionAdmissionControlModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupSessionAdmissionControlModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSessionAdmissionControlModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupShInterfaceGetUserListRequest21sp1 $request
     * @return GroupShInterfaceGetUserListResponse21sp1|ErrorResponse
     */
    public function groupShInterfaceGetUserListRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupShInterfaceGetUserListRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupGetAvailableDetailListRequest $request
     * @return GroupTrunkGroupGetAvailableDetailListResponse
     */
    public function groupTrunkGroupGetAvailableDetailListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableDetailListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupUserCallForwardingSettingsGetListRequest $request
     * @return GroupUserCallForwardingSettingsGetListResponse|ErrorResponse
     */
    public function groupUserCallForwardingSettingsGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupUserCallForwardingSettingsGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupUserCallingPlanSettingsGetListRequest $request
     * @return GroupUserCallingPlanSettingsGetListResponse|ErrorResponse
     */
    public function groupUserCallingPlanSettingsGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupUserCallingPlanSettingsGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupUserCallWaitingSettingsGetListRequest $request
     * @return GroupUserCallWaitingSettingsGetListResponse|ErrorResponse
     */
    public function groupUserCallWaitingSettingsGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupUserCallWaitingSettingsGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupUserHotelingGuestSettingsGetListRequest $request
     * @return GroupUserHotelingGuestSettingsGetListResponse|ErrorResponse
     */
    public function groupUserHotelingGuestSettingsGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupUserHotelingGuestSettingsGetListRequest $request)
    {
        return $this->call($request);
    }


}

