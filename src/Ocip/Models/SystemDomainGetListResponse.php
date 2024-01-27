<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainGetListResponse
 *
 * Contains a simple list of all system-level domain names.
 *         
 *         Replaced by SystemDomainGetListResponse22 in AS data mode.
 *
 * @see SystemDomainGetListResponse22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:10334","type":"sequence"}]
 */
class SystemDomainGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName systemDefaultDomain
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:10334
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $systemDefaultDomain = null;

    /**
     * @ElementName domain
     * @Type string
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:10334
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $domain = [
        
    ];

    /**
     * Getter for systemDefaultDomain
     *
     * @return string
     */
    public function getSystemDefaultDomain()
    {
        return $this->systemDefaultDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemDefaultDomain;
    }

    /**
     * Setter for systemDefaultDomain
     *
     * @param string $systemDefaultDomain
     * @return $this
     */
    public function setSystemDefaultDomain($systemDefaultDomain)
    {
        $this->systemDefaultDomain = $systemDefaultDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemDefaultDomain()
    {
        $this->systemDefaultDomain = null;
        return $this;
    }

    /**
     * Getter for domain
     *
     * @return string[]
     */
    public function getDomain()
    {
        return $this->domain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->domain;
    }

    /**
     * Setter for domain
     *
     * @param string[] $domain
     * @return $this
     */
    public function setDomain(array $domain)
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
     * Adder for domain
     *
     * @param string $domain
     * @return $this
     */
    public function addDomain(string $domain)
    {
        $this->domain[] = $domain;
        return $this;
    }
}

