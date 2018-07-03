<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserAutomaticHoldRetrieveGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAutomaticHoldRetrieveGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAutomaticHoldRetrieveModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceAutomaticHoldRetrieve
{

    /**
     * @param UserAutomaticHoldRetrieveGetRequest $request
     * @return UserAutomaticHoldRetrieveGetResponse
     */
    public function userAutomaticHoldRetrieveGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAutomaticHoldRetrieveGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAutomaticHoldRetrieveModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userAutomaticHoldRetrieveModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAutomaticHoldRetrieveModifyRequest $request)
    {
        return $this->call($request);
    }


}

