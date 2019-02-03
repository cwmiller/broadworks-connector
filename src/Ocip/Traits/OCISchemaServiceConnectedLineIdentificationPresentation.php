<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemConnectedLineIdentificationPresentationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemConnectedLineIdentificationPresentationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemConnectedLineIdentificationPresentationModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceConnectedLineIdentificationPresentation
{

    /**
     * @param SystemConnectedLineIdentificationPresentationGetRequest $request
     * @return SystemConnectedLineIdentificationPresentationGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemConnectedLineIdentificationPresentationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemConnectedLineIdentificationPresentationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemConnectedLineIdentificationPresentationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemConnectedLineIdentificationPresentationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemConnectedLineIdentificationPresentationModifyRequest $request)
    {
        return $this->call($request);
    }


}

