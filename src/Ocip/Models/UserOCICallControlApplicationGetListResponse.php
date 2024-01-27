<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOCICallControlApplicationGetListResponse
 *
 * Response to UserOCICallControlApplicationGetListRequest.
 *
 * @see UserOCICallControlApplicationGetListRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2672","type":"sequence"}]
 */
class UserOCICallControlApplicationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName applicationId
     * @Type string
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2672
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $applicationId = [
        
    ];

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

