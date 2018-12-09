<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupSpeedDial100GetRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupSpeedDial100GetResponse17sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupSpeedDial100ModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSpeedDial100GetRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemSpeedDial100GetResponse17sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemSpeedDial100ModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial100AddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial100DeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial100GetListRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial100GetListResponse17sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial100GetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial100ModifyListRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceSpeedDial100
{

    /**
     * @param GroupSpeedDial100GetRequest17sp1 $request
     * @return GroupSpeedDial100GetResponse17sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupSpeedDial100GetRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupSpeedDial100GetRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupSpeedDial100ModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupSpeedDial100ModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupSpeedDial100ModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSpeedDial100GetRequest17sp1 $request
     * @return SystemSpeedDial100GetResponse17sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemSpeedDial100GetRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemSpeedDial100GetRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSpeedDial100ModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemSpeedDial100ModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSpeedDial100ModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSpeedDial100AddListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSpeedDial100AddListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial100AddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSpeedDial100DeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSpeedDial100DeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial100DeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSpeedDial100GetListRequest17sp1 $request
     * @return UserSpeedDial100GetListResponse17sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSpeedDial100GetListRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial100GetListRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSpeedDial100GetRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSpeedDial100GetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial100GetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSpeedDial100ModifyListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSpeedDial100ModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial100ModifyListRequest $request)
    {
        return $this->call($request);
    }


}

