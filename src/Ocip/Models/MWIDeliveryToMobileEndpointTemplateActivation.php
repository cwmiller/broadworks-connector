<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MWIDeliveryToMobileEndpointTemplateActivation
 *
 * MWI Delivery To Mobile Endpoint enabled status indicator
 */
class MWIDeliveryToMobileEndpointTemplateActivation
{

    /**
     * @ElementName language
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName type
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType|null
     */
    private $type = null;

    /**
     * @ElementName isEnabled
     * @var bool|null
     */
    private $isEnabled = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType|null $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateType $type)
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


}

