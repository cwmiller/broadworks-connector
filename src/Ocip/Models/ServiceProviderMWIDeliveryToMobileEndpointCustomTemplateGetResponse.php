<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetResponse
 *
 * Response to the ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetRequest.
 *
 * @see ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:22073","type":"sequence"}]
 */
class ServiceProviderMWIDeliveryToMobileEndpointCustomTemplateGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isEnabled
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:22073
     * @var bool|null
     */
    protected $isEnabled = null;

    /**
     * @ElementName templateBody
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody
     * @Group d8f04177e438f303b41c211e518706bf:22073
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody|null
     */
    protected $templateBody = null;

    /**
     * Getter for isEnabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isEnabled;
    }

    /**
     * Setter for isEnabled
     *
     * @param bool $isEnabled
     * @return $this
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsEnabled()
    {
        $this->isEnabled = null;
        return $this;
    }

    /**
     * Getter for templateBody
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody
     */
    public function getTemplateBody()
    {
        return $this->templateBody instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->templateBody;
    }

    /**
     * Setter for templateBody
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody $templateBody
     * @return $this
     */
    public function setTemplateBody(\CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody $templateBody)
    {
        $this->templateBody = $templateBody;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTemplateBody()
    {
        $this->templateBody = null;
        return $this;
    }
}

