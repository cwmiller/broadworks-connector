<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserVideoAddOnGetRequest19;
use CWM\BroadWorksConnector\Ocip\Models\UserVideoAddOnGetResponse19;
use CWM\BroadWorksConnector\Ocip\Models\UserVideoAddOnModifyRequest14;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceVideoAddOn
{

    /**
     * @param UserVideoAddOnGetRequest19 $request
     * @return UserVideoAddOnGetResponse19|ErrorResponse
     */
    public function userVideoAddOnGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\UserVideoAddOnGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVideoAddOnModifyRequest14 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userVideoAddOnModifyRequest14(\CWM\BroadWorksConnector\Ocip\Models\UserVideoAddOnModifyRequest14 $request)
    {
        return $this->call($request);
    }


}

