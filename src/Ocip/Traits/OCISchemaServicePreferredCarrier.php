<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierGroupGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierGroupGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierGroupModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierGetCarrierListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierGetCarrierListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierGetGroupListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierGetGroupListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierUserGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierUserGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierUserModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServicePreferredCarrier
{

    /**
     * @param GroupPreferredCarrierGroupGetRequest $request
     * @return GroupPreferredCarrierGroupGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupPreferredCarrierGroupGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierGroupGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupPreferredCarrierGroupModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupPreferredCarrierGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderPreferredCarrierAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderPreferredCarrierAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderPreferredCarrierDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderPreferredCarrierDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest $request
     * @return ServiceProviderPreferredCarrierGetAvailableCountryCodeListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderPreferredCarrierGetAvailableCountryCodeListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderPreferredCarrierGetCarrierListRequest $request
     * @return ServiceProviderPreferredCarrierGetCarrierListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderPreferredCarrierGetCarrierListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierGetCarrierListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderPreferredCarrierGetListRequest $request
     * @return ServiceProviderPreferredCarrierGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderPreferredCarrierGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderPreferredCarrierGetRequest $request
     * @return ServiceProviderPreferredCarrierGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderPreferredCarrierGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderPreferredCarrierModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderPreferredCarrierModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderPreferredCarrierModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPreferredCarrierAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPreferredCarrierAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPreferredCarrierDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPreferredCarrierDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPreferredCarrierGetGroupListRequest $request
     * @return SystemPreferredCarrierGetGroupListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPreferredCarrierGetGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierGetGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPreferredCarrierGetListRequest $request
     * @return SystemPreferredCarrierGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPreferredCarrierGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPreferredCarrierGetRequest $request
     * @return SystemPreferredCarrierGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPreferredCarrierGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPreferredCarrierGetUserListRequest $request
     * @return SystemPreferredCarrierGetUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPreferredCarrierGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPreferredCarrierModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPreferredCarrierModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemPreferredCarrierModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreferredCarrierUserGetRequest $request
     * @return UserPreferredCarrierUserGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPreferredCarrierUserGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierUserGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPreferredCarrierUserModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPreferredCarrierUserModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierUserModifyRequest $request)
    {
        return $this->call($request);
    }


}

