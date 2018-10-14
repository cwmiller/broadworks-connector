<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneModifyRequest
 *
 * Modify an existing Office Zone.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemOfficeZoneModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName officeZoneName
     * @var string|null
     */
    private $officeZoneName = null;

    /**
     * @ElementName newOfficeZoneName
     * @var string|null
     */
    private $newOfficeZoneName = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName replacementZoneList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementZoneList|null
     */
    private $replacementZoneList = null;

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
     * Getter for newOfficeZoneName
     *
     * @ElementName newOfficeZoneName
     * @return string|null
     */
    public function getNewOfficeZoneName()
    {
        return $this->newOfficeZoneName;
    }

    /**
     * Setter for newOfficeZoneName
     *
     * @ElementName newOfficeZoneName
     * @param string|null $newOfficeZoneName
     * @return $this
     */
    public function setNewOfficeZoneName($newOfficeZoneName)
    {
        $this->newOfficeZoneName = $newOfficeZoneName;
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
     * Getter for replacementZoneList
     *
     * @ElementName replacementZoneList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementZoneList|null
     */
    public function getReplacementZoneList()
    {
        return $this->replacementZoneList;
    }

    /**
     * Setter for replacementZoneList
     *
     * @ElementName replacementZoneList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementZoneList|null $replacementZoneList
     * @return $this
     */
    public function setReplacementZoneList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementZoneList $replacementZoneList)
    {
        $this->replacementZoneList = $replacementZoneList;
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

