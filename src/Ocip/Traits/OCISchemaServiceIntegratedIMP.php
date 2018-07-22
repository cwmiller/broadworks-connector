<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupIntegratedIMPGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupIntegratedIMPGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupIntegratedIMPModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerIntegratedIMPGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerIntegratedIMPGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerIntegratedIMPModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPGetResponse19;
use CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPGeneratePasswordRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceIntegratedIMP
{

    /**
     * @param GroupIntegratedIMPGetRequest $request
     * @return GroupIntegratedIMPGetResponse
     * @throws ErrorResponseException
     */
    public function groupIntegratedIMPGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupIntegratedIMPGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupIntegratedIMPModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupIntegratedIMPModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupIntegratedIMPModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerIntegratedIMPGetRequest $request
     * @return ResellerIntegratedIMPGetResponse
     * @throws ErrorResponseException
     */
    public function resellerIntegratedIMPGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerIntegratedIMPGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerIntegratedIMPModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function resellerIntegratedIMPModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerIntegratedIMPModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderIntegratedIMPGetRequest21 $request
     * @return ServiceProviderIntegratedIMPGetResponse21
     * @throws ErrorResponseException
     */
    public function serviceProviderIntegratedIMPGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderIntegratedIMPModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function serviceProviderIntegratedIMPModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderIntegratedIMPModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemIntegratedIMPGetRequest21 $request
     * @return SystemIntegratedIMPGetResponse19
     * @throws ErrorResponseException
     */
    public function systemIntegratedIMPGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemIntegratedIMPModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemIntegratedIMPModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemIntegratedIMPModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserIntegratedIMPGeneratePasswordRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userIntegratedIMPGeneratePasswordRequest(\CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPGeneratePasswordRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserIntegratedIMPGetRequest $request
     * @return UserIntegratedIMPGetResponse
     * @throws ErrorResponseException
     */
    public function userIntegratedIMPGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserIntegratedIMPModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userIntegratedIMPModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserIntegratedIMPModifyRequest $request)
    {
        return $this->call($request);
    }


}

