<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceAddEndpointRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceDeleteEndpointListRequest14;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetEndpointRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetEndpointResponse22;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceModifyEndpointRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceSharedCallAppearance
{
    /**
     * @param UserSharedCallAppearanceAddEndpointRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSharedCallAppearanceAddEndpointRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceAddEndpointRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSharedCallAppearanceDeleteEndpointListRequest14 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSharedCallAppearanceDeleteEndpointListRequest14(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceDeleteEndpointListRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSharedCallAppearanceGetEndpointRequest22 $request
     * @return UserSharedCallAppearanceGetEndpointResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSharedCallAppearanceGetEndpointRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetEndpointRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSharedCallAppearanceGetRequest21sp1 $request
     * @return UserSharedCallAppearanceGetResponse21sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSharedCallAppearanceGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSharedCallAppearanceModifyEndpointRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSharedCallAppearanceModifyEndpointRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceModifyEndpointRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSharedCallAppearanceModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSharedCallAppearanceModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceModifyRequest $request)
    {
        return $this->call($request);
    }
}

