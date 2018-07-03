<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemAnonymousCallRejectionGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAnonymousCallRejectionGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemAnonymousCallRejectionModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAnonymousCallRejectionGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAnonymousCallRejectionGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAnonymousCallRejectionModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceAnonymousCallRejection
{

    /**
     * @param SystemAnonymousCallRejectionGetRequest $request
     * @return SystemAnonymousCallRejectionGetResponse
     */
    public function systemAnonymousCallRejectionGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAnonymousCallRejectionGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAnonymousCallRejectionModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemAnonymousCallRejectionModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAnonymousCallRejectionModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAnonymousCallRejectionGetRequest $request
     * @return UserAnonymousCallRejectionGetResponse
     */
    public function userAnonymousCallRejectionGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAnonymousCallRejectionGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAnonymousCallRejectionModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userAnonymousCallRejectionModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAnonymousCallRejectionModifyRequest $request)
    {
        return $this->call($request);
    }


}

