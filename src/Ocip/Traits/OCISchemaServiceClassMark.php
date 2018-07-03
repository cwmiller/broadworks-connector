<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkGetUtilizationListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkGetUtilizationListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserClassmarkGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserClassmarkGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserClassmarkModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceClassMark
{

    /**
     * @param SystemClassmarkAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemClassmarkAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemClassmarkDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemClassmarkDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemClassmarkGetListRequest $request
     * @return SystemClassmarkGetListResponse|ErrorResponse
     */
    public function systemClassmarkGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemClassmarkGetUtilizationListRequest $request
     * @return SystemClassmarkGetUtilizationListResponse|ErrorResponse
     */
    public function systemClassmarkGetUtilizationListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkGetUtilizationListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemClassmarkModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemClassmarkModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserClassmarkGetRequest $request
     * @return UserClassmarkGetResponse|ErrorResponse
     */
    public function userClassmarkGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserClassmarkGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserClassmarkModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userClassmarkModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserClassmarkModifyRequest $request)
    {
        return $this->call($request);
    }


}

