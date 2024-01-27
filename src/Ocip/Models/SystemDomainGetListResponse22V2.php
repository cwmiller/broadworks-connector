<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainGetListResponse22V2
 *
 * Contains a table of all matching system-level domain names and all matching reseller level domains.
 *         The column headings are: "Domain Name" and "Reseller Id".
 *
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9642","type":"sequence"}]
 */
class SystemDomainGetListResponse22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName systemDefaultDomain
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9642
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $systemDefaultDomain = null;

    /**
     * @ElementName domainTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:9642
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $domainTable = null;

    /**
     * Getter for systemDefaultDomain
     *
     * @return string
     */
    public function getSystemDefaultDomain()
    {
        return $this->systemDefaultDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemDefaultDomain;
    }

    /**
     * Setter for systemDefaultDomain
     *
     * @param string $systemDefaultDomain
     * @return $this
     */
    public function setSystemDefaultDomain($systemDefaultDomain)
    {
        $this->systemDefaultDomain = $systemDefaultDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemDefaultDomain()
    {
        $this->systemDefaultDomain = null;
        return $this;
    }

    /**
     * Getter for domainTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDomainTable()
    {
        return $this->domainTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->domainTable;
    }

    /**
     * Setter for domainTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $domainTable
     * @return $this
     */
    public function setDomainTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $domainTable)
    {
        $this->domainTable = $domainTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDomainTable()
    {
        $this->domainTable = null;
        return $this;
    }
}

