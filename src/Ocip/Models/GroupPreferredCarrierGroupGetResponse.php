<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPreferredCarrierGroupGetResponse
 *
 * Response to a GroupPreferredCarrierGroupGetRequest.
 *
 * @see GroupPreferredCarrierGroupGetRequest
 */
class GroupPreferredCarrierGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName intraLataCarrier
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierName|null
     */
    private $intraLataCarrier = null;

    /**
     * @ElementName interLataCarrier
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierName|null
     */
    private $interLataCarrier = null;

    /**
     * @ElementName internationalCarrier
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierName|null
     */
    private $internationalCarrier = null;

    /**
     * Getter for intraLataCarrier
     *
     * @ElementName intraLataCarrier
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierName|null
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier;
    }

    /**
     * Setter for intraLataCarrier
     *
     * @ElementName intraLataCarrier
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierName|null $intraLataCarrier
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierName|null
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier;
    }

    /**
     * Setter for interLataCarrier
     *
     * @ElementName interLataCarrier
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierName|null $interLataCarrier
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierName|null
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier;
    }

    /**
     * Setter for internationalCarrier
     *
     * @ElementName internationalCarrier
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupPreferredCarrierName|null $internationalCarrier
     * @return $this
     */
    public function setInternationalCarrier($internationalCarrier)
    {
        $this->internationalCarrier = $internationalCarrier;
        return $this;
    }


}

