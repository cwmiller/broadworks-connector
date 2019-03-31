<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOCICallControlApplicationGetListResponse
 *
 * Response to UserOCICallControlApplicationGetListRequest.
 *
 * @see UserOCICallControlApplicationGetListRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:2684","type":"sequence"}]
 */
class UserOCICallControlApplicationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName applicationId
     * @Type string
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2684
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    private $applicationId = array(
        
    );

    /**
     * Getter for applicationId
     *
     * @return string[]
     */
    public function getApplicationId()
    {
        return $this->applicationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @param string[] $applicationId
     * @return $this
     */
    public function setApplicationId(array $applicationId)
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
     * Adder for applicationId
     *
     * @param string $applicationId
     * @return $this
     */
    public function addApplicationId(string $applicationId)
    {
        $this->applicationId[] = $applicationId;
        return $this;
    }


}

