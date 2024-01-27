<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionGetInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionGetInstanceResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSeriesCompletionGetRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\UserSeriesCompletionGetResponse;

trait OCISchemaServiceSeriesCompletion
{
    /**
     * @param GroupSeriesCompletionAddInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupSeriesCompletionAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSeriesCompletionDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupSeriesCompletionDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSeriesCompletionGetAvailableUserListRequest $request
     * @return GroupSeriesCompletionGetAvailableUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupSeriesCompletionGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSeriesCompletionGetInstanceListRequest $request
     * @return GroupSeriesCompletionGetInstanceListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupSeriesCompletionGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSeriesCompletionGetInstanceRequest $request
     * @return GroupSeriesCompletionGetInstanceResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupSeriesCompletionGetInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionGetInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSeriesCompletionModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupSeriesCompletionModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSeriesCompletionGetRequest $request
     * @return UserSeriesCompletionGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSeriesCompletionGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSeriesCompletionGetRequest $request)
    {
        return $this->call($request);
    }
}

