<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupAdviceOfChargeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdviceOfChargeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAdviceOfChargeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdviceOfChargeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdviceOfChargeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdviceOfChargeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeCostInformationSourceAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeCostInformationSourceDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeCostInformationSourceGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeCostInformationSourceGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeCostInformationSourceModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeGetRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeGetResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeModifyRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserAdviceOfChargeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAdviceOfChargeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAdviceOfChargeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceAdviceOfCharge
{

    /**
     * @param GroupAdviceOfChargeGetRequest $request
     * @return GroupAdviceOfChargeGetResponse|ErrorResponse
     */
    public function groupAdviceOfChargeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAdviceOfChargeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAdviceOfChargeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAdviceOfChargeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAdviceOfChargeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdviceOfChargeGetRequest $request
     * @return ServiceProviderAdviceOfChargeGetResponse|ErrorResponse
     */
    public function serviceProviderAdviceOfChargeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdviceOfChargeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderAdviceOfChargeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderAdviceOfChargeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdviceOfChargeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAdviceOfChargeCostInformationSourceAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemAdviceOfChargeCostInformationSourceAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeCostInformationSourceAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAdviceOfChargeCostInformationSourceDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemAdviceOfChargeCostInformationSourceDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeCostInformationSourceDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAdviceOfChargeCostInformationSourceGetListRequest $request
     * @return SystemAdviceOfChargeCostInformationSourceGetListResponse|ErrorResponse
     */
    public function systemAdviceOfChargeCostInformationSourceGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeCostInformationSourceGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAdviceOfChargeCostInformationSourceModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemAdviceOfChargeCostInformationSourceModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeCostInformationSourceModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAdviceOfChargeGetRequest19sp1 $request
     * @return SystemAdviceOfChargeGetResponse19sp1|ErrorResponse
     */
    public function systemAdviceOfChargeGetRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeGetRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemAdviceOfChargeModifyRequest19sp1 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemAdviceOfChargeModifyRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\SystemAdviceOfChargeModifyRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAdviceOfChargeGetRequest $request
     * @return UserAdviceOfChargeGetResponse
     */
    public function userAdviceOfChargeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAdviceOfChargeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAdviceOfChargeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userAdviceOfChargeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAdviceOfChargeModifyRequest $request)
    {
        return $this->call($request);
    }


}

