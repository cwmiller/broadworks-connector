<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDomainGetAssignedListResponse
 *
 * Contains a simple list of all group domain names.
 */
class GroupDomainGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupDefaultDomain
     * @var string|null
     */
    private $groupDefaultDomain = null;

    /**
     * @ElementName domain
     * @var string[]
     */
    private $domain = array(
        
    );

    /**
     * Getter for groupDefaultDomain
     *
     * @ElementName groupDefaultDomain
     * @return string|null
     */
    public function getGroupDefaultDomain()
    {
        return $this->groupDefaultDomain;
    }

    /**
     * Setter for groupDefaultDomain
     *
     * @ElementName groupDefaultDomain
     * @param string|null $groupDefaultDomain
     * @return $this
     */
    public function setGroupDefaultDomain($groupDefaultDomain)
    {
        $this->groupDefaultDomain = $groupDefaultDomain;
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
    public function setDomain(array $domain)
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
    public function addDomain(string $domain)
    {
        $this->domain []= $domain;
        return $this;
    }


}

