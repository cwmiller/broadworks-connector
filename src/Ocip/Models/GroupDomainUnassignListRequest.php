<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDomainUnassignListRequest
 *
 * Unassign a list of domains from a group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupDomainUnassignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName domain
     * @var string[]
     */
    private $domain = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
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

