<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerGetDomainListResponse
 *
 * Response to the EnterpriseBroadWorksMobileManagerGetDomainListRequest.
 *         Contains the list of domains.
 *
 * @see EnterpriseBroadWorksMobileManagerGetDomainListRequest
 */
class EnterpriseBroadWorksMobileManagerGetDomainListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName domainName
     * @var string[]
     */
    private $domainName = array(
        
    );

    /**
     * Getter for domainName
     *
     * @ElementName domainName
     * @return string[]
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * Setter for domainName
     *
     * @ElementName domainName
     * @param string[] $domainName
     * @return $this
     */
    public function setDomainName(array $domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * Adder for domainName
     *
     * @ElementName domainName
     * @param string $domainName
     * @return $this
     */
    public function addDomainName(string $domainName)
    {
        $this->domainName []= $domainName;
        return $this;
    }


}

