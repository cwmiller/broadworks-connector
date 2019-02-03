<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ExternalAuthenticationAuthorizeTokenRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterForcedForwardingModifyRequest17;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceGetRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceGetResponse17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceModifyRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserAddCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserModifyCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetGreetingRequest18sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetGreetingResponse18sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetVoicePortalRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetVoicePortalResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyGreetingRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyVoicePortalRequest16;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaASDeprecatedSpecialExceptions
{

    /**
     * @param ExternalAuthenticationAuthorizeTokenRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function externalAuthenticationAuthorizeTokenRequest(\CWM\BroadWorksConnector\Ocip\Models\ExternalAuthenticationAuthorizeTokenRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterForcedForwardingModifyRequest17 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterForcedForwardingModifyRequest17(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterForcedForwardingModifyRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterNightServiceGetRequest17sp1 $request
     * @return GroupCallCenterNightServiceGetResponse17sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterNightServiceGetRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceGetRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterNightServiceModifyRequest17sp1 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterNightServiceModifyRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterNightServiceModifyRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityGetRequest $request
     * @return UserBroadWorksMobilityGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksMobilityGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityModifyRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksMobilityModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserAddCriteriaRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCustomRingbackUserAddCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserAddCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserGetCriteriaRequest16 $request
     * @return UserCustomRingbackUserGetCriteriaResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCustomRingbackUserGetCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksMobilityModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserModifyCriteriaRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCustomRingbackUserModifyCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserModifyCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetGreetingRequest18sp1 $request
     * @return UserVoiceMessagingUserGetGreetingResponse18sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserGetGreetingRequest18sp1(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetGreetingRequest18sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetVoicePortalRequest16 $request
     * @return UserVoiceMessagingUserGetVoicePortalResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserGetVoicePortalRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetVoicePortalRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyGreetingRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserModifyGreetingRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyGreetingRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyVoicePortalRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserModifyVoicePortalRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyVoicePortalRequest16 $request)
    {
        return $this->call($request);
    }


}

