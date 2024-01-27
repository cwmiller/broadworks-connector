<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFeatureAccessCodeModifyEntry
 *
 * Feature Access Code Entry to be used in all user modify command.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5722","type":"sequence"}]
 */
class UserFeatureAccessCodeModifyEntry
{
    /**
     * @ElementName featureAccessCodeName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5722
     * @MinLength 1
     * @var string|null
     */
    protected $featureAccessCodeName = null;

    /**
     * @ElementName enableFAC
     * @Type bool
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5722
     * @var bool|null
     */
    protected $enableFAC = null;

    /**
     * Getter for featureAccessCodeName
     *
     * @return string
     */
    public function getFeatureAccessCodeName()
    {
        return $this->featureAccessCodeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->featureAccessCodeName;
    }

    /**
     * Setter for featureAccessCodeName
     *
     * @param string $featureAccessCodeName
     * @return $this
     */
    public function setFeatureAccessCodeName($featureAccessCodeName)
    {
        $this->featureAccessCodeName = $featureAccessCodeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFeatureAccessCodeName()
    {
        $this->featureAccessCodeName = null;
        return $this;
    }

    /**
     * Getter for enableFAC
     *
     * @return bool
     */
    public function getEnableFAC()
    {
        return $this->enableFAC instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableFAC;
    }

    /**
     * Setter for enableFAC
     *
     * @param bool $enableFAC
     * @return $this
     */
    public function setEnableFAC($enableFAC)
    {
        $this->enableFAC = $enableFAC;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableFAC()
    {
        $this->enableFAC = null;
        return $this;
    }
}

