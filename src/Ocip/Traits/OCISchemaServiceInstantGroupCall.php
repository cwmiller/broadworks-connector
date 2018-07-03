<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallAddInstanceRequest14;
use CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallGetInstanceRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallGetInstanceResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceInstantGroupCall
{

    /**
     * @param GroupInstantGroupCallAddInstanceRequest14 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupInstantGroupCallAddInstanceRequest14(\CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallAddInstanceRequest14 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupInstantGroupCallDeleteInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupInstantGroupCallDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupInstantGroupCallGetInstanceListRequest $request
     * @return GroupInstantGroupCallGetInstanceListResponse|ErrorResponse
     */
    public function groupInstantGroupCallGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupInstantGroupCallGetInstanceRequest19sp1 $request
     * @return GroupInstantGroupCallGetInstanceResponse19sp1|ErrorResponse
     */
    public function groupInstantGroupCallGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupInstantGroupCallModifyActiveInstanceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupInstantGroupCallModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupInstantGroupCallModifyInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupInstantGroupCallModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupInstantGroupCallModifyInstanceRequest $request)
    {
        return $this->call($request);
    }


}

