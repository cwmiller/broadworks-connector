<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserAutomaticHoldRetrieveGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAutomaticHoldRetrieveGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAutomaticHoldRetrieveModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceAutomaticHoldRetrieve
{
    /**
     * @param UserAutomaticHoldRetrieveGetRequest $request
     * @return UserAutomaticHoldRetrieveGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userAutomaticHoldRetrieveGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAutomaticHoldRetrieveGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAutomaticHoldRetrieveModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userAutomaticHoldRetrieveModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAutomaticHoldRetrieveModifyRequest $request)
    {
        return $this->call($request);
    }
}

