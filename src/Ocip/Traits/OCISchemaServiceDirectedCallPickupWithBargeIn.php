<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserDirectedCallPickupWithBargeInGetRequest14sp7;
use CWM\BroadWorksConnector\Ocip\Models\UserDirectedCallPickupWithBargeInGetResponse14sp7;
use CWM\BroadWorksConnector\Ocip\Models\UserDirectedCallPickupWithBargeInModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceDirectedCallPickupWithBargeIn
{

    /**
     * @param UserDirectedCallPickupWithBargeInGetRequest14sp7 $request
     * @return UserDirectedCallPickupWithBargeInGetResponse14sp7
     */
    public function userDirectedCallPickupWithBargeInGetRequest14sp7(\CWM\BroadWorksConnector\Ocip\Models\UserDirectedCallPickupWithBargeInGetRequest14sp7 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserDirectedCallPickupWithBargeInModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userDirectedCallPickupWithBargeInModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserDirectedCallPickupWithBargeInModifyRequest $request)
    {
        return $this->call($request);
    }


}

