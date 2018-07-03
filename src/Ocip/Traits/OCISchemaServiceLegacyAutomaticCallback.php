<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemLegacyAutomaticCallbackGetLineTypeListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemLegacyAutomaticCallbackGetTypeLineListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemLegacyAutomaticCallbackGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemLegacyAutomaticCallbackGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemLegacyAutomaticCallbackModifyLineTypeRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemLegacyAutomaticCallbackModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserLegacyAutomaticCallbackGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserLegacyAutomaticCallbackGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserLegacyAutomaticCallbackModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceLegacyAutomaticCallback
{

    /**
     * @param SystemLegacyAutomaticCallbackGetLineTypeListRequest $request
     * @return SystemLegacyAutomaticCallbackGetTypeLineListResponse
     */
    public function systemLegacyAutomaticCallbackGetLineTypeListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemLegacyAutomaticCallbackGetLineTypeListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemLegacyAutomaticCallbackGetRequest $request
     * @return SystemLegacyAutomaticCallbackGetResponse|ErrorResponse
     */
    public function systemLegacyAutomaticCallbackGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemLegacyAutomaticCallbackGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemLegacyAutomaticCallbackModifyLineTypeRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemLegacyAutomaticCallbackModifyLineTypeRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemLegacyAutomaticCallbackModifyLineTypeRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemLegacyAutomaticCallbackModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemLegacyAutomaticCallbackModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemLegacyAutomaticCallbackModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserLegacyAutomaticCallbackGetRequest $request
     * @return UserLegacyAutomaticCallbackGetResponse
     */
    public function userLegacyAutomaticCallbackGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserLegacyAutomaticCallbackGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserLegacyAutomaticCallbackModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userLegacyAutomaticCallbackModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserLegacyAutomaticCallbackModifyRequest $request)
    {
        return $this->call($request);
    }


}

