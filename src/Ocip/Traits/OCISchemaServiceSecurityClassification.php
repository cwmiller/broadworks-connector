<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupSecurityClassificationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupSecurityClassificationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupSecurityClassificationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationAddClassificationRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationDeleteClassificationRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationGetClassificationRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationGetClassificationResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationGetClassificationTrunkGroupUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationGetClassificationTrunkGroupUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationGetClassificationUserUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationGetClassificationUserUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationModifyClassificationRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSecurityClassificationGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserSecurityClassificationGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\UserSecurityClassificationModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceSecurityClassification
{

    /**
     * @param GroupTrunkGroupSecurityClassificationGetRequest $request
     * @return GroupTrunkGroupSecurityClassificationGetResponse
     * @throws ErrorResponseException
     */
    public function groupTrunkGroupSecurityClassificationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupSecurityClassificationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupSecurityClassificationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupTrunkGroupSecurityClassificationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupSecurityClassificationModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSecurityClassificationAddClassificationRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemSecurityClassificationAddClassificationRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationAddClassificationRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSecurityClassificationDeleteClassificationRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemSecurityClassificationDeleteClassificationRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationDeleteClassificationRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSecurityClassificationGetClassificationRequest $request
     * @return SystemSecurityClassificationGetClassificationResponse
     * @throws ErrorResponseException
     */
    public function systemSecurityClassificationGetClassificationRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationGetClassificationRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSecurityClassificationGetClassificationTrunkGroupUsageListRequest $request
     * @return SystemSecurityClassificationGetClassificationTrunkGroupUsageListResponse
     * @throws ErrorResponseException
     */
    public function systemSecurityClassificationGetClassificationTrunkGroupUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationGetClassificationTrunkGroupUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSecurityClassificationGetClassificationUserUsageListRequest $request
     * @return SystemSecurityClassificationGetClassificationUserUsageListResponse
     * @throws ErrorResponseException
     */
    public function systemSecurityClassificationGetClassificationUserUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationGetClassificationUserUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSecurityClassificationGetRequest21 $request
     * @return SystemSecurityClassificationGetResponse21
     * @throws ErrorResponseException
     */
    public function systemSecurityClassificationGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSecurityClassificationModifyClassificationRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemSecurityClassificationModifyClassificationRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationModifyClassificationRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSecurityClassificationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemSecurityClassificationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSecurityClassificationModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSecurityClassificationGetRequest22 $request
     * @return UserSecurityClassificationGetResponse22
     * @throws ErrorResponseException
     */
    public function userSecurityClassificationGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserSecurityClassificationGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSecurityClassificationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userSecurityClassificationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSecurityClassificationModifyRequest $request)
    {
        return $this->call($request);
    }


}

