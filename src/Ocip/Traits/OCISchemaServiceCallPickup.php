<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetAvailableUserPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetAvailableUserPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstancePagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstancePagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstancePagedSortedRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstancePagedSortedResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallPickupGetRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\UserCallPickupGetResponse;

trait OCISchemaServiceCallPickup
{

    /**
     * @param GroupCallPickupAddInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallPickupAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallPickupDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupGetAvailableUserListRequest $request
     * @return GroupCallPickupGetAvailableUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallPickupGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupGetAvailableUserPagedSortedListRequest $request
     * @return GroupCallPickupGetAvailableUserPagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallPickupGetAvailableUserPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetAvailableUserPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupGetInstanceListRequest $request
     * @return GroupCallPickupGetInstanceListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallPickupGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupGetInstancePagedSortedListRequest $request
     * @return GroupCallPickupGetInstancePagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallPickupGetInstancePagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstancePagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupGetInstancePagedSortedRequest $request
     * @return GroupCallPickupGetInstancePagedSortedResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallPickupGetInstancePagedSortedRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstancePagedSortedRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupGetInstanceRequest $request
     * @return GroupCallPickupGetInstanceResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallPickupGetInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallPickupModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallPickupGetRequest $request
     * @return UserCallPickupGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallPickupGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallPickupGetRequest $request)
    {
        return $this->call($request);
    }


}

