<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanAuthorizationCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanAuthorizationCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanCallMeNowGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanCallMeNowGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanCallMeNowModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDepartmentAuthorizationCodeAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDepartmentAuthorizationCodeDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDepartmentAuthorizationCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDepartmentAuthorizationCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanCallMeNowGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanCallMeNowGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanCallMeNowModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanOriginatingGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanOriginatingGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanOriginatingModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanRedirectingGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanRedirectingGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanRedirectingModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanOriginatingGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanOriginatingGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanOriginatingModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPatternAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPatternDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPatternGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPatternGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPatternModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanCallMeNowGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanCallMeNowGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanCallMeNowModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanOriginatingModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanRedirectingModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanRedirectedGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanRedirectedGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanRedirectedModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanRedirectingGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanRedirectingGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanRedirectingModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanTransferNumbersGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanTransferNumbersGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanTransferNumbersModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanCallTypeAddMappingRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanCallTypeDeleteMappingRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanCallTypeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanCallTypeGetMappingListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanCallTypeGetMappingListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanGetRequest17sp3;
use CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanGetResponse17sp3;
use CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanAuthorizationCodeAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanAuthorizationCodeDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanAuthorizationCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanAuthorizationCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanAuthorizationCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanAuthorizationCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanAuthorizationCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanCallMeNowGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanCallMeNowGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanCallMeNowModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanCallMeNowGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanCallMeNowGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanCallMeNowModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanOriginatingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanOriginatingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanOriginatingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanRedirectingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanRedirectingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanRedirectingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanOriginatingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanOriginatingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanOriginatingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanCallMeNowModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanOriginatingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanOriginatingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanOriginatingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanRedirectingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanRedirectedGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanRedirectedGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanRedirectedModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanRedirectingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanRedirectingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanRedirectingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanSustainedAuthorizationCodeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanSustainedAuthorizationCodeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanTransferNumbersGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanTransferNumbersGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanTransferNumbersModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceOutgoingCallingPlan
{

    /**
     * @param GroupOutgoingCallingPlanAuthorizationCodeGetListRequest $request
     * @return GroupOutgoingCallingPlanAuthorizationCodeGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanAuthorizationCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanAuthorizationCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanCallMeNowGetListRequest $request
     * @return GroupOutgoingCallingPlanCallMeNowGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanCallMeNowGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanCallMeNowGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanCallMeNowModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanCallMeNowModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanCallMeNowModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanDepartmentAuthorizationCodeAddListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanDepartmentAuthorizationCodeAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDepartmentAuthorizationCodeAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanDepartmentAuthorizationCodeDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanDepartmentAuthorizationCodeDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDepartmentAuthorizationCodeDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanDepartmentAuthorizationCodeGetListRequest $request
     * @return GroupOutgoingCallingPlanDepartmentAuthorizationCodeGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanDepartmentAuthorizationCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDepartmentAuthorizationCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanDigitPlanCallMeNowGetListRequest $request
     * @return GroupOutgoingCallingPlanDigitPlanCallMeNowGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanDigitPlanCallMeNowGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanCallMeNowGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanDigitPlanCallMeNowModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanDigitPlanCallMeNowModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanCallMeNowModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanDigitPlanOriginatingGetListRequest $request
     * @return GroupOutgoingCallingPlanDigitPlanOriginatingGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanDigitPlanOriginatingGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanOriginatingGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanDigitPlanOriginatingModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanDigitPlanOriginatingModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanOriginatingModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanDigitPlanRedirectingGetListRequest $request
     * @return GroupOutgoingCallingPlanDigitPlanRedirectingGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanDigitPlanRedirectingGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanRedirectingGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanDigitPlanRedirectingModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanDigitPlanRedirectingModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanDigitPlanRedirectingModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanOriginatingGetListRequest $request
     * @return GroupOutgoingCallingPlanOriginatingGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanOriginatingGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanOriginatingGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanOriginatingModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanOriginatingModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanOriginatingModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanPinholeDigitPatternAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanPinholeDigitPatternAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPatternAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanPinholeDigitPatternDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanPinholeDigitPatternDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPatternDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanPinholeDigitPatternGetListRequest $request
     * @return GroupOutgoingCallingPlanPinholeDigitPatternGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanPinholeDigitPatternGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPatternGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanPinholeDigitPatternModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanPinholeDigitPatternModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPatternModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanPinholeDigitPlanCallMeNowGetListRequest $request
     * @return GroupOutgoingCallingPlanPinholeDigitPlanCallMeNowGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanPinholeDigitPlanCallMeNowGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanCallMeNowGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanPinholeDigitPlanCallMeNowModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanPinholeDigitPlanCallMeNowModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanCallMeNowModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListRequest $request
     * @return GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanPinholeDigitPlanOriginatingModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanPinholeDigitPlanOriginatingModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanOriginatingModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListRequest $request
     * @return GroupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanPinholeDigitPlanRedirectingModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanPinholeDigitPlanRedirectingModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanPinholeDigitPlanRedirectingModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanRedirectedGetListRequest $request
     * @return GroupOutgoingCallingPlanRedirectedGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanRedirectedGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanRedirectedGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanRedirectedModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanRedirectedModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanRedirectedModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanRedirectingGetListRequest $request
     * @return GroupOutgoingCallingPlanRedirectingGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanRedirectingGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanRedirectingGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanRedirectingModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanRedirectingModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanRedirectingModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanTransferNumbersGetListRequest $request
     * @return GroupOutgoingCallingPlanTransferNumbersGetListResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanTransferNumbersGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanTransferNumbersGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupOutgoingCallingPlanTransferNumbersModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupOutgoingCallingPlanTransferNumbersModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupOutgoingCallingPlanTransferNumbersModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemOutgoingCallingPlanCallTypeAddMappingRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemOutgoingCallingPlanCallTypeAddMappingRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanCallTypeAddMappingRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemOutgoingCallingPlanCallTypeDeleteMappingRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemOutgoingCallingPlanCallTypeDeleteMappingRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanCallTypeDeleteMappingRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemOutgoingCallingPlanCallTypeGetListRequest $request
     * @return
     */
    public function systemOutgoingCallingPlanCallTypeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanCallTypeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemOutgoingCallingPlanCallTypeGetMappingListRequest $request
     * @return SystemOutgoingCallingPlanCallTypeGetMappingListResponse|ErrorResponse
     */
    public function systemOutgoingCallingPlanCallTypeGetMappingListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanCallTypeGetMappingListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemOutgoingCallingPlanGetRequest17sp3 $request
     * @return SystemOutgoingCallingPlanGetResponse17sp3|ErrorResponse
     */
    public function systemOutgoingCallingPlanGetRequest17sp3(\CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanGetRequest17sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemOutgoingCallingPlanModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemOutgoingCallingPlanModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemOutgoingCallingPlanModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanAuthorizationCodeAddListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanAuthorizationCodeAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanAuthorizationCodeAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanAuthorizationCodeDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanAuthorizationCodeDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanAuthorizationCodeDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanAuthorizationCodeGetListRequest $request
     * @return UserOutgoingCallingPlanAuthorizationCodeGetListResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanAuthorizationCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanAuthorizationCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanAuthorizationCodeGetRequest $request
     * @return UserOutgoingCallingPlanAuthorizationCodeGetResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanAuthorizationCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanAuthorizationCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanAuthorizationCodeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanAuthorizationCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanAuthorizationCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanCallMeNowGetRequest $request
     * @return UserOutgoingCallingPlanCallMeNowGetResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanCallMeNowGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanCallMeNowGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanCallMeNowModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanCallMeNowModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanCallMeNowModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanDigitPlanCallMeNowGetRequest $request
     * @return UserOutgoingCallingPlanDigitPlanCallMeNowGetResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanDigitPlanCallMeNowGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanCallMeNowGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanDigitPlanCallMeNowModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanDigitPlanCallMeNowModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanCallMeNowModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanDigitPlanOriginatingGetRequest $request
     * @return UserOutgoingCallingPlanDigitPlanOriginatingGetResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanDigitPlanOriginatingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanOriginatingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanDigitPlanOriginatingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanDigitPlanOriginatingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanOriginatingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanDigitPlanRedirectingGetRequest $request
     * @return UserOutgoingCallingPlanDigitPlanRedirectingGetResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanDigitPlanRedirectingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanRedirectingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanDigitPlanRedirectingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanDigitPlanRedirectingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanDigitPlanRedirectingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanOriginatingGetRequest $request
     * @return UserOutgoingCallingPlanOriginatingGetResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanOriginatingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanOriginatingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanOriginatingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanOriginatingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanOriginatingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetRequest $request
     * @return UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanPinholeDigitPlanCallMeNowGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanPinholeDigitPlanCallMeNowModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanPinholeDigitPlanCallMeNowModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanCallMeNowModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanPinholeDigitPlanOriginatingGetRequest $request
     * @return UserOutgoingCallingPlanPinholeDigitPlanOriginatingGetResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanPinholeDigitPlanOriginatingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanOriginatingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanPinholeDigitPlanOriginatingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanPinholeDigitPlanOriginatingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanOriginatingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetRequest $request
     * @return UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanPinholeDigitPlanRedirectingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanPinholeDigitPlanRedirectingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanPinholeDigitPlanRedirectingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanPinholeDigitPlanRedirectingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanRedirectedGetRequest $request
     * @return UserOutgoingCallingPlanRedirectedGetResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanRedirectedGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanRedirectedGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanRedirectedModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanRedirectedModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanRedirectedModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanRedirectingGetRequest $request
     * @return UserOutgoingCallingPlanRedirectingGetResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanRedirectingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanRedirectingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanRedirectingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanRedirectingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanRedirectingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanSustainedAuthorizationCodeGetRequest $request
     * @return UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanSustainedAuthorizationCodeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanSustainedAuthorizationCodeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanSustainedAuthorizationCodeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanSustainedAuthorizationCodeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanSustainedAuthorizationCodeModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanTransferNumbersGetRequest $request
     * @return UserOutgoingCallingPlanTransferNumbersGetResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanTransferNumbersGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanTransferNumbersGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserOutgoingCallingPlanTransferNumbersModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userOutgoingCallingPlanTransferNumbersModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserOutgoingCallingPlanTransferNumbersModifyRequest $request)
    {
        return $this->call($request);
    }


}

