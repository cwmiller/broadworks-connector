<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupAddInstanceRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupConsolidatedAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupConsolidatedDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupConsolidatedModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetInstanceRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetInstanceResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupModifyInstanceWeightedCallDistributionRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemHuntGroupGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemHuntGroupGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\SystemHuntGroupModifyRequest21;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceHuntGroup
{

    /**
     * @param GroupHuntGroupAddInstanceRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupHuntGroupAddInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupAddInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupConsolidatedAddInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupHuntGroupConsolidatedAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupConsolidatedAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupConsolidatedDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupHuntGroupConsolidatedDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupConsolidatedDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupConsolidatedModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupHuntGroupConsolidatedModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupConsolidatedModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupHuntGroupDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupGetAvailableUserListRequest $request
     * @return GroupHuntGroupGetAvailableUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupHuntGroupGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupGetInstanceListRequest $request
     * @return GroupHuntGroupGetInstanceListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupHuntGroupGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupGetInstanceRequest20 $request
     * @return GroupHuntGroupGetInstanceResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupHuntGroupGetInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupGetInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupModifyActiveInstanceListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupHuntGroupModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupHuntGroupModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupHuntGroupModifyInstanceWeightedCallDistributionRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupHuntGroupModifyInstanceWeightedCallDistributionRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupHuntGroupModifyInstanceWeightedCallDistributionRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemHuntGroupGetRequest21 $request
     * @return SystemHuntGroupGetResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemHuntGroupGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemHuntGroupGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemHuntGroupModifyRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemHuntGroupModifyRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemHuntGroupModifyRequest21 $request)
    {
        return $this->call($request);
    }


}

