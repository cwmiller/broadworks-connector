<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMWIDeliveryToMobileEndpointGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMWIDeliveryToMobileEndpointGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserMWIDeliveryToMobileEndpointModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceMWIDeliveryToMobileEndpoint
{

    /**
     * @param GroupMWIDeliveryToMobileEndpointCustomTemplateAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupMWIDeliveryToMobileEndpointCustomTemplateAddRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMWIDeliveryToMobileEndpointCustomTemplateGetRequest $request
     * @return GroupMWIDeliveryToMobileEndpointCustomTemplateGetResponse|ErrorResponse
     */
    public function groupMWIDeliveryToMobileEndpointCustomTemplateGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMWIDeliveryToMobileEndpointCustomTemplateModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupMWIDeliveryToMobileEndpointCustomTemplateModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointCustomTemplateModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMWIDeliveryToMobileEndpointGetRequest $request
     * @return GroupMWIDeliveryToMobileEndpointGetResponse|ErrorResponse
     */
    public function groupMWIDeliveryToMobileEndpointGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMWIDeliveryToMobileEndpointModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupMWIDeliveryToMobileEndpointModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMWIDeliveryToMobileEndpointModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderMWIDeliveryToMobileEndpointCustomTemplateAddRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetRequest $request
     * @return ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetResponse|ErrorResponse
     */
    public function serviceProviderMWIDeliveryToMobileEndpointCustomTemplateGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderMWIDeliveryToMobileEndpointCustomTemplateModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMWIDeliveryToMobileEndpointGetRequest $request
     * @return ServiceProviderMWIDeliveryToMobileEndpointGetResponse|ErrorResponse
     */
    public function serviceProviderMWIDeliveryToMobileEndpointGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMWIDeliveryToMobileEndpointModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderMWIDeliveryToMobileEndpointModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMWIDeliveryToMobileEndpointModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMWIDeliveryToMobileEndpointGetRequest $request
     * @return UserMWIDeliveryToMobileEndpointGetResponse|ErrorResponse
     */
    public function userMWIDeliveryToMobileEndpointGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMWIDeliveryToMobileEndpointGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMWIDeliveryToMobileEndpointModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userMWIDeliveryToMobileEndpointModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMWIDeliveryToMobileEndpointModifyRequest $request)
    {
        return $this->call($request);
    }


}

