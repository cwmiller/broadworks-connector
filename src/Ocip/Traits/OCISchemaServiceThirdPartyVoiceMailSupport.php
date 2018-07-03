<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupThirdPartyVoiceMailSupportGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupThirdPartyVoiceMailSupportGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupThirdPartyVoiceMailSupportModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportAddDnRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportDeleteDnRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportGetDnListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportGetDnListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportModifyDnRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserThirdPartyVoiceMailSupportGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\UserThirdPartyVoiceMailSupportGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\UserThirdPartyVoiceMailSupportModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceThirdPartyVoiceMailSupport
{

    /**
     * @param GroupThirdPartyVoiceMailSupportGetRequest $request
     * @return GroupThirdPartyVoiceMailSupportGetResponse
     */
    public function groupThirdPartyVoiceMailSupportGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupThirdPartyVoiceMailSupportGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupThirdPartyVoiceMailSupportModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupThirdPartyVoiceMailSupportModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupThirdPartyVoiceMailSupportModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemThirdPartyVoiceMailSupportAddDnRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemThirdPartyVoiceMailSupportAddDnRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportAddDnRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemThirdPartyVoiceMailSupportDeleteDnRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemThirdPartyVoiceMailSupportDeleteDnRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportDeleteDnRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemThirdPartyVoiceMailSupportGetDnListRequest $request
     * @return SystemThirdPartyVoiceMailSupportGetDnListResponse|ErrorResponse
     */
    public function systemThirdPartyVoiceMailSupportGetDnListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportGetDnListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemThirdPartyVoiceMailSupportGetRequest17sp4 $request
     * @return SystemThirdPartyVoiceMailSupportGetResponse17sp4
     */
    public function systemThirdPartyVoiceMailSupportGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemThirdPartyVoiceMailSupportModifyDnRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemThirdPartyVoiceMailSupportModifyDnRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportModifyDnRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemThirdPartyVoiceMailSupportModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemThirdPartyVoiceMailSupportModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemThirdPartyVoiceMailSupportModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserThirdPartyVoiceMailSupportGetRequest17 $request
     * @return UserThirdPartyVoiceMailSupportGetResponse17
     */
    public function userThirdPartyVoiceMailSupportGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserThirdPartyVoiceMailSupportGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserThirdPartyVoiceMailSupportModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userThirdPartyVoiceMailSupportModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserThirdPartyVoiceMailSupportModifyRequest $request)
    {
        return $this->call($request);
    }


}

