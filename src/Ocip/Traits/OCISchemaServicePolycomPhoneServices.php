<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupPolycomPhoneServicesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolycomPhoneServicesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupPolycomPhoneServicesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPolycomPhoneServicesGetPrimaryEndpointListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPolycomPhoneServicesGetPrimaryEndpointListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPolycomPhoneServicesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPolycomPhoneServicesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPolycomPhoneServicesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServicePolycomPhoneServices
{

    /**
     * @param GroupPolycomPhoneServicesGetRequest $request
     * @return GroupPolycomPhoneServicesGetResponse|ErrorResponse
     */
    public function groupPolycomPhoneServicesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPolycomPhoneServicesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPolycomPhoneServicesModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupPolycomPhoneServicesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPolycomPhoneServicesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPolycomPhoneServicesGetPrimaryEndpointListRequest $request
     * @return UserPolycomPhoneServicesGetPrimaryEndpointListResponse|ErrorResponse
     */
    public function userPolycomPhoneServicesGetPrimaryEndpointListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPolycomPhoneServicesGetPrimaryEndpointListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPolycomPhoneServicesGetRequest $request
     * @return UserPolycomPhoneServicesGetResponse|ErrorResponse
     */
    public function userPolycomPhoneServicesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPolycomPhoneServicesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPolycomPhoneServicesModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPolycomPhoneServicesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPolycomPhoneServicesModifyRequest $request)
    {
        return $this->call($request);
    }


}

