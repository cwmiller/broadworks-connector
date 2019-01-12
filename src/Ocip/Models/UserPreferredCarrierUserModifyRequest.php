<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreferredCarrierUserModifyRequest
 *
 * Modifies the currently configured preferred carriers for a user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"74a46a9bfccb54713c1d19735843f1df:569","type":"sequence"}]
 */
class UserPreferredCarrierUserModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 74a46a9bfccb54713c1d19735843f1df:569
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName intraLataCarrier
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:569
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify|null
     */
    private $intraLataCarrier = null;

    /**
     * @ElementName interLataCarrier
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:569
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify|null
     */
    private $interLataCarrier = null;

    /**
     * @ElementName internationalCarrier
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify
     * @Optional
     * @Group 74a46a9bfccb54713c1d19735843f1df:569
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify|null
     */
    private $internationalCarrier = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for intraLataCarrier
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->intraLataCarrier;
    }

    /**
     * Setter for intraLataCarrier
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify $intraLataCarrier
     * @return $this
     */
    public function setIntraLataCarrier(\CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify $intraLataCarrier)
    {
        $this->intraLataCarrier = $intraLataCarrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIntraLataCarrier()
    {
        $this->intraLataCarrier = null;
        return $this;
    }

    /**
     * Getter for interLataCarrier
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interLataCarrier;
    }

    /**
     * Setter for interLataCarrier
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify $interLataCarrier
     * @return $this
     */
    public function setInterLataCarrier(\CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify $interLataCarrier)
    {
        $this->interLataCarrier = $interLataCarrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInterLataCarrier()
    {
        $this->interLataCarrier = null;
        return $this;
    }

    /**
     * Getter for internationalCarrier
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internationalCarrier;
    }

    /**
     * Setter for internationalCarrier
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify $internationalCarrier
     * @return $this
     */
    public function setInternationalCarrier(\CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify $internationalCarrier)
    {
        $this->internationalCarrier = $internationalCarrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInternationalCarrier()
    {
        $this->internationalCarrier = null;
        return $this;
    }


}

