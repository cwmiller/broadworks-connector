<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAlternateNumbersGetResponse
 *
 * Response to UserAlternateNumbersGetRequest.
 *
 * @see UserAlternateNumbersGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:39451","type":"sequence"}]
 */
class UserAlternateNumbersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName distinctiveRing
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39451
     * @var bool|null
     */
    private $distinctiveRing = null;

    /**
     * @ElementName alternateEntry01
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39451
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry|null
     */
    private $alternateEntry01 = null;

    /**
     * @ElementName alternateEntry02
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39451
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry|null
     */
    private $alternateEntry02 = null;

    /**
     * @ElementName alternateEntry03
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39451
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry|null
     */
    private $alternateEntry03 = null;

    /**
     * @ElementName alternateEntry04
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39451
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry|null
     */
    private $alternateEntry04 = null;

    /**
     * @ElementName alternateEntry05
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39451
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry|null
     */
    private $alternateEntry05 = null;

    /**
     * @ElementName alternateEntry06
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39451
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry|null
     */
    private $alternateEntry06 = null;

    /**
     * @ElementName alternateEntry07
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39451
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry|null
     */
    private $alternateEntry07 = null;

    /**
     * @ElementName alternateEntry08
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39451
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry|null
     */
    private $alternateEntry08 = null;

    /**
     * @ElementName alternateEntry09
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39451
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry|null
     */
    private $alternateEntry09 = null;

    /**
     * @ElementName alternateEntry10
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39451
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry|null
     */
    private $alternateEntry10 = null;

    /**
     * Getter for distinctiveRing
     *
     * @return bool
     */
    public function getDistinctiveRing()
    {
        return $this->distinctiveRing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->distinctiveRing;
    }

    /**
     * Setter for distinctiveRing
     *
     * @param bool $distinctiveRing
     * @return $this
     */
    public function setDistinctiveRing($distinctiveRing)
    {
        $this->distinctiveRing = $distinctiveRing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDistinctiveRing()
    {
        $this->distinctiveRing = null;
        return $this;
    }

    /**
     * Getter for alternateEntry01
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     */
    public function getAlternateEntry01()
    {
        return $this->alternateEntry01 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateEntry01;
    }

    /**
     * Setter for alternateEntry01
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry01
     * @return $this
     */
    public function setAlternateEntry01(\CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry01)
    {
        $this->alternateEntry01 = $alternateEntry01;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateEntry01()
    {
        $this->alternateEntry01 = null;
        return $this;
    }

    /**
     * Getter for alternateEntry02
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     */
    public function getAlternateEntry02()
    {
        return $this->alternateEntry02 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateEntry02;
    }

    /**
     * Setter for alternateEntry02
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry02
     * @return $this
     */
    public function setAlternateEntry02(\CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry02)
    {
        $this->alternateEntry02 = $alternateEntry02;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateEntry02()
    {
        $this->alternateEntry02 = null;
        return $this;
    }

    /**
     * Getter for alternateEntry03
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     */
    public function getAlternateEntry03()
    {
        return $this->alternateEntry03 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateEntry03;
    }

    /**
     * Setter for alternateEntry03
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry03
     * @return $this
     */
    public function setAlternateEntry03(\CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry03)
    {
        $this->alternateEntry03 = $alternateEntry03;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateEntry03()
    {
        $this->alternateEntry03 = null;
        return $this;
    }

    /**
     * Getter for alternateEntry04
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     */
    public function getAlternateEntry04()
    {
        return $this->alternateEntry04 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateEntry04;
    }

    /**
     * Setter for alternateEntry04
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry04
     * @return $this
     */
    public function setAlternateEntry04(\CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry04)
    {
        $this->alternateEntry04 = $alternateEntry04;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateEntry04()
    {
        $this->alternateEntry04 = null;
        return $this;
    }

    /**
     * Getter for alternateEntry05
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     */
    public function getAlternateEntry05()
    {
        return $this->alternateEntry05 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateEntry05;
    }

    /**
     * Setter for alternateEntry05
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry05
     * @return $this
     */
    public function setAlternateEntry05(\CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry05)
    {
        $this->alternateEntry05 = $alternateEntry05;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateEntry05()
    {
        $this->alternateEntry05 = null;
        return $this;
    }

    /**
     * Getter for alternateEntry06
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     */
    public function getAlternateEntry06()
    {
        return $this->alternateEntry06 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateEntry06;
    }

    /**
     * Setter for alternateEntry06
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry06
     * @return $this
     */
    public function setAlternateEntry06(\CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry06)
    {
        $this->alternateEntry06 = $alternateEntry06;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateEntry06()
    {
        $this->alternateEntry06 = null;
        return $this;
    }

    /**
     * Getter for alternateEntry07
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     */
    public function getAlternateEntry07()
    {
        return $this->alternateEntry07 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateEntry07;
    }

    /**
     * Setter for alternateEntry07
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry07
     * @return $this
     */
    public function setAlternateEntry07(\CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry07)
    {
        $this->alternateEntry07 = $alternateEntry07;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateEntry07()
    {
        $this->alternateEntry07 = null;
        return $this;
    }

    /**
     * Getter for alternateEntry08
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     */
    public function getAlternateEntry08()
    {
        return $this->alternateEntry08 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateEntry08;
    }

    /**
     * Setter for alternateEntry08
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry08
     * @return $this
     */
    public function setAlternateEntry08(\CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry08)
    {
        $this->alternateEntry08 = $alternateEntry08;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateEntry08()
    {
        $this->alternateEntry08 = null;
        return $this;
    }

    /**
     * Getter for alternateEntry09
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     */
    public function getAlternateEntry09()
    {
        return $this->alternateEntry09 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateEntry09;
    }

    /**
     * Setter for alternateEntry09
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry09
     * @return $this
     */
    public function setAlternateEntry09(\CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry09)
    {
        $this->alternateEntry09 = $alternateEntry09;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateEntry09()
    {
        $this->alternateEntry09 = null;
        return $this;
    }

    /**
     * Getter for alternateEntry10
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry
     */
    public function getAlternateEntry10()
    {
        return $this->alternateEntry10 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateEntry10;
    }

    /**
     * Setter for alternateEntry10
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry10
     * @return $this
     */
    public function setAlternateEntry10(\CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry $alternateEntry10)
    {
        $this->alternateEntry10 = $alternateEntry10;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateEntry10()
    {
        $this->alternateEntry10 = null;
        return $this;
    }


}

