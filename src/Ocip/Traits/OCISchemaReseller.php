<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ResellerAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerAdminModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaReseller
{

    /**
     * @param ResellerAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function resellerAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function resellerAdminAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function resellerAdminDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminGetListRequest $request
     * @return ResellerAdminGetListResponse|ErrorResponse
     */
    public function resellerAdminGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminGetRequest $request
     * @return ResellerAdminGetResponse|ErrorResponse
     */
    public function resellerAdminGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function resellerAdminModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function resellerDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerGetListRequest $request
     * @return ResellerGetListResponse|ErrorResponse
     */
    public function resellerGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerGetRequest $request
     * @return ResellerGetResponse|ErrorResponse
     */
    public function resellerGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function resellerModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerModifyRequest $request)
    {
        return $this->call($request);
    }


}

