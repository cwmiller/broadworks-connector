<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAlternateNumbersModifyRequest
 *
 * Modify the user level data associated with Alternate Numbers.
 *         The following element in AlternateNumberEntry21 datatype is only used in
 * AS mode:
 *           description
 *
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserAlternateNumbersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName distinctiveRing
     * @var bool|null
     */
    private $distinctiveRing = null;

    /**
     * @ElementName alternateEntry01
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    private $alternateEntry01 = null;

    /**
     * @ElementName alternateEntry02
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    private $alternateEntry02 = null;

    /**
     * @ElementName alternateEntry03
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    private $alternateEntry03 = null;

    /**
     * @ElementName alternateEntry04
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    private $alternateEntry04 = null;

    /**
     * @ElementName alternateEntry05
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    private $alternateEntry05 = null;

    /**
     * @ElementName alternateEntry06
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    private $alternateEntry06 = null;

    /**
     * @ElementName alternateEntry07
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    private $alternateEntry07 = null;

    /**
     * @ElementName alternateEntry08
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    private $alternateEntry08 = null;

    /**
     * @ElementName alternateEntry09
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    private $alternateEntry09 = null;

    /**
     * @ElementName alternateEntry10
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    private $alternateEntry10 = null;

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
     * Getter for distinctiveRing
     *
     * @ElementName distinctiveRing
     * @return bool|null
     */
    public function getDistinctiveRing()
    {
        return $this->distinctiveRing;
    }

    /**
     * Setter for distinctiveRing
     *
     * @ElementName distinctiveRing
     * @param bool|null $distinctiveRing
     * @return $this
     */
    public function setDistinctiveRing($distinctiveRing)
    {
        $this->distinctiveRing = $distinctiveRing;
        return $this;
    }

    /**
     * Getter for alternateEntry01
     *
     * @ElementName alternateEntry01
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    public function getAlternateEntry01()
    {
        return $this->alternateEntry01;
    }

    /**
     * Setter for alternateEntry01
     *
     * @ElementName alternateEntry01
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null $alternateEntry01
     * @return $this
     */
    public function setAlternateEntry01($alternateEntry01)
    {
        $this->alternateEntry01 = $alternateEntry01;
        return $this;
    }

    /**
     * Getter for alternateEntry02
     *
     * @ElementName alternateEntry02
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    public function getAlternateEntry02()
    {
        return $this->alternateEntry02;
    }

    /**
     * Setter for alternateEntry02
     *
     * @ElementName alternateEntry02
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null $alternateEntry02
     * @return $this
     */
    public function setAlternateEntry02($alternateEntry02)
    {
        $this->alternateEntry02 = $alternateEntry02;
        return $this;
    }

    /**
     * Getter for alternateEntry03
     *
     * @ElementName alternateEntry03
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    public function getAlternateEntry03()
    {
        return $this->alternateEntry03;
    }

    /**
     * Setter for alternateEntry03
     *
     * @ElementName alternateEntry03
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null $alternateEntry03
     * @return $this
     */
    public function setAlternateEntry03($alternateEntry03)
    {
        $this->alternateEntry03 = $alternateEntry03;
        return $this;
    }

    /**
     * Getter for alternateEntry04
     *
     * @ElementName alternateEntry04
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    public function getAlternateEntry04()
    {
        return $this->alternateEntry04;
    }

    /**
     * Setter for alternateEntry04
     *
     * @ElementName alternateEntry04
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null $alternateEntry04
     * @return $this
     */
    public function setAlternateEntry04($alternateEntry04)
    {
        $this->alternateEntry04 = $alternateEntry04;
        return $this;
    }

    /**
     * Getter for alternateEntry05
     *
     * @ElementName alternateEntry05
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    public function getAlternateEntry05()
    {
        return $this->alternateEntry05;
    }

    /**
     * Setter for alternateEntry05
     *
     * @ElementName alternateEntry05
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null $alternateEntry05
     * @return $this
     */
    public function setAlternateEntry05($alternateEntry05)
    {
        $this->alternateEntry05 = $alternateEntry05;
        return $this;
    }

    /**
     * Getter for alternateEntry06
     *
     * @ElementName alternateEntry06
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    public function getAlternateEntry06()
    {
        return $this->alternateEntry06;
    }

    /**
     * Setter for alternateEntry06
     *
     * @ElementName alternateEntry06
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null $alternateEntry06
     * @return $this
     */
    public function setAlternateEntry06($alternateEntry06)
    {
        $this->alternateEntry06 = $alternateEntry06;
        return $this;
    }

    /**
     * Getter for alternateEntry07
     *
     * @ElementName alternateEntry07
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    public function getAlternateEntry07()
    {
        return $this->alternateEntry07;
    }

    /**
     * Setter for alternateEntry07
     *
     * @ElementName alternateEntry07
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null $alternateEntry07
     * @return $this
     */
    public function setAlternateEntry07($alternateEntry07)
    {
        $this->alternateEntry07 = $alternateEntry07;
        return $this;
    }

    /**
     * Getter for alternateEntry08
     *
     * @ElementName alternateEntry08
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    public function getAlternateEntry08()
    {
        return $this->alternateEntry08;
    }

    /**
     * Setter for alternateEntry08
     *
     * @ElementName alternateEntry08
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null $alternateEntry08
     * @return $this
     */
    public function setAlternateEntry08($alternateEntry08)
    {
        $this->alternateEntry08 = $alternateEntry08;
        return $this;
    }

    /**
     * Getter for alternateEntry09
     *
     * @ElementName alternateEntry09
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    public function getAlternateEntry09()
    {
        return $this->alternateEntry09;
    }

    /**
     * Setter for alternateEntry09
     *
     * @ElementName alternateEntry09
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null $alternateEntry09
     * @return $this
     */
    public function setAlternateEntry09($alternateEntry09)
    {
        $this->alternateEntry09 = $alternateEntry09;
        return $this;
    }

    /**
     * Getter for alternateEntry10
     *
     * @ElementName alternateEntry10
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null
     */
    public function getAlternateEntry10()
    {
        return $this->alternateEntry10;
    }

    /**
     * Setter for alternateEntry10
     *
     * @ElementName alternateEntry10
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateNumberEntry21|null $alternateEntry10
     * @return $this
     */
    public function setAlternateEntry10($alternateEntry10)
    {
        $this->alternateEntry10 = $alternateEntry10;
        return $this;
    }


}

