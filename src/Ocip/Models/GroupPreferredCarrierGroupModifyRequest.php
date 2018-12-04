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
 * @Groups [{"id":"1384777ce7bd407156102bad44751987:93","type":"sequence"}]
 */
class GroupPreferredCarrierGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 1384777ce7bd407156102bad44751987:93
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 1384777ce7bd407156102bad44751987:93
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName intraLataCarrier
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify
     * @Optional
     * @Group 1384777ce7bd407156102bad44751987:93
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify|null
     */
    private $intraLataCarrier = null;

    /**
     * @ElementName interLataCarrier
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify
     * @Optional
     * @Group 1384777ce7bd407156102bad44751987:93
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify|null
     */
    private $interLataCarrier = null;

    /**
     * @ElementName internationalCarrier
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify
     * @Optional
     * @Group 1384777ce7bd407156102bad44751987:93
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify|null
     */
    private $internationalCarrier = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for intraLataCarrier
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->intraLataCarrier;
    }

    /**
     * Setter for intraLataCarrier
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify $intraLataCarrier
     * @return $this
     */
    public function setIntraLataCarrier(\CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify $intraLataCarrier)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interLataCarrier;
    }

    /**
     * Setter for interLataCarrier
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify $interLataCarrier
     * @return $this
     */
    public function setInterLataCarrier(\CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify $interLataCarrier)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internationalCarrier;
    }

    /**
     * Setter for internationalCarrier
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify $internationalCarrier
     * @return $this
     */
    public function setInternationalCarrier(\CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierNameModify $internationalCarrier)
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

