<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderExternalCustomRingbackGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderExternalCustomRingbackGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderExternalCustomRingbackModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExternalCustomRingbackGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExternalCustomRingbackGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserExternalCustomRingbackModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceExternalCustomRingback
{

    /**
     * @param ServiceProviderExternalCustomRingbackGetRequest $request
     * @return ServiceProviderExternalCustomRingbackGetResponse
     */
    public function serviceProviderExternalCustomRingbackGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderExternalCustomRingbackGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderExternalCustomRingbackModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderExternalCustomRingbackModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderExternalCustomRingbackModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExternalCustomRingbackGetRequest $request
     * @return UserExternalCustomRingbackGetResponse
     */
    public function userExternalCustomRingbackGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExternalCustomRingbackGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExternalCustomRingbackModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userExternalCustomRingbackModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExternalCustomRingbackModifyRequest $request)
    {
        return $this->call($request);
    }


}

