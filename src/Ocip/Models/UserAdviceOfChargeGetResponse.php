<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAdviceOfChargeGetResponse
 *
 * Response to UserAdviceOfChargeGetRequest.
 *
 * @see UserAdviceOfChargeGetRequest
 * @Groups [{"id":"9975efc7f5883a0595f811ee72ba4df5:304","type":"sequence"}]
 */
class UserAdviceOfChargeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 9975efc7f5883a0595f811ee72ba4df5:304
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName aocType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeType
     * @Group 9975efc7f5883a0595f811ee72ba4df5:304
     * @var \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeType|null
     */
    protected $aocType = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for aocType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeType
     */
    public function getAocType()
    {
        return $this->aocType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->aocType;
    }

    /**
     * Setter for aocType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeType $aocType
     * @return $this
     */
    public function setAocType(\CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeType $aocType)
    {
        $this->aocType = $aocType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAocType()
    {
        $this->aocType = null;
        return $this;
    }
}

