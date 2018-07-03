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
 */
class SystemOCICallControlApplicationAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName applicationId
     * @var string|null
     */
    private $applicationId = null;

    /**
     * @ElementName enableSystemWide
     * @var bool|null
     */
    private $enableSystemWide = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for applicationId
     *
     * @ElementName applicationId
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @ElementName applicationId
     * @param string|null $applicationId
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * Getter for enableSystemWide
     *
     * @ElementName enableSystemWide
     * @return bool|null
     */
    public function getEnableSystemWide()
    {
        return $this->enableSystemWide;
    }

    /**
     * Setter for enableSystemWide
     *
     * @ElementName enableSystemWide
     * @param bool|null $enableSystemWide
     * @return $this
     */
    public function setEnableSystemWide($enableSystemWide)
    {
        $this->enableSystemWide = $enableSystemWide;
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


}

