<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommonPhoneListAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommonPhoneListDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommonPhoneListGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommonPhoneListGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommonPhoneListModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentGetAvailableParentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentGetAvailableParentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterprisePhoneDirectoryGetPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterprisePhoneDirectoryGetPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSecurityClassificationCustomizationGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSecurityClassificationCustomizationGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupAddDeviceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupAddRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupDeleteDeviceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupGetRequest21sp1V2;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupGetResponse21sp1V2;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserCallForwardingSettingsGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserCallForwardingSettingsGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserCallingPlanSettingsGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserCallingPlanSettingsGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserCallWaitingSettingsGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserCallWaitingSettingsGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserHotelingGuestSettingsGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserHotelingGuestSettingsGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNAddPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDeletePolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetDefaultRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetDefaultResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetPolicyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetPolicyListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetPolicyResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetRequest14sp3;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetResponse14sp3;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNModifyPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaEnterprise
{
    /**
     * @param EnterpriseCommonPhoneListAddListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCommonPhoneListAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommonPhoneListAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommonPhoneListDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCommonPhoneListDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommonPhoneListDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommonPhoneListGetListRequest $request
     * @return EnterpriseCommonPhoneListGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCommonPhoneListGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommonPhoneListGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommonPhoneListModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCommonPhoneListModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommonPhoneListModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommunicationBarringAuthorizationCodeAddListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCommunicationBarringAuthorizationCodeAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommunicationBarringAuthorizationCodeDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCommunicationBarringAuthorizationCodeDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommunicationBarringAuthorizationCodeGetListRequest $request
     * @return EnterpriseCommunicationBarringAuthorizationCodeGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCommunicationBarringAuthorizationCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommunicationBarringAuthorizationCodeGetRequest $request
     * @return EnterpriseCommunicationBarringAuthorizationCodeGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCommunicationBarringAuthorizationCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommunicationBarringAuthorizationCodeModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCommunicationBarringAuthorizationCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseDepartmentAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseDepartmentAddRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseDepartmentDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseDepartmentDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseDepartmentGetAvailableParentListRequest $request
     * @return EnterpriseDepartmentGetAvailableParentListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseDepartmentGetAvailableParentListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentGetAvailableParentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseDepartmentGetListRequest $request
     * @return EnterpriseDepartmentGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseDepartmentGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseDepartmentModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseDepartmentModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterprisePhoneDirectoryGetPagedSortedListRequest $request
     * @return EnterprisePhoneDirectoryGetPagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterprisePhoneDirectoryGetPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterprisePhoneDirectoryGetPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSecurityClassificationCustomizationGetAvailableListRequest $request
     * @return EnterpriseSecurityClassificationCustomizationGetAvailableListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseSecurityClassificationCustomizationGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSecurityClassificationCustomizationGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest $request
     * @return EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseSessionAdmissionControlGetAvailableDeviceListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupAddDeviceListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseSessionAdmissionControlGroupAddDeviceListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupAddDeviceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupAddRequest19sp1 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseSessionAdmissionControlGroupAddRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupAddRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupDeleteDeviceListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseSessionAdmissionControlGroupDeleteDeviceListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupDeleteDeviceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseSessionAdmissionControlGroupDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupGetListRequest $request
     * @return EnterpriseSessionAdmissionControlGroupGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseSessionAdmissionControlGroupGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupGetRequest21sp1V2 $request
     * @return EnterpriseSessionAdmissionControlGroupGetResponse21sp1V2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseSessionAdmissionControlGroupGetRequest21sp1V2(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupGetRequest21sp1V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseSessionAdmissionControlGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseUserCallForwardingSettingsGetListRequest $request
     * @return EnterpriseUserCallForwardingSettingsGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseUserCallForwardingSettingsGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserCallForwardingSettingsGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseUserCallingPlanSettingsGetListRequest $request
     * @return EnterpriseUserCallingPlanSettingsGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseUserCallingPlanSettingsGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserCallingPlanSettingsGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseUserCallWaitingSettingsGetListRequest $request
     * @return EnterpriseUserCallWaitingSettingsGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseUserCallWaitingSettingsGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserCallWaitingSettingsGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseUserHotelingGuestSettingsGetListRequest $request
     * @return EnterpriseUserHotelingGuestSettingsGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseUserHotelingGuestSettingsGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserHotelingGuestSettingsGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNAddPolicyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseVoiceVPNAddPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNAddPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNDeletePolicyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseVoiceVPNDeletePolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDeletePolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNGetDefaultRequest $request
     * @return EnterpriseVoiceVPNGetDefaultResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseVoiceVPNGetDefaultRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetDefaultRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNGetPolicyListRequest $request
     * @return EnterpriseVoiceVPNGetPolicyListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseVoiceVPNGetPolicyListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetPolicyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNGetPolicyRequest $request
     * @return EnterpriseVoiceVPNGetPolicyResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseVoiceVPNGetPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNGetRequest14sp3 $request
     * @return EnterpriseVoiceVPNGetResponse14sp3
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseVoiceVPNGetRequest14sp3(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetRequest14sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNModifyPolicyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseVoiceVPNModifyPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNModifyPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseVoiceVPNModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNModifyRequest $request)
    {
        return $this->call($request);
    }
}

