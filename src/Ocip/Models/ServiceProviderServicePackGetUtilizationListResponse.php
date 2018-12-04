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
 * @Groups [{"id":"8f3ed38751e86ebcc639b5bc5cdef0ec:5201","type":"sequence"}]
 */
class ServiceProviderServicePackGetUtilizationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName servicePackName
     * @Type string
     * @Array
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5201
     * @var string[]
     */
    private $servicePackName = array(
        
    );

    /**
     * @ElementName serviceUtilizationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Array
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5201
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable[]
     */
    private $serviceUtilizationTable = array(
        
    );

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

