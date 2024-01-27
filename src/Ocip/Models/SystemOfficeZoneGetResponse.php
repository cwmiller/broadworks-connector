<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneGetResponse
 *
 * Response to the SystemOfficeZoneGetRequest.
 *         The response contains the Office Zone information.
 *
 * @see SystemOfficeZoneGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14151","type":"sequence"}]
 */
class SystemOfficeZoneGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14151
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName zoneName
     * @Type string
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:14151
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $zoneName = [
        
    ];

    /**
     * @ElementName primaryZoneName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:14151
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $primaryZoneName = null;

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for zoneName
     *
     * @return string[]
     */
    public function getZoneName()
    {
        return $this->zoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->zoneName;
    }

    /**
     * Setter for zoneName
     *
     * @param string[] $zoneName
     * @return $this
     */
    public function setZoneName(array $zoneName)
    {
        $this->zoneName = $zoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetZoneName()
    {
        $this->zoneName = null;
        return $this;
    }

    /**
     * Adder for zoneName
     *
     * @param string $zoneName
     * @return $this
     */
    public function addZoneName(string $zoneName)
    {
        $this->zoneName[] = $zoneName;
        return $this;
    }

    /**
     * Getter for primaryZoneName
     *
     * @return string
     */
    public function getPrimaryZoneName()
    {
        return $this->primaryZoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->primaryZoneName;
    }

    /**
     * Setter for primaryZoneName
     *
     * @param string $primaryZoneName
     * @return $this
     */
    public function setPrimaryZoneName($primaryZoneName)
    {
        $this->primaryZoneName = $primaryZoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrimaryZoneName()
    {
        $this->primaryZoneName = null;
        return $this;
    }
}

