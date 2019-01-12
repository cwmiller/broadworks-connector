<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDomainGetAssignedListResponse
 *
 * Contains a simple list of all group domain names.
 *
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:4564","type":"sequence"}]
 */
class GroupDomainGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupDefaultDomain
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:4564
     * @var string|null
     */
    private $groupDefaultDomain = null;

    /**
     * @ElementName domain
     * @Type string
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:4564
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

