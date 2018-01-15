<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAdviceOfChargeGetResponse
 *
 * Response to UserAdviceOfChargeGetRequest.
 */
class UserAdviceOfChargeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName aocType
     * @var string|null
     */
    private $aocType = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for aocType
     *
     * @ElementName aocType
     * @return string|null
     */
    public function getAocType()
    {
        return $this->aocType;
    }

    /**
     * Setter for aocType
     *
     * @ElementName aocType
     * @param string|null $aocType
     * @return $this
     */
    public function setAocType($aocType)
    {
        $this->aocType = $aocType;
        return $this;
    }


}

