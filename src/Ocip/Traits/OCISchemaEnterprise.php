<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerActivationRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerAddHomeZoneRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerDeleteHomeZoneListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerDeleteHomeZoneRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerGetDomainListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerGetDomainListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerGetHomeZoneListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerGetHomeZoneListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerGetHomeZoneRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerGetHomeZoneResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerModifyHomeZoneRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest;
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
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentGetAvailableParentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentGetAvailableParentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterprisePhoneDirectoryGetListRequest18;
use CWM\BroadWorksConnector\Ocip\Models\EnterprisePhoneDirectoryGetListResponse18;
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
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupGetResponse21sp1;
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
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaEnterprise
{

    /**
     * @param EnterpriseBroadWorksMobileManagerActivationRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseBroadWorksMobileManagerActivationRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerActivationRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobileManagerAddHomeZoneRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseBroadWorksMobileManagerAddHomeZoneRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerAddHomeZoneRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobileManagerAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseBroadWorksMobileManagerAddRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobileManagerDeleteHomeZoneListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseBroadWorksMobileManagerDeleteHomeZoneListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerDeleteHomeZoneListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobileManagerDeleteHomeZoneRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseBroadWorksMobileManagerDeleteHomeZoneRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerDeleteHomeZoneRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobileManagerDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseBroadWorksMobileManagerDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobileManagerGetDomainListRequest $request
     * @return EnterpriseBroadWorksMobileManagerGetDomainListResponse|ErrorResponse
     */
    public function enterpriseBroadWorksMobileManagerGetDomainListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerGetDomainListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobileManagerGetHomeZoneListRequest $request
     * @return EnterpriseBroadWorksMobileManagerGetHomeZoneListResponse|ErrorResponse
     */
    public function enterpriseBroadWorksMobileManagerGetHomeZoneListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerGetHomeZoneListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobileManagerGetHomeZoneRequest $request
     * @return EnterpriseBroadWorksMobileManagerGetHomeZoneResponse|ErrorResponse
     */
    public function enterpriseBroadWorksMobileManagerGetHomeZoneRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerGetHomeZoneRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobileManagerGetRequest $request
     * @return EnterpriseBroadWorksMobileManagerGetResponse|ErrorResponse
     */
    public function enterpriseBroadWorksMobileManagerGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobileManagerModifyHomeZoneRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseBroadWorksMobileManagerModifyHomeZoneRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerModifyHomeZoneRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobileManagerModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseBroadWorksMobileManagerModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseBroadWorksMobileManagerSendCarrierFilesRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommonPhoneListAddListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCommonPhoneListAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommonPhoneListAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommonPhoneListDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCommonPhoneListDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommonPhoneListDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommonPhoneListGetListRequest $request
     * @return EnterpriseCommonPhoneListGetListResponse|ErrorResponse
     */
    public function enterpriseCommonPhoneListGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommonPhoneListGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommonPhoneListModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCommonPhoneListModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommonPhoneListModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommunicationBarringAuthorizationCodeAddListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCommunicationBarringAuthorizationCodeAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommunicationBarringAuthorizationCodeDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCommunicationBarringAuthorizationCodeDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommunicationBarringAuthorizationCodeGetListRequest $request
     * @return EnterpriseCommunicationBarringAuthorizationCodeGetListResponse|ErrorResponse
     */
    public function enterpriseCommunicationBarringAuthorizationCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommunicationBarringAuthorizationCodeGetRequest $request
     * @return
     */
    public function enterpriseCommunicationBarringAuthorizationCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCommunicationBarringAuthorizationCodeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseCommunicationBarringAuthorizationCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCommunicationBarringAuthorizationCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseDepartmentAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseDepartmentAddRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseDepartmentDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseDepartmentDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseDepartmentGetAvailableParentListRequest $request
     * @return EnterpriseDepartmentGetAvailableParentListResponse|ErrorResponse
     */
    public function enterpriseDepartmentGetAvailableParentListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentGetAvailableParentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseDepartmentGetListRequest $request
     * @return EnterpriseDepartmentGetListResponse|ErrorResponse
     */
    public function enterpriseDepartmentGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseDepartmentModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseDepartmentModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterprisePhoneDirectoryGetListRequest18 $request
     * @return EnterprisePhoneDirectoryGetListResponse18|ErrorResponse
     */
    public function enterprisePhoneDirectoryGetListRequest18(\CWM\BroadWorksConnector\Ocip\Models\EnterprisePhoneDirectoryGetListRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSecurityClassificationCustomizationGetAvailableListRequest $request
     * @return EnterpriseSecurityClassificationCustomizationGetAvailableListResponse|ErrorResponse
     */
    public function enterpriseSecurityClassificationCustomizationGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSecurityClassificationCustomizationGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest $request
     * @return EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse|ErrorResponse
     */
    public function enterpriseSessionAdmissionControlGetAvailableDeviceListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupAddDeviceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseSessionAdmissionControlGroupAddDeviceListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupAddDeviceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupAddRequest19sp1 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseSessionAdmissionControlGroupAddRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupAddRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupDeleteDeviceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseSessionAdmissionControlGroupDeleteDeviceListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupDeleteDeviceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseSessionAdmissionControlGroupDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupGetListRequest $request
     * @return EnterpriseSessionAdmissionControlGroupGetListResponse|ErrorResponse
     */
    public function enterpriseSessionAdmissionControlGroupGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupGetRequest21sp1V2 $request
     * @return EnterpriseSessionAdmissionControlGroupGetResponse21sp1|ErrorResponse
     */
    public function enterpriseSessionAdmissionControlGroupGetRequest21sp1V2(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupGetRequest21sp1V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseSessionAdmissionControlGroupModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseSessionAdmissionControlGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseSessionAdmissionControlGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseUserCallForwardingSettingsGetListRequest $request
     * @return EnterpriseUserCallForwardingSettingsGetListResponse|ErrorResponse
     */
    public function enterpriseUserCallForwardingSettingsGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserCallForwardingSettingsGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseUserCallingPlanSettingsGetListRequest $request
     * @return EnterpriseUserCallingPlanSettingsGetListResponse|ErrorResponse
     */
    public function enterpriseUserCallingPlanSettingsGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserCallingPlanSettingsGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseUserCallWaitingSettingsGetListRequest $request
     * @return EnterpriseUserCallWaitingSettingsGetListResponse|ErrorResponse
     */
    public function enterpriseUserCallWaitingSettingsGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserCallWaitingSettingsGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseUserHotelingGuestSettingsGetListRequest $request
     * @return EnterpriseUserHotelingGuestSettingsGetListResponse|ErrorResponse
     */
    public function enterpriseUserHotelingGuestSettingsGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseUserHotelingGuestSettingsGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNAddPolicyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseVoiceVPNAddPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNAddPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNDeletePolicyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseVoiceVPNDeletePolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNDeletePolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNGetDefaultRequest $request
     * @return EnterpriseVoiceVPNGetDefaultResponse|ErrorResponse
     */
    public function enterpriseVoiceVPNGetDefaultRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetDefaultRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNGetPolicyListRequest $request
     * @return EnterpriseVoiceVPNGetPolicyListResponse|ErrorResponse
     */
    public function enterpriseVoiceVPNGetPolicyListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetPolicyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNGetPolicyRequest $request
     * @return EnterpriseVoiceVPNGetPolicyResponse|ErrorResponse
     */
    public function enterpriseVoiceVPNGetPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNGetRequest14sp3 $request
     * @return EnterpriseVoiceVPNGetResponse14sp3|ErrorResponse
     */
    public function enterpriseVoiceVPNGetRequest14sp3(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNGetRequest14sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNModifyPolicyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseVoiceVPNModifyPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNModifyPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseVoiceVPNModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseVoiceVPNModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVoiceVPNModifyRequest $request)
    {
        return $this->call($request);
    }


}

