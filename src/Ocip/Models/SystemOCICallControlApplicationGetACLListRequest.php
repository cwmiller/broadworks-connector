<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCICallControlApplicationGetACLListRequest
 *
 * Get the OCI call control access control list.
 *         The response is either SystemOCICallControlApplicationGetACLListResponse
 * or ErrorResponse.
 *
 * @see SystemOCICallControlApplicationGetACLListResponse
 * @see ErrorResponse
 */
class SystemOCICallControlApplicationGetACLListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName applicationId
     * @Type string
     * @var string|null
     */
    private $applicationId = null;

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

