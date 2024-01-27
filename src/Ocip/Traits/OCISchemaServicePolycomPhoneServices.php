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
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServicePolycomPhoneServices
{
    /**
     * @param GroupPolycomPhoneServicesGetRequest $request
     * @return GroupPolycomPhoneServicesGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupPolycomPhoneServicesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPolycomPhoneServicesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPolycomPhoneServicesModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupPolycomPhoneServicesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPolycomPhoneServicesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPolycomPhoneServicesGetPrimaryEndpointListRequest $request
     * @return UserPolycomPhoneServicesGetPrimaryEndpointListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPolycomPhoneServicesGetPrimaryEndpointListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPolycomPhoneServicesGetPrimaryEndpointListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPolycomPhoneServicesGetRequest $request
     * @return UserPolycomPhoneServicesGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPolycomPhoneServicesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPolycomPhoneServicesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPolycomPhoneServicesModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPolycomPhoneServicesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPolycomPhoneServicesModifyRequest $request)
    {
        return $this->call($request);
    }
}

