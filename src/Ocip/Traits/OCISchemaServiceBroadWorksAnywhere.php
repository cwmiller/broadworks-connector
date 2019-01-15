<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereGetInstanceRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereGetInstanceResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksAnywhereGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksAnywhereGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksAnywhereModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereAddPhoneNumberRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereAddSelectiveCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereDeletePhoneNumberRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereDeleteSelectiveCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetPhoneNumberPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetPhoneNumberPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetPhoneNumberRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetPhoneNumberResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetRequest16sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetResponse16sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetSelectiveCriteriaRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetSelectiveCriteriaResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereModifyPhoneNumberRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereModifySelectiveCriteriaRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceBroadWorksAnywhere
{

    /**
     * @param GroupBroadWorksAnywhereAddInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupBroadWorksAnywhereAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksAnywhereDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupBroadWorksAnywhereDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksAnywhereGetInstanceListRequest $request
     * @return GroupBroadWorksAnywhereGetInstanceListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupBroadWorksAnywhereGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksAnywhereGetInstanceRequest19sp1 $request
     * @return GroupBroadWorksAnywhereGetInstanceResponse19sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupBroadWorksAnywhereGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksAnywhereModifyActiveInstanceListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupBroadWorksAnywhereModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksAnywhereModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupBroadWorksAnywhereModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksAnywhereModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksAnywhereGetRequest $request
     * @return SystemBroadWorksAnywhereGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksAnywhereGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksAnywhereGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksAnywhereModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksAnywhereModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksAnywhereModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereAddPhoneNumberRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereAddPhoneNumberRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereAddPhoneNumberRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereAddSelectiveCriteriaRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereAddSelectiveCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereAddSelectiveCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereDeletePhoneNumberRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereDeletePhoneNumberRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereDeletePhoneNumberRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereDeleteSelectiveCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereDeleteSelectiveCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereDeleteSelectiveCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1 $request
     * @return UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereGetAvailablePortalListRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereGetPhoneNumberPagedSortedListRequest $request
     * @return UserBroadWorksAnywhereGetPhoneNumberPagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereGetPhoneNumberPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetPhoneNumberPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereGetPhoneNumberRequest $request
     * @return UserBroadWorksAnywhereGetPhoneNumberResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereGetPhoneNumberRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetPhoneNumberRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereGetRequest16sp2 $request
     * @return UserBroadWorksAnywhereGetResponse16sp2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereGetRequest16sp2(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetRequest16sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereGetSelectiveCriteriaRequest21 $request
     * @return UserBroadWorksAnywhereGetSelectiveCriteriaResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereGetSelectiveCriteriaRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereGetSelectiveCriteriaRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereModifyPhoneNumberRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereModifyPhoneNumberRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereModifyPhoneNumberRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksAnywhereModifySelectiveCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksAnywhereModifySelectiveCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksAnywhereModifySelectiveCriteriaRequest $request)
    {
        return $this->call($request);
    }


}

