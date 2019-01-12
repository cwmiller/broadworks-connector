<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderEnhancedCallLogsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnhancedCallLogsModifyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListRequest22;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse22;

trait OCISchemaServiceEnhancedCallLogs
{

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
     * @return 
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

