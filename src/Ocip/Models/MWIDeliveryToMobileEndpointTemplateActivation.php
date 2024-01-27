<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MWIDeliveryToMobileEndpointTemplateActivation
 *
 * MWI Delivery To Mobile Endpoint enabled status indicator
 *
 * @Groups [{"id":"1ea80c1e18c25d0eed23dbc7bd18f1dc:407","type":"sequence"}]
 */
class MWIDeliveryToMobileEndpointTemplateActivation
{
    /**
     * @ElementName language
     * @Type string
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:407
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:407
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType|null
     */
    protected $type = null;

    /**
     * @ElementName isEnabled
     * @Type bool
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:407
     * @var bool|null
     */
    protected $isEnabled = null;

    /**
     * Getter for language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->language;
    }

    /**
     * Setter for language
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguage()
    {
        $this->language = null;
        return $this;
    }

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetType()
    {
        $this->type = null;
        return $this;
    }

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
}

