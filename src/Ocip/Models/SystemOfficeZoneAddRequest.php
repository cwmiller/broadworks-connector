<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneAddRequest
 *
 * Add a new Office Zone.  The zoneList is an ordered list with the first member being of the highest priority.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:12300","type":"sequence"}]
 */
class SystemOfficeZoneAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName officeZoneName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12300
     * @var string|null
     */
    private $officeZoneName = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12300
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName zoneName
     * @Type string
     * @Array
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12300
     * @var string[]
     */
    private $zoneName = array(
        
    );

    /**
     * @ElementName primaryZoneName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12300
     * @var string|null
     */
    private $primaryZoneName = null;

    /**
     * Getter for officeZoneName
     *
     * @return string
     */
    public function getOfficeZoneName()
    {
        return $this->officeZoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->officeZoneName;
    }

    /**
     * Setter for officeZoneName
     *
     * @param string $officeZoneName
     * @return $this
     */
    public function setOfficeZoneName($officeZoneName)
    {
        $this->officeZoneName = $officeZoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOfficeZoneName()
    {
        $this->officeZoneName = null;
        return $this;
    }

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

