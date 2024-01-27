<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksReceptionistEnterpriseGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksReceptionistEnterpriseGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksReceptionistEnterpriseModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseAddUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseDeleteUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseNoteGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseNoteGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseNoteModifyListRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceReceptionistEnterprise
{
    /**
     * @param SystemBroadWorksReceptionistEnterpriseGetRequest $request
     * @return SystemBroadWorksReceptionistEnterpriseGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksReceptionistEnterpriseGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksReceptionistEnterpriseGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksReceptionistEnterpriseModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksReceptionistEnterpriseModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksReceptionistEnterpriseModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseAddUserListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksReceptionistEnterpriseAddUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseAddUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseDeleteUserListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksReceptionistEnterpriseDeleteUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseDeleteUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseGetAvailableUserListRequest $request
     * @return UserBroadWorksReceptionistEnterpriseGetAvailableUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksReceptionistEnterpriseGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseGetRequest $request
     * @return UserBroadWorksReceptionistEnterpriseGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksReceptionistEnterpriseGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksReceptionistEnterpriseModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseNoteGetRequest $request
     * @return UserBroadWorksReceptionistEnterpriseNoteGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksReceptionistEnterpriseNoteGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseNoteGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistEnterpriseNoteModifyListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksReceptionistEnterpriseNoteModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistEnterpriseNoteModifyListRequest $request)
    {
        return $this->call($request);
    }
}

