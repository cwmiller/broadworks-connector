<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCICallControlApplicationGetACLListRequest
 *
 * Get the OCI call control access control list.
 *         The response is either SystemOCICallControlApplicationGetACLListResponse
 * or ErrorResponse.
 */
class SystemOCICallControlApplicationGetACLListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName applicationId
     * @var string|null
     */
    private $applicationId = null;

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


}

