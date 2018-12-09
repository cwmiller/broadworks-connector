<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallTransferGetRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\UserCallTransferGetResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\UserCallTransferModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallTransfer
{

    /**
     * @param UserCallTransferGetRequest14sp4 $request
     * @return UserCallTransferGetResponse14sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallTransferGetRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\UserCallTransferGetRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallTransferModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallTransferModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallTransferModifyRequest $request)
    {
        return $this->call($request);
    }


}

