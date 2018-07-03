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
use CWM\BroadWorksConnector\Ocip\Models\UserSeriesCompletionGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceSeriesCompletion
{

    /**
     * @param GroupSeriesCompletionAddInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupSeriesCompletionAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSeriesCompletionDeleteInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupSeriesCompletionDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSeriesCompletionGetAvailableUserListRequest $request
     * @return GroupSeriesCompletionGetAvailableUserListResponse|ErrorResponse
     */
    public function groupSeriesCompletionGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSeriesCompletionGetInstanceListRequest $request
     * @return GroupSeriesCompletionGetInstanceListResponse|ErrorResponse
     */
    public function groupSeriesCompletionGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSeriesCompletionGetInstanceRequest $request
     * @return GroupSeriesCompletionGetInstanceResponse|ErrorResponse
     */
    public function groupSeriesCompletionGetInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionGetInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSeriesCompletionModifyInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupSeriesCompletionModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSeriesCompletionModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSeriesCompletionGetRequest $request
     * @return UserSeriesCompletionGetResponse|ErrorResponse
     */
    public function userSeriesCompletionGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSeriesCompletionGetRequest $request)
    {
        return $this->call($request);
    }


}

