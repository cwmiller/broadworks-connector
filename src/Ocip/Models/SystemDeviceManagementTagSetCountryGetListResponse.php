<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetCountryGetListResponse
 *
 * Response to SystemDeviceManagementTagSetCountryGetListRequest.
 *        	The response includes the list of countries defined in a region of a specified tag set.
 *
 * @see SystemDeviceManagementTagSetCountryGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8141","type":"sequence"}]
 */
class SystemDeviceManagementTagSetCountryGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName countryName
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8141
     * @Length 3
     * @Pattern [A-Z][A-Z][A-Z]
     * @var string[]
     */
    private $countryName = array(
        
    );

    /**
     * Getter for countryName
     *
     * @return string[]
     */
    public function getCountryName()
    {
        return $this->countryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countryName;
    }

    /**
     * Setter for countryName
     *
     * @param string[] $countryName
     * @return $this
     */
    public function setCountryName(array $countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountryName()
    {
        $this->countryName = null;
        return $this;
    }

    /**
     * Adder for countryName
     *
     * @param string $countryName
     * @return $this
     */
    public function addCountryName(string $countryName)
    {
        $this->countryName[] = $countryName;
        return $this;
    }


}

