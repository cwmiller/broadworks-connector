<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MWIDeliveryToMobileEndpointTemplateLine
 *
 * MWI Delivery To Mobile Endpoint template section associated with a specific tag.
 *
 * @Groups [{"id":"958b78cc2a785d78259c1e8a474eb40d:431","type":"sequence"}]
 */
class MWIDeliveryToMobileEndpointTemplateLine
{

    /**
     * @ElementName prefix
     * @Type string
     * @Optional
     * @Group 958b78cc2a785d78259c1e8a474eb40d:431
     * @MinLength 1
     * @MaxLength 128
     * @Whitespace preserve
     * @var string|null
     */
    protected $prefix = null;

    /**
     * @ElementName tag
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateTag
     * @Optional
     * @Group 958b78cc2a785d78259c1e8a474eb40d:431
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateTag|null
     */
    protected $tag = null;

    /**
     * @ElementName postfix
     * @Type string
     * @Optional
     * @Group 958b78cc2a785d78259c1e8a474eb40d:431
     * @MinLength 1
     * @MaxLength 128
     * @Whitespace preserve
     * @var string|null
     */
    protected $postfix = null;

    /**
     * Getter for prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefix()
    {
        $this->prefix = null;
        return $this;
    }

    /**
     * Getter for tag
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateTag
     */
    public function getTag()
    {
        return $this->tag instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tag;
    }

    /**
     * Setter for tag
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateTag $tag
     * @return $this
     */
    public function setTag(\CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateTag $tag)
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTag()
    {
        $this->tag = null;
        return $this;
    }

    /**
     * Getter for postfix
     *
     * @return string
     */
    public function getPostfix()
    {
        return $this->postfix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->postfix;
    }

    /**
     * Setter for postfix
     *
     * @param string $postfix
     * @return $this
     */
    public function setPostfix($postfix)
    {
        $this->postfix = $postfix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPostfix()
    {
        $this->postfix = null;
        return $this;
    }


}

