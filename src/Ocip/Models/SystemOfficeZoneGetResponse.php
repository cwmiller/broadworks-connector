<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneGetResponse
 *
 * Response to the SystemOfficeZoneGetRequest.
 *         The response contains the Office Zone information.
 *
 * @see SystemOfficeZoneGetRequest
 */
class SystemOfficeZoneGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName zoneName
     * @Type string
     * @Array
     * @var string[]
     */
    private $zoneName = array(
        
    );

    /**
     * @ElementName primaryZoneName
     * @Type string
     * @var string|null
     */
    private $primaryZoneName = null;

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

