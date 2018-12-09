<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserChargeNumberGetRequest14sp9;
use CWM\BroadWorksConnector\Ocip\Models\UserChargeNumberGetResponse14sp9;
use CWM\BroadWorksConnector\Ocip\Models\UserChargeNumberModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceChargeNumber
{

    /**
     * @param UserChargeNumberGetRequest14sp9 $request
     * @return UserChargeNumberGetResponse14sp9
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userChargeNumberGetRequest14sp9(\CWM\BroadWorksConnector\Ocip\Models\UserChargeNumberGetRequest14sp9 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserChargeNumberModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userChargeNumberModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserChargeNumberModifyRequest $request)
    {
        return $this->call($request);
    }


}

