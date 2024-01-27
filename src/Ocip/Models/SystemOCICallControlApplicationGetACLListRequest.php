<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCICallControlApplicationGetACLListRequest
 *
 * Get the OCI call control access control list.
 *         The response is either SystemOCICallControlApplicationGetACLListResponse or ErrorResponse.
 *
 * @see SystemOCICallControlApplicationGetACLListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:13594","type":"sequence"}]
 */
class SystemOCICallControlApplicationGetACLListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName applicationId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:13594
     * @MinLength 1
     * @MaxLength 80
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

