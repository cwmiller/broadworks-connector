<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceVoiceXml
{

    /**
     * @param GroupVoiceXmlAddInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupVoiceXmlAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceXmlDeleteInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupVoiceXmlDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceXmlGetInstanceListRequest $request
     * @return GroupVoiceXmlGetInstanceListResponse|ErrorResponse
     */
    public function groupVoiceXmlGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceXmlGetInstanceRequest19sp1 $request
     * @return GroupVoiceXmlGetInstanceResponse19sp1|ErrorResponse
     */
    public function groupVoiceXmlGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceXmlModifyActiveInstanceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupVoiceXmlModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceXmlModifyInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupVoiceXmlModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlModifyInstanceRequest $request)
    {
        return $this->call($request);
    }


}

