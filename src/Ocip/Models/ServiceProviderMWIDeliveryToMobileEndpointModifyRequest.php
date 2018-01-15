<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMWIDeliveryToMobileEndpointModifyRequest
 *
 * Modify the service provider level MWI custom notifications settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderMWIDeliveryToMobileEndpointModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName templateActivation
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation[]
     */
    private $templateActivation = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for templateActivation
     *
     * @ElementName templateActivation
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation[]
     */
    public function getTemplateActivation()
    {
        return $this->templateActivation;
    }

    /**
     * Setter for templateActivation
     *
     * @ElementName templateActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation[] $templateActivation
     * @return $this
     */
    public function setTemplateActivation($templateActivation)
    {
        $this->templateActivation = $templateActivation;
        return $this;
    }

    /**
     * Adder for templateActivation
     *
     * @ElementName templateActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateActivation $templateActivation
     * @return $this
     */
    public function addTemplateActivation($templateActivation)
    {
        $this->templateActivation []= $templateActivation;
        return $this;
    }


}

