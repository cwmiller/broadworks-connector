<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupCallRecordingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallRecordingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallRecordingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingAddPlatformRequest20;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingDeletePlatformRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetPlatformListRequest20sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetPlatformListResponse20sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetPlatformUsageRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetPlatformUsageResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingModifyPlatformRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingModifyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserCallRecordingGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserCallRecordingGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\UserCallRecordingModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallRecording
{

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
     * @param SystemCallRecordingAddPlatformRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallRecordingAddPlatformRequest20(\CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingAddPlatformRequest20 $request)
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
     * @param SystemCallRecordingGetPlatformListRequest20sp1 $request
     * @return SystemCallRecordingGetPlatformListResponse20sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallRecordingGetPlatformListRequest20sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetPlatformListRequest20sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallRecordingGetPlatformUsageRequest $request
     * @return SystemCallRecordingGetPlatformUsageResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallRecordingGetPlatformUsageRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetPlatformUsageRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallRecordingGetRequest22 $request
     * @return SystemCallRecordingGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallRecordingGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallRecordingModifyPlatformRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallRecordingModifyPlatformRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallRecordingModifyPlatformRequest $request)
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
     * @param UserCallRecordingGetRequest20 $request
     * @return UserCallRecordingGetResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallRecordingGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserCallRecordingGetRequest20 $request)
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

