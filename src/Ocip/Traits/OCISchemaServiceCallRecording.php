<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallRecordingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallRecordingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallRecordingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallRecordingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallRecordingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallRecordingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallRecordingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallRecordingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallRecordingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingAddPlatformRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingDeletePlatformRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetPlatformListRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetPlatformListResponse22V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetPlatformUsageRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetPlatformUsageResponse22;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetRequest23;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetResponse23;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingModifyPlatformRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingModifyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserCallRecordingGetRequest23;
use CWM\BroadWorksConnector\Ocip\Models\UserCallRecordingGetResponse23;
use CWM\BroadWorksConnector\Ocip\Models\UserCallRecordingModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallRecording
{

    /**
     * @param EnterpriseCallRecordingGetRequest $request
     * @return EnterpriseCallRecordingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallRecordingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallRecordingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallRecordingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallRecordingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallRecordingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallRecordingGetRequest $request
     * @return GroupCallRecordingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallRecordingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallRecordingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallRecordingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallRecordingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallRecordingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerCallRecordingGetRequest $request
     * @return ResellerCallRecordingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerCallRecordingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerCallRecordingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerCallRecordingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerCallRecordingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerCallRecordingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallRecordingAddPlatformRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallRecordingAddPlatformRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingAddPlatformRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallRecordingDeletePlatformRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallRecordingDeletePlatformRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingDeletePlatformRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallRecordingGetPlatformListRequest22V2 $request
     * @return SystemCallRecordingGetPlatformListResponse22V2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallRecordingGetPlatformListRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetPlatformListRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallRecordingGetPlatformUsageRequest22 $request
     * @return SystemCallRecordingGetPlatformUsageResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallRecordingGetPlatformUsageRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetPlatformUsageRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallRecordingGetRequest23 $request
     * @return SystemCallRecordingGetResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallRecordingGetRequest23(\CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallRecordingModifyPlatformRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallRecordingModifyPlatformRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingModifyPlatformRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallRecordingModifyRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallRecordingModifyRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingModifyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallRecordingGetRequest23 $request
     * @return UserCallRecordingGetResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallRecordingGetRequest23(\CWM\BroadWorksConnector\Ocip\Models\UserCallRecordingGetRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallRecordingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallRecordingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallRecordingModifyRequest $request)
    {
        return $this->call($request);
    }


}

