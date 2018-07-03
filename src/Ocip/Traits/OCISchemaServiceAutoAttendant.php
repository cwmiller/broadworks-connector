<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantAddInstanceRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantConsolidatedAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantConsolidatedDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantConsolidatedModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantModifyInstanceRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuAddRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetUsageListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetUsageListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceAutoAttendant
{

    /**
     * @param GroupAutoAttendantAddInstanceRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantAddInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantAddInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantConsolidatedAddInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantConsolidatedAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantConsolidatedAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantConsolidatedDeleteInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantConsolidatedDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantConsolidatedDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantConsolidatedModifyInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantConsolidatedModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantConsolidatedModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantDeleteInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantGetInstanceListRequest $request
     * @return GroupAutoAttendantGetInstanceListResponse|ErrorResponse
     */
    public function groupAutoAttendantGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantGetInstanceRequest20 $request
     * @return GroupAutoAttendantGetInstanceResponse20|ErrorResponse
     */
    public function groupAutoAttendantGetInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantModifyActiveInstanceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantModifyInstanceRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantModifyInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantModifyInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuAddRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantSubmenuAddRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuAddRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantSubmenuDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuGetListRequest $request
     * @return GroupAutoAttendantSubmenuGetListResponse|ErrorResponse
     */
    public function groupAutoAttendantSubmenuGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuGetRequest20 $request
     * @return GroupAutoAttendantSubmenuGetResponse20|ErrorResponse
     */
    public function groupAutoAttendantSubmenuGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuGetUsageListRequest $request
     * @return GroupAutoAttendantSubmenuGetUsageListResponse|ErrorResponse
     */
    public function groupAutoAttendantSubmenuGetUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAutoAttendantSubmenuModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuModifyRequest20 $request)
    {
        return $this->call($request);
    }


}

