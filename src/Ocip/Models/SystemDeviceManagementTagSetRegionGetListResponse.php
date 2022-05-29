<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetRegionGetListResponse
 *
 * Response to SystemDeviceManagementTagSetGetListRequest.
 *        	The response includes the list of region names defined in the specified tag set.
 *
 * @see SystemDeviceManagementTagSetGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8383","type":"sequence"}]
 */
class SystemDeviceManagementTagSetRegionGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName regionName
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8383
     * @MinLength 1
     * @MaxLength 64
     * @var string[]
     */
    protected $regionName = array(
        
    );

    /**
     * Getter for regionName
     *
     * @return string[]
     */
    public function getRegionName()
    {
        return $this->regionName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->regionName;
    }

    /**
     * Setter for regionName
     *
     * @param string[] $regionName
     * @return $this
     */
    public function setRegionName(array $regionName)
    {
        $this->regionName = $regionName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRegionName()
    {
        $this->regionName = null;
        return $this;
    }

    /**
     * Adder for regionName
     *
     * @param string $regionName
     * @return $this
     */
    public function addRegionName(string $regionName)
    {
        $this->regionName[] = $regionName;
        return $this;
    }


}

