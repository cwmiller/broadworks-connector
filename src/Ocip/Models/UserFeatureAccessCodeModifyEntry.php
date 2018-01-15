<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFeatureAccessCodeModifyEntry
 *
 * Feature Access Code Entry to be used in all user modify command.
 */
class UserFeatureAccessCodeModifyEntry
{

    /**
     * @ElementName featureAccessCodeName
     * @var string|null
     */
    private $featureAccessCodeName = null;

    /**
     * @ElementName enableFAC
     * @var bool|null
     */
    private $enableFAC = null;

    /**
     * Getter for featureAccessCodeName
     *
     * @ElementName featureAccessCodeName
     * @return string|null
     */
    public function getFeatureAccessCodeName()
    {
        return $this->featureAccessCodeName;
    }

    /**
     * Setter for featureAccessCodeName
     *
     * @ElementName featureAccessCodeName
     * @param string|null $featureAccessCodeName
     * @return $this
     */
    public function setFeatureAccessCodeName($featureAccessCodeName)
    {
        $this->featureAccessCodeName = $featureAccessCodeName;
        return $this;
    }

    /**
     * Getter for enableFAC
     *
     * @ElementName enableFAC
     * @return bool|null
     */
    public function getEnableFAC()
    {
        return $this->enableFAC;
    }

    /**
     * Setter for enableFAC
     *
     * @ElementName enableFAC
     * @param bool|null $enableFAC
     * @return $this
     */
    public function setEnableFAC($enableFAC)
    {
        $this->enableFAC = $enableFAC;
        return $this;
    }


}

