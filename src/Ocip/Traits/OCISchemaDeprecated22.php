<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22;
use CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerifyRequest14sp8;
use CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerifyResponse14sp8;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceManagementEventGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceManagementEventGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\SessionStartRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementEventGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementEventGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementTagSetGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementTagSetGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListRequest19;
use CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse19;
use CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemDomainGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemDomainGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemGetRegistrationContactListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemGetRegistrationContactListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeAddRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeAddRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeGetRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeGetRequest22V3;
use CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserGetLoginInfoRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGetLoginInfoResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserGetRequest22V2;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;

trait OCISchemaDeprecated22
{

    /**
     * @param AuthenticationVerificationRequest22 $request
     * @return 
     * @throws ErrorResponseException
     */
    public function authenticationVerificationRequest22(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerificationRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param AuthenticationVerifyRequest14sp8 $request
     * @return AuthenticationVerifyResponse14sp8
     * @throws ErrorResponseException
     */
    public function authenticationVerifyRequest14sp8(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerifyRequest14sp8 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGetRequest22 $request
     * @return GroupGetResponse22
     * @throws ErrorResponseException
     */
    public function groupGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param LoginRequest22 $request
     * @return 
     * @throws ErrorResponseException
     */
    public function loginRequest22(\CWM\BroadWorksConnector\Ocip\Models\LoginRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderDeviceManagementEventGetListRequest $request
     * @return ServiceProviderDeviceManagementEventGetListResponse
     * @throws ErrorResponseException
     */
    public function serviceProviderDeviceManagementEventGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderDeviceManagementEventGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderGetRequest22 $request
     * @return ServiceProviderGetResponse22
     * @throws ErrorResponseException
     */
    public function serviceProviderGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SessionStartRequest $request
     * @return 
     * @throws ErrorResponseException
     */
    public function sessionStartRequest(\CWM\BroadWorksConnector\Ocip\Models\SessionStartRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemDeviceManagementEventGetListRequest $request
     * @return SystemDeviceManagementEventGetListResponse
     * @throws ErrorResponseException
     */
    public function systemDeviceManagementEventGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementEventGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemDeviceManagementTagSetGetListRequest $request
     * @return SystemDeviceManagementTagSetGetListResponse
     * @throws ErrorResponseException
     */
    public function systemDeviceManagementTagSetGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementTagSetGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemDeviceTypeGetAvailableListRequest19 $request
     * @return SystemDeviceTypeGetAvailableListResponse19
     * @throws ErrorResponseException
     */
    public function systemDeviceTypeGetAvailableListRequest19(\CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemDeviceTypeGetRequest21sp1 $request
     * @return SystemDeviceTypeGetResponse21sp1
     * @throws ErrorResponseException
     */
    public function systemDeviceTypeGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemDomainGetListRequest $request
     * @return SystemDomainGetListResponse
     * @throws ErrorResponseException
     */
    public function systemDomainGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemDomainGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemGetRegistrationContactListRequest $request
     * @return SystemGetRegistrationContactListResponse
     * @throws ErrorResponseException
     */
    public function systemGetRegistrationContactListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemGetRegistrationContactListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSIPDeviceTypeAddRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemSIPDeviceTypeAddRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeAddRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSIPDeviceTypeAddRequest22V2 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemSIPDeviceTypeAddRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeAddRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSIPDeviceTypeGetRequest22 $request
     * @return SystemSIPDeviceTypeGetResponse22
     * @throws ErrorResponseException
     */
    public function systemSIPDeviceTypeGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSIPDeviceTypeGetRequest22V2 $request
     * @return SystemSIPDeviceTypeGetResponse22
     * @throws ErrorResponseException
     */
    public function systemSIPDeviceTypeGetRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeGetRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSIPDeviceTypeGetRequest22V3 $request
     * @return SystemSIPDeviceTypeGetResponse22
     * @throws ErrorResponseException
     */
    public function systemSIPDeviceTypeGetRequest22V3(\CWM\BroadWorksConnector\Ocip\Models\SystemSIPDeviceTypeGetRequest22V3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTrunkGroupGetRequest21 $request
     * @return SystemTrunkGroupGetResponse21
     * @throws ErrorResponseException
     */
    public function systemTrunkGroupGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityGetRequest21 $request
     * @return UserBroadWorksMobilityGetResponse21
     * @throws ErrorResponseException
     */
    public function userBroadWorksMobilityGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userBroadWorksMobilityMobileIdentityAddRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityGetRequest $request
     * @return UserBroadWorksMobilityMobileIdentityGetResponse
     * @throws ErrorResponseException
     */
    public function userBroadWorksMobilityMobileIdentityGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityGetRequest21sp1 $request
     * @return UserBroadWorksMobilityMobileIdentityGetResponse21sp1
     * @throws ErrorResponseException
     */
    public function userBroadWorksMobilityMobileIdentityGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGetLoginInfoRequest $request
     * @return UserGetLoginInfoResponse
     * @throws ErrorResponseException
     */
    public function userGetLoginInfoRequest(\CWM\BroadWorksConnector\Ocip\Models\UserGetLoginInfoRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGetRequest22 $request
     * @return 
     * @throws ErrorResponseException
     */
    public function userGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGetRequest22V2 $request
     * @return 
     * @throws ErrorResponseException
     */
    public function userGetRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\UserGetRequest22V2 $request)
    {
        return $this->call($request);
    }


}

