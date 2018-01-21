<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainGetListResponse22
 *
 * Contains a table of all system-level domain names and all reseller level
 * domains.
 *         The column headings are: "Domain Name" and "Reseller Id".
 *         The following elements are only used in AS and XS data mode and not
 * returned in Amplify data mode:
 *           systemDefaultDomain
 */
class SystemDomainGetListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemDefaultDomain
     * @var string|null
     */
    private $systemDefaultDomain = null;

    /**
     * @ElementName domainTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $domainTable = null;

    /**
     * Getter for systemDefaultDomain
     *
     * @ElementName systemDefaultDomain
     * @return string|null
     */
    public function getSystemDefaultDomain()
    {
        return $this->systemDefaultDomain;
    }

    /**
     * Setter for systemDefaultDomain
     *
     * @ElementName systemDefaultDomain
     * @param string|null $systemDefaultDomain
     * @return $this
     */
    public function setSystemDefaultDomain($systemDefaultDomain)
    {
        $this->systemDefaultDomain = $systemDefaultDomain;
        return $this;
    }

    /**
     * Getter for domainTable
     *
     * @ElementName domainTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDomainTable()
    {
        return $this->domainTable;
    }

    /**
     * Setter for domainTable
     *
     * @ElementName domainTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $domainTable
     * @return $this
     */
    public function setDomainTable($domainTable)
    {
        $this->domainTable = $domainTable;
        return $this;
    }


}

