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
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:12278","type":"sequence"}]
 */
class SystemOfficeZoneModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName officeZoneName
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:12278
     * @var string|null
     */
    private $officeZoneName = null;

    /**
     * @ElementName newOfficeZoneName
     * @Type string
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:12278
     * @var string|null
     */
    private $newOfficeZoneName = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:12278
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName replacementZoneList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementZoneList
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:12278
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementZoneList|null
     */
    private $replacementZoneList = null;

    /**
     * @ElementName primaryZoneName
     * @Type string
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:12278
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
     * Getter for newOfficeZoneName
     *
     * @return string
     */
    public function getNewOfficeZoneName()
    {
        return $this->newOfficeZoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newOfficeZoneName;
    }

    /**
     * Setter for newOfficeZoneName
     *
     * @param string $newOfficeZoneName
     * @return $this
     */
    public function setNewOfficeZoneName($newOfficeZoneName)
    {
        $this->newOfficeZoneName = $newOfficeZoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewOfficeZoneName()
    {
        $this->newOfficeZoneName = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
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
     * Getter for replacementZoneList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementZoneList
     */
    public function getReplacementZoneList()
    {
        return $this->replacementZoneList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->replacementZoneList;
    }

    /**
     * Setter for replacementZoneList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementZoneList $replacementZoneList
     * @return $this
     */
    public function setReplacementZoneList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementZoneList $replacementZoneList)
    {
        $this->replacementZoneList = $replacementZoneList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReplacementZoneList()
    {
        $this->replacementZoneList = null;
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

