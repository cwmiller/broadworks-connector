<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateAddRequest23;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest23;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateGetRequest23;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateGetResponse23;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateModifyRequest23;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointModifyRequest23;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateAddRequest23;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest23;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetRequest23;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetResponse23;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateModifyRequest23;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointModifyRequest23;
use CWM\BroadWorksConnector\Ocip\Models\UserMWIDeliveryToMobileEndpointGetRequest23;
use CWM\BroadWorksConnector\Ocip\Models\UserMWIDeliveryToMobileEndpointGetResponse23;
use CWM\BroadWorksConnector\Ocip\Models\UserMWIDeliveryToMobileEndpointModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceMWIDeliveryToMobileEndpoint
{
    /**
     * @param GroupMWIDeliveryToMobileEndpointCustomTemplateAddRequest23 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMWIDeliveryToMobileEndpointCustomTemplateAddRequest23(\CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateAddRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest23 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest23(\CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMWIDeliveryToMobileEndpointCustomTemplateGetRequest23 $request
     * @return GroupMWIDeliveryToMobileEndpointCustomTemplateGetResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMWIDeliveryToMobileEndpointCustomTemplateGetRequest23(\CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateGetRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMWIDeliveryToMobileEndpointCustomTemplateModifyRequest23 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMWIDeliveryToMobileEndpointCustomTemplateModifyRequest23(\CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateModifyRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMWIDeliveryToMobileEndpointGetRequest $request
     * @return GroupMWIDeliveryToMobileEndpointGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMWIDeliveryToMobileEndpointGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMWIDeliveryToMobileEndpointModifyRequest23 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMWIDeliveryToMobileEndpointModifyRequest23(\CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointModifyRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateAddRequest23 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderMWIDeliveryToMobileEndpointCustomTemplateAddRequest23(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateAddRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest23 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest23(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetRequest23 $request
     * @return ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderMWIDeliveryToMobileEndpointCustomTemplateGetRequest23(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateModifyRequest23 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderMWIDeliveryToMobileEndpointCustomTemplateModifyRequest23(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateModifyRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMWIDeliveryToMobileEndpointGetRequest $request
     * @return ServiceProviderMWIDeliveryToMobileEndpointGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderMWIDeliveryToMobileEndpointGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMWIDeliveryToMobileEndpointModifyRequest23 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderMWIDeliveryToMobileEndpointModifyRequest23(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointModifyRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMWIDeliveryToMobileEndpointGetRequest23 $request
     * @return UserMWIDeliveryToMobileEndpointGetResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMWIDeliveryToMobileEndpointGetRequest23(\CWM\BroadWorksConnector\Ocip\Models\UserMWIDeliveryToMobileEndpointGetRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMWIDeliveryToMobileEndpointModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMWIDeliveryToMobileEndpointModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMWIDeliveryToMobileEndpointModifyRequest $request)
    {
        return $this->call($request);
    }
}

