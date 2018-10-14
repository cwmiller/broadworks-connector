<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPreferredCarrierGroupModifyRequest
 *
 * Modifies the currently configured carriers for a group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupPreferredCarrierGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName intraLataCarrier
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify|null
     */
    private $intraLataCarrier = null;

    /**
     * @ElementName interLataCarrier
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify|null
     */
    private $interLataCarrier = null;

    /**
     * @ElementName internationalCarrier
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify|null
     */
    private $internationalCarrier = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for intraLataCarrier
     *
     * @ElementName intraLataCarrier
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify|null
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier;
    }

    /**
     * Setter for intraLataCarrier
     *
     * @ElementName intraLataCarrier
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify|null $intraLataCarrier
     * @return $this
     */
    public function setIntraLataCarrier(\CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify $intraLataCarrier)
    {
        $this->intraLataCarrier = $intraLataCarrier;
        return $this;
    }

    /**
     * Getter for interLataCarrier
     *
     * @ElementName interLataCarrier
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify|null
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier;
    }

    /**
     * Setter for interLataCarrier
     *
     * @ElementName interLataCarrier
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify|null $interLataCarrier
     * @return $this
     */
    public function setInterLataCarrier(\CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify $interLataCarrier)
    {
        $this->interLataCarrier = $interLataCarrier;
        return $this;
    }

    /**
     * Getter for internationalCarrier
     *
     * @ElementName internationalCarrier
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify|null
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier;
    }

    /**
     * Setter for internationalCarrier
     *
     * @ElementName internationalCarrier
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify|null $internationalCarrier
     * @return $this
     */
    public function setInternationalCarrier(\CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify $internationalCarrier)
    {
        $this->internationalCarrier = $internationalCarrier;
        return $this;
    }


}

