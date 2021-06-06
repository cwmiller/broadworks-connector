<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserDirectedCallPickupWithBargeInGetRequest14sp7;
use CWM\BroadWorksConnector\Ocip\Models\UserDirectedCallPickupWithBargeInGetResponse14sp7;
use CWM\BroadWorksConnector\Ocip\Models\UserDirectedCallPickupWithBargeInModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceDirectedCallPickupWithBargeIn
{

    /**
     * @param UserDirectedCallPickupWithBargeInGetRequest14sp7 $request
     * @return UserDirectedCallPickupWithBargeInGetResponse14sp7
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userDirectedCallPickupWithBargeInGetRequest14sp7(\CWM\BroadWorksConnector\Ocip\Models\UserDirectedCallPickupWithBargeInGetRequest14sp7 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserDirectedCallPickupWithBargeInModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userDirectedCallPickupWithBargeInModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserDirectedCallPickupWithBargeInModifyRequest $request)
    {
        return $this->call($request);
    }


}

