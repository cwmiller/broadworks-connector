<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetCountryGetListResponse
 *
 * Response to SystemDeviceManagementTagSetCountryGetListRequest.
 *        	The response includes the list of countries defined in a region of a specified tag set.
 *
 * @see SystemDeviceManagementTagSetCountryGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8260","type":"sequence"}]
 */
class SystemDeviceManagementTagSetCountryGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName countryName
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:8260
     * @Length 3
     * @Pattern [A-Z][A-Z][A-Z]
     * @var string[]
     */
    protected $countryName = [
        
    ];

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

