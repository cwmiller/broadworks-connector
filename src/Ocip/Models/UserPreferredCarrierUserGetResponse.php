<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreferredCarrierUserGetResponse
 *
 * Response to a UserPreferredCarrierUserGetRequest.
 */
class UserPreferredCarrierUserGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName intraLataCarrier
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName|null
     */
    private $intraLataCarrier = null;

    /**
     * @ElementName interLataCarrier
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName|null
     */
    private $interLataCarrier = null;

    /**
     * @ElementName internationalCarrier
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName|null
     */
    private $internationalCarrier = null;

    /**
     * Getter for intraLataCarrier
     *
     * @ElementName intraLataCarrier
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName|null
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier;
    }

    /**
     * Setter for intraLataCarrier
     *
     * @ElementName intraLataCarrier
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName|null $intraLataCarrier
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName|null
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier;
    }

    /**
     * Setter for interLataCarrier
     *
     * @ElementName interLataCarrier
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName|null $interLataCarrier
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName|null
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier;
    }

    /**
     * Setter for internationalCarrier
     *
     * @ElementName internationalCarrier
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName|null $internationalCarrier
     * @return $this
     */
    public function setInternationalCarrier($internationalCarrier)
    {
        $this->internationalCarrier = $internationalCarrier;
        return $this;
    }


}

