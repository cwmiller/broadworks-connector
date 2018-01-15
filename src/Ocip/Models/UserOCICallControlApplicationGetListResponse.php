<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOCICallControlApplicationGetListResponse
 *
 * Response to UserOCICallControlApplicationGetListRequest.
 */
class UserOCICallControlApplicationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName applicationId
     * @var string[]
     */
    private $applicationId = array(
        
    );

    /**
     * Getter for applicationId
     *
     * @ElementName applicationId
     * @return string[]
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @ElementName applicationId
     * @param string[] $applicationId
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * Adder for applicationId
     *
     * @ElementName applicationId
     * @param string $applicationId
     * @return $this
     */
    public function addApplicationId($applicationId)
    {
        $this->applicationId []= $applicationId;
        return $this;
    }


}

