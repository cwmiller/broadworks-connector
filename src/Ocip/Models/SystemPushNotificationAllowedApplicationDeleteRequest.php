<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPushNotificationAllowedApplicationDeleteRequest
 *
 * Request to remove an application from the list of allowed push notification applications.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14988","type":"sequence"}]
 */
class SystemPushNotificationAllowedApplicationDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName applicationId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:14988
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    protected $applicationId = null;

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
}

