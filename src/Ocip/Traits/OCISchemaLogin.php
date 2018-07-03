<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerifyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerifyResponse22;
use CWM\BroadWorksConnector\Ocip\Models\AvailabilityTestRequest;
use CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileAuthLocationGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileAuthLocationGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\DeviceManagementPutFileRequest;
use CWM\BroadWorksConnector\Ocip\Models\ExternalAuthenticationAuthorizeTokenRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ExternalAuthenticationCreateLoginTokenRequest;
use CWM\BroadWorksConnector\Ocip\Models\ExternalAuthenticationCreateLoginTokenResponse;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\LogoutRequest;
use CWM\BroadWorksConnector\Ocip\Models\PasswordGenerateRequest;
use CWM\BroadWorksConnector\Ocip\Models\PasswordGenerateResponse;
use CWM\BroadWorksConnector\Ocip\Models\PasswordModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\PrimaryInfoGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\PublicClusterGetFullyQualifiedDomainNameRequest;
use CWM\BroadWorksConnector\Ocip\Models\PublicClusterGetFullyQualifiedDomainNameResponse;
use CWM\BroadWorksConnector\Ocip\Models\TutorialFlagGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\TutorialFlagGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\TutorialFlagModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGetLoginInfoRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserGetLoginInfoResponse22;
use CWM\BroadWorksConnector\Ocip\Models\UserSingleSignOnCreateDeviceTokenRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSingleSignOnCreateDeviceTokenResponse;
use CWM\BroadWorksConnector\Ocip\Models\VerifySessionIsValidRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaLogin
{

    /**
     * @param AuthenticationVerifyRequest22 $request
     * @return AuthenticationVerifyResponse22|ErrorResponse
     */
    public function authenticationVerifyRequest22(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationVerifyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param AvailabilityTestRequest $request
     * @return
     */
    public function availabilityTestRequest(\CWM\BroadWorksConnector\Ocip\Models\AvailabilityTestRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param DeviceManagementFileAuthLocationGetRequest21sp1 $request
     * @return DeviceManagementFileAuthLocationGetResponse21sp1|ErrorResponse
     */
    public function deviceManagementFileAuthLocationGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileAuthLocationGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param DeviceManagementPutFileRequest $request
     * @return SuccessResponse
     */
    public function deviceManagementPutFileRequest(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementPutFileRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ExternalAuthenticationAuthorizeTokenRequest22 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function externalAuthenticationAuthorizeTokenRequest22(\CWM\BroadWorksConnector\Ocip\Models\ExternalAuthenticationAuthorizeTokenRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ExternalAuthenticationCreateLoginTokenRequest $request
     * @return ExternalAuthenticationCreateLoginTokenResponse
     */
    public function externalAuthenticationCreateLoginTokenRequest(\CWM\BroadWorksConnector\Ocip\Models\ExternalAuthenticationCreateLoginTokenRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param LoginRequest22V2 $request
     * @return
     */
    public function loginRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\LoginRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param LogoutRequest $request
     * @return
     */
    public function logoutRequest(\CWM\BroadWorksConnector\Ocip\Models\LogoutRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param PasswordGenerateRequest $request
     * @return PasswordGenerateResponse|ErrorResponse
     */
    public function passwordGenerateRequest(\CWM\BroadWorksConnector\Ocip\Models\PasswordGenerateRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param PasswordModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function passwordModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\PasswordModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param PrimaryInfoGetRequest $request
     * @return
     */
    public function primaryInfoGetRequest(\CWM\BroadWorksConnector\Ocip\Models\PrimaryInfoGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param PublicClusterGetFullyQualifiedDomainNameRequest $request
     * @return PublicClusterGetFullyQualifiedDomainNameResponse
     */
    public function publicClusterGetFullyQualifiedDomainNameRequest(\CWM\BroadWorksConnector\Ocip\Models\PublicClusterGetFullyQualifiedDomainNameRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param TutorialFlagGetRequest $request
     * @return TutorialFlagGetResponse|ErrorResponse
     */
    public function tutorialFlagGetRequest(\CWM\BroadWorksConnector\Ocip\Models\TutorialFlagGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param TutorialFlagModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function tutorialFlagModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\TutorialFlagModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGetLoginInfoRequest22 $request
     * @return UserGetLoginInfoResponse22|ErrorResponse
     */
    public function userGetLoginInfoRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserGetLoginInfoRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSingleSignOnCreateDeviceTokenRequest $request
     * @return UserSingleSignOnCreateDeviceTokenResponse
     */
    public function userSingleSignOnCreateDeviceTokenRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSingleSignOnCreateDeviceTokenRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param VerifySessionIsValidRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function verifySessionIsValidRequest(\CWM\BroadWorksConnector\Ocip\Models\VerifySessionIsValidRequest $request)
    {
        return $this->call($request);
    }


}

