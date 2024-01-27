<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHPBXAlternateCarrierSelectionModifyCarrierRequest
 *
 * Modify an alternate carrier for CbC and Preselection.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11465","type":"sequence"}]
 */
class SystemHPBXAlternateCarrierSelectionModifyCarrierRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:11465
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:11465
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $newName = null;

    /**
     * @ElementName prefix
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:11465
     * @MinLength 5
     * @MaxLength 6
     * @var string|null
     */
    protected $prefix = null;

    /**
     * @ElementName domain
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:11465
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $domain = null;

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HPBXAlternateCarrierType
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:11465
     * @var \CWM\BroadWorksConnector\Ocip\Models\HPBXAlternateCarrierType|null
     */
    protected $type = null;

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
     * Getter for newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newName;
    }

    /**
     * Setter for newName
     *
     * @param string $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewName()
    {
        $this->newName = null;
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

