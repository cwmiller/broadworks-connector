<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTimeScheduleModifyRequest
 *
 * Modify a specified time schedule in a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupTimeScheduleModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName timeScheduleName
     * @var string|null
     */
    private $timeScheduleName = null;

    /**
     * @ElementName newTimeScheduleName
     * @var string|null
     */
    private $newTimeScheduleName = null;

    /**
     * @ElementName timeInterval01
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval01 = null;

    /**
     * @ElementName timeInterval02
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval02 = null;

    /**
     * @ElementName timeInterval03
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval03 = null;

    /**
     * @ElementName timeInterval04
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval04 = null;

    /**
     * @ElementName timeInterval05
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval05 = null;

    /**
     * @ElementName timeInterval06
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval06 = null;

    /**
     * @ElementName timeInterval07
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval07 = null;

    /**
     * @ElementName timeInterval08
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval08 = null;

    /**
     * @ElementName timeInterval09
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval09 = null;

    /**
     * @ElementName timeInterval10
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval10 = null;

    /**
     * @ElementName timeInterval11
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval11 = null;

    /**
     * @ElementName timeInterval12
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval12 = null;

    /**
     * @ElementName timeInterval13
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval13 = null;

    /**
     * @ElementName timeInterval14
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval14 = null;

    /**
     * @ElementName timeInterval15
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval15 = null;

    /**
     * @ElementName timeInterval16
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval16 = null;

    /**
     * @ElementName timeInterval17
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval17 = null;

    /**
     * @ElementName timeInterval18
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval18 = null;

    /**
     * @ElementName timeInterval19
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval19 = null;

    /**
     * @ElementName timeInterval20
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    private $timeInterval20 = null;

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
     * Getter for timeScheduleName
     *
     * @ElementName timeScheduleName
     * @return string|null
     */
    public function getTimeScheduleName()
    {
        return $this->timeScheduleName;
    }

    /**
     * Setter for timeScheduleName
     *
     * @ElementName timeScheduleName
     * @param string|null $timeScheduleName
     * @return $this
     */
    public function setTimeScheduleName($timeScheduleName)
    {
        $this->timeScheduleName = $timeScheduleName;
        return $this;
    }

    /**
     * Getter for newTimeScheduleName
     *
     * @ElementName newTimeScheduleName
     * @return string|null
     */
    public function getNewTimeScheduleName()
    {
        return $this->newTimeScheduleName;
    }

    /**
     * Setter for newTimeScheduleName
     *
     * @ElementName newTimeScheduleName
     * @param string|null $newTimeScheduleName
     * @return $this
     */
    public function setNewTimeScheduleName($newTimeScheduleName)
    {
        $this->newTimeScheduleName = $newTimeScheduleName;
        return $this;
    }

    /**
     * Getter for timeInterval01
     *
     * @ElementName timeInterval01
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval01()
    {
        return $this->timeInterval01;
    }

    /**
     * Setter for timeInterval01
     *
     * @ElementName timeInterval01
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval01
     * @return $this
     */
    public function setTimeInterval01($timeInterval01)
    {
        $this->timeInterval01 = $timeInterval01;
        return $this;
    }

    /**
     * Getter for timeInterval02
     *
     * @ElementName timeInterval02
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval02()
    {
        return $this->timeInterval02;
    }

    /**
     * Setter for timeInterval02
     *
     * @ElementName timeInterval02
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval02
     * @return $this
     */
    public function setTimeInterval02($timeInterval02)
    {
        $this->timeInterval02 = $timeInterval02;
        return $this;
    }

    /**
     * Getter for timeInterval03
     *
     * @ElementName timeInterval03
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval03()
    {
        return $this->timeInterval03;
    }

    /**
     * Setter for timeInterval03
     *
     * @ElementName timeInterval03
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval03
     * @return $this
     */
    public function setTimeInterval03($timeInterval03)
    {
        $this->timeInterval03 = $timeInterval03;
        return $this;
    }

    /**
     * Getter for timeInterval04
     *
     * @ElementName timeInterval04
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval04()
    {
        return $this->timeInterval04;
    }

    /**
     * Setter for timeInterval04
     *
     * @ElementName timeInterval04
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval04
     * @return $this
     */
    public function setTimeInterval04($timeInterval04)
    {
        $this->timeInterval04 = $timeInterval04;
        return $this;
    }

    /**
     * Getter for timeInterval05
     *
     * @ElementName timeInterval05
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval05()
    {
        return $this->timeInterval05;
    }

    /**
     * Setter for timeInterval05
     *
     * @ElementName timeInterval05
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval05
     * @return $this
     */
    public function setTimeInterval05($timeInterval05)
    {
        $this->timeInterval05 = $timeInterval05;
        return $this;
    }

    /**
     * Getter for timeInterval06
     *
     * @ElementName timeInterval06
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval06()
    {
        return $this->timeInterval06;
    }

    /**
     * Setter for timeInterval06
     *
     * @ElementName timeInterval06
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval06
     * @return $this
     */
    public function setTimeInterval06($timeInterval06)
    {
        $this->timeInterval06 = $timeInterval06;
        return $this;
    }

    /**
     * Getter for timeInterval07
     *
     * @ElementName timeInterval07
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval07()
    {
        return $this->timeInterval07;
    }

    /**
     * Setter for timeInterval07
     *
     * @ElementName timeInterval07
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval07
     * @return $this
     */
    public function setTimeInterval07($timeInterval07)
    {
        $this->timeInterval07 = $timeInterval07;
        return $this;
    }

    /**
     * Getter for timeInterval08
     *
     * @ElementName timeInterval08
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval08()
    {
        return $this->timeInterval08;
    }

    /**
     * Setter for timeInterval08
     *
     * @ElementName timeInterval08
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval08
     * @return $this
     */
    public function setTimeInterval08($timeInterval08)
    {
        $this->timeInterval08 = $timeInterval08;
        return $this;
    }

    /**
     * Getter for timeInterval09
     *
     * @ElementName timeInterval09
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval09()
    {
        return $this->timeInterval09;
    }

    /**
     * Setter for timeInterval09
     *
     * @ElementName timeInterval09
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval09
     * @return $this
     */
    public function setTimeInterval09($timeInterval09)
    {
        $this->timeInterval09 = $timeInterval09;
        return $this;
    }

    /**
     * Getter for timeInterval10
     *
     * @ElementName timeInterval10
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval10()
    {
        return $this->timeInterval10;
    }

    /**
     * Setter for timeInterval10
     *
     * @ElementName timeInterval10
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval10
     * @return $this
     */
    public function setTimeInterval10($timeInterval10)
    {
        $this->timeInterval10 = $timeInterval10;
        return $this;
    }

    /**
     * Getter for timeInterval11
     *
     * @ElementName timeInterval11
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval11()
    {
        return $this->timeInterval11;
    }

    /**
     * Setter for timeInterval11
     *
     * @ElementName timeInterval11
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval11
     * @return $this
     */
    public function setTimeInterval11($timeInterval11)
    {
        $this->timeInterval11 = $timeInterval11;
        return $this;
    }

    /**
     * Getter for timeInterval12
     *
     * @ElementName timeInterval12
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval12()
    {
        return $this->timeInterval12;
    }

    /**
     * Setter for timeInterval12
     *
     * @ElementName timeInterval12
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval12
     * @return $this
     */
    public function setTimeInterval12($timeInterval12)
    {
        $this->timeInterval12 = $timeInterval12;
        return $this;
    }

    /**
     * Getter for timeInterval13
     *
     * @ElementName timeInterval13
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval13()
    {
        return $this->timeInterval13;
    }

    /**
     * Setter for timeInterval13
     *
     * @ElementName timeInterval13
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval13
     * @return $this
     */
    public function setTimeInterval13($timeInterval13)
    {
        $this->timeInterval13 = $timeInterval13;
        return $this;
    }

    /**
     * Getter for timeInterval14
     *
     * @ElementName timeInterval14
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval14()
    {
        return $this->timeInterval14;
    }

    /**
     * Setter for timeInterval14
     *
     * @ElementName timeInterval14
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval14
     * @return $this
     */
    public function setTimeInterval14($timeInterval14)
    {
        $this->timeInterval14 = $timeInterval14;
        return $this;
    }

    /**
     * Getter for timeInterval15
     *
     * @ElementName timeInterval15
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval15()
    {
        return $this->timeInterval15;
    }

    /**
     * Setter for timeInterval15
     *
     * @ElementName timeInterval15
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval15
     * @return $this
     */
    public function setTimeInterval15($timeInterval15)
    {
        $this->timeInterval15 = $timeInterval15;
        return $this;
    }

    /**
     * Getter for timeInterval16
     *
     * @ElementName timeInterval16
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval16()
    {
        return $this->timeInterval16;
    }

    /**
     * Setter for timeInterval16
     *
     * @ElementName timeInterval16
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval16
     * @return $this
     */
    public function setTimeInterval16($timeInterval16)
    {
        $this->timeInterval16 = $timeInterval16;
        return $this;
    }

    /**
     * Getter for timeInterval17
     *
     * @ElementName timeInterval17
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval17()
    {
        return $this->timeInterval17;
    }

    /**
     * Setter for timeInterval17
     *
     * @ElementName timeInterval17
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval17
     * @return $this
     */
    public function setTimeInterval17($timeInterval17)
    {
        $this->timeInterval17 = $timeInterval17;
        return $this;
    }

    /**
     * Getter for timeInterval18
     *
     * @ElementName timeInterval18
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval18()
    {
        return $this->timeInterval18;
    }

    /**
     * Setter for timeInterval18
     *
     * @ElementName timeInterval18
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval18
     * @return $this
     */
    public function setTimeInterval18($timeInterval18)
    {
        $this->timeInterval18 = $timeInterval18;
        return $this;
    }

    /**
     * Getter for timeInterval19
     *
     * @ElementName timeInterval19
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval19()
    {
        return $this->timeInterval19;
    }

    /**
     * Setter for timeInterval19
     *
     * @ElementName timeInterval19
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval19
     * @return $this
     */
    public function setTimeInterval19($timeInterval19)
    {
        $this->timeInterval19 = $timeInterval19;
        return $this;
    }

    /**
     * Getter for timeInterval20
     *
     * @ElementName timeInterval20
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval20()
    {
        return $this->timeInterval20;
    }

    /**
     * Setter for timeInterval20
     *
     * @ElementName timeInterval20
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval20
     * @return $this
     */
    public function setTimeInterval20($timeInterval20)
    {
        $this->timeInterval20 = $timeInterval20;
        return $this;
    }


}

