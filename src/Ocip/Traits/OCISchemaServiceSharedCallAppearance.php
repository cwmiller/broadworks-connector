<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceAddEndpointRequest14sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceDeleteEndpointListRequest14;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetEndpointRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetEndpointResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceModifyEndpointRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceSharedCallAppearance
{

    /**
     * @param UserSharedCallAppearanceAddEndpointRequest14sp2 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSharedCallAppearanceAddEndpointRequest14sp2(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceAddEndpointRequest14sp2 $request)
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
     * @param UserSharedCallAppearanceGetEndpointRequest $request
     * @return UserSharedCallAppearanceGetEndpointResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSharedCallAppearanceGetEndpointRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetEndpointRequest $request)
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

