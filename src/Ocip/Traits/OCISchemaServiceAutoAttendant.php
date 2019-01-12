<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantAddInstanceRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantConsolidatedAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantConsolidatedDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantConsolidatedModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstancePagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstancePagedSortedListResponse;
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
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceAutoAttendant
{

    /**
     * @param GroupAutoAttendantAddInstanceRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantAddInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantAddInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantConsolidatedAddInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantConsolidatedAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantConsolidatedAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantConsolidatedDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantConsolidatedDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantConsolidatedDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantConsolidatedModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantConsolidatedModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantConsolidatedModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantGetInstanceListRequest $request
     * @return GroupAutoAttendantGetInstanceListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantGetInstancePagedSortedListRequest $request
     * @return GroupAutoAttendantGetInstancePagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantGetInstancePagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstancePagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantGetInstanceRequest20 $request
     * @return GroupAutoAttendantGetInstanceResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantGetInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantGetInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantModifyActiveInstanceListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantModifyInstanceRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantModifyInstanceRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantModifyInstanceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuAddRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantSubmenuAddRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuAddRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantSubmenuDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuGetListRequest $request
     * @return GroupAutoAttendantSubmenuGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantSubmenuGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuGetRequest20 $request
     * @return GroupAutoAttendantSubmenuGetResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantSubmenuGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuGetUsageListRequest $request
     * @return GroupAutoAttendantSubmenuGetUsageListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantSubmenuGetUsageListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuGetUsageListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAutoAttendantSubmenuModifyRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAutoAttendantSubmenuModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupAutoAttendantSubmenuModifyRequest20 $request)
    {
        return $this->call($request);
    }


}

