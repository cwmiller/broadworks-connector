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
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceSharedCallAppearance
{

    /**
     * @param UserSharedCallAppearanceAddEndpointRequest14sp2 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSharedCallAppearanceAddEndpointRequest14sp2(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceAddEndpointRequest14sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSharedCallAppearanceDeleteEndpointListRequest14 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSharedCallAppearanceDeleteEndpointListRequest14(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceDeleteEndpointListRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSharedCallAppearanceGetEndpointRequest $request
     * @return UserSharedCallAppearanceGetEndpointResponse|ErrorResponse
     */
    public function userSharedCallAppearanceGetEndpointRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetEndpointRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSharedCallAppearanceGetRequest21sp1 $request
     * @return UserSharedCallAppearanceGetResponse21sp1|ErrorResponse
     */
    public function userSharedCallAppearanceGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSharedCallAppearanceModifyEndpointRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSharedCallAppearanceModifyEndpointRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceModifyEndpointRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSharedCallAppearanceModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSharedCallAppearanceModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSharedCallAppearanceModifyRequest $request)
    {
        return $this->call($request);
    }


}

