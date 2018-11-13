<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobileManagerGetDomainListResponse
 *
 * Response to the GroupBroadWorksMobileManagerGetDomainListRequest.
 *         Contains the list of domains.
 *
 * @see GroupBroadWorksMobileManagerGetDomainListRequest
 */
class GroupBroadWorksMobileManagerGetDomainListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName domainName
     * @Type string
     * @Array
     * @var string[]
     */
    private $domainName = array(
        
    );

    /**
     * Getter for domainName
     *
     * @return string[]
     */
    public function getDomainName()
    {
        return $this->domainName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->domainName;
    }

    /**
     * Setter for domainName
     *
     * @param string[] $domainName
     * @return $this
     */
    public function setDomainName(array $domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDomainName()
    {
        $this->domainName = null;
        return $this;
    }

    /**
     * Adder for domainName
     *
     * @param string $domainName
     * @return $this
     */
    public function addDomainName(string $domainName)
    {
        $this->domainName[] = $domainName;
        return $this;
    }


}

