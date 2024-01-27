<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetCountryAddRequest
 *
 * Request to add a country to a region within a static configuration tag set for per-region tags override.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8207","type":"sequence"}]
 */
class SystemDeviceManagementTagSetCountryAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName tagSetName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8207
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $tagSetName = null;

    /**
     * @ElementName regionName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8207
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    protected $regionName = null;

    /**
     * @ElementName countryName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8207
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $countryName = null;

    /**
     * Getter for tagSetName
     *
     * @return string
     */
    public function getTagSetName()
    {
        return $this->tagSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSetName;
    }

    /**
     * Setter for tagSetName
     *
     * @param string $tagSetName
     * @return $this
     */
    public function setTagSetName($tagSetName)
    {
        $this->tagSetName = $tagSetName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagSetName()
    {
        $this->tagSetName = null;
        return $this;
    }

    /**
     * Getter for regionName
     *
     * @return string
     */
    public function getRegionName()
    {
        return $this->regionName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->regionName;
    }

    /**
     * Setter for regionName
     *
     * @param string $regionName
     * @return $this
     */
    public function setRegionName($regionName)
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
     * Getter for countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countryName;
    }

    /**
     * Setter for countryName
     *
     * @param string $countryName
     * @return $this
     */
    public function setCountryName($countryName)
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
}

