<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCollectCallGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCollectCallGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCollectCallModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCollectCallPrefixDigitsAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCollectCallPrefixDigitsDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCollectCallPrefixDigitsGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCollectCallPrefixDigitsGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAutomaticCollectCallGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAutomaticCollectCallGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAutomaticCollectCallModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceAutomaticCollectCall
{
    /**
     * @param SystemAutomaticCollectCallGetRequest22 $request
     * @return SystemAutomaticCollectCallGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemAutomaticCollectCallGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCollectCallGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAutomaticCollectCallModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemAutomaticCollectCallModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCollectCallModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAutomaticCollectCallPrefixDigitsAddListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemAutomaticCollectCallPrefixDigitsAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCollectCallPrefixDigitsAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAutomaticCollectCallPrefixDigitsDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemAutomaticCollectCallPrefixDigitsDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCollectCallPrefixDigitsDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAutomaticCollectCallPrefixDigitsGetListRequest $request
     * @return SystemAutomaticCollectCallPrefixDigitsGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemAutomaticCollectCallPrefixDigitsGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAutomaticCollectCallPrefixDigitsGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAutomaticCollectCallGetRequest $request
     * @return UserAutomaticCollectCallGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userAutomaticCollectCallGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAutomaticCollectCallGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAutomaticCollectCallModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userAutomaticCollectCallModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAutomaticCollectCallModifyRequest $request)
    {
        return $this->call($request);
    }
}

