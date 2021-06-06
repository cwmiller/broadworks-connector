<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupEnhancedCallLogsSchemaInstanceGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnhancedCallLogsSchemaInstanceGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnhancedCallLogsSchemaInstanceModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsSchemaInstanceGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsSchemaInstanceGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsSchemaInstanceModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsModifyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsSchemaInstanceGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsSchemaInstanceGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest22;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse22;

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
     * @param SystemEnhancedCallLogsGetRequest22 $request
     * @return SystemEnhancedCallLogsGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemEnhancedCallLogsGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsGetRequest22 $request)
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
     * @param UserEnhancedCallLogsGetListRequest22 $request
     * @return UserEnhancedCallLogsGetListResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userEnhancedCallLogsGetListRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest22 $request)
    {
        return $this->call($request);
    }


}

