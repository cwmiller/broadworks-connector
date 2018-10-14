<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneAddRequest
 *
 * Add a new Office Zone.  The zoneList is an ordered list with the first member
 * being of the highest priority.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemOfficeZoneAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName officeZoneName
     * @var string|null
     */
    private $officeZoneName = null;

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
     * Getter for officeZoneName
     *
     * @ElementName officeZoneName
     * @return string|null
     */
    public function getOfficeZoneName()
    {
        return $this->officeZoneName;
    }

    /**
     * Setter for officeZoneName
     *
     * @ElementName officeZoneName
     * @param string|null $officeZoneName
     * @return $this
     */
    public function setOfficeZoneName($officeZoneName)
    {
        $this->officeZoneName = $officeZoneName;
        return $this;
    }

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
    public function setZoneName(array $zoneName)
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
    public function addZoneName(string $zoneName)
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

