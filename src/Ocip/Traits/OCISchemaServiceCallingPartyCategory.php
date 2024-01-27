<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemCallingPartyCategoryAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallingPartyCategoryDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallingPartyCategoryGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallingPartyCategoryGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallingPartyCategoryGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallingPartyCategoryGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallingPartyCategoryModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingPartyCategoryGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingPartyCategoryGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingPartyCategoryModifyRequest16;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallingPartyCategory
{
    /**
     * @param SystemCallingPartyCategoryAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallingPartyCategoryAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallingPartyCategoryAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallingPartyCategoryDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallingPartyCategoryDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallingPartyCategoryDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallingPartyCategoryGetListRequest $request
     * @return SystemCallingPartyCategoryGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallingPartyCategoryGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallingPartyCategoryGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallingPartyCategoryGetRequest $request
     * @return SystemCallingPartyCategoryGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallingPartyCategoryGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallingPartyCategoryGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallingPartyCategoryModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallingPartyCategoryModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallingPartyCategoryModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingPartyCategoryGetRequest16 $request
     * @return UserCallingPartyCategoryGetResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallingPartyCategoryGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserCallingPartyCategoryGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingPartyCategoryModifyRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallingPartyCategoryModifyRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserCallingPartyCategoryModifyRequest16 $request)
    {
        return $this->call($request);
    }
}

