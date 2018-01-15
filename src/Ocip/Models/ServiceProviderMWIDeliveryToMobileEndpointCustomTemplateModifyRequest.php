<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateModifyRequest
 *
 * Modify a MWI Delivery to Mobile Endpoint Custom Template.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName language
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName type
     * @var string|null
     */
    private $type = null;

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
     * Getter for language
     *
     * @ElementName language
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Setter for language
     *
     * @ElementName language
     * @param string|null $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Getter for type
     *
     * @ElementName type
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param string|null $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

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

