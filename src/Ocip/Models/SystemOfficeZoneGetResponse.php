<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneGetResponse
 *
 * Response to the SystemOfficeZoneGetRequest.
 *         The response contains the Office Zone information.
 */
class SystemOfficeZoneGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName zoneName
     * @var string[]
     */
    private $zoneName = array(
        
    );

    /**
     * @ElementName primaryZoneName
     * @var string|null
     */
    private $primaryZoneName = null;

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for zoneName
     *
     * @ElementName zoneName
     * @return string[]
     */
    public function getZoneName()
    {
        return $this->zoneName;
    }

    /**
     * Setter for zoneName
     *
     * @ElementName zoneName
     * @param string[] $zoneName
     * @return $this
     */
    public function setZoneName($zoneName)
    {
        $this->zoneName = $zoneName;
        return $this;
    }

    /**
     * Adder for zoneName
     *
     * @ElementName zoneName
     * @param string $zoneName
     * @return $this
     */
    public function addZoneName($zoneName)
    {
        $this->zoneName []= $zoneName;
        return $this;
    }

    /**
     * Getter for primaryZoneName
     *
     * @ElementName primaryZoneName
     * @return string|null
     */
    public function getPrimaryZoneName()
    {
        return $this->primaryZoneName;
    }

    /**
     * Setter for primaryZoneName
     *
     * @ElementName primaryZoneName
     * @param string|null $primaryZoneName
     * @return $this
     */
    public function setPrimaryZoneName($primaryZoneName)
    {
        $this->primaryZoneName = $primaryZoneName;
        return $this;
    }


}

