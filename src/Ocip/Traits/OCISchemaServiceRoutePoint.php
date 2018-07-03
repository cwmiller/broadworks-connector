<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointAddDNISRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointAddInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointBouncedCallGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointBouncedCallGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointBouncedCallModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointDeleteDNISRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointDistinctiveRingingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointDistinctiveRingingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointDistinctiveRingingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointForcedForwardingGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointForcedForwardingGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointForcedForwardingModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetAnnouncementRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetAnnouncementResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetDNISAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetDNISAgentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetDNISAnnouncementRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetDNISAnnouncementResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetDNISListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetDNISListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetDNISRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetDNISResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetFailoverPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetFailoverPolicyResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetInstanceResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointHolidayServiceGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointHolidayServiceGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointHolidayServiceModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointManualFailoverRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyAnnouncementRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyDNISAnnouncementRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyDNISParametersRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyDNISRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyFailoverPolicyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointNightServiceGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointNightServiceGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointNightServiceModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointOverflowGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointOverflowGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointOverflowModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeSettingsGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeSettingsGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeSettingsModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserRoutePointCallDispositionCodeGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserRoutePointCallDispositionCodeGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserRoutePointSupervisorGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserRoutePointSupervisorModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceRoutePoint
{

    /**
     * @param GroupRoutePointAddDNISRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointAddDNISRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointAddDNISRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointAddInstanceRequest22 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointAddInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointAddInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointBouncedCallGetRequest $request
     * @return GroupRoutePointBouncedCallGetResponse|ErrorResponse
     */
    public function groupRoutePointBouncedCallGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointBouncedCallGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointBouncedCallModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointBouncedCallModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointBouncedCallModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointDeleteDNISRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointDeleteDNISRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointDeleteDNISRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointDeleteInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointDistinctiveRingingGetRequest $request
     * @return GroupRoutePointDistinctiveRingingGetResponse
     */
    public function groupRoutePointDistinctiveRingingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointDistinctiveRingingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointDistinctiveRingingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointDistinctiveRingingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointDistinctiveRingingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointForcedForwardingGetRequest20 $request
     * @return GroupRoutePointForcedForwardingGetResponse20|ErrorResponse
     */
    public function groupRoutePointForcedForwardingGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointForcedForwardingGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointForcedForwardingModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointForcedForwardingModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointForcedForwardingModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointGetAnnouncementRequest20 $request
     * @return GroupRoutePointGetAnnouncementResponse20|ErrorResponse
     */
    public function groupRoutePointGetAnnouncementRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetAnnouncementRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointGetDNISAgentListRequest $request
     * @return GroupRoutePointGetDNISAgentListResponse|ErrorResponse
     */
    public function groupRoutePointGetDNISAgentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetDNISAgentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointGetDNISAnnouncementRequest20 $request
     * @return GroupRoutePointGetDNISAnnouncementResponse20|ErrorResponse
     */
    public function groupRoutePointGetDNISAnnouncementRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetDNISAnnouncementRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointGetDNISListRequest $request
     * @return GroupRoutePointGetDNISListResponse|ErrorResponse
     */
    public function groupRoutePointGetDNISListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetDNISListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointGetDNISRequest $request
     * @return GroupRoutePointGetDNISResponse|ErrorResponse
     */
    public function groupRoutePointGetDNISRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetDNISRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointGetFailoverPolicyRequest $request
     * @return GroupRoutePointGetFailoverPolicyResponse|ErrorResponse
     */
    public function groupRoutePointGetFailoverPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetFailoverPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointGetInstanceListRequest $request
     * @return GroupRoutePointGetInstanceListResponse|ErrorResponse
     */
    public function groupRoutePointGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointGetInstanceRequest22 $request
     * @return GroupRoutePointGetInstanceResponse19sp1|ErrorResponse
     */
    public function groupRoutePointGetInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointGetInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointHolidayServiceGetRequest20 $request
     * @return GroupRoutePointHolidayServiceGetResponse20|ErrorResponse
     */
    public function groupRoutePointHolidayServiceGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointHolidayServiceGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointHolidayServiceModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointHolidayServiceModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointHolidayServiceModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointManualFailoverRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointManualFailoverRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointManualFailoverRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointModifyActiveInstanceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointModifyAnnouncementRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointModifyAnnouncementRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyAnnouncementRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointModifyDNISAnnouncementRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointModifyDNISAnnouncementRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyDNISAnnouncementRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointModifyDNISParametersRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointModifyDNISParametersRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyDNISParametersRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointModifyDNISRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointModifyDNISRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyDNISRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointModifyFailoverPolicyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointModifyFailoverPolicyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyFailoverPolicyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointModifyInstanceRequest22 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointModifyInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointModifyInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointNightServiceGetRequest20 $request
     * @return GroupRoutePointNightServiceGetResponse20|ErrorResponse
     */
    public function groupRoutePointNightServiceGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointNightServiceGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointNightServiceModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointNightServiceModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointNightServiceModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointOverflowGetRequest20 $request
     * @return GroupRoutePointOverflowGetResponse20|ErrorResponse
     */
    public function groupRoutePointOverflowGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointOverflowGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointOverflowModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointOverflowModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointOverflowModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointQueueCallDispositionCodeAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointQueueCallDispositionCodeAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointQueueCallDispositionCodeDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointQueueCallDispositionCodeDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointQueueCallDispositionCodeGetListRequest $request
     * @return GroupRoutePointQueueCallDispositionCodeGetListResponse|ErrorResponse
     */
    public function groupRoutePointQueueCallDispositionCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointQueueCallDispositionCodeGetRequest $request
     * @return GroupRoutePointQueueCallDispositionCodeGetResponse|ErrorResponse
     */
    public function groupRoutePointQueueCallDispositionCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointQueueCallDispositionCodeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointQueueCallDispositionCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointQueueCallDispositionCodeSettingsGetRequest $request
     * @return GroupRoutePointQueueCallDispositionCodeSettingsGetResponse
     */
    public function groupRoutePointQueueCallDispositionCodeSettingsGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeSettingsGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRoutePointQueueCallDispositionCodeSettingsModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupRoutePointQueueCallDispositionCodeSettingsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRoutePointQueueCallDispositionCodeSettingsModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserRoutePointCallDispositionCodeGetAvailableListRequest $request
     * @return UserRoutePointCallDispositionCodeGetAvailableListResponse|ErrorResponse
     */
    public function userRoutePointCallDispositionCodeGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserRoutePointCallDispositionCodeGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserRoutePointSupervisorGetListRequest $request
     * @return
     */
    public function userRoutePointSupervisorGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserRoutePointSupervisorGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserRoutePointSupervisorModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userRoutePointSupervisorModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserRoutePointSupervisorModifyListRequest $request)
    {
        return $this->call($request);
    }


}

