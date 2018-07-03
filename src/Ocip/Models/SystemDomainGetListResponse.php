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
     * @var string|null
     */
    private $systemDefaultDomain = null;

    /**
     * @ElementName domain
     * @var string[]
     */
    private $domain = array(
        
    );

    /**
     * Getter for systemDefaultDomain
     *
     * @ElementName systemDefaultDomain
     * @return string|null
     */
    public function getSystemDefaultDomain()
    {
        return $this->systemDefaultDomain;
    }

    /**
     * Setter for systemDefaultDomain
     *
     * @ElementName systemDefaultDomain
     * @param string|null $systemDefaultDomain
     * @return $this
     */
    public function setSystemDefaultDomain($systemDefaultDomain)
    {
        $this->systemDefaultDomain = $systemDefaultDomain;
        return $this;
    }

    /**
     * Getter for domain
     *
     * @ElementName domain
     * @return string[]
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Setter for domain
     *
     * @ElementName domain
     * @param string[] $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Adder for domain
     *
     * @ElementName domain
     * @param string $domain
     * @return $this
     */
    public function addDomain($domain)
    {
        $this->domain []= $domain;
        return $this;
    }


}

