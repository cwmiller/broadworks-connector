<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCallbackAddReleaseCauseListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCallbackDeleteReleaseCauseListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCallbackGetReleaseCauseListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCallbackGetReleaseCauseListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCallbackGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCallbackGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCallbackModifyRequest15;
use CWM\BroadWorksConnector\Ocip\Models\UserAutomaticCallbackGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAutomaticCallbackGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAutomaticCallbackModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceAutomaticCallback
{

    /**
     * @param SystemAutomaticCallbackAddReleaseCauseListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemAutomaticCallbackAddReleaseCauseListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCallbackAddReleaseCauseListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAutomaticCallbackDeleteReleaseCauseListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemAutomaticCallbackDeleteReleaseCauseListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCallbackDeleteReleaseCauseListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAutomaticCallbackGetReleaseCauseListRequest $request
     * @return SystemAutomaticCallbackGetReleaseCauseListResponse
     * @throws ErrorResponseException
     */
    public function systemAutomaticCallbackGetReleaseCauseListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCallbackGetReleaseCauseListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAutomaticCallbackGetRequest17 $request
     * @return SystemAutomaticCallbackGetResponse17
     * @throws ErrorResponseException
     */
    public function systemAutomaticCallbackGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCallbackGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAutomaticCallbackModifyRequest15 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemAutomaticCallbackModifyRequest15(\CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCallbackModifyRequest15 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAutomaticCallbackGetRequest $request
     * @return UserAutomaticCallbackGetResponse
     * @throws ErrorResponseException
     */
    public function userAutomaticCallbackGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAutomaticCallbackGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAutomaticCallbackModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userAutomaticCallbackModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAutomaticCallbackModifyRequest $request)
    {
        return $this->call($request);
    }


}

