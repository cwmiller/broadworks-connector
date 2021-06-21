<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCICallControlApplicationAddRequest
 *
 * Add an application to the OCI call control application list.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:28039","type":"sequence"}]
 */
class SystemOCICallControlApplicationAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName applicationId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28039
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $applicationId = null;

    /**
     * @ElementName enableSystemWide
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28039
     * @var bool|null
     */
    private $enableSystemWide = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28039
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for applicationId
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->applicationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @param string $applicationId
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationId()
    {
        $this->applicationId = null;
        return $this;
    }

    /**
     * Getter for enableSystemWide
     *
     * @return bool
     */
    public function getEnableSystemWide()
    {
        return $this->enableSystemWide instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSystemWide;
    }

    /**
     * Setter for enableSystemWide
     *
     * @param bool $enableSystemWide
     * @return $this
     */
    public function setEnableSystemWide($enableSystemWide)
    {
        $this->enableSystemWide = $enableSystemWide;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSystemWide()
    {
        $this->enableSystemWide = null;
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


}

