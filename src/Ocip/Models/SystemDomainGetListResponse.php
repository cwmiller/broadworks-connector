<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainGetListResponse
 *
 * Contains a simple list of all system-level domain names.
 *         
 *         The following elements are only used in AS and XS data mode and not
 * returned in Amplify data mode:
 *           systemDefaultDomain
 *           
 *         Replaced by SystemDomainGetListResponse22 in AS data mode.
 *
 * @see SystemDomainGetListResponse22
 */
class SystemDomainGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemDefaultDomain
     * @Type string
     * @var string|null
     */
    private $systemDefaultDomain = null;

    /**
     * @ElementName domain
     * @Type string
     * @Array
     * @var string[]
     */
    private $domain = array(
        
    );

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

