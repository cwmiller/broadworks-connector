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
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceVoiceXml
{

    /**
     * @param GroupVoiceXmlAddInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupVoiceXmlAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceXmlDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupVoiceXmlDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceXmlGetInstanceListRequest $request
     * @return GroupVoiceXmlGetInstanceListResponse
     * @throws ErrorResponseException
     */
    public function groupVoiceXmlGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceXmlGetInstanceRequest19sp1 $request
     * @return GroupVoiceXmlGetInstanceResponse19sp1
     * @throws ErrorResponseException
     */
    public function groupVoiceXmlGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceXmlModifyActiveInstanceListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupVoiceXmlModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceXmlModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupVoiceXmlModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceXmlModifyInstanceRequest $request)
    {
        return $this->call($request);
    }


}

