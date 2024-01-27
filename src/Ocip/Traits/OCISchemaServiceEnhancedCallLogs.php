<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupEnhancedCallLogsSchemaInstanceGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnhancedCallLogsSchemaInstanceGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnhancedCallLogsSchemaInstanceModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsSchemaInstanceGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsSchemaInstanceGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsSchemaInstanceModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsActiveSchemaInstanceGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsActiveSchemaInstanceGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsGetRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsGetResponse22V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsModifyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsSchemaInstanceGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsSchemaInstanceGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest23;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse23;

trait OCISchemaServiceEnhancedCallLogs
{
    /**
     * @param GroupEnhancedCallLogsSchemaInstanceGetRequest $request
     * @return GroupEnhancedCallLogsSchemaInstanceGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEnhancedCallLogsSchemaInstanceGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnhancedCallLogsSchemaInstanceGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnhancedCallLogsSchemaInstanceModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEnhancedCallLogsSchemaInstanceModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnhancedCallLogsSchemaInstanceModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderEnhancedCallLogsGetRequest17sp4 $request
     * @return ServiceProviderEnhancedCallLogsGetResponse17sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderEnhancedCallLogsGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderEnhancedCallLogsModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderEnhancedCallLogsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderEnhancedCallLogsSchemaInstanceGetRequest $request
     * @return ServiceProviderEnhancedCallLogsSchemaInstanceGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderEnhancedCallLogsSchemaInstanceGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsSchemaInstanceGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderEnhancedCallLogsSchemaInstanceModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderEnhancedCallLogsSchemaInstanceModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsSchemaInstanceModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemEnhancedCallLogsActiveSchemaInstanceGetListRequest $request
     * @return SystemEnhancedCallLogsActiveSchemaInstanceGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemEnhancedCallLogsActiveSchemaInstanceGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsActiveSchemaInstanceGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemEnhancedCallLogsGetRequest22V2 $request
     * @return SystemEnhancedCallLogsGetResponse22V2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemEnhancedCallLogsGetRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsGetRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemEnhancedCallLogsModifyRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemEnhancedCallLogsModifyRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsModifyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemEnhancedCallLogsSchemaInstanceGetListRequest $request
     * @return SystemEnhancedCallLogsSchemaInstanceGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemEnhancedCallLogsSchemaInstanceGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsSchemaInstanceGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserEnhancedCallLogsGetListRequest23 $request
     * @return UserEnhancedCallLogsGetListResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userEnhancedCallLogsGetListRequest23(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest23 $request)
    {
        return $this->call($request);
    }
}

