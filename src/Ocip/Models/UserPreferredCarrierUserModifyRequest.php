<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreferredCarrierUserModifyRequest
 *
 * Modifies the currently configured preferred carriers for a user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserPreferredCarrierUserModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName intraLataCarrier
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify|null
     */
    private $intraLataCarrier = null;

    /**
     * @ElementName interLataCarrier
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify|null
     */
    private $interLataCarrier = null;

    /**
     * @ElementName internationalCarrier
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify|null
     */
    private $internationalCarrier = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for intraLataCarrier
     *
     * @ElementName intraLataCarrier
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify|null
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier;
    }

    /**
     * Setter for intraLataCarrier
     *
     * @ElementName intraLataCarrier
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify|null $intraLataCarrier
     * @return $this
     */
    public function setIntraLataCarrier($intraLataCarrier)
    {
        $this->intraLataCarrier = $intraLataCarrier;
        return $this;
    }

    /**
     * Getter for interLataCarrier
     *
     * @ElementName interLataCarrier
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify|null
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier;
    }

    /**
     * Setter for interLataCarrier
     *
     * @ElementName interLataCarrier
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify|null $interLataCarrier
     * @return $this
     */
    public function setInterLataCarrier($interLataCarrier)
    {
        $this->interLataCarrier = $interLataCarrier;
        return $this;
    }

    /**
     * Getter for internationalCarrier
     *
     * @ElementName internationalCarrier
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify|null
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier;
    }

    /**
     * Setter for internationalCarrier
     *
     * @ElementName internationalCarrier
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierNameModify|null $internationalCarrier
     * @return $this
     */
    public function setInternationalCarrier($internationalCarrier)
    {
        $this->internationalCarrier = $internationalCarrier;
        return $this;
    }


}

