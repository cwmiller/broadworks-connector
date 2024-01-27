<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMWIDeliveryToMobileEndpointCustomTemplateGetResponse
 *
 * Response to the GroupMWIDeliveryToMobileEndpointCustomTemplateGetRequest.
 *
 * @see GroupMWIDeliveryToMobileEndpointCustomTemplateGetRequest
 * @Groups [{"id":"1ea80c1e18c25d0eed23dbc7bd18f1dc:113","type":"sequence"}]
 */
class GroupMWIDeliveryToMobileEndpointCustomTemplateGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isEnabled
     * @Type bool
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:113
     * @var bool|null
     */
    protected $isEnabled = null;

    /**
     * @ElementName templateBody
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateBody
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:113
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

