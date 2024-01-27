<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPreferredCarrierUserGetResponse
 *
 * Response to a UserPreferredCarrierUserGetRequest.
 *
 * @see UserPreferredCarrierUserGetRequest
 * @Groups [{"id":"31dec625cdd18e8228eb61ffb34ddc0e:551","type":"sequence"}]
 */
class UserPreferredCarrierUserGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName intraLataCarrier
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:551
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName|null
     */
    protected $intraLataCarrier = null;

    /**
     * @ElementName interLataCarrier
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:551
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName|null
     */
    protected $interLataCarrier = null;

    /**
     * @ElementName internationalCarrier
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:551
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName|null
     */
    protected $internationalCarrier = null;

    /**
     * Getter for intraLataCarrier
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->intraLataCarrier;
    }

    /**
     * Setter for intraLataCarrier
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName $intraLataCarrier
     * @return $this
     */
    public function setIntraLataCarrier(\CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName $intraLataCarrier)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interLataCarrier;
    }

    /**
     * Setter for interLataCarrier
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName $interLataCarrier
     * @return $this
     */
    public function setInterLataCarrier(\CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName $interLataCarrier)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internationalCarrier;
    }

    /**
     * Setter for internationalCarrier
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName $internationalCarrier
     * @return $this
     */
    public function setInternationalCarrier(\CWM\BroadWorksConnector\Ocip\Models\UserPreferredCarrierName $internationalCarrier)
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

