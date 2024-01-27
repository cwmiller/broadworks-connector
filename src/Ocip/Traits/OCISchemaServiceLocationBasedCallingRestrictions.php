<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemLocationBasedCallingRestrictionsGetRequest24;
use CWM\BroadWorksConnector\Ocip\Models\SystemLocationBasedCallingRestrictionsGetResponse24;
use CWM\BroadWorksConnector\Ocip\Models\SystemLocationBasedCallingRestrictionsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemMccMncHomeNetworkAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemMccMncHomeNetworkDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemMccMncHomeNetworkGetListRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\SystemMccMncHomeNetworkGetListResponse;

trait OCISchemaServiceLocationBasedCallingRestrictions
{
    /**
     * @param SystemLocationBasedCallingRestrictionsGetRequest24 $request
     * @return SystemLocationBasedCallingRestrictionsGetResponse24
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemLocationBasedCallingRestrictionsGetRequest24(\CWM\BroadWorksConnector\Ocip\Models\SystemLocationBasedCallingRestrictionsGetRequest24 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemLocationBasedCallingRestrictionsModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemLocationBasedCallingRestrictionsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemLocationBasedCallingRestrictionsModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMccMncHomeNetworkAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemMccMncHomeNetworkAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemMccMncHomeNetworkAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMccMncHomeNetworkDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemMccMncHomeNetworkDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemMccMncHomeNetworkDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMccMncHomeNetworkGetListRequest $request
     * @return SystemMccMncHomeNetworkGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemMccMncHomeNetworkGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemMccMncHomeNetworkGetListRequest $request)
    {
        return $this->call($request);
    }
}

