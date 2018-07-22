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
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceClassMark
{

    /**
     * @param SystemClassmarkAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemClassmarkAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemClassmarkDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemClassmarkDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemClassmarkGetListRequest $request
     * @return SystemClassmarkGetListResponse
     * @throws ErrorResponseException
     */
    public function systemClassmarkGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemClassmarkGetUtilizationListRequest $request
     * @return SystemClassmarkGetUtilizationListResponse
     * @throws ErrorResponseException
     */
    public function systemClassmarkGetUtilizationListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkGetUtilizationListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemClassmarkModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemClassmarkModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemClassmarkModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserClassmarkGetRequest $request
     * @return UserClassmarkGetResponse
     * @throws ErrorResponseException
     */
    public function userClassmarkGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserClassmarkGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserClassmarkModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userClassmarkModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserClassmarkModifyRequest $request)
    {
        return $this->call($request);
    }


}

