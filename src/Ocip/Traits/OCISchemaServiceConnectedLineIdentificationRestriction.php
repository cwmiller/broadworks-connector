<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserConnectedLineIdentificationRestrictionGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserConnectedLineIdentificationRestrictionGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserConnectedLineIdentificationRestrictionModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceConnectedLineIdentificationRestriction
{
    /**
     * @param UserConnectedLineIdentificationRestrictionGetRequest $request
     * @return UserConnectedLineIdentificationRestrictionGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userConnectedLineIdentificationRestrictionGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserConnectedLineIdentificationRestrictionGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserConnectedLineIdentificationRestrictionModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userConnectedLineIdentificationRestrictionModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserConnectedLineIdentificationRestrictionModifyRequest $request)
    {
        return $this->call($request);
    }
}

