<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceReceptionistSmallBusiness
{

    /**
     * @param UserBroadWorksReceptionistSmallBusinessGetAvailableUserListRequest $request
     * @return UserBroadWorksReceptionistSmallBusinessGetAvailableUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksReceptionistSmallBusinessGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistSmallBusinessGetRequest $request
     * @return UserBroadWorksReceptionistSmallBusinessGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksReceptionistSmallBusinessGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistSmallBusinessModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksReceptionistSmallBusinessModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessModifyRequest $request)
    {
        return $this->call($request);
    }


}

