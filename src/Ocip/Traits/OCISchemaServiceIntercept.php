<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupModifyRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserAddDnListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserDeleteDnListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserGetDnListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserGetDnListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserModifyDnRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserModifyRequest21sp1;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceIntercept
{

    /**
     * @param GroupInterceptGroupGetRequest21sp1 $request
     * @return GroupInterceptGroupGetResponse21sp1
     * @throws ErrorResponseException
     */
    public function groupInterceptGroupGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupInterceptGroupModifyRequest21sp1 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupInterceptGroupModifyRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupInterceptGroupModifyRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemInterceptUserAddDnListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemInterceptUserAddDnListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserAddDnListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemInterceptUserDeleteDnListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemInterceptUserDeleteDnListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserDeleteDnListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemInterceptUserGetDnListRequest $request
     * @return SystemInterceptUserGetDnListResponse
     * @throws ErrorResponseException
     */
    public function systemInterceptUserGetDnListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserGetDnListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemInterceptUserGetRequest $request
     * @return SystemInterceptUserGetResponse
     * @throws ErrorResponseException
     */
    public function systemInterceptUserGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemInterceptUserModifyDnRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemInterceptUserModifyDnRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserModifyDnRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemInterceptUserModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemInterceptUserModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemInterceptUserModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserInterceptUserGetRequest21sp1 $request
     * @return UserInterceptUserGetResponse21sp1
     * @throws ErrorResponseException
     */
    public function userInterceptUserGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserInterceptUserModifyRequest21sp1 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userInterceptUserModifyRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserInterceptUserModifyRequest21sp1 $request)
    {
        return $this->call($request);
    }


}

