<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerGetDomainListResponse
 *
 * Response to the EnterpriseBroadWorksMobileManagerGetDomainListRequest.
 *         Contains the list of domains.
 *
 * @see EnterpriseBroadWorksMobileManagerGetDomainListRequest
 * @Groups [{"id":"b561eca19800e0898f471e5e91eb3baa:222","type":"sequence"}]
 */
class EnterpriseBroadWorksMobileManagerGetDomainListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName domainName
     * @Type string
     * @Array
     * @Optional
     * @Group b561eca19800e0898f471e5e91eb3baa:222
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

