<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInCallServiceActivationGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInCallServiceActivationGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInCallServiceActivationModifyRequest17;
use CWM\BroadWorksConnector\Ocip\Models\SystemInCallServiceActivationGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\SystemInCallServiceActivationGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\SystemInCallServiceActivationModifyRequest17;
use CWM\BroadWorksConnector\Ocip\Models\UserInCallServiceActivationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserInCallServiceActivationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserInCallServiceActivationModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceInCallServiceActivation
{
    /**
     * @param ServiceProviderInCallServiceActivationGetRequest17 $request
     * @return ServiceProviderInCallServiceActivationGetResponse17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderInCallServiceActivationGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInCallServiceActivationGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderInCallServiceActivationModifyRequest17 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderInCallServiceActivationModifyRequest17(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInCallServiceActivationModifyRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemInCallServiceActivationGetRequest17 $request
     * @return SystemInCallServiceActivationGetResponse17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemInCallServiceActivationGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\SystemInCallServiceActivationGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemInCallServiceActivationModifyRequest17 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemInCallServiceActivationModifyRequest17(\CWM\BroadWorksConnector\Ocip\Models\SystemInCallServiceActivationModifyRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserInCallServiceActivationGetRequest $request
     * @return UserInCallServiceActivationGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userInCallServiceActivationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserInCallServiceActivationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserInCallServiceActivationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userInCallServiceActivationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserInCallServiceActivationModifyRequest $request)
    {
        return $this->call($request);
    }
}

