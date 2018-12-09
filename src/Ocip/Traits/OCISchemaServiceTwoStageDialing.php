<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemTwoStageDialingAddDnRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTwoStageDialingDeleteDnRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTwoStageDialingGetDnListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTwoStageDialingGetDnListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemTwoStageDialingModifyDnRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserTwoStageDialingGetRequest13Mp20;
use CWM\BroadWorksConnector\Ocip\Models\UserTwoStageDialingGetResponse13Mp20;
use CWM\BroadWorksConnector\Ocip\Models\UserTwoStageDialingModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceTwoStageDialing
{

    /**
     * @param SystemTwoStageDialingAddDnRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTwoStageDialingAddDnRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTwoStageDialingAddDnRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTwoStageDialingDeleteDnRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTwoStageDialingDeleteDnRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTwoStageDialingDeleteDnRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTwoStageDialingGetDnListRequest $request
     * @return SystemTwoStageDialingGetDnListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTwoStageDialingGetDnListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTwoStageDialingGetDnListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTwoStageDialingModifyDnRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTwoStageDialingModifyDnRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTwoStageDialingModifyDnRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserTwoStageDialingGetRequest13Mp20 $request
     * @return UserTwoStageDialingGetResponse13Mp20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userTwoStageDialingGetRequest13Mp20(\CWM\BroadWorksConnector\Ocip\Models\UserTwoStageDialingGetRequest13Mp20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserTwoStageDialingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userTwoStageDialingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserTwoStageDialingModifyRequest $request)
    {
        return $this->call($request);
    }


}

