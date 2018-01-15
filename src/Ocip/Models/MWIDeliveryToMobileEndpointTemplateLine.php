<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MWIDeliveryToMobileEndpointTemplateLine
 *
 * MWI Delivery To Mobile Endpoint template section associated with a specific tag.
 */
class MWIDeliveryToMobileEndpointTemplateLine
{

    /**
     * @ElementName prefix
     * @var string|null
     */
    private $prefix = null;

    /**
     * @ElementName tag
     * @var string|null
     */
    private $tag = null;

    /**
     * @ElementName postfix
     * @var string|null
     */
    private $postfix = null;

    /**
     * Getter for prefix
     *
     * @ElementName prefix
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @ElementName prefix
     * @param string|null $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Getter for tag
     *
     * @ElementName tag
     * @return string|null
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Setter for tag
     *
     * @ElementName tag
     * @param string|null $tag
     * @return $this
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * Getter for postfix
     *
     * @ElementName postfix
     * @return string|null
     */
    public function getPostfix()
    {
        return $this->postfix;
    }

    /**
     * Setter for postfix
     *
     * @ElementName postfix
     * @param string|null $postfix
     * @return $this
     */
    public function setPostfix($postfix)
    {
        $this->postfix = $postfix;
        return $this;
    }


}

