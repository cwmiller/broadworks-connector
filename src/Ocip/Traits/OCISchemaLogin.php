<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerifyRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerifyResponse22V2;
use CWM\BroadWorksConnector\Ocip\Models\AvailabilityTestRequest;
use CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileAuthLocationGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileAuthLocationGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileAuthLocationGetRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileAuthLocationGetResponse22V2;
use CWM\BroadWorksConnector\Ocip\Models\DeviceManagementPutFileRequest;
use CWM\BroadWorksConnector\Ocip\Models\ExternalAuthenticationAuthorizeTokenRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ExternalAuthenticationCreateLoginTokenRequest;
use CWM\BroadWorksConnector\Ocip\Models\ExternalAuthenticationCreateLoginTokenResponse;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest22V3;
use CWM\BroadWorksConnector\Ocip\Models\LoginResponse22V3;
use CWM\BroadWorksConnector\Ocip\Models\LogoutRequest;
use CWM\BroadWorksConnector\Ocip\Models\LongLivedTokenRevokeRequest;
use CWM\BroadWorksConnector\Ocip\Models\PasswordGenerateRequest;
use CWM\BroadWorksConnector\Ocip\Models\PasswordGenerateResponse;
use CWM\BroadWorksConnector\Ocip\Models\PasswordModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\PrimaryInfoGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\PrimaryInfoGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\PublicClusterGetFullyQualifiedDomainNameRequest;
use CWM\BroadWorksConnector\Ocip\Models\PublicClusterGetFullyQualifiedDomainNameResponse;
use CWM\BroadWorksConnector\Ocip\Models\TutorialFlagGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\TutorialFlagGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\TutorialFlagModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGetLoginInfoRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\UserGetLoginInfoResponse22V2;
use CWM\BroadWorksConnector\Ocip\Models\UserSingleSignOnCreateDeviceTokenRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSingleSignOnCreateDeviceTokenResponse;
use CWM\BroadWorksConnector\Ocip\Models\VerifySessionIsValidRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaLogin
{

    /**
     * @param AuthenticationVerifyRequest22V2 $request
     * @return AuthenticationVerifyResponse22V2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function authenticationVerifyRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerifyRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param AvailabilityTestRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function availabilityTestRequest(\CWM\BroadWorksConnector\Ocip\Models\AvailabilityTestRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param DeviceManagementFileAuthLocationGetRequest21sp1 $request
     * @return DeviceManagementFileAuthLocationGetResponse21sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function deviceManagementFileAuthLocationGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileAuthLocationGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param DeviceManagementFileAuthLocationGetRequest22V2 $request
     * @return DeviceManagementFileAuthLocationGetResponse22V2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function deviceManagementFileAuthLocationGetRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileAuthLocationGetRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param DeviceManagementPutFileRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function deviceManagementPutFileRequest(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementPutFileRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ExternalAuthenticationAuthorizeTokenRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function externalAuthenticationAuthorizeTokenRequest22(\CWM\BroadWorksConnector\Ocip\Models\ExternalAuthenticationAuthorizeTokenRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ExternalAuthenticationCreateLoginTokenRequest $request
     * @return ExternalAuthenticationCreateLoginTokenResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function externalAuthenticationCreateLoginTokenRequest(\CWM\BroadWorksConnector\Ocip\Models\ExternalAuthenticationCreateLoginTokenRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param LoginRequest22V3 $request
     * @return LoginResponse22V3
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function loginRequest22V3(\CWM\BroadWorksConnector\Ocip\Models\LoginRequest22V3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param LogoutRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function logoutRequest(\CWM\BroadWorksConnector\Ocip\Models\LogoutRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param LongLivedTokenRevokeRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function longLivedTokenRevokeRequest(\CWM\BroadWorksConnector\Ocip\Models\LongLivedTokenRevokeRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param PasswordGenerateRequest $request
     * @return PasswordGenerateResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function passwordGenerateRequest(\CWM\BroadWorksConnector\Ocip\Models\PasswordGenerateRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param PasswordModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function passwordModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\PasswordModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param PrimaryInfoGetRequest $request
     * @return PrimaryInfoGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function primaryInfoGetRequest(\CWM\BroadWorksConnector\Ocip\Models\PrimaryInfoGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param PublicClusterGetFullyQualifiedDomainNameRequest $request
     * @return PublicClusterGetFullyQualifiedDomainNameResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function publicClusterGetFullyQualifiedDomainNameRequest(\CWM\BroadWorksConnector\Ocip\Models\PublicClusterGetFullyQualifiedDomainNameRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param TutorialFlagGetRequest $request
     * @return TutorialFlagGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function tutorialFlagGetRequest(\CWM\BroadWorksConnector\Ocip\Models\TutorialFlagGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param TutorialFlagModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function tutorialFlagModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\TutorialFlagModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGetLoginInfoRequest22V2 $request
     * @return UserGetLoginInfoResponse22V2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userGetLoginInfoRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\UserGetLoginInfoRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSingleSignOnCreateDeviceTokenRequest $request
     * @return UserSingleSignOnCreateDeviceTokenResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSingleSignOnCreateDeviceTokenRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSingleSignOnCreateDeviceTokenRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param VerifySessionIsValidRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function verifySessionIsValidRequest(\CWM\BroadWorksConnector\Ocip\Models\VerifySessionIsValidRequest $request)
    {
        return $this->call($request);
    }


}

