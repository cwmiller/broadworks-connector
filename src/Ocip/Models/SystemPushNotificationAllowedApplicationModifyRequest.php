<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPushNotificationAllowedApplicationModifyRequest
 *
 * Request to modify an application in the list of allowed push notification applications.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13165","type":"sequence"}]
 */
class SystemPushNotificationAllowedApplicationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName applicationId
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13165
     * @var string|null
     */
    private $applicationId = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13165
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
    public function setDescription($description = null)
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


}

