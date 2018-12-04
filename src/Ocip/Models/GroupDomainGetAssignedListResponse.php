<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDomainGetAssignedListResponse
 *
 * Contains a simple list of all group domain names.
 *
 * @Groups [{"id":"7a7d0e1e7f776baf61f0645bc15cbe16:4389","type":"sequence"}]
 */
class GroupDomainGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupDefaultDomain
     * @Type string
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:4389
     * @var string|null
     */
    private $groupDefaultDomain = null;

    /**
     * @ElementName domain
     * @Type string
     * @Array
     * @Optional
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:4389
     * @var string[]
     */
    private $domain = array(
        
    );

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

