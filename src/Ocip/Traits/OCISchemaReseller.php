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
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaReseller
{

    /**
     * @param ResellerAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function resellerAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function resellerAdminAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function resellerAdminDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminGetListRequest $request
     * @return ResellerAdminGetListResponse
     * @throws ErrorResponseException
     */
    public function resellerAdminGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminGetRequest $request
     * @return ResellerAdminGetResponse
     * @throws ErrorResponseException
     */
    public function resellerAdminGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerAdminModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function resellerAdminModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerAdminModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function resellerDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerGetListRequest $request
     * @return ResellerGetListResponse
     * @throws ErrorResponseException
     */
    public function resellerGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerGetRequest $request
     * @return ResellerGetResponse
     * @throws ErrorResponseException
     */
    public function resellerGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function resellerModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerModifyRequest $request)
    {
        return $this->call($request);
    }


}

