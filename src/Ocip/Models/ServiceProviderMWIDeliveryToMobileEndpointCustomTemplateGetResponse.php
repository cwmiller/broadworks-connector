<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetResponse
 *
 * Response to the
 * ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetRequest.
 *
 * @see ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetRequest
 */
class ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isEnabled
     * @var bool|null
     */
    private $isEnabled = null;

    /**
     * @ElementName templateBody
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody|null
     */
    private $templateBody = null;

    /**
     * Getter for isEnabled
     *
     * @ElementName isEnabled
     * @return bool|null
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Setter for isEnabled
     *
     * @ElementName isEnabled
     * @param bool|null $isEnabled
     * @return $this
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    /**
     * Getter for templateBody
     *
     * @ElementName templateBody
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody|null
     */
    public function getTemplateBody()
    {
        return $this->templateBody;
    }

    /**
     * Setter for templateBody
     *
     * @ElementName templateBody
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody|null $templateBody
     * @return $this
     */
    public function setTemplateBody($templateBody)
    {
        $this->templateBody = $templateBody;
        return $this;
    }


}

