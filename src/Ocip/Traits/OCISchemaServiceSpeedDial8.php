<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial8GetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial8GetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial8ModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceSpeedDial8
{

    /**
     * @param UserSpeedDial8GetListRequest $request
     * @return UserSpeedDial8GetListResponse|ErrorResponse
     */
    public function userSpeedDial8GetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial8GetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSpeedDial8ModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSpeedDial8ModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSpeedDial8ModifyListRequest $request)
    {
        return $this->call($request);
    }


}

