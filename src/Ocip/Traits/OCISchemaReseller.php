<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ResellerAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAlternateIdAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAlternateIdDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAlternateIdGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAlternateIdGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAlternateIdModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallAdmissionControlPoliciesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallAdmissionControlPoliciesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallAdmissionControlPoliciesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallPoliciesGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallPoliciesGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallPoliciesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerDeviceActivationPolicyGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerDeviceActivationPolicyGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerDeviceActivationPolicyModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerEmergencyCallNotificationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerEmergencyCallNotificationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerEmergencyCallNotificationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerGetRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\ResellerGetResponse22V2;
use CWM\BroadWorksConnector\Ocip\Models\ResellerMailParametersGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerMailParametersGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerMailParametersModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerNetworkClassOfServiceAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerNetworkClassOfServiceGetAssignedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerNetworkClassOfServiceGetAssignedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerNetworkClassOfServiceGetAssignedServiceProviderListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerNetworkClassOfServiceGetAssignedServiceProviderListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerNetworkClassOfServiceModifyDefaultRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerNetworkClassOfServiceUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerServiceAuthorizationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerServiceAuthorizationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerServiceAuthorizationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerStirShakenGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerStirShakenGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerStirShakenModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerStirShakenModifyResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerXsiPolicyProfileAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerXsiPolicyProfileGetAssignedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileGetAssignedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerXsiPolicyProfileGetAssignedServiceProviderListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerXsiPolichProfileGetAssignedServiceProviderListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerXsiPolicyProfileModifyDefaultRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerXsiPolicyProfileUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaReseller
{

    /**
     * @param ResellerAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerAdminAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminAlternateIdAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerAdminAlternateIdAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAlternateIdAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminAlternateIdDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerAdminAlternateIdDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAlternateIdDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminAlternateIdGetListRequest $request
     * @return ResellerAdminAlternateIdGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerAdminAlternateIdGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAlternateIdGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminAlternateIdModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerAdminAlternateIdModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAlternateIdModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerAdminDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminGetListRequest $request
     * @return ResellerAdminGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerAdminGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminGetRequest22 $request
     * @return ResellerAdminGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerAdminGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerAdminModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerCallAdmissionControlPoliciesGetRequest $request
     * @return ResellerCallAdmissionControlPoliciesGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerCallAdmissionControlPoliciesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerCallAdmissionControlPoliciesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerCallAdmissionControlPoliciesModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerCallAdmissionControlPoliciesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerCallAdmissionControlPoliciesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerCallPoliciesGetRequest22 $request
     * @return ResellerCallPoliciesGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerCallPoliciesGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\ResellerCallPoliciesGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerCallPoliciesModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerCallPoliciesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerCallPoliciesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerDeviceActivationPolicyGetRequest $request
     * @return ResellerDeviceActivationPolicyGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerDeviceActivationPolicyGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerDeviceActivationPolicyGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerDeviceActivationPolicyModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerDeviceActivationPolicyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerDeviceActivationPolicyModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerEmergencyCallNotificationGetRequest $request
     * @return ResellerEmergencyCallNotificationGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerEmergencyCallNotificationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerEmergencyCallNotificationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerEmergencyCallNotificationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerEmergencyCallNotificationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerEmergencyCallNotificationModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerGetListRequest $request
     * @return ResellerGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerGetRequest22V2 $request
     * @return ResellerGetResponse22V2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerGetRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\ResellerGetRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerMailParametersGetRequest $request
     * @return ResellerMailParametersGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerMailParametersGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerMailParametersGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerMailParametersModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerMailParametersModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerMailParametersModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerNetworkClassOfServiceAssignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerNetworkClassOfServiceAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerNetworkClassOfServiceAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerNetworkClassOfServiceGetAssignedListRequest $request
     * @return ResellerNetworkClassOfServiceGetAssignedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerNetworkClassOfServiceGetAssignedListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerNetworkClassOfServiceGetAssignedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerNetworkClassOfServiceGetAssignedServiceProviderListRequest $request
     * @return ResellerNetworkClassOfServiceGetAssignedServiceProviderListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerNetworkClassOfServiceGetAssignedServiceProviderListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerNetworkClassOfServiceGetAssignedServiceProviderListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerNetworkClassOfServiceModifyDefaultRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerNetworkClassOfServiceModifyDefaultRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerNetworkClassOfServiceModifyDefaultRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerNetworkClassOfServiceUnassignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerNetworkClassOfServiceUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerNetworkClassOfServiceUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerServiceAuthorizationGetRequest $request
     * @return ResellerServiceAuthorizationGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerServiceAuthorizationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerServiceAuthorizationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerServiceAuthorizationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerServiceAuthorizationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerServiceAuthorizationModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerStirShakenGetRequest $request
     * @return ResellerStirShakenGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerStirShakenGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerStirShakenGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerStirShakenModifyRequest $request
     * @return ResellerStirShakenModifyResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerStirShakenModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerStirShakenModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerXsiPolicyProfileAssignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerXsiPolicyProfileAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerXsiPolicyProfileAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerXsiPolicyProfileGetAssignedListRequest $request
     * @return XsiPolicyProfileGetAssignedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerXsiPolicyProfileGetAssignedListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerXsiPolicyProfileGetAssignedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerXsiPolicyProfileGetAssignedServiceProviderListRequest $request
     * @return ResellerXsiPolichProfileGetAssignedServiceProviderListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerXsiPolicyProfileGetAssignedServiceProviderListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerXsiPolicyProfileGetAssignedServiceProviderListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerXsiPolicyProfileModifyDefaultRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerXsiPolicyProfileModifyDefaultRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerXsiPolicyProfileModifyDefaultRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerXsiPolicyProfileUnassignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerXsiPolicyProfileUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerXsiPolicyProfileUnassignListRequest $request)
    {
        return $this->call($request);
    }


}

