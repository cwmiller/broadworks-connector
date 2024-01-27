<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderExternalCustomRingbackGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderExternalCustomRingbackGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderExternalCustomRingbackModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExternalCustomRingbackGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExternalCustomRingbackGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserExternalCustomRingbackModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceExternalCustomRingback
{
    /**
     * @param ServiceProviderExternalCustomRingbackGetRequest $request
     * @return ServiceProviderExternalCustomRingbackGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderExternalCustomRingbackGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderExternalCustomRingbackGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderExternalCustomRingbackModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderExternalCustomRingbackModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderExternalCustomRingbackModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExternalCustomRingbackGetRequest $request
     * @return UserExternalCustomRingbackGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExternalCustomRingbackGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExternalCustomRingbackGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExternalCustomRingbackModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExternalCustomRingbackModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExternalCustomRingbackModifyRequest $request)
    {
        return $this->call($request);
    }
}

