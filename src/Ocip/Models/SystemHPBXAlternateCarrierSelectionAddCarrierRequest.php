<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHPBXAlternateCarrierSelectionAddCarrierRequest
 *
 * Add a new alternate carrier for CbC and Preselection.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9800","type":"sequence"}]
 */
class SystemHPBXAlternateCarrierSelectionAddCarrierRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9800
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName prefix
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9800
     * @var string|null
     */
    private $prefix = null;

    /**
     * @ElementName domain
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9800
     * @var string|null
     */
    private $domain = null;

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HPBXAlternateCarrierType
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9800
     * @var \CWM\BroadWorksConnector\Ocip\Models\HPBXAlternateCarrierType|null
     */
    private $type = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

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
     * Getter for domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->domain;
    }

    /**
     * Setter for domain
     *
     * @param string $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDomain()
    {
        $this->domain = null;
        return $this;
    }

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HPBXAlternateCarrierType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HPBXAlternateCarrierType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\HPBXAlternateCarrierType $type)
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


}

