<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserChargeNumberGetRequest14sp9;
use CWM\BroadWorksConnector\Ocip\Models\UserChargeNumberGetResponse14sp9;
use CWM\BroadWorksConnector\Ocip\Models\UserChargeNumberModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceChargeNumber
{

    /**
     * @param UserChargeNumberGetRequest14sp9 $request
     * @return UserChargeNumberGetResponse14sp9|ErrorResponse
     */
    public function userChargeNumberGetRequest14sp9(\CWM\BroadWorksConnector\Ocip\Models\UserChargeNumberGetRequest14sp9 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserChargeNumberModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userChargeNumberModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserChargeNumberModifyRequest $request)
    {
        return $this->call($request);
    }


}

