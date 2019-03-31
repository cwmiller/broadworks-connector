<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerGetDomainListResponse
 *
 * Response to the EnterpriseBroadWorksMobileManagerGetDomainListRequest.
 *         Contains the list of domains.
 *
 * @see EnterpriseBroadWorksMobileManagerGetDomainListRequest
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:222","type":"sequence"}]
 */
class EnterpriseBroadWorksMobileManagerGetDomainListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName domainName
     * @Type string
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:222
     * @MinLength 1
     * @MaxLength 100
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

