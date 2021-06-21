<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemCallingNameRetrievalGetRequest24;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallingNameRetrievalGetResponse24;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallingNameRetrievalModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingNameRetrievalGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingNameRetrievalGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingNameRetrievalModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallingNameRetrieval
{

    /**
     * @param SystemCallingNameRetrievalGetRequest24 $request
     * @return SystemCallingNameRetrievalGetResponse24
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallingNameRetrievalGetRequest24(\CWM\BroadWorksConnector\Ocip\Models\SystemCallingNameRetrievalGetRequest24 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallingNameRetrievalModifyRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallingNameRetrievalModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\SystemCallingNameRetrievalModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingNameRetrievalGetRequest $request
     * @return UserCallingNameRetrievalGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallingNameRetrievalGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingNameRetrievalGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingNameRetrievalModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallingNameRetrievalModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingNameRetrievalModifyRequest $request)
    {
        return $this->call($request);
    }


}

