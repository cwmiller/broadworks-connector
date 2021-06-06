<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupDirectoryNumberHuntingGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupDirectoryNumberHuntingGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDirectoryNumberHuntingGetRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupDirectoryNumberHuntingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupDirectoryNumberHuntingModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceDirectoryNumberHunting
{

    /**
     * @param GroupDirectoryNumberHuntingGetAvailableUserListRequest $request
     * @return GroupDirectoryNumberHuntingGetAvailableUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupDirectoryNumberHuntingGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDirectoryNumberHuntingGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDirectoryNumberHuntingGetRequest17sp1 $request
     * @return GroupDirectoryNumberHuntingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupDirectoryNumberHuntingGetRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupDirectoryNumberHuntingGetRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupDirectoryNumberHuntingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupDirectoryNumberHuntingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupDirectoryNumberHuntingModifyRequest $request)
    {
        return $this->call($request);
    }


}

