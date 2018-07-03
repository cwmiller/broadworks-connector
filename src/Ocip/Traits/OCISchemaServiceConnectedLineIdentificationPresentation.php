<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemConnectedLineIdentificationPresentationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemConnectedLineIdentificationPresentationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceConnectedLineIdentificationPresentation
{

    /**
     * @param SystemConnectedLineIdentificationPresentationGetRequest $request
     * @return
     */
    public function systemConnectedLineIdentificationPresentationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemConnectedLineIdentificationPresentationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemConnectedLineIdentificationPresentationModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemConnectedLineIdentificationPresentationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemConnectedLineIdentificationPresentationModifyRequest $request)
    {
        return $this->call($request);
    }


}

