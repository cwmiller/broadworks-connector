<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupIntegratedIMPGetRequest23;
use CWM\BroadWorksConnector\Ocip\Models\GroupIntegratedIMPGetResponse23;
use CWM\BroadWorksConnector\Ocip\Models\GroupIntegratedIMPModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerIntegratedIMPGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ResellerIntegratedIMPGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\ResellerIntegratedIMPModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPGetRequest25;
use CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPGetResponse25;
use CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPGeneratePasswordRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceIntegratedIMP
{
    /**
     * @param GroupIntegratedIMPGetRequest23 $request
     * @return GroupIntegratedIMPGetResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupIntegratedIMPGetRequest23(\CWM\BroadWorksConnector\Ocip\Models\GroupIntegratedIMPGetRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupIntegratedIMPModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupIntegratedIMPModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupIntegratedIMPModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerIntegratedIMPGetRequest22 $request
     * @return ResellerIntegratedIMPGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerIntegratedIMPGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\ResellerIntegratedIMPGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerIntegratedIMPModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerIntegratedIMPModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerIntegratedIMPModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderIntegratedIMPGetRequest22 $request
     * @return ServiceProviderIntegratedIMPGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderIntegratedIMPGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderIntegratedIMPModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderIntegratedIMPModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemIntegratedIMPGetRequest25 $request
     * @return SystemIntegratedIMPGetResponse25
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemIntegratedIMPGetRequest25(\CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPGetRequest25 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemIntegratedIMPModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemIntegratedIMPModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserIntegratedIMPGeneratePasswordRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userIntegratedIMPGeneratePasswordRequest(\CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPGeneratePasswordRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserIntegratedIMPGetRequest21sp1 $request
     * @return UserIntegratedIMPGetResponse21sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userIntegratedIMPGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserIntegratedIMPModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userIntegratedIMPModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPModifyRequest $request)
    {
        return $this->call($request);
    }
}

