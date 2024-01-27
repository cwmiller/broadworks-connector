<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackGetUtilizationListResponse
 *
 * Response to ServiceProviderServicePackGetUtilizationListRequest.
 *         For each service pack, a table of groups utilizing the pack is returned.
 *         The utilization table column headings are "Group", "Total Packs" and "Assigned".
 *
 * @see ServiceProviderServicePackGetUtilizationListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:6297","type":"sequence"}]
 */
class ServiceProviderServicePackGetUtilizationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName servicePackName
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6297
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $servicePackName = [
        
    ];

    /**
     * @ElementName serviceUtilizationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6297
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable[]
     */
    protected $serviceUtilizationTable = [
        
    ];

    /**
     * Getter for servicePackName
     *
     * @return string[]
     */
    public function getServicePackName()
    {
        return $this->servicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @param string[] $servicePackName
     * @return $this
     */
    public function setServicePackName(array $servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackName()
    {
        $this->servicePackName = null;
        return $this;
    }

    /**
     * Adder for servicePackName
     *
     * @param string $servicePackName
     * @return $this
     */
    public function addServicePackName(string $servicePackName)
    {
        $this->servicePackName[] = $servicePackName;
        return $this;
    }

    /**
     * Getter for serviceUtilizationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable[]
     */
    public function getServiceUtilizationTable()
    {
        return $this->serviceUtilizationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUtilizationTable;
    }

    /**
     * Setter for serviceUtilizationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable[] $serviceUtilizationTable
     * @return $this
     */
    public function setServiceUtilizationTable(array $serviceUtilizationTable)
    {
        $this->serviceUtilizationTable = $serviceUtilizationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUtilizationTable()
    {
        $this->serviceUtilizationTable = null;
        return $this;
    }

    /**
     * Adder for serviceUtilizationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceUtilizationTable
     * @return $this
     */
    public function addServiceUtilizationTable($serviceUtilizationTable)
    {
        $this->serviceUtilizationTable[] = $serviceUtilizationTable;
        return $this;
    }
}

