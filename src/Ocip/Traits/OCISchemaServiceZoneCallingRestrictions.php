<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderZoneCallingRestrictionsGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderZoneCallingRestrictionsGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderZoneCallingRestrictionsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserZoneCallingRestrictionsGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserZoneCallingRestrictionsGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserZoneCallingRestrictionsModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceZoneCallingRestrictions
{

    /**
     * @param ServiceProviderZoneCallingRestrictionsGetRequest $request
     * @return ServiceProviderZoneCallingRestrictionsGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderZoneCallingRestrictionsGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderZoneCallingRestrictionsGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderZoneCallingRestrictionsModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderZoneCallingRestrictionsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderZoneCallingRestrictionsModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserZoneCallingRestrictionsGetRequest $request
     * @return UserZoneCallingRestrictionsGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userZoneCallingRestrictionsGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserZoneCallingRestrictionsGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserZoneCallingRestrictionsModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userZoneCallingRestrictionsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserZoneCallingRestrictionsModifyRequest $request)
    {
        return $this->call($request);
    }


}

