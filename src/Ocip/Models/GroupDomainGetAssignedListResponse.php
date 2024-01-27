<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDomainGetAssignedListResponse
 *
 * Contains a simple list of all group domain names.
 *
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5198","type":"sequence"}]
 */
class GroupDomainGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupDefaultDomain
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5198
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $groupDefaultDomain = null;

    /**
     * @ElementName domain
     * @Type string
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5198
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $domain = [
        
    ];

    /**
     * Getter for groupDefaultDomain
     *
     * @return string
     */
    public function getGroupDefaultDomain()
    {
        return $this->groupDefaultDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDefaultDomain;
    }

    /**
     * Setter for groupDefaultDomain
     *
     * @param string $groupDefaultDomain
     * @return $this
     */
    public function setGroupDefaultDomain($groupDefaultDomain)
    {
        $this->groupDefaultDomain = $groupDefaultDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDefaultDomain()
    {
        $this->groupDefaultDomain = null;
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

