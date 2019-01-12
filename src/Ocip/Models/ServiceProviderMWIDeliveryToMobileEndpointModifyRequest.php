<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMWIDeliveryToMobileEndpointModifyRequest
 *
 * Modify the service provider level MWI custom notifications settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"958b78cc2a785d78259c1e8a474eb40d:335","type":"sequence"}]
 */
class ServiceProviderMWIDeliveryToMobileEndpointModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 958b78cc2a785d78259c1e8a474eb40d:335
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName templateActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation
     * @Array
     * @Optional
     * @Group 958b78cc2a785d78259c1e8a474eb40d:335
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation[]
     */
    private $templateActivation = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for templateActivation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation[]
     */
    public function getTemplateActivation()
    {
        return $this->templateActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->templateActivation;
    }

    /**
     * Setter for templateActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation[] $templateActivation
     * @return $this
     */
    public function setTemplateActivation(array $templateActivation)
    {
        $this->templateActivation = $templateActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTemplateActivation()
    {
        $this->templateActivation = null;
        return $this;
    }

    /**
     * Adder for templateActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation $templateActivation
     * @return $this
     */
    public function addTemplateActivation($templateActivation)
    {
        $this->templateActivation[] = $templateActivation;
        return $this;
    }


}

