<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyIMPGetRequest19;
use CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyIMPGetResponse19;
use CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyIMPModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceThirdPartyIMP
{

    /**
     * @param SystemThirdPartyIMPGetRequest19 $request
     * @return SystemThirdPartyIMPGetResponse19
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemThirdPartyIMPGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyIMPGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemThirdPartyIMPModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemThirdPartyIMPModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyIMPModifyRequest $request)
    {
        return $this->call($request);
    }


}

