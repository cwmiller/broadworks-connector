<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTimeScheduleModifyRequest
 *
 * Modify a user time schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:46839","type":"sequence"}]
 */
class UserTimeScheduleModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName timeScheduleName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $timeScheduleName = null;

    /**
     * @ElementName newTimeScheduleName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $newTimeScheduleName = null;

    /**
     * @ElementName timeInterval01
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval01 = null;

    /**
     * @ElementName timeInterval02
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval02 = null;

    /**
     * @ElementName timeInterval03
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval03 = null;

    /**
     * @ElementName timeInterval04
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval04 = null;

    /**
     * @ElementName timeInterval05
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval05 = null;

    /**
     * @ElementName timeInterval06
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval06 = null;

    /**
     * @ElementName timeInterval07
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval07 = null;

    /**
     * @ElementName timeInterval08
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval08 = null;

    /**
     * @ElementName timeInterval09
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval09 = null;

    /**
     * @ElementName timeInterval10
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval10 = null;

    /**
     * @ElementName timeInterval11
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval11 = null;

    /**
     * @ElementName timeInterval12
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval12 = null;

    /**
     * @ElementName timeInterval13
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval13 = null;

    /**
     * @ElementName timeInterval14
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval14 = null;

    /**
     * @ElementName timeInterval15
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval15 = null;

    /**
     * @ElementName timeInterval16
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval16 = null;

    /**
     * @ElementName timeInterval17
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval17 = null;

    /**
     * @ElementName timeInterval18
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval18 = null;

    /**
     * @ElementName timeInterval19
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval19 = null;

    /**
     * @ElementName timeInterval20
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeInterval
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46839
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeInterval20 = null;

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
     * Getter for timeScheduleName
     *
     * @return string
     */
    public function getTimeScheduleName()
    {
        return $this->timeScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeScheduleName;
    }

    /**
     * Setter for timeScheduleName
     *
     * @param string $timeScheduleName
     * @return $this
     */
    public function setTimeScheduleName($timeScheduleName)
    {
        $this->timeScheduleName = $timeScheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeScheduleName()
    {
        $this->timeScheduleName = null;
        return $this;
    }

    /**
     * Getter for newTimeScheduleName
     *
     * @return string
     */
    public function getNewTimeScheduleName()
    {
        return $this->newTimeScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newTimeScheduleName;
    }

    /**
     * Setter for newTimeScheduleName
     *
     * @param string $newTimeScheduleName
     * @return $this
     */
    public function setNewTimeScheduleName($newTimeScheduleName)
    {
        $this->newTimeScheduleName = $newTimeScheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewTimeScheduleName()
    {
        $this->newTimeScheduleName = null;
        return $this;
    }

    /**
     * Getter for timeInterval01
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval01()
    {
        return $this->timeInterval01 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval01;
    }

    /**
     * Setter for timeInterval01
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval01
     * @return $this
     */
    public function setTimeInterval01(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval01 = null)
    {
        if ($timeInterval01 === null) {
            $this->timeInterval01 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval01 = $timeInterval01;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval01()
    {
        $this->timeInterval01 = null;
        return $this;
    }

    /**
     * Getter for timeInterval02
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval02()
    {
        return $this->timeInterval02 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval02;
    }

    /**
     * Setter for timeInterval02
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval02
     * @return $this
     */
    public function setTimeInterval02(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval02 = null)
    {
        if ($timeInterval02 === null) {
            $this->timeInterval02 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval02 = $timeInterval02;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval02()
    {
        $this->timeInterval02 = null;
        return $this;
    }

    /**
     * Getter for timeInterval03
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval03()
    {
        return $this->timeInterval03 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval03;
    }

    /**
     * Setter for timeInterval03
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval03
     * @return $this
     */
    public function setTimeInterval03(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval03 = null)
    {
        if ($timeInterval03 === null) {
            $this->timeInterval03 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval03 = $timeInterval03;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval03()
    {
        $this->timeInterval03 = null;
        return $this;
    }

    /**
     * Getter for timeInterval04
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval04()
    {
        return $this->timeInterval04 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval04;
    }

    /**
     * Setter for timeInterval04
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval04
     * @return $this
     */
    public function setTimeInterval04(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval04 = null)
    {
        if ($timeInterval04 === null) {
            $this->timeInterval04 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval04 = $timeInterval04;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval04()
    {
        $this->timeInterval04 = null;
        return $this;
    }

    /**
     * Getter for timeInterval05
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval05()
    {
        return $this->timeInterval05 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval05;
    }

    /**
     * Setter for timeInterval05
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval05
     * @return $this
     */
    public function setTimeInterval05(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval05 = null)
    {
        if ($timeInterval05 === null) {
            $this->timeInterval05 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval05 = $timeInterval05;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval05()
    {
        $this->timeInterval05 = null;
        return $this;
    }

    /**
     * Getter for timeInterval06
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval06()
    {
        return $this->timeInterval06 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval06;
    }

    /**
     * Setter for timeInterval06
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval06
     * @return $this
     */
    public function setTimeInterval06(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval06 = null)
    {
        if ($timeInterval06 === null) {
            $this->timeInterval06 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval06 = $timeInterval06;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval06()
    {
        $this->timeInterval06 = null;
        return $this;
    }

    /**
     * Getter for timeInterval07
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval07()
    {
        return $this->timeInterval07 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval07;
    }

    /**
     * Setter for timeInterval07
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval07
     * @return $this
     */
    public function setTimeInterval07(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval07 = null)
    {
        if ($timeInterval07 === null) {
            $this->timeInterval07 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval07 = $timeInterval07;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval07()
    {
        $this->timeInterval07 = null;
        return $this;
    }

    /**
     * Getter for timeInterval08
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval08()
    {
        return $this->timeInterval08 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval08;
    }

    /**
     * Setter for timeInterval08
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval08
     * @return $this
     */
    public function setTimeInterval08(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval08 = null)
    {
        if ($timeInterval08 === null) {
            $this->timeInterval08 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval08 = $timeInterval08;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval08()
    {
        $this->timeInterval08 = null;
        return $this;
    }

    /**
     * Getter for timeInterval09
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval09()
    {
        return $this->timeInterval09 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval09;
    }

    /**
     * Setter for timeInterval09
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval09
     * @return $this
     */
    public function setTimeInterval09(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval09 = null)
    {
        if ($timeInterval09 === null) {
            $this->timeInterval09 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval09 = $timeInterval09;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval09()
    {
        $this->timeInterval09 = null;
        return $this;
    }

    /**
     * Getter for timeInterval10
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval10()
    {
        return $this->timeInterval10 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval10;
    }

    /**
     * Setter for timeInterval10
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval10
     * @return $this
     */
    public function setTimeInterval10(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval10 = null)
    {
        if ($timeInterval10 === null) {
            $this->timeInterval10 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval10 = $timeInterval10;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval10()
    {
        $this->timeInterval10 = null;
        return $this;
    }

    /**
     * Getter for timeInterval11
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval11()
    {
        return $this->timeInterval11 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval11;
    }

    /**
     * Setter for timeInterval11
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval11
     * @return $this
     */
    public function setTimeInterval11(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval11 = null)
    {
        if ($timeInterval11 === null) {
            $this->timeInterval11 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval11 = $timeInterval11;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval11()
    {
        $this->timeInterval11 = null;
        return $this;
    }

    /**
     * Getter for timeInterval12
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval12()
    {
        return $this->timeInterval12 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval12;
    }

    /**
     * Setter for timeInterval12
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval12
     * @return $this
     */
    public function setTimeInterval12(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval12 = null)
    {
        if ($timeInterval12 === null) {
            $this->timeInterval12 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval12 = $timeInterval12;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval12()
    {
        $this->timeInterval12 = null;
        return $this;
    }

    /**
     * Getter for timeInterval13
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval13()
    {
        return $this->timeInterval13 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval13;
    }

    /**
     * Setter for timeInterval13
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval13
     * @return $this
     */
    public function setTimeInterval13(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval13 = null)
    {
        if ($timeInterval13 === null) {
            $this->timeInterval13 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval13 = $timeInterval13;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval13()
    {
        $this->timeInterval13 = null;
        return $this;
    }

    /**
     * Getter for timeInterval14
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval14()
    {
        return $this->timeInterval14 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval14;
    }

    /**
     * Setter for timeInterval14
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval14
     * @return $this
     */
    public function setTimeInterval14(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval14 = null)
    {
        if ($timeInterval14 === null) {
            $this->timeInterval14 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval14 = $timeInterval14;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval14()
    {
        $this->timeInterval14 = null;
        return $this;
    }

    /**
     * Getter for timeInterval15
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval15()
    {
        return $this->timeInterval15 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval15;
    }

    /**
     * Setter for timeInterval15
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval15
     * @return $this
     */
    public function setTimeInterval15(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval15 = null)
    {
        if ($timeInterval15 === null) {
            $this->timeInterval15 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval15 = $timeInterval15;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval15()
    {
        $this->timeInterval15 = null;
        return $this;
    }

    /**
     * Getter for timeInterval16
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval16()
    {
        return $this->timeInterval16 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval16;
    }

    /**
     * Setter for timeInterval16
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval16
     * @return $this
     */
    public function setTimeInterval16(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval16 = null)
    {
        if ($timeInterval16 === null) {
            $this->timeInterval16 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval16 = $timeInterval16;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval16()
    {
        $this->timeInterval16 = null;
        return $this;
    }

    /**
     * Getter for timeInterval17
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval17()
    {
        return $this->timeInterval17 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval17;
    }

    /**
     * Setter for timeInterval17
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval17
     * @return $this
     */
    public function setTimeInterval17(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval17 = null)
    {
        if ($timeInterval17 === null) {
            $this->timeInterval17 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval17 = $timeInterval17;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval17()
    {
        $this->timeInterval17 = null;
        return $this;
    }

    /**
     * Getter for timeInterval18
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval18()
    {
        return $this->timeInterval18 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval18;
    }

    /**
     * Setter for timeInterval18
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval18
     * @return $this
     */
    public function setTimeInterval18(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval18 = null)
    {
        if ($timeInterval18 === null) {
            $this->timeInterval18 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval18 = $timeInterval18;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval18()
    {
        $this->timeInterval18 = null;
        return $this;
    }

    /**
     * Getter for timeInterval19
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval19()
    {
        return $this->timeInterval19 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval19;
    }

    /**
     * Setter for timeInterval19
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval19
     * @return $this
     */
    public function setTimeInterval19(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval19 = null)
    {
        if ($timeInterval19 === null) {
            $this->timeInterval19 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval19 = $timeInterval19;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval19()
    {
        $this->timeInterval19 = null;
        return $this;
    }

    /**
     * Getter for timeInterval20
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null
     */
    public function getTimeInterval20()
    {
        return $this->timeInterval20 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeInterval20;
    }

    /**
     * Setter for timeInterval20
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeInterval|null $timeInterval20
     * @return $this
     */
    public function setTimeInterval20(\CWM\BroadWorksConnector\Ocip\Models\TimeInterval $timeInterval20 = null)
    {
        if ($timeInterval20 === null) {
            $this->timeInterval20 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeInterval20 = $timeInterval20;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeInterval20()
    {
        $this->timeInterval20 = null;
        return $this;
    }


}

