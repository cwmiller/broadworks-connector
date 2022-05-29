<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainGetListResponse22V2
 *
 * Contains a table of all matching system-level domain names and all matching reseller level domains.
 *         The column headings are: "Domain Name" and "Reseller Id".
 *         The following elements are only used in AS and XS data mode and not returned in Amplify data mode:
 *           systemDefaultDomain
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9520","type":"sequence"}]
 */
class SystemDomainGetListResponse22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemDefaultDomain
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9520
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $systemDefaultDomain = null;

    /**
     * @ElementName domainTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9520
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

