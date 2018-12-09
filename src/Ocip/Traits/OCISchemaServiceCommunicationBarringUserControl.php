<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringUserControlGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringUserControlGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringUserControlModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringUserControlGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringUserControlGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringUserControlModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCommunicationBarringUserControl
{

    /**
     * @param SystemCommunicationBarringUserControlGetRequest $request
     * @return SystemCommunicationBarringUserControlGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCommunicationBarringUserControlGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringUserControlGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCommunicationBarringUserControlModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCommunicationBarringUserControlModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCommunicationBarringUserControlModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCommunicationBarringUserControlGetRequest $request
     * @return UserCommunicationBarringUserControlGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCommunicationBarringUserControlGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringUserControlGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCommunicationBarringUserControlModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCommunicationBarringUserControlModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCommunicationBarringUserControlModifyRequest $request)
    {
        return $this->call($request);
    }


}

